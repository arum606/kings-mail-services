<?php
include('./PHPMailer/PHPMailerAutoload.php');
include('../server/connection.php');
require_once("../server/auth.php");

header('Content-Type: application/json');

// Validate POST input
if (
    empty($_POST['subject']) ||
    empty($_POST['body']) ||
    empty($_POST['recipients'])
) {
    echo json_encode(['status' => 'error', 'message' => 'Subject, body, and recipients are required']);
    exit;
}

$subject = trim($_POST['subject']);
$body = trim($_POST['body']);
$recipient_input = $_POST['recipients'];

// Convert comma-separated list → array
$recipients = is_string($recipient_input)
    ? array_map('trim', explode(',', $recipient_input))
    : $recipient_input;

// Validate emails
$valid_recipients = [];
foreach ($recipients as $email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid_recipients[] = $email;
    }
}

if (empty($valid_recipients)) {
    echo json_encode(['status' => 'error', 'message' => 'No valid recipient emails found']);
    exit;
}

// Build HTML body
$htmlBody = $body;

// Counters
$total_email = count($valid_recipients);
$sent = 0;
$failed = 0;

// ----------------------------
// INITIALIZE PHPMailer
// ----------------------------
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->SMTPSecure = $security;
$mail->Host = $server;
$mail->Port = $port;
$mail->Username = $username;
$mail->Password = $smtp_password;

$mail->isHTML(true);

// Correct way to set sender display name
$mail->setFrom($smtp_email, $smtp_sender_name);

// Reply-to with proper name
$mail->addReplyTo($reply_to, "support");

// Subject and body
$mail->Subject = $subject;
$mail->Body = $htmlBody;

// Optional headers
$mail->addCustomHeader("List-Unsubscribe", "<mailto:unsubscribe@$domain>");

// Keep SMTP connection alive
$mail->SMTPKeepAlive = true;

// Add recipients as BCC
foreach ($valid_recipients as $email) {
    $mail->addBCC($email);
}

// Send the email
if ($mail->send()) {
    $sent = $total_email;
} else {
    $failed = $total_email;
}

$mail->smtpClose();

// Status
$status = ($failed === 0) ? 'success' : 'failed';

// Escape subject for SQL
$escaped_subject = mysqli_real_escape_string($connection, $subject);

// Insert into history table
$sql = "INSERT INTO history (`status`, receipant, successful, failed, `date`, `subject`, `user`)
        VALUES ('$status', '$total_email', '$sent', '$failed', NOW(), '$escaped_subject', '$id')";

mysqli_query($connection, $sql);

// API response
echo json_encode([
    'status' => $status,
    'total'  => $total_email,
    'sent'   => $sent,
    'failed' => $failed
]);
?>
