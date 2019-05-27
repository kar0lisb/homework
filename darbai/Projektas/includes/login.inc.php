<?php
    session_start();
    if(isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_pw = mysqli_real_escape_string($conn, $_POST['user_pw']);
        
        if(empty($user_name) || empty($user_pw)) {
            header("Location: ../index.php?=login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM login_info WHERE user_name = '$user_name'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                header("Location: ../index.php?=login=no-user");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    $hashedPwdCheck = password_verify($user_pw, $row['user_pw']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../index.php?=login=wrong password");
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['user_type'] = $row['user_type'];
                    
                        header("Location: ../main.php");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php?login=Bandote gudrauti");
        exit();
    }

