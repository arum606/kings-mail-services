<?php
include('./PHPMailer/PHPMailerAutoload.php');
require_once("../server/auth.php");

function sendBulkEmailBCC($subject, $body, $recipients)
{
    global $smtp_email, $smtp_password, $server, $port, $reply_to, $connection,$smtp_sender_name,$username,$security,$id;

    $total_email = count($recipients);
    $sent = 0;
    $failed = 0;

    foreach ($recipients as $email) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;

        // SMTP configuration
        $mail->SMTPSecure = $security; // e.g., 'tls' or 'ssl'
        
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
        $mail->Body = $body;

        // Set recipient address
        $mail->ClearAddresses();
        $mail->AddAddress($email);

        if ($mail->Send()) {
            $sent++;
        } else {
            $failed++;
        }
    }

    $status = ($failed === 0) ? 'success' : 'failed';

    // Properly escape and quote the subject for SQL
    $escaped_subject = mysqli_real_escape_string($connection, $subject);

    $sql = "INSERT INTO history (`status`, receipant, successful, failed, `date`, `subject`,`user`) 
            VALUES ('$status', $total_email, $sent, $failed, NOW(), '$escaped_subject','$id')";
    mysqli_query($connection, $sql);

    return $status;
}

?>
