<?php

    session_start();


    if (isset($_SESSION['login_id'])) {

        $id = $_SESSION['login_id'];

        // Assuming $connection is your mysqli connection object and is already defined

        $query = mysqli_query(
            $connection,
            "SELECT 
                user.id AS user_id,
                user.username AS user_username,
                user.email AS user_email,
                config.email AS config_email,
                config.password AS config_password,
                config.server,
                config.port,
                config.sender_name,
                config.reply_to,
                config.username,
                config.security,
                preferance.*
            FROM user, config , preferance
            WHERE user.id = '$id'  AND  config.user = '$id' AND preferance.user = '$id'"
        );

        if (mysqli_num_rows($query)) {

            $row = mysqli_fetch_assoc($query);

            $login_username = $row['user_username'];
            $login_email = $row['user_email'];
            $smtp_email = $row['config_email'];
            $smtp_password = $row['config_password'];
            $server = $row['server'];
            $port = $row['port'];
            $reply_to = $row['reply_to'];
            $smtp_sender_name = $row['sender_name'];
            $username = $row['username'];
            $security = $row['security'];
            $preferance_subject = $row['subject'];
            $preferance_message = $row['body'];



        } else {
            
            // Redirect if no matching user found
            echo "<script> window.location.href = '../index.php'; </script>";
            exit;
        }

    } else {
        // Redirect if not logged in
        echo "<script> window.location.href = '../index.php'; </script>";
        exit;
    }


    if (isset($_GET['logout'])) {
        session_destroy();
        echo "<script> window.location.href = '../index.php' </script>";
    }




?> 