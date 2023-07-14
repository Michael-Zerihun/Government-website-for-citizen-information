<?php 
    $servername = 'localhost';
    $username = 'root';
    $spassword = '';
    $dbname = 'iwt citizen project';

    $conn = mysqli_connect($servername,$username,$spassword,$dbname);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    session_start();

    // function tell() {
    //     echo 'vnskjvn kjsdn nusdfb dsjdjb fjsdbhjbds hfbhjdb hjfsb jesbjs';
    // }

    $ran = rand(111111,999999);
?>
