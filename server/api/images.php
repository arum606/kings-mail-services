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

// BLOCK bots
$block_bots = [
    'bot','crawl','spider','crawler',
    'googlebot','bingbot','yandex','baidu',
    'facebookexternalhit','slurp'
];

// Allowed email proxies
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
    if (strpos($user_agent, strtolower($proxy)) !== false) {
        $is_email_proxy = true;
        break;
    }
}

// Detect real bot
$is_real_bot = false;
foreach ($block_bots as $bot) {
    if (strpos($user_agent, strtolower($bot)) !== false) {
        $is_real_bot = true;
        break;
    }
}

// Block ONLY real crawlers (not email proxies)
if ($is_real_bot && !$is_email_proxy) {
    header("Content-Type: image/gif");
    echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
    exit;
}

// --------------------------
// UPDATE SEEN (always) + OPEN COUNT
// --------------------------
$stmt = $connection->prepare("
    UPDATE sent_email_list 
    SET 
        status = 'seen',
        seen = NOW(),          -- ALWAYS update seen timestamp
        open_count = open_count + 1
    WHERE history_id = ? AND tracking_id = ?
");

$stmt->bind_param("ii", $history_id, $tracking_id);
$stmt->execute();
$stmt->close();

// Return tracking pixel
header("Content-Type: image/gif");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
exit;

?>
