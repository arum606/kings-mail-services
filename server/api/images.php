<?php
include('../connection.php');

// Get tracking parameters
$history_id = isset($_GET['h']) ? intval($_GET['h']) : 0;
$tracking_id = isset($_GET['t']) ? intval($_GET['t']) : 0;

if ($history_id <= 0 || $tracking_id <= 0) {
    http_response_code(400);
    exit;
}

// User agent
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

// BLOCKED bots
$block_bots = [
    'bot','crawl','spider','crawler',
    'googlebot','bingbot','yandex','baidu',
    'facebookexternalhit','slurp'
];

// Allowed email proxy user agents
$allow_proxies = [
    'googleimageproxy',
    'outlook',
    'yahoo',
    'apple',
    'mail',
    'thunderbird'
];

// Detect email proxy
$is_email_proxy = false;
foreach ($allow_proxies as $proxy) {
    if (strpos($user_agent, $proxy) !== false) {
        $is_email_proxy = true;
        break;
    }
}

// Detect real bot
$is_real_bot = false;
foreach ($block_bots as $bot) {
    if (strpos($user_agent, $bot) !== false) {
        $is_real_bot = true;
        break;
    }
}

// Block real crawlers (not email proxies)
if ($is_real_bot && !$is_email_proxy) {
    header("Content-Type: image/gif");
    echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
    exit;
}

// --- DEVICE DETECTION ---
function parse_device($ua) {
    if (strpos($ua, 'mobile') !== false) return "Mobile";
    if (strpos($ua, 'tablet') !== false || strpos($ua, 'ipad') !== false) return "Tablet";
    return "Desktop";
}

$device = parse_device($user_agent);

// --- GET GEO ADDRESS (City, Region, Country) ---
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$address = null;

if ($ip && $ip !== "127.0.0.1") {

    $geo = @file_get_contents("http://ip-api.com/json/" . $ip);

    if ($geo !== false) {
        $geo = json_decode($geo, true);

        if ($geo && $geo["status"] === "success") {
            $city    = $geo["city"] ?? '';
            $region  = $geo["regionName"] ?? '';
            $country = $geo["country"] ?? '';

            // Build the final address string
            $address = trim("$city, $region, $country", " ,");
        }
    }
}

// --- UPDATE DATABASE (device + multi-open + address) ---
$stmt = $connection->prepare("
    UPDATE sent_email_list 
    SET 
        status = 'seen',
        seen = IF(seen IS NULL, NOW(), seen),
        last_open = NOW(),
        open_count = open_count + 1,
        device = ?,
        address = ?
    WHERE history_id = ? AND tracking_id = ?
");

$stmt->bind_param("ssii", $device, $address, $history_id, $tracking_id);
$stmt->execute();
$stmt->close();

// Return tracking pixel
header("Content-Type: image/gif");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
exit;

?>
