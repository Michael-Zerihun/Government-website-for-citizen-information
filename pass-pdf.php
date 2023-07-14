<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('connect.php');
$mpdf = new \Mpdf\Mpdf();

$y = 'P';
$logemail = $_SESSION['email'];
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
$mpdf->WriteHTML('
<style>body {
    background-color: #a3ccf8e5;
}
.passport {
    width: 90%;
    height: 384px;
    background-image: url(./image/Background/passport-bg.png);
    background-size:  110%, 70%, 100%, 100%, 100%;
    background-position: center;
    margin-left: 5%;
    margin-top: 7%;
    
}
.passportcont {
    width: 100%;
    height: 750%;
    border-spacing: 0px;
    border-collapse: collapse;
}
.passportcont td{
    width: 22.5%;
    height: 30px;
    font-size: 25px;
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
    padding-top: 0px;
}
.passportcont th {
    width: 12.5%;
    height: inherit;
    font-size: xx-large;
    text-align: center;
}
#indextitle {
    color: rgb(23, 23, 126);
    font-size: 17px;
    font-weight: 900;
    margin-bottom: -3px;
    font-family:"Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
}
#pasphoto {
    width: 40%;
    height: 288px;
}
#barpd {
    width: auto;
    height: 120px;
    padding-top: 0%;
}
#barcode {
    width: 130%;
    height: 120px;
    margin-left: 45%;
    margin-right: -75%;
    margin-bottom: -5px;
}
#code {
    font-size: xx-large;
    font-weight: bolder;
    text-align: center;
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
}
.hi {
    font-size: xx-large;
}
.pdfpass {
    width: 60px;
    height: 60px;
    margin-left: 80%;
    text-align: center;
}
.pdfpass:hover {
    border-radius: 50%;
    box-shadow: 1px 1px 2px rgb(104, 235, 133), 0 0 1em rgb(167, 240, 50);
}
h1, h2 {
    text-align: center;
}
p {
    font-size: x-small;
}
</style>

<h1>AHADU</h1>
    <h2>National Institute Authentication of Citizenship</h2>
    <p>This passport was issued by AHADU, National Institute Authentication of Citizenship, as a part of government from Department of Internal Affairs.</p>
    
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
                <td colspan="8" rowspan="1" id="barpd"><img src="./image/test/hovercraft.png" alt="barcode" id="barcode"></td>
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
                <td colspan="8" rowspan="1" id="code" ><div class="hi">PASGP'.$mname.' &#60;&#60;'.$fname.'&#60;'.$lname.'&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;&#60;<br>
                                                                        K0000000E4SGP7705038F2210300S7788888H&#60;&#60;&#60;&#60;&#60;&#60;98</div> </td>
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
');

$mpdf->Output('passport.pdf', 'D');
?>