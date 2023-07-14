<?php
    require_once('connect.php');
    print_r($_SESSION);
    if(isset($dep)){
        echo '<br>';
        print_r($dep);
        
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $email = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `accounts` WHERE `email` = '" . $email . "' AND password = '" . $password . "' and status = 1;";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);
            $dep = mysqli_fetch_assoc($data);
            $_SESSION['report'] = 'true';
            
            if(isset($dep)){
                echo 'it is set <br>';
                print_r($dep);
                
            }
            
            if($dep['email'] == ''){
                echo 'no account';
                $_SESSION['reporter'] = 'true';
                $sql = "SELECT * FROM `admin account` WHERE `email` = '" . $email . "' AND password = '" . $password . "' and `status` = 1;";
                if(mysqli_query($conn, $sql)){
                    $data = mysqli_query($conn, $sql);
                    $dep = mysqli_fetch_assoc($data);
                    $_SESSION['report'] = $dep['email'];
                    // echo 'hi';
                    if($dep['email'] == ''){
                        echo 'no accountaaaaaaaaaaaa';
                        $_SESSION['error'] = 'Email or password is incorrect!';
                        header("Location: login.php");
                    }
                    else{
                        $_SESSION['email'] = $email;
                        header("Location: admin.php");
                    }
                }
            }
            else{
                $_SESSION['email'] = $email;
                echo 'this condition';
                header("Location: dashboard.php");
            }
        }
        else{
            header("Location: login.php");
        }
    }

    else{
    }
?>