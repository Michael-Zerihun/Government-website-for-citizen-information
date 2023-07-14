<?php 
    session_unset();
    require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/login.js"></script>
</head>
<body>

    
    <div class="input">
        <img src="./image/user_person_profile_avatar_icon_190943.png" alt=""><br><br>
        <h2>Login</h2>
        <form action="account.php" method="post">
            <?php
                if(isset($_SESSION['error'])){
                    echo '<font color="red">'.$_SESSION['error'].'</font><br>';
                }
                else{
                    session_destroy();
                }
            ?>
            <label for="username">User name</label><br>
            <input type="text" name="username" id="username"  autofocus required><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"  minlength="8" required><br>
            <input type="checkbox" name="visible" id="check" onclick="show()">
            <label for="visible" id="check">Show password</label><br>
            <?php
                if(isset($_SESSION['error'])){
                    ?>
                    <a href="forgot.php">Forgot pasword</a>
                    <?php
                }
                session_unset();
            ?>
            <input type="submit" id="submit" value="Log in"><br><br>
        </form>
        <p id="signup">New user? <a href="./signup.php" >Sign up</a></p>
    </div>
</body>
</html>