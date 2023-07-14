<?php 
    require_once('connect.php');
    $logemail = $_SESSION['logemail'];
    // $f0 = 0 ;
    // $f1 = 0 ;
    // $f2 = 0 ;
    // $f3 = 0 ;
    // require_once('dashboard.php');
    function completeform0() {
        // echo $GLOBALS['f0'], $GLOBALS['f1'] , $GLOBALS['f2'] ,$GLOBALS['f3'];
        // print_r($_SESSION);
        echo  '
        <div class="fillform" id="fillform">
            <form action="" method="post">
                <table class="tbl">
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
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4"><label for="fname">First Name <i id="ast">&ast;</i></label></td>
                        <td colspan="4"><label for="mname">Middle Name <i id="ast">&ast;</i></label></td>
                        <td colspan="4"><label for="lname">Last Name <i id="ast">&ast;</i></label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" name="fname" class="inputltr" id="fname"  autocapitalize="characters" required ></td>
                        <td colspan="4"><input type="text" name="mname" class="inputltr" id="mname" autocapitalize="characters" required ></td>
                        <td colspan="4"><input type="text" name="lname" class="inputltr" id="lname" autocapitalize="characters" required ></td>
                    </tr>
                    <tr>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td colspan="4"><label for="bday">Birthday <i id="ast">&ast;</i></label></td>
                        <td colspan="4"><label for="gender">Gender <i id="ast">&ast;</i></label></td>
                        
                        <td colspan="4"><label for="phone">Phone Number <i id="ast">&ast;</i></label></td>
                        
                    </tr>
                    <tr>
                        <td colspan="4"><input type="date" name="bday" class="inputdt" id="bday" required></td>
                        <td colspan="4" >
                            <select name="gender" id="gender" required >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
                        
                        <td colspan="4"><input type="text" name="phone" class="inputltr" id="phone" autocomplete="characters" required></td>
                        
                    </tr>
                    
                    <tr>
                        <td colspan="4"><label for="bcertificate">Birth Certificate ID</label></td>
                        
                        <td colspan="4"><label for="nationality">Nationality <i id="ast">&ast;</i></label><br></td>
                        <td colspan="4"><label for="bplace">Birth place <i id="ast">&ast;</i></label></td>
                    </tr>
        
                    <tr>
                        <td colspan="4"><input type="text" name="bcertificate" class="inputltr" id="bcert" autocapitalize="characters"></td>
                        
                        <td colspan="4" id="nation"><input type="text" name="nationality" class="inputltr" id="nationality" autocapitalize="characters" required></td>
                        <td colspan="4"><input type="text" name="bplace" class="inputltr" id="bplace" autocapitalize="characters" required></td>
                    </tr>
                    <tr>
                        <td colspan="4"><label for="martial">Martial Status <i id="ast">&ast;</i></label></td>
                        <td colspan="4"><label for="occupation">Occupation <i id="ast">&ast;</i></label></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" name="martial" class="inputltr" id="" autocapitalize="characters" required></td>
                        <td colspan="4"><input type="text" name="occupation" class="inputltr" id="occupation" required></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="10"></td>
                        <td><input type="submit" name="submit" id="next" value="Next"></td>
                    </tr>
                </table>
            </form>
        </div>';

        // $_SESSION['form0'] = 1;
        
        $GLOBALS['f0'] = 1;
        
    }

    function completeform1() {
        // unset($_SESSION['form0']);
        // print_r($_POST);
        echo '
        <div class="fillform2" id="fillform2">
            <form action="" method="post">
                <table class="relative" id="relative">
                    <tr>
                        <th>Father</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><label for="ffname">First Name <i id="ast">&ast;</i></label></td>
                        <td><label for="fmname">Middle Name <i id="ast">&ast;</i></label></td>
                        <td><label for="flname">Last Name <i id="ast">&ast;</i></label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ffname" class="inputltr" id="ffname"  autocapitalize="characters" required ></td>
                        <td><input type="text" name="fmname" class="inputltr" id="fmname" autocapitalize="characters" required ></td>
                        <td><input type="text" name="flname" class="inputltr" id="flname" autocapitalize="characters" required ></td>
                    </tr>
                    <tr>
                        <th>Mother</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><label for="mfname">First Name <i id="ast">&ast;</i></label></td>
                        <td><label for="mmname">Middle Name <i id="ast">&ast;</i></label></td>
                        <td><label for="mlname">Last Name <i id="ast">&ast;</i></label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="mfname" class="inputltr" id="mfname"  autocapitalize="characters" required ></td>
                        <td><input type="text" name="mmname" class="inputltr" id="mmname" autocapitalize="characters" required ></td>
                        <td><input type="text" name="mlname" class="inputltr" id="mlname" autocapitalize="characters" required ></td>
                    </tr>
                    ';
                    // mrg();
                    // $GLOBALS['l'] = 5;
                    // echo $GLOBALS['l'];
                    if($GLOBALS['l'] == 21){
                        // echo '
                        // <tr>
                        //     <th>Partner</th>
                        //     <th></th>
                        //     <th></th>
                        // </tr>
                        // <tr>
                        //     <td><label for="pfname">First Name <i id="ast">&ast;</i></label></td>
                        //     <td><label for="pmname">Middle Name <i id="ast">&ast;</i></label></td>
                        //     <td><label for="plname">Last Name <i id="ast">&ast;</i></label></td>
                        // </tr>
                        // <tr>
                        //     <td><input type="text" name="pfname" class="inputltr" id="pfname"  autocapitalize="characters" required ></td>
                        //     <td><input type="text" name="pmname" class="inputltr" id="pmname" autocapitalize="characters" required ></td>
                        //     <td><input type="text" name="plname" class="inputltr" id="plname" autocapitalize="characters" required ></td>
                        // </tr>
                        // <tr>
                        //     <td><label for="mrid">Marraige Registration ID<i id="ast">&ast;</i></label></td>
                        // </tr>
                        // <tr>
                        //     <td><input type="text" name="mrid" class="inputltr" id="lname" autocapitalize="characters" required ></td>
                        // </tr>';
                    }
                    else{
                        echo '
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><label for="pfname"></label></td>
                            <td><label for="pmname"></label></td>
                            <td><label for="plname"></label></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="pfname" value="" class="inputltr" id="pfname"  autocapitalize="characters" required ></td>
                            <td><input type="hidden" name="pmname" value="" class="inputltr" id="pmname" autocapitalize="characters" required ></td>
                            <td><input type="hidden" name="plname" value="" class="inputltr" id="plname" autocapitalize="characters" required ></td>
                        </tr>
                        <tr>
                            <td><label for="mrid"></label></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="mrid" value="" class="inputltr" id="lname" autocapitalize="characters" required ></td>
                        </tr>';
                    }
                    echo
                    '
                    <tr>
                        <td></td>
                        <td></td>
                        <td id="submittd"><input type="submit" name="submit" id="next" value="Next">&emsp;</td>
                    </tr>
                </table>
            </form>
        </div>
        ';
        $_SESSION['form1'] = 1;
        $GLOBALS['f1'] = 1;
    }

    function completeform2() {
        // unset($_SESSION['form1']);

        echo '
        <div class="fillform1" id="fillform1">
                            <form action="" method="post">
                                <table class="address" id="address">
                                    <tr>
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
                                    </tr>
                                    <tr>
                                        <td><label for="pobox">Po.Box <i id="ast">&ast;</i></label></td>
                                        <td><label for="pstreet">Street <i id="ast">&ast;</i></label></td>
                                        <td><label for="pcity">City <i id="ast">&ast;</i></label></td>
                                        <td><label for="pstate">State <i id="ast">&ast;</i></label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pobox" class="inputltr" id="pobox" required autocapitalize="characters"></td>
                                        <td><input type="text" name="pstreet" class="inputltr" id="pstreet" required autocapitalize="characters"></td>
                                        <td><input type="text" name="pcity" class="inputltr" id="pcity" required autocapitalize="characters"></td>
                                        <td><input type="text" name="pstate" class="inputltr" id="pstate" required autocapitalize="characters"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label for="homeno">Home No. <i id="ast">&ast;</i></label></td>
                                        <td><label for="hstreet">Street <i id="ast">&ast;</i></label></td>
                                        <td><label for="hcity">City <i id="ast">&ast;</i></label></td>
                                        <td><label for="hstate">State <i id="ast">&ast;</i></label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="homeno" class="inputltr" id="homeno" required autocapitalize="characters"></td>
                                        <td><input type="text" name="hstreet" class="inputltr" id="hstreet" required autocapitalize="characters"></td>
                                        <td><input type="text" name="hcity" class="inputltr" id="hcity" required autocapitalize="characters"></td>
                                        <td><input type="text" name="hstate" class="inputltr" id="hstate" required autocapitalize="characters"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td id="submittd"><input type="submit" name="submit" id="next" value="Next">&emsp;</td>
                                    </tr>
                                </table>
        
        
                                
        
                            </form>
                            
                        </div>
        ';
        $_SESSION['form2'] = 1;
        $GLOBALS['f2'] = 2;
    }

    function completeform3() {
        // unset($_SESSION['form2']);

        echo '
        <div class="fillform2" id="fillform2">
            <form action="" method="post" enctype="multipart/form-data">
                <table class="address" id="address">
                    <tr>
                        <th><label for="photo">Photo</label></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input type="file" name="photo" id="photo" required enct ></td>
                        <td><i id="instr">Upload your a passport sized photo<i id="ast">&ast;</i> </i></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">Emergency Contact</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><label for="efname">First Name<i id="ast">&ast;</i></label></td>
                        <td><label for="emname">Middle Name<i id="ast">&ast;</i></label></td>
                        <td><label for="elname">Last Name<i id="ast">&ast;</i></label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="efname" class="inputltr" id="efname"  autocapitalize="characters" required ></td>
                        <td><input type="text" name="emname" class="inputltr" id="emname" autocapitalize="characters" required ></td>
                        <td><input type="text" name="elname" class="inputltr" id="elname" autocapitalize="characters" required ></td>
                    </tr>
                    <tr>
                        <td><label for="ephoneno">Phone No.<i id="ast">&ast;</i></label></td>
                        <td><label for="eemail">Email<i id="ast">&ast;</i></label></td>
                        <td><label for="eidno">ID No.</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ephoneno" class="inputltr" id="ephoneno" required autocapitalize="characters"></td>
                        <td><input type="email" name="eemail" class="inputltr" id="eemail" required autocapitalize="characters"></td>
                        <td><input type="text" name="eidno" class="inputltr" id="eidno" autocapitalize="characters"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td id="submittd"><input type="submit" name="submit" id="next" value="Next">&emsp;</td>
                    </tr>
                </table>
            </form>
        </div>
        ';
        $_SESSION['form3'] = 1;
        // session_destroy();
        $GLOBALS['f3'] = 3;
    }

    function person($x,$conn, $logemail) {
        $sql ="SELECT * FROM `accounts` WHERE  `email` = '$logemail'";
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
            
        }
        echo '
        <div class="person" id="person">
            <script>
                document.getElementById("persinfo").classList.add("active")
            </script>
            <style>
                .content {
                    background-color: #afd4fce5;
                }
            </style>
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
                    <td colspan="2" rowspan="8" id="trphoto"><img src="./image/Photo/'.$photo.'" alt="photo" id="idphoto"></td>
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
                    <td>'.$pfname.' '.$plname.' '.$pmname.'</td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div class="pdf" id="pdf">
                <form action="" method="get">
                    <input type="hidden" name="downpdf">
                    <button type="submit" class="downpdf">
                        <img src="./image/img/pngwing.com.png" alt="" class="pdficon">
                    </button>
                </form>
            </div>
        </div>
        
        ';
        // print_r($_GET);
    }

    function idcard($conn, $logemail) {
        $sql ="SELECT * FROM `accounts` WHERE  `email` = '$logemail'";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);
            $info = mysqli_fetch_assoc($data);
            // $name = $info['account'];
            $fname = $info['firstName'];
            $mname = $info['midName'];
            $lname = $info['lastName'];
            $bdaypage = $info['birthday'];
            $gender = $info['gender'];
            $nation = $info['nationality'];
            $photo = $info['photo'];
            $idno = $info['IDNo'];
            $doi = $info['idDOI'];
            $bday = date("d-m-Y", strtotime($bdaypage));
            $iddoi = date("d-m-Y", strtotime($doi));
            $iddoe = date("d-m-Y", strtotime($iddoi. ' + 4 years'));
        }
        echo '
            <div class="idpage" id="idpage">
            
                <div class="iddiv" id="iddiv">
                <script>
                    document.getElementById("getid").classList.add("active")
                </script>
                
                <div class="idcardfr" id="idcardfr">
                    <table class="idfront" id="idfront">
                        <tr>
                            <td colspan="2" rowspan="2" id="flag"></td>
                            <th colspan="6">AHADU</th>
                        </tr>
                        <tr>
                            <th colspan="6">National Institute Authentication of Citizenship</th>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="5" id="photoonid" id="title"><img src="./image/Photo/'.$photo.'" alt="" id="actuphoto"></td>
                            <td></td>
                            <td class="title" id="title">Name</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td rowspan="7"><img src="./image/images.png" alt="" id="bar"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4" id="idname">'.$fname.' '.$lname.' '.$mname.'</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="title" id="title">D.O.B</td>
                            <td></td>
                            <td class="title" id="title">Nationality</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="idin">'.$bday.'</td>
                            <td colspan="2" id="idin">'.$nation.'</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="title" id="title">Gender</td>
                            <td></td>
                            <td class="title" id="title">ID No.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td id="idin">'.$gender.'</td>
                            <td></td>
                            <td colspan="2" id="idin">'.$idno.'</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="title" id="title">D.O.I</td>
                            <td></td>
                            <td class="title" id="title">D.O.E</td>
                            <td></td>
                            <td class="title" id="title"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" id="idin">'.$iddoi.'</td>
                            <td colspan="2" id="idin">'.$iddoe.'</td>
                            <td colspan="3" ></td>
                        </tr>
                    </table>
                </div>
                
                <div class="idcardbc" id="idcardbc">
                    <table class="idback" id="idback">
                        <tr>
                            <th colspan="3" id="topth">AHADU</th>
                        </tr>
                        <tr>
                            <th colspan="3">National Institute Authentication of Citizenship</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="4">• If anyone find this ID contact the address below or to the nearest police satation. <br>
                                                        • The owner of this ID  must hold it at all times. <br>
                                                        • This ID must be renewed ever four years. <br>
                                                        • In case if this ID is lost report to the contact below or the nearest police satation. </td>
                            <td id="limit"></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td id="idspace" rowspan="4" ><img src="./image/Icon/1280px-Signature_of_Ann_Miller.svg.png" alt="" id="bsign"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2" ></td>
                        </tr>
                        <tr>
                            <td colspan="2" id="add">&emsp; serviceinfo@ahadu.com &emsp; +916464658455</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            <div class="pdfid" id="pdf">
            <form action="idpdf.php" method="get">
                <input type="hidden" name="downpdfid">
                <button type="submit" class="downpdf">
                    <img src="./image/img/pngwing.com.png" alt="" class="pdficon">
                </button>
            </form>
        </div>
            </div>
        
        ';
    }

    function change($conn, $logemail) {
        $sql ="SELECT * FROM `accounts` WHERE  `email` = '$logemail'";
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
            
            $type = "(this.type='date')";
        }
        // echo $bday;
        echo '
        <div class="change" id="change">
            <script>
                document.getElementById("reqchng").classList.add("active")
                var form_clean;
                $(function() { 
                    form_clean = $("form").serialize();  
                });
                document.getElementById("check").onclick = function (e) {
                    var form_dirty = $("form").serialize();
                    if(form_clean != form_dirty) {
                        alert("There is unsaved form data.") ;
                    }
                };
            </script>
           
    
                <form action="" method="post">
                <table class="changeinfo" id="changeinfo">
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
                        <td colspan="2" rowspan="8"><img src="./image/Photo/'.$photo.'" alt="photo" id="idphoto"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ID No.:</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Full Name:</td>
                        <td colspan="5"><input type="text" name="chfname" id="" placeholder="'.$fname.'">
                            <input type="text" name="chmname" id="" placeholder="'.$mname.'">
                            <input type="text" name="chlname" id="" placeholder="'.$lname.'">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Father Name:</td>
                        <td colspan="5"><input type="text" name="chfather-fname" id="" placeholder="'.$ffname.'">
                            <input type="text" name="chfather-mname" id="" placeholder="'.$flname.'">
                            <input type="text" name="chfather-lname" id="" placeholder="'.$fmname.'">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Mother Name:</td>
                        <td colspan="5"><input type="text" name="chmother-fname" id="" placeholder="'.$mfname.'">
                            <input type="text" name="chmother-mname" id="" placeholder="'.$mlname.'">
                            <input type="text" name="chmother-lname" id="" placeholder="'.$mmname.'">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Birthday:</td>
                        <td colspan="2"><input type="text" name="chbdate" id="adjust" placeholder="'.$bday.'" onfocus="'.$type.'"></td>
                        <td>Gender:</td>
                        <td><input type="text" name="chgender" id="adjust" placeholder="'.$gender.'"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Nationality:</td>
                        <td colspan="2"><input type="text" name="chnation" id="adjust" placeholder="'.$nation.'"></td>
                        <td></td>
                        <td>Birth Palce:</td>
                        <td colspan="2"><input type="text" name="chbplace" id="adjust" placeholder="'.$bplace.'"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Phone No.:</td>
                        <td colspan="2"><input type="text" name="chphone" id="adjust" placeholder="'.$phone.'"></td>
                        <td>Email:</td>
                        <td colspan="3">
                            <div class="xplace">
                                <input type="email" name="chemail" id="adjust" placeholder="'.$email.'" disabled>
                                <span class="message">You can not change email!</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Po. Box:</td>
                        <td colspan="5"><input type="text" name="chpbox-street" id="" placeholder="'.$pobox.', '.$pstreet.'">
                            <input type="text" name="chpbox-city" id="" placeholder="'.$pcity.'">
                            <input type="text" name="chpbox-state" id="" placeholder="'.$pstate.'">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Address:</td>
                        <td colspan="5"><input type="text" name="chaddress-street" id="" placeholder="'.$homeno.', '.$hstreet.'">
                            <input type="text" name="chaddress-city" id="" placeholder="'.$hcity.'">
                            <input type="text" name="chaddress-state" id="" placeholder="'.$hstate.'">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Martial Status:</td>
                        <td><input type="text" name="chmartial" id="adjust" placeholder="'.$martial.'"></td>
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
                        <td colspan="4"><input type="text" name="chpartner-fname" id="" placeholder="'.$pfname.'">
                            <input type="text" name="chpartner-mname" id="" placeholder="'.$plname.'">
                            <input type="text" name="chpartner-lname" id="" placeholder="'.$pmname.'">
        
                        </td>
                        <td></td>
                        <td colspan="2">Marraige Registration ID:</td>
                        <td><input type="text" name="chmarraigeid" id="adjust" placeholder="'.$mrid.'"></td>
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
                        <td colspan="5"><input type="text" name="ch-emerg-fname" id="" placeholder="'.$efname.'">
                            <input type="text" name="ch-emerg-mname" id="" placeholder="'.$elname.'">
                            <input type="text" name="ch-emerg-lname" id="" placeholder="'.$emname.'">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phone No.:</td>
                        <td colspan="2"><input type="text" name="ch-emerg-phone" id="adjust" placeholder="'.$ephone.'"></td>
                        <td>Email:</td>
                        <td colspan="3"><input type="text" name="ch-emerg-email" id="adjust" placeholder="'.$eemail.'"></td>
                        <td>ID No.:</td>
                        <td colspan="2"><input type="text" name="ch-emerg-id" id="adjust" placeholder="'.$eid.'"></td>
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
                        <td colspan="2" rowspan="2" id="submi"><input type="submit" name="submit" id="sendfr" value="Send for review"></td>
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
                    </tr>
                    <tr>
                    </tr>
                </table>
                <input type="hidden" name="change" id="">
            </form>
            
        </div>
        
        
        ';
    }
    function passport($conn, $x, $logemail) {
        $y = 'P';
        $sql ="SELECT * FROM `accounts` WHERE  `email` = '$logemail'";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);
            $info = mysqli_fetch_assoc($data);
            $fname = $info['firstName'];
            $mname = $info['midName'];
            $lname = $info['lastName'];
            $bdaypage = $info['birthday'];
            $gender = $info['gender'];
            $nation = $info['nationality'];
            $bplace = $info['birthPlace'];
            $photo = $info['photo'];
            $passno = $info['passport'];
            $doi = $info['idDOI'];
            $bday = date("d-m-Y", strtotime($bdaypage));
            $passdoi = date("d-m-Y", strtotime($doi));
            $passdoe = date("d-m-Y", strtotime($passdoi. ' + 4 years'));
            $cntcode = 'ETH';
        }
        echo '
            <div class="passportdiv" id="passportdiv">
                <div class="pdfpass" id="pdfpass">
                    <form action="pass-pdf.php" method="get">
                        <input type="hidden" name="downpdfpass">
                        <button type="submit" class="downpdf">
                            <img src="./image/img/pngwing.com.png" alt="" class="pdficon">
                        </button>
                    </form>
                </div>
                <div class="passport" id="passport">
                    <table class="passportcont" id="passportcont">
                        <tr>
                            <th colspan="8" >Federal Democratic Republic of Ethiopia</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td><i id="indextitle">Type</i></td>
                            <td></td>
                            <td colspan="2"><i id="indextitle">Country Code</i></td>
                            <td colspan="2"><i id="indextitle">Passport No.</i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>'.$y.'</td>
                            <td></td>
                            <td>'.$cntcode.'</td>
                            <td></td>
                            <td>'.$passno.'</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="8"><img src="./image/Photo/'.$photo.'" alt="" id="pasphoto"></td>
                            <td><i id="indextitle">Name</i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            
                            <td colspan="6">'.$fname.' '.$lname.' '.$mname.'</td>
                        </tr>
                        <tr>
                            
                            <td colspan="2"><i id="indextitle">Nationality</i></td>
                            <td><i id="indextitle">Gender</i></td>
                            <td></td>
                            <td colspan="2"><i id="indextitle">Personal No.</i></td>
                        </tr>
                        <tr>
                            <td colspan="2">'.$nation.'</td>
                            <td>'.$gender.'</td>
                            <td></td>
                            <td colspan="2">'.$fname.'</td>
                        </tr>
                        <tr>
                            <td colspan="2"><i id="indextitle">Date of Birth</i></td>
                            <td></td>
                            <td colspan="2"><i id="indextitle">Place of Birth</i></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">'.$bday.'</td>
                            <td></td>
                            <td colspan="2">'.$bplace.'</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"><i id="indextitle">Date of Issue</i></td>
                            <td></td>
                            <td colspan="2"><i id="indextitle">Date of Expiry</i></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">'.$passdoi.'</td>
                            <td></td>
                            <td colspan="2">'.$passdoe.'</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="3"><i id="indextitle">Issuing Authoority</i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="6">MAIN DEPARTMENT FOR IMMIGRATION AND NATIONALITY AFFAIRS</td>
                        </tr>
                        <tr>
                            <td colspan="8" rowspan="3" id="barpd"><img src="./image/test/hovercraft.png" alt="" id="barcode"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
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
                        </tr>
                        
                        <tr>
                            <td colspan="8" rowspan="4" id="code" ><div class="hi">PASGP'.$mname.' &#60;&#60;'.$fname.'&#60;'.$lname.'&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;<br>
                                                                                    K0000000E4SGP7705038F2210300S7788888H<<<<<98</div> </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </div>
                
            </div>
        ';
    }


    function home() {
        echo '
        <div class="homepage" id="homepage">
        <script>
            document.getElementById("home").classList.add("active")
        </script>
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
                            <img src="./image/Background/—Pngtree—travel\ passport\ ticket_5046466.png" alt="">
                            
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
?>