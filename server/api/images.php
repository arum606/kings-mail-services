<?php
include('../connection.php');

// Get tracking parameters
$history_id = isset($_GET['h']) ? intval($_GET['h']) : 0;
$tracking_id = isset($_GET['t']) ? intval($_GET['t']) : 0;

if ($history_id <= 0 || $tracking_id <= 0) {
    http_response_code(400);
    exit;
}

// REAL IP detection (works behind Gmail, Outlook proxies)
function getRealIP() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ips[0]);
    }
    return $_SERVER['REMOTE_ADDR'] ?? '';
}

$ip = getRealIP();

// User agent
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

// BOT blocking
$block_bots = ['bot','crawl','spider','crawler','googlebot','bingbot','yandex','baidu','facebookexternalhit','slurp'];
$allow_proxies = ['googleimageproxy','outlook','yahoo','apple','mail','thunderbird'];

$is_email_proxy = false;
foreach ($allow_proxies as $proxy) {
    if (strpos($user_agent, strtolower($proxy)) !== false) {
        $is_email_proxy = true;
        break;
    }
}

$is_real_bot = false;
foreach ($block_bots as $bot) {
    if (strpos($user_agent, strtolower($bot)) !== false) {
        $is_real_bot = true;
        break;
    }
}

// Block real crawlers ONLY
if ($is_real_bot && !$is_email_proxy) {
    header("Content-Type: image/gif");
    echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
    exit;
}

// DEVICE DETECTION (improved)
function detectDevice($ua, $ip) {
    // If Gmail proxy → use IP logic instead
    if (strpos($ua, 'googleimageproxy') !== false) {
        if (preg_match('/(mtn|verizon|airtel|vodafone|t-mobile|glo)/i', $ip))
            return "Mobile";
        return "Desktop";
    }

    if (strpos($ua, 'mobile') !== false) return "Mobile";
    if (strpos($ua, 'tablet') !== false || strpos($ua, 'ipad') !== false) return "Tablet";

    return "Desktop";
}

$device = detectDevice($user_agent, $ip);

// LOCATION (using real IP)
$address = null;
if ($ip && $ip !== "127.0.0.1") {
    $geo = @file_get_contents("http://ip-api.com/json/" . $ip);
    if ($geo !== false) {
        $geo = json_decode($geo, true);
        if ($geo && $geo["status"] === "success") {
            $city    = $geo["city"] ?? '';
            $region  = $geo["regionName"] ?? '';
            $country = $geo["country"] ?? '';
            $address = trim("$city, $region, $country", " ,");
        }
    }
}

// Update
$stmt = $connection->prepare("
    UPDATE sent_email_list 
    SET 
        status = 'seen',
        seen = IF(seen IS NULL, NOW(), NOW()),
        last_open = NOW(),
        open_count = open_count + 1,
        device = ?,
        address = ?
    WHERE history_id = ? AND tracking_id = ?
");

$stmt->bind_param("ssii", $device, $address, $history_id, $tracking_id);
$stmt->execute();
$stmt->close();

// Return pixel (NO CACHE!)
header("Content-Type: image/gif");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
exit;

?>
