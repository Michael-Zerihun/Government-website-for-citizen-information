<?php

    // function load() {
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $logemail = $_SESSION['logemail'];
            
            if(isset($_POST['fname']) &&  !isset($_POST['ffname'])){
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $bdaypage = $_POST['bday'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];
                $bcert = $_POST['bcertificate'];
                $nation = $_POST['nationality'];
                $bplace = $_POST['bplace'];
                $martial = $_POST['martial'];
                $occup = $_POST['occupation'];
                $bday = date("Y-m-d", strtotime($bdaypage));
                $_SESSION['check'] = $x +1;
                
                $sql = "UPDATE `accounts`set `firstName` ='$fname', `midName` ='$mname', `lastName` ='$lname', `birthday` ='$bday',
                        `gender` ='$gender', `nationality` ='$nation', `phone` ='$phone', `birthCert` ='$bcert',
                        `birthPlace` ='$bplace', `martial` ='$martial', `occupation` ='$occup' WHERE `email` = '$logemail'";
                
                if(mysqli_query($conn, $sql)){
                    
                }
                else{
                    echo 'there seems to be an error!';
                }
                
            }
            elseif(isset($_POST['ffname'])){
                $ffname = $_POST['ffname'];
                $fmname = $_POST['fmname'];
                $flname = $_POST['flname'];
                $mfname = $_POST['mfname'];
                $mmname = $_POST['mmname'];
                $mlname = $_POST['mlname'];

                if(isset($_POST['pfname'])){
                    $pfname = $_POST['pfname'];
                    $pmname = $_POST['pmname'];
                    $plname = $_POST['plname'];
                    $mrid = $_POST['mrid'];
                }
                else{
                    $pfname = '';
                    $pmname = '';
                    $plname = '';
                    $mrid = '';
                }
                

                $sql = "UPDATE `accounts`set `fatherFName` = '$ffname', `fatherMName` = '$fmname', `fatherLName` = '$flname', 
                `motherFName` = '$mfname', `motherMName` = '$mmname', `motherLName` = '$mlname', `partnerFName` = '$pfname', 
                `partnerMName` = '$pmname', `partnerLName` = '$plname', `marraigeID` = '$mrid' where `email` = '$logemail' ";

                if(mysqli_query($conn, $sql)){
                                    
                }
                else{
                    echo 'there seems to be an error!';
                }
            }
            elseif(isset($_POST['pobox'])){
                $pobox = $_POST['pobox'];
                $pstreet = $_POST['pstreet'];
                $pcity = $_POST['pcity'];
                $pstate = $_POST['pstate'];
                $homeno = $_POST['homeno'];
                $hstreet = $_POST['hstreet'];
                $hcity = $_POST['hcity'];
                $hstate = $_POST['hstate'];

                $sql = "UPDATE `accounts` set `pobox` = '$pobox', `pstreet` = '$pstreet', `pcity` = '$pcity', `pstate` = '$pstate',
                 `homeNo` = '$homeno', `hstreet` = '$hstreet', `hcity` = '$hcity', `hstate` = '$hstate' where `email` = '$logemail'";

                if(mysqli_query($conn, $sql)){
                                    
                }
                else{
                    echo 'there seems to be an error!';
                }
            }
            elseif(isset($_FILES['photo'])){
                // $_SESSION['check'] = 14;
                $efname = $_POST['efname'];
                $emname = $_POST['emname'];
                $elname = $_POST['elname'];
                $ephone = $_POST['ephoneno'];
                $eemail = $_POST['eemail'];
                $eid = $_POST['eidno'];
                $file = $_FILES['photo'];
                $fileName = $_FILES['photo']['name'];
                $fileTmpName = $_FILES['photo']['tmp_name'];
                $fileSize = $_FILES['photo']['size'];
                $fileError = $_FILES['photo']['error'];
                $fileType = $_FILES['photo']['type'];

                $sql = "SELECT * FROM `accounts` WHERE `email` = '$logemail'";
                if(mysqli_query($conn, $sql)){
                    $data = mysqli_query($conn, $sql);
                    $info = mysqli_fetch_assoc($data);
                    $name = $info['account'];
                }
                $fileExt = explode('.', $fileName);
                $fileAcExt = strtolower(end($fileExt));
                $allow = array('jpg', 'jpeg', 'png');
                // echo 'live';
                if(in_array($fileAcExt, $allow)){
                    if($fileError === 0){
                        if($fileSize < 90500000){
                            $fileNewName = $name."idphoto.".$fileAcExt;
                            $fileDestinaton = 'image/Photo/'.$fileNewName;
                            move_uploaded_file($fileTmpName, $fileDestinaton);
                            $sql = "UPDATE `accounts` set `photo` = '$fileNewName', `eFName` = '$efname', `eMName` = '$emname',
                                    `eLName` = '$elname', `ePhone` = '$ephone', `eEmail` = '$eemail', `eID` = '$eid' where `email` = '$logemail'";
                            if(mysqli_query($conn, $sql)){
                                // echo 'live'.$fileNewName;
                            }
                                $_SESSION['upload'] = 'good';
                        }
                        else{
                            echo 'file size is too big!';
                        }
                    }
                    else{
                        echo 'error while uploading file!';
                    }
                }
                else{
                    echo 'wrong file type!';
                }
                // C:\xampp\htdocs\project\image\Photo
            }
            elseif(!isset($_POST[''])  && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST[''])){
                // echo 'enter';
                // print_r($_POST);

            }
            elseif(isset($_POST['change'])){
                // echo 'hi';
            }
        }
        // function mrg() {
        //     $sql = "SELECT `martial` FROM `accounts` WHERE `email` = 'test123@gmail.com'";
        //     if(mysqli_query($conn, $sql)){
        //         $GLOBALS['l'] = 11;
        //     }
        //     else{
        //         $GLOBALS['l'] = 0;
        //     }
        // }
    // }
    $y = 48;
?>