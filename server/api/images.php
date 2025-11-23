<?php
// images.php
include('../connection.php');

// Get history and tracking IDs from query
$history_id = isset($_GET['h']) ? intval($_GET['h']) : 0;
$tracking_id = isset($_GET['t']) ? intval($_GET['t']) : 0;

// Validate input
if ($history_id <= 0 || $tracking_id <= 0) {
    http_response_code(400);
    exit;
}

// Check if the user-agent indicates a bot or automated system
$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$is_bot = preg_match('/bot|crawl|spider|robot|facebook|google|yandex|slurp|bing|baidu/i', $user_agent);

// Also check if the referrer looks like an email client
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$is_email_client = preg_match('/mail|email|outlook|gmail|yahoo|thunderbird/i', $referrer);

if ($is_bot || !$is_email_client) {
    // If it's a bot or not an email client, do not mark the email as "seen"
    http_response_code(200); // Still return the GIF
    header('Content-Type: image/gif');
    echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
    exit;
}

// Use prepared statements for safety and performance
$stmt = $connection->prepare("UPDATE sent_email_list 
                              SET `status` = 'seen', `seen` = NOW() 
                              WHERE history_id = ? AND tracking_id = ? ");
$stmt->bind_param("ii", $history_id, $tracking_id);
$stmt->execute();
$stmt->close();

// Return a 1x1 transparent GIF
header('Content-Type: image/gif');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// 1x1 transparent GIF
echo base64_decode('R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=');
exit;
?>
