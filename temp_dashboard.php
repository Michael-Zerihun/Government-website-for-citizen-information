<?php
    // session_unset();
    
    $x = 8;
    // echo $x;
    // echo $x;
    $l = 12;
    // $GLOBALS['l'] = 1;
    
    require_once('connect.php');

    $a_email = $_SESSION['email'];
    $_SESSION['logemail'] = $a_email;

    require_once('admin response.php');
    require_once('databaseTask.php');
    // session_destroy();
    $servMethod = '';
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
            // $x = 'gmflkmldfmld';
    }
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
    }
    else{
        $_SESSION['home'] = 'home';
    }
    
    $sql = "SELECT `martial` FROM `accounts` WHERE `email` = 'test123@gmail.com'";
            if(mysqli_query($conn, $sql)){
                $data = mysqli_query($conn, $sql);
                $arr = mysqli_fetch_assoc($data);
                // echo $arr['martial'];
                if($arr['martial'] == 'SINGLE'){
                    $l = 11;
                }
                else{
                $GLOBALS['l'] = 0;
                }
            }
           
        // if(isset($_POST['file'])){
        //     echo 'condition A works <br>';
        //     if(isset($_FILES['file'])){
        //         echo 'condition B works';
        //     }
        //     else{
        //         echo 'this sucks';
        //         print_r($_POST);
        //     }
        // }
    // $_SESSION['form0'] = 0;
    // $_SESSION['form1'] = 0;
    // $_SESSION['form2'] = 0;
    // $_SESSION['form3'] = 0;
    // echo $x;
    // if(isset($_FILES['photo'])){
    //     $efname = $_POST['efname'];
    //     $emname = $_POST['emname'];
    //     $elname = $_POST['elname'];
    //     $ephone = $_POST['ephoneno'];
    //     $eemail = $_POST['eemail'];
    //     $eid = $_POST['eidno'];
    //     $file = $_FILES['photo'];
        
    //     $fileName = $_FILES['photo']['name'];
    //     $fileTmpName = $_FILES['photo']['tmp_name'];
    //     $fileSize = $_FILES['photo']['size'];
    //     $fileError = $_FILES['photo']['error'];
    //     $fileType = $_FILES['photo']['type'];

    //     $sql = "SELECT * FROM `accounts` WHERE `account` = '1'";
    //     if(mysqli_query($conn, $sql)){
    //         $data = mysqli_query($conn, $sql);
    //         $info = mysqli_fetch_assoc($data);
    //         $name = $info['account'];
    //         // echo $name;
    //     }
    //     // $file = $_FILES['file'];
    //     print_r($file);
        

    //     $fileExt = explode('.', $fileName);
    //     $fileAcExt = strtolower(end($fileExt));

    //     $allow = array('jpg', 'jpeg', 'png');
    //     echo 'live';
    //     if(in_array($fileAcExt, $allow)){
    //         if($fileError === 0){
    //             if($fileSize < 9050000){
    //                 // $fileNewName = uniqid('', true).".".$fileAcExt;
    //                 $fileNewName = $info['account'].".".$fileAcExt;
    //                 $fileDestinaton = 'image/'.$fileNewName;
    //                 move_uploaded_file($fileTmpName, $fileDestinaton);
    //                 // header("Location:index.php?uploadsuccess");
    //                 $sql = "UPDATE `accounts` set `photo` = '$fileNewName', `eFName` = '$efname', `eMName` = '$emname',
    //                         `eLName` = '$elname', `ePhone` = '$ephone', `eEmail` = '$eemail', `eID` = '$eid' where `account` = '1'";
    //                 if(mysqli_query($conn, $sql)){
                        
    //                 }

    //             }
    //             else{
    //                 echo 'file size is too big!';
    //             }
    //         }
    //         else{
    //             echo 'error while uploading file!';
    //         }
    //     }
    //     else{
    //         echo 'wrong file type!';
    //     }
        
    // }

    // if(isset($_POST['fname']) &&  !isset($_POST['ffname'])){
    //     $fname = $_POST['fname'];
    //     $sql = "SELECT * FROM `` WHERE "
    //      if(mysqli_query($conn, $sql)){
        
        echo $_SESSION['report'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/account.css">
    <script src="./js/popuser.js"></script>
    <title>Document</title>
</head>
<body onload="progress()">

    <div class="page" id="page">
        <div class="top" id="top">
            <div class="logoside" id="logoside">
                <div class="logo" id="logo">
                    <img src="./image/Ahadu-logos/r.png" alt="" id="logoimg">
                </div>
            </div>

            <div class="btside" id="btside">
                <button class="notify" id="notify" ><img src="./image/Icon/kindpng_1699400.png" alt="" id="noti"></button>
                <button class="usericon" id="usericon" onclick="usertab(this)"><img src="./image/Icon/user_person_profile_avatar_icon_190943.png" alt="" id="icon" ></button>
                <div  id="overlay" onclick="closeusertab(this)"></div>
                <div class="user" id="user">
                    <div class="headerdiv" id="headerdiv">
                        <div class="profilepic" id="profilepic">
                            <img src="./image/Icon/user_person_profile_avatar_icon_190943.png" alt="" id="profileimg">
                        </div>
                        <?php
                            // print_r($_SESSION);
                            $a_email = $_SESSION['email'];
                            // echo '|||||'.$a_email. '|||||';
                            $sql ="SELECT * FROM `Admin account` WHERE  `email` = '$a_email'";
                            // echo $sql;
                            if(mysqli_query($conn, $sql)){
                                $data = mysqli_query($conn, $sql);
                                $info = mysqli_fetch_assoc($data);
                                $fname = $info['FName'];
                                $lname = $info['LName'];
                                $logemail = $info['email'];
                                
                                // $_SESSION['logemail'] = $logemail;
                            }
                            echo '<h3 id="username">'. $fname.' '.$lname.'</h3>
                            <i>'.$logemail.'</i><br>';
                            $fcomp = 0;
                            // if($nationality != ''){
                            //     $fcomp++;
                            //     // echo $fcomp;
                            //     if($mfname != ''){
                            //         $fcomp++;
                            //         // echo $fcomp;
                            //         if($pcity != ''){
                            //             $fcomp++;
                            //             // echo $fcomp;
                            //             if($photo != ''){
                            //                 $fcomp++;
                            //                 // echo $fcomp;
                            //             }
                            //         }
                            //     }
                            // }


                        ?>
                        
                    </div>
                    <div class="bodydiv" id="bodydiv">
                        <button class="setting" id="setting">  Settings</button><br><br>
                        <button class="logout" id="logout"><a href="./logout.php">Log out</a></button>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottom" id="bottom">
            
            <div class="tab" id="tab">
                
                
                <form action="" method="get">
                    <button class="tabbtn" id="home" onclick="activate(this)" type="submit" name="home" >Home</button>
                </form>

                <form action="" method="get">
                    <button class="tabbtn" id="persinfo" onclick="activate(this)" type="submit" name="alluser">All users</button>
                </form>
                <form action="" method="get">
                    <button class="tabbtn" id="getid" onclick="activate(this)" type="submit" name="newrequest">New requests</button>
                </form>
                <form action="" method="get">
                    <button class="tabbtn" id="getpass" onclick="activate(this)" type="submit" name="statistics">Statistics</button>
                </form>
                <form action="" method="get">
                    <button class="tabbtn" id="reqchng" onclick="activate(this)" type="submit" name="reqchng">Request Change</button>
                </form>
                <form action="" method="get">
                    <button class="tabbtn" id="taxid" onclick="activate(this)" type="submit" name="taxid">Tax ID</button>
                </form>
            </div>
            <div class="content" id="content">
                <?php
                    $_SESSION['test'] = 4;
                    // if(isset($_GET['completeform']) && !isset($_POST['fname']) && !isset($_POST['ffname']) && !isset($_POST['pobox']) && !isset($_SESSION['upload'])){
                        
                    if(isset($_GET['alluser'])){
                        alluser($conn, $logemail);
                    }
                    elseif(isset($_GET['getid'])){
                        idcard($conn, $logemail);
                    }
                    elseif(isset($_GET['getpass'])){
                        passport($conn, $x, $logemail);
                    }
                    elseif(isset($_GET['reqchng'])){
                        // print_r($_POST);
                        change($conn, $logemail);
                    }
                    else{
                        home();
                    }
                ?>
                      
                    
            </div>
        </div>
    </div>
</body>
</html>
<!-- echo $GLOBALS['f0'], $GLOBALS['f1'] , $GLOBALS['f2'] ,$GLOBALS['f3'];
$GLOBALS['f0'] == 0
$GLOBALS['f0'] == 1
$GLOBALS['f1'] == 1
$GLOBALS['f2'] == 2 -->