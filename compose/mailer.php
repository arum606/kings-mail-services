<?php
include('./PHPMailer/PHPMailerAutoload.php');
include('../server/connection.php');
require_once("../server/auth.php");

header('Content-Type: application/json');

// ----------------------------
// VALIDATE POST INPUT
// ----------------------------
if (
    empty($_POST['subject']) ||
    empty($_POST['body']) ||
    empty($_POST['recipients']) ||
    empty($_POST['body_type'])
) {
    echo json_encode(['status' => 'error', 'message' => 'Subject, body, body type, and recipients are required']);
    exit;
}

$subject = trim($_POST['subject']);
$body = trim($_POST['body']);
$recipient_input = $_POST['recipients'];
$body_type = $_POST['body_type'];

// Convert recipients to array
$recipients = is_string($recipient_input)
    ? array_map('trim', explode(',', $recipient_input))
    : $recipient_input;

// ----------------------------
// VALIDATE EMAILS
// ----------------------------
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
$mail->setFrom($smtp_email, $smtp_sender_name);
$mail->addReplyTo($reply_to, "support");
$mail->Subject = $subject;

$mail->addCustomHeader("List-Unsubscribe", "<mailto:unsubscribe@$domain>");
$mail->SMTPKeepAlive = true;

// ----------------------------
// INSERT MAIN HISTORY RECORD
// ----------------------------
$escaped_subject = mysqli_real_escape_string($connection, $subject);
$sql = "INSERT INTO history (`status`, receipant, successful, failed, `date`, `subject`, `user`)
        VALUES ('pending', '$total_email', 0, 0, NOW(), '$escaped_subject', '$id')";
mysqli_query($connection, $sql);
$history_id = mysqli_insert_id($connection);

// ----------------------------
// SEND EMAILS ONE BY ONE
// ----------------------------
$counter = 1;

foreach ($valid_recipients as $email) {

    $mail->clearAllRecipients();
    $mail->addAddress($email);

    // Tiny invisible tracking pixel (works for Gmail)
    $tracking_img = "<img src='{$domain}server/api/images.php?h={$history_id}&t={$counter}' width='1' height='1' style='opacity:0;' alt='' />";



    // Build email body
    if ($body_type === 'text') {
        // Wrap plain text in HTML and append tracking pixel
        $mail->Body = "<html><head><meta charset='UTF-8'></head><body>"
                    . "<p>" . nl2br(htmlspecialchars($body)) . "</p>"
                    . $tracking_img
                    . "</body></html>";
    } else {
        // HTML email: append tracking pixel automatically
        $mail->Body = $body . $tracking_img;
    }

    // Send email
    if ($mail->send()) {
        $status_email = 'success';
        $sent++;
    } else {
        $status_email = 'failed';
        $failed++;
    }

    $email_escaped = mysqli_real_escape_string($connection, $email);

    // Insert sent email record
    $sql2 = "INSERT INTO sent_email_list 
                (history_id, email, tracking_id, date_sent, status, user)
             VALUES 
                ('$history_id', '$email_escaped', '$counter', NOW(), '$status_email', '$id')";
    mysqli_query($connection, $sql2);

    $counter++;
}

// Close SMTP connection
$mail->smtpClose();

// ----------------------------
// UPDATE HISTORY WITH FINAL STATUS
// ----------------------------
$final_status = ($failed === 0) ? 'success' : 'partial';
$sql_update_history = "UPDATE history 
                       SET status = '$final_status', successful = '$sent', failed = '$failed' 
                       WHERE id = '$history_id'";
mysqli_query($connection, $sql_update_history);

// ----------------------------
// API RESPONSE
// ----------------------------
echo json_encode([
    'status' => $final_status,
    'total'  => $total_email,
    'sent'   => $sent,
    'failed' => $failed,
    'history_id' => $history_id
]);
?>
