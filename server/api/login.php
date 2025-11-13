<?php

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    header('Content-Type: application/json');
    include('../connection.php');

    


    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $url = $_POST['url'];

        if ($url == $domain . "index.php" || $url == $domain) {


            $stmt = $connection->prepare("SELECT * FROM user WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {

                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {

                    $_SESSION['login_id'] = $user['id'];
                    // success
                    echo json_encode(['status' => 'success', 'message' => 'Login successful']);
                    exit();

                } else {
                    echo json_encode(['status' => 'error', 'message' => 'incorrect password']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'No user found with this email']);
            }

            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Access denied']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email and password are required']);
    }

?>    