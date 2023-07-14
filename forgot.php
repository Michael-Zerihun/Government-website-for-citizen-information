<?php 
    require_once('connect.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once ('./include/PHPMailer.php');
    require_once ('./include/SMTP.php');

    function sendotp($conn,$ran){
        
        $_SESSION['ran'] = $ran;
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 3;                               
            $mail->isSMTP();            
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;                          
            $mail->Username = "---EMAIL HERE---";                 
            $mail->Password = "---PASSWORD HERE---";                           
            $mail->SMTPSecure = "tls";                           
            $mail->Port = 587;                                   
            $mail->From = "---EMAIL HERE---";
            $mail->FromName = "It is the admin of the server";
            $mail->addAddress($_SESSION['email'], "Recepient Name");
            $mail->isHTML(true);
            $mail->Subject = "this is to test the communicatin";
            $mail->Body = "<h3 style='color:red;'>Forgot password</h3>
            <p>your OTP is " . $_SESSION['ran'] . " keep this as a sectret. Do not share</p>";
            $mail->AltBody = "This is the plain text version of the email content";
            try {
                $mail->send();
                echo "Message has been sent successfully";
                $_SESSION['sent'] = 1;
                header("Location: forgot.php");
            }
            catch (Exception $e) {
    
            }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['email'])){
            $sql = "SELECT * FROM `accounts` WHERE `email` = '" . $_POST['email'] . "' AND `status` = 1";
                echo $sql;
                if(mysqli_query($conn, $sql)){
                    $data = mysqli_query($conn, $sql);
                    $acc = mysqli_fetch_assoc($data);
                    if($acc != ''){
                        $_SESSION['email'] = $_POST['email'];
                        sendotp($conn, $ran);
                    }
                    else{
                        $_SESSION['error'] = 'Wrong email';
                    }
                }
        }

        $_SESSION['otp'] = $_SESSION['ran'];

        

        if(isset($_POST['otp'])){
            $x = intval($_POST['otp']);
            if($_SESSION['otp'] == $x){
                $_SESSION['verify'] = true;
            }
              
            else if($_SESSION['otp'] != $_POST['otp']){
                echo 'wrong otp or it is ' . gettype($x);
            }
          
        }


        if(isset($_POST['password'], $_POST['re-password'])){
            if($_POST['password'] == $_POST['re-password']){
                $sql = "UPDATE `accounts` SET password = '" . $_POST['password'] . "' WHERE email = '" . $_SESSION['email'] . "'";
                echo $sql;
                if(mysqli_query($conn, $sql)){
                    header('Location: login.php');
                }
            }
        
            else if($_POST['password'] != $_POST['re-password']){
                echo 'password did not match';
            }
        }
    }
    else{
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forgot.css">
    <script src="./js/forgot.js"></script>
    <title>Forgot Password</title>
</head>
<body>
    <div class="forgot">
        <h2>Forgot Password</h2>
        <?php
        if(!isset($_SESSION['email']) && !isset($_SESSION['sent'])){
            if(isset($_SESSION['none'])){
                echo 'user name or email is not in database';
            }
            session_unset();
            ?>
            <form action="forgot.php" method="post">
                <label for="email">Enter a valid email</label><br>
                <input type="email" name="email" required autofocus id="input-email"><br><br>    
                <input type="submit" value="Get OTP" id="get-otp">
            </form>
        <?php
            
        }
        
        ?>
        
        
        <?php
            if(isset($_SESSION['email']) && isset($_SESSION['sent']) && !isset($_SESSION['verify'])){
                ?>
                <form action="forgot.php" method="post">
                    <label for="otp">Enter OTP</label><br>
                    <input type="text" name="otp" required autofocus id="otp" pattern="[0-9]{6}"><br><br>
                    <a href="./forgot.html" >Didn't get any email?</a>
                    <input type="submit" value="Verify" id="verify">
                </form>
            <?php
            }
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>

        <?php
            if(isset($_SESSION['verify'])){
                ?>

                <form action="forgot.php" method="post">
                    <label for="password">New password</label><br>
                    <input type="password" name="password" required autofocus id="new-password"><br><br>
                    <label for="re-password">Re-enter password</label><br>
                    <input type="password" name="re-password" required id="re-password"><br><br>
                    <input type="checkbox" name="showPassword" onclick="show()">
                    <label for="showPassword">Show Password</label><br>
                    <input type="submit" value="Done" id="done">
                </form>

            <?php
            }
        ?>
        
        
    </div>
</body>
</html>