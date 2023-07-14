<?php 
    $var = '';
    $dbpass = 'this is password';
    $encpass = password_hash($dbpass, PASSWORD_DEFAULT);
    if(isset($var)){
        echo 'it is declared';
    }
    else{
        echo 'it is not declared';
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<br> sent";
        // $retVal = (condition) ? a : b ;
        print_r($_POST);
        if (empty($_POST['name'])) {
            echo "<br> empty";
        }
        else{
            echo "<br> not empty <br>";
            echo 'your name is: ' . $_POST['name'];
            echo '<br>your password is: ' . $_POST['password'];
            
            if(password_verify($_POST['password'], $encpass)){
                echo '<br>successfully logged in! 😎';
            }
            else{
                echo '<br>password incorrect';
            }
        }
    }
    else{
        echo "<br>not sent yet ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function active(){
            var check = document.getElementById('txPass')
            if(check.disabled == false){
                check.disabled = true
            }
            else if(check.disabled == true){
                check.disabled = false
            }
        }

    </script>
    <form action="" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="txName"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="txPass" disabled><br>
        <input type="submit" value="submit">
    </form>
    <button onclick="active()">activate</button>
</body>
</html>
<?php
  $a = 10;
  $b;
  $a > 15 ?
  $b = 4 * 20 : 
  $b = $a - 26;
  $test = ($a > 49) ? 3.7 * $a : 4.2 * $a -8 ;
  print ("Value of b is " . $test);

  $hashed =password_hash("123", PASSWORD_DEFAULT);
  echo '<br>' . $hashed;
  $verify = password_verify('1234', $hashed);
  echo '<br>'. $verify . '<br>';

  $show = password_get_info($hashed);
  print_r($show);



?>