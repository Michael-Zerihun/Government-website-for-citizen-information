<?php 

require_once('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $pass = $_POST['password'];
    $repass = $_POST['re-password'];
    $email = $_POST['email'];

    if($pass === $repass){
        $sql = "INSERT INTO `accounts` (`firstName`,`lastName`, `password`, `email`) VALUES( '" . $fname . "', '" . $lname . "', '" . $pass . "', '" . $email . "');";
        if(mysqli_query($conn, $sql)){
            
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            header('Location: dashboard.php');
        }
        else{
            echo 'error';
        }
    }
    else{
        $_SESSION['error'] = 'Password did not match';
    }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <script src="./js/signup.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <div class="signup">
        <h1>Signup</h1>
        <form action="signup.php" method="post">
            <label for="first-name">First name</label><span class="tab"></span>
            <label for="last-name">Last name</label><br>
            <input type="text" name="first-name" required autofocus id="first-name">
            <input type="text" name="last-name" required id="last-name"><br><br>
            <label for="email">Enter email</label><br>
            <input type="email" name="email" required id="email"><br><br>
            <label for="password">Enter Password</label><span class="tab1"></span>
            <label for="re-password">Re-enter Password</label><br>
            <input type="password" name="password" minlength="8" required id="password">
            <input type="password" name="re-password" minlength="8" required id="re-password"><br>
            <?php
                if(isset($_SESSION['error'])){
                    echo '<font color="red">'.$_SESSION['error'].'</font><br>';
                    session_unset();
                }
            ?>
            <input type="checkbox" name="showpass" onclick="show()">
            
            <label for="showpass">Show password</label><br>
            <input type="submit" value="Create" id="create">
        </form>

    </div>  
</body>
</html>