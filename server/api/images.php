<?php
// images.php
include('../server/connection.php');

// Get history and tracking IDs from query
$history_id = isset($_GET['h']) ? intval($_GET['h']) : 0;
$tracking_id = isset($_GET['t']) ? intval($_GET['t']) : 0;

// Validate input
if ($history_id <= 0 || $tracking_id <= 0) {
    http_response_code(400);
    exit;
}

// Use prepared statements for safety and performance
$stmt = $connection->prepare("UPDATE sent_email_list 
                              SET status = 'seen', seen = NOW() 
                              WHERE history_id = ? AND tracking_id = ? AND status != 'seen'");
$stmt->bind_param("ii", $history_id, $tracking_id);
$stmt->execute();
$stmt->close();

// Return a 1x1 transparent GIF
header('Content-Type: image/gif');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// 1x1 transparent GIF
echo base64_decode(
    'R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs='
);
exit;
?>
