<?php

function alluser($conn, $logemail){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['change'])){
        view($_POST['change'], $conn);
        }
        elseif(isset($_POST['delete'])){
            $delemail = $_POST['email'];
            $sql = "UPDATE `accounts` SET `status` = 0 WHERE `email` = '$delemail'";
        // $sql = "SELECT * FROM `accounts`";
            if(mysqli_query($conn, $sql)){
                unset($_POST['delete']);
                header("Location: admin.php?alluser");
                
            }
        }
        elseif(isset($_POST['update'])){
            $email = $_POST['email'];
            idverify($conn, $email);
        }
    }




    else{
        
    $pa = $_GET['alluser'];
    if(!isset($_GET['alluser'])){
        $_SESSION['pnoall'] = 1;
    }
    else{
        $_SESSION['pnoall'] = $pa;
    }
    // echo gettype($pa);
    // echo $pa;
    $getpage = (int) $pa;
    // echo $getpage;
    if($getpage == 0 ){
        $getpage = 1;
    }
    echo '<div class="all" id="all">
        <form action="">
        &emsp;&emsp;&emsp;&emsp;
            <input type="radio" name="all" id="">
            <label for="all">All</label>
            <input type="radio" name="active" id="">
            <label for="active">Active</label>
            <input type="radio" name="no-verfy" id="">
            <label for="no-verfy">Not verified</label>
            <input type="radio" name="verified" id="">
            <label for="verified">Not verified</label>
        </form>
    <div class="space" id="space"></div>
        <table class="allusers">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Verification</th>
                <th colspan="3"></th>
                
                
            </tr>';

        $start = 0;
        $size = 5;

        $count = "SELECT count(*) as `nopage` from`accounts` ";
        $info = mysqli_query($conn, $count);
        $value = mysqli_fetch_assoc($info);

        $resultCount = number_format($value['nopage']);
        $pageno = $resultCount/$size;
        if(isset($getpage)){
            // echo $start;
            $start = ($getpage-1)*$size;
            
        }
        // echo $start .' ' . $size;
        $sql = "SELECT * FROM `accounts` LIMIT $start,$size";
        // $sql = "SELECT * FROM `accounts`";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);

            if(mysqli_num_rows($data)>0){
                while($fetch = mysqli_fetch_assoc($data)){
                    if($fetch['status'] == 1){
                        $status = 'Active';
                    }
                    if($fetch['iVerify'] == 1){
                        $verify = 'verified';
                    }
                    if($fetch['status'] == 0){
                        $status = 'Deleted';
                    }
                    if($fetch['iVerify'] == 0){
                        $verify = 'Not verified';
                    }

                    $fech_mail = $fetch['email'];
                    // echo $fech_mail;
                   $tb = "<tr><td>". $fetch['firstName'].' '. $fetch['lastName'] ."</td><td>".$fetch['email']
                    ."</td><td>".$fetch['birthday'] ."</td><td>". $status."</td><td>". $verify.
                    "</td><td>".'
                    <form action="" method="post">
                        <input type="hidden" name="change" id="progressvalue" value="'.$fech_mail.'">
                        <input type="submit"  value="View" id="btnvw">
                    </form>
                    '."
                    </td><td>".'
                            <form action="" method="post">
                                <input type="hidden" name="email" id="progressvalue" value="'.$fech_mail.'">
                                <input type="hidden" name="update" id="progressvalue" value="update">
                                <button type="submit" id="btnvf" >Verify</button>
                            </form>'."</td><td>".'<form>
                        <input type="hidden" name="email" id="progressvalue" value="'.$fech_mail.'">
                        <input type="hidden" name="delete" id="progressvalue" value="delete">
                        <button type="submit" name="delete" id="btndl">delete</button>
                    </form>
                    '."</td></tr>";
                    echo   $tb;


                    

                }
            }
        }

        echo '</table>
            <table style="margin: auto;">
            <tr>';

            $x=1;
            $n = $resultCount%$size;
            if($n != 0){
                $a = 1;
            }
            else{
                $a = 0;
            }
            
            while($x<=$pageno+$a){
                $p ="<td><a href='./admin.php?alluser=$x'>$x</a></td>";
                echo $p;
                // $_SESSION['pno'] = 1;
                
                $x++;
            }
            echo '</tr>
            </table>
            </div>';
            
    }

    

}

// function newrequest(){
    


// }

function home(){
    echo '
        <div class="homepage" id="homepage">
            <div class="homeper" id="homeper">
                <form action="" method="get" class="hometile" id="hometile">
                    <button type="submit" class="hometb" id="hometb" type="submit" name="persinfo">
                        <div class="homeperup" id="homeperup">
                        
                        </div>
                        <div class="homeperdown" id="homeperdown">
                            <h2>Personal information</h2>
                        </div>
                    </button>
                </form>
                
            </div>
            <div class="homeid" id="homeid">
                <form action="" method="get" class="hometile" id="hometile">
                    <button type="submit" name="getid" class="hometb" id="hometb">
                        <div class="homeidup" id="homeidup">
                            <img src="" alt="">
                        </div>
                        <div class="homeiddown" id="homeiddown">
                            <h2>Citizenship ID Card</h2>
                        </div>
                    </button>
                </form>
                
            </div>
            <div class="homepass" id="homepass">
                <form action="" method="get" class="hometile" id="hometile">
                    <button type="submit" name="getpass" class="hometb" id="hometb">
                        <div class="homepassup" id="homepassup">
                            <img src="" alt="">
                        </div>
                        <div class="homepassdown" id="homepassdown">
                            <h2>Apply for Passport</h2>
                        </div>
                    </button>
                </form>
                
            </div>
            <div class="homereq" id="homereq">
                <form action="" method="get" class="hometile" id="hometile">
                    <button type="submit" name="reqchng" class="hometb" id="hometb">
                        <div class="homerequp" id="homerequp">
                            <img src="" alt="">
                        </div>
                        <div class="homereqdown" id="homereqdown">
                            <h2>Request Change</h2>
                        </div>
                    </button>
                </form>
                
            </div>
        </div>
        ';
}

function newrequest($conn, $logemail){

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['change'])){
            view($_POST['change'], $conn);
            }
            elseif(isset($_POST['delete'])){
                $delemail = $_POST['email'];
                $sql = "UPDATE `accounts` SET `status` = 0 WHERE `email` = '$delemail'";
            // $sql = "SELECT * FROM `accounts`";
                if(mysqli_query($conn, $sql)){
                    unset($_POST['delete']);
                    header("Location: admin.php?alluser");
                }
                    
                }
            
            
    }


    else{
        
    $paa = $_GET['newrequest'];
    // echo gettype($pa);
    // echo $pa;
    // $_SESSION['pnonew'] = '1';
    // if(isset($_GET['newrequest'])){
    //     $_SESSION['pnonew'] = $paa;
    // }
    
    // print_r($_SESSION);
    $getpage = (int) $paa;
    // echo $getpage;
    if($getpage == 0 ){
        $getpage = 1;
    }
    echo '
        <div class="all" id="all">
        <div class="space" id="space"></div>
        <table class="allusers">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Verification</th>
                <th colspan="3"></th>
                
            </tr>';

        $start = 0;
        $size = 5;

        $count = "SELECT count(*) as `nopage` from`accounts` where `iVerify` = 0 and `status` = 1 ";
        $info = mysqli_query($conn, $count);
        $value = mysqli_fetch_assoc($info);

        $resultCount = number_format($value['nopage']);
        $pageno = $resultCount/$size;
        if(isset($getpage)){
            // echo $start;
            $start = ($getpage-1)*$size;
            
        }
        // echo $start .' ' . $size;
        $sql = "SELECT * FROM `accounts` where `iVerify` = 0 and `status` = 1 LIMIT $start,$size";
        // $sql = "SELECT * FROM `accounts`";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);

            if(mysqli_num_rows($data)>0){
                while($fetch = mysqli_fetch_assoc($data)){
                    if($fetch['status'] == 1){
                        $status = 'Active';
                    }
                    if($fetch['iVerify'] == 1){
                        $verify = 'verified';
                    }
                    if($fetch['status'] == 0){
                        $status = 'Deleted';
                    }
                    if($fetch['iVerify'] == 0){
                        $verify = 'Not verified';
                    }

                    $fech_mail = $fetch['email'];
                    // echo $fech_mail;
                   $tb = "<tr><td>". $fetch['firstName'].' '. $fetch['lastName'] ."</td><td>".$fetch['email']
                    ."</td><td>".$fetch['birthday'] ."</td><td>". $status."</td><td>". $verify.
                    "</td><td>".'
                    <form action="" method="post">
                        <input type="hidden" name="change" id="progressvalue" value="'.$fech_mail.'">
                        <input type="submit" id="btnvw" value="View">
                    </form>
                    '."
                    </td><td>
                    ".'
                            <form action="" method="post">
                                <input type="hidden" name="email" id="progressvalue" value="'.$fech_mail.'">
                                <input type="hidden" name="update" id="progressvalue" value="update">
                                <button type="submit" id="btnvf" >Verify</button>
                            </form>'."</td><td> ".'
                    <form action="" method="post">
                        <input type="hidden" name="email" id="progressvalue" value="'.$fech_mail.'">
                        <input type="hidden" name="delete" id="progressvalue" value="delete">
                        <button type="submit" name="delete" id="btndl">Delete</button>
                    </form>
                    '."</td></tr>
                    </div>";
                    echo   $tb;


                    

                }
            }
        }

        echo '</table>
            <table style="margin: auto;">
            <tr>';

            $x=1;
            $n = $resultCount%$size;
            if($n != 0){
                $a = 1;
            }
            else{
                $a = 0;
            }

            while($x<=$pageno+$a){
                $p ="<td><a href='./admin.php?newrequest=$x'>$x</a></td>";
                echo $p;
                $x++;
            }
            echo '</tr>
            </table>';
    }

    



}

function idverify($conn, $email){
    // $email = $email;
    $sql = "UPDATE `accounts` SET `iVerify` = 1 WHERE `email` = '$email';";
    echo $sql;
    if(mysqli_query($conn, $sql)){
        // unset($_POST['delete']);
        header("Location: admin.php?alluser");
    }
}




function statistics(){

}

function reqchng(){
    
}

function deleteAcc(){
    // echo 'hi delete';
}
function view($ftc_mail, $conn){
    
    $sql ="SELECT * FROM `accounts` WHERE  `email` = '$ftc_mail'";
    if(mysqli_query($conn, $sql)){
        $data = mysqli_query($conn, $sql);
        $info = mysqli_fetch_assoc($data);
        // $name = $info['account'];
        $fname = $info['firstName'];
        $mname = $info['midName'];
        $lname = $info['lastName'];
        $bdaypage = $info['birthday'];
        $gender = $info['gender'];
        $phone = $info['phone'];
        $email = $info['email'];
        $nation = $info['nationality'];
        $bplace = $info['birthPlace'];
        $martial = $info['martial'];
        $ffname = $info['fatherFName'];
        $fmname = $info['fatherMName'];
        $flname = $info['fatherLName'];
        $mfname = $info['motherFName'];
        $mmname = $info['motherMName'];
        $mlname = $info['motherLName'];
        $pfname = $info['partnerFName'];
        $pmname = $info['partnerMName'];
        $plname = $info['partnerLName'];
        $mrid = $info['marraigeID'];
        $pobox = $info['pobox'];
        $pstreet = $info['pstreet'];
        $pcity = $info['pcity'];
        $pstate = $info['pstate'];
        $homeno = $info['homeNo'];
        $hstreet = $info['hstreet'];
        $hcity = $info['hcity'];
        $hstate = $info['hstate'];
        $photo = $info['photo'];
        $efname = $info['eFName'];
        $emname = $info['eMName'];
        $elname = $info['eLName'];
        $ephone = $info['ePhone'];
        $eemail = $info['eEmail'];
        $eid = $info['eID'];
        $idno = $info['IDNo'];
        $bday = date("d-m-Y", strtotime($bdaypage));
        $pno = 1;
        if(isset($_SESSION['pno'])){
            $pno = $_SESSION['pnoall'];
            unset($_SESSION['pnoall']);
            // session_unset('pnoall');
        }
        elseif(isset( $_SESSION['pnonew'])){
            $pno = $_SESSION['pnonew'];
            unset($_SESSION['pnonew']);
            // session_unset('pnonew');
        }
        // print_r($_SESSION);
        
    }
    echo '
    <div class="personadmin" id="person">
        <table class="personinfo" id="personinfo">
            <tr>
                <th colspan="10">AHADU</th>
            </tr>
            <tr>
                <th colspan="10">National Institute Authentication of Citizenship</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="8"><img src="./image/Photo/'.$photo.'" alt="" id="idphoto"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>ID No.:</td>
                <td colspan="2">'.$idno.'</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Full Name:</td>
                <td colspan="5">'.$fname.' '.$lname.' '.$mname.'</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Father Name:</td>
                <td colspan="5">'.$ffname.' '.$flname.' '.$fmname.'</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Mother Name:</td>
                <td colspan="5">'.$mfname.' '.$mlname.' '.$mmname.'</td>
            </tr>
            <tr>
                <td></td>
                <td>Birthday:</td>
                <td colspan="2">'.$bday.'</td>
                <td>Gender:</td>
                <td>'.$gender.'</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Nationality:</td>
                <td colspan="2">'.$nation.'</td>
                <td></td>
                <td>Birth Palce:</td>
                <td>'.$bplace.'</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Phone No.:</td>
                <td colspan="2">'.$phone.'</td>
                <td>Email:</td>
                <td colspan="3">'.$email.'</td>
            </tr>
            <tr>
                <td></td>
                <td>Po. Box:</td>
                <td colspan="5">'.$pobox.', '.$pstreet.', '.$pcity.', '.$pstate.'</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Address:</td>
                <td colspan="5">'.$homeno.', '.$hstreet.', '.$hcity.', '.$hstate.'</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Martial Status:</td>
                <td>'.$martial.'</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Partner Full Name:</td>
                <td colspan="4">'.$pfname.' '.$plname.' '.$pmname.'</td>
                <td></td>
                
                <td colspan="2">Marraige Registration ID:</td>
                <td>'.$mrid.'</td>
            </tr>
            <tr>
                <td colspan="3">Emergency Contact Info</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
    
            </tr>
            <tr>
                <td colspan="2">Full Name:</td>
                <td colspan="5">'.$efname.' '.$elname.' '.$emname.'</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Phone No.:</td>
                <td colspan="2">'.$ephone.'</td>
                <td>Email:</td>
                <td colspan="3">'.$eemail.'</td>
                <td>ID No.:</td>
                <td colspan="2">'.$eid.'</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button id="btnbc"><a href='."./admin.php?alluser=".$pno.' id="abc">Go Back</a></button>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="email" id="progressvalue" value="'.$email.'">
                        <input type="hidden" name="update" id="progressvalue" value="update">
                        <button type="submit" id="btnvf" >Verify</button>
                    </form>
                </td>
                <td>
                    <form>
                        <input type="hidden" name="email" id="progressvalue" value="'.$email.'">
                        <input type="hidden" name="delete" id="progressvalue" value="delete">
                        <button type="submit" name="delete" id="btndl">Delete</button>
                    </form></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    ';
}
?>
