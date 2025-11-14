<?php
include('./PHPMailer/PHPMailerAutoload.php');
include('../server/connection.php');
require_once("../server/auth.php");

// Check if POST values are set and not empty
if (
    isset($_POST['subject'], $_POST['body'], $_POST['recipients']) &&
    !empty(trim($_POST['subject'])) &&
    !empty(trim($_POST['body'])) &&
    !empty($_POST['recipients'])
) {
    $subject = trim($_POST['subject']);
    $body = trim($_POST['body']);
    $recipients_input = $_POST['recipients']; // Can be array or comma-separated string

    // Convert comma-separated string to array if needed
    if (is_string($recipients_input)) {
        $recipients = array_map('trim', explode(',', $recipients_input));
    } else {
        $recipients = $recipients_input;
    }

    // Validate emails
    $valid_recipients = [];
    foreach ($recipients as $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $valid_recipients[] = $email;
        }
    }

    if (empty($valid_recipients)) {
        echo json_encode(['status' => 'error', 'message' => 'No valid recipient emails provided']);
        exit;
    }

    // Wrap the body in a proper HTML structure
    $htmlBody = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>' . htmlspecialchars($subject) . '</title>
</head>
<body>
    <p>' . nl2br(htmlspecialchars($body)) . '</p>
</body>
</html>';

    // Initialize counters
    $total_email = count($valid_recipients);
    $sent = 0;
    $failed = 0;

    foreach ($valid_recipients as $email) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;

        // SMTP configuration
        $mail->SMTPSecure = $security; // 'tls' or 'ssl'
        $mail->Host = $server;
        $mail->Port = $port;
        $mail->Username = $username;
        $mail->Password = $smtp_password;

        // Email headers and content
        $mail->IsHTML(true);
        $mail->From = $smtp_email;
        $mail->FromName = $smtp_sender_name;
        $mail->Sender = $smtp_email;
        $mail->AddReplyTo($reply_to, $smtp_sender_name);

        $mail->Subject = $subject;
        $mail->Body = $htmlBody;

        // Add List-Unsubscribe header dynamically
        $mail->addCustomHeader('List-Unsubscribe', '<mailto:unsubscribe@' . $domain . '>');


        // Set recipient address
        $mail->ClearAddresses();
        $mail->AddAddress($email);

        if ($mail->Send()) {
            $sent++;
        } else {
            $failed++;
        }
    }

    // Determine status
    $status = ($failed === 0) ? 'success' : 'failed';

    // Escape subject for SQL
    $escaped_subject = mysqli_real_escape_string($connection, $subject);

    // Insert into history table
    $sql = "INSERT INTO history (`status`, receipant, successful, failed, `date`, `subject`,`user`) 
            VALUES ('$status', $total_email, $sent, $failed, NOW(), '$escaped_subject','$id')";
    mysqli_query($connection, $sql);

    echo json_encode([
        'status' => $status,
        'total' => $total_email,
        'sent' => $sent,
        'failed' => $failed
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Subject, body, and recipients are required and cannot be empty']);
}
?>
