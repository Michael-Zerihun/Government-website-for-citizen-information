<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
<style>
    body {
        background-color: rgb(148, 226, 180);
    }
        .idpage {
    width: 100%;
    height: 100%;
    
    padding-top: 2%;
    display: flex;
    /* margin-top: -1.5%; */
}
.iddiv {
    margin-left: 17%;
    padding-top: 3%;
}
.idcardfr{
    width: 448px;
    height: 248px;
    border: 1px solid black;
    border-radius: 10px;
    background-image: url(./image/Background/id-fr-bg.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    color: #E5E4E2;
    margin-top: 1%;
}
.idcardfr td {
    color: rgb(229, 228, 226);
}
.idcardbc {
    width: 448px;
    height: 248px;
    border: 1px solid black;
    border-radius: 10px;
    background-image: url(./image/Background/id-bc-bg.png);
    /* background-image: url(./Ahadu-logos/Ahadu-logos_black.png); */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    color: #E5E4E2;
    margin-top: 2%;
}
.idfront {
    width: 100%;
    color: rgb(229, 228, 226);
}
.idfront td, th{
    width: 12.5%;
    height: 17px;
    /* border: 1px solid white; */
}
.idfront .title {
    font-size: 24px;
    height: 15px;
    margin-bottom: -50px;
    font-weight: bold;
    font-size: 25px;

}
.idfront th {
     font-size: 30px;
     font-style: normal;
     font-variant: normal;

}
.idfront td {
    font-family: "Lucida Console", "Lucida Sans Typewriter", monaco, "Bitstream Vera Sans Mono", monospace;
     font-size: 36px;
     font-style: normal;
     font-variant: normal;
     
}
.idfront #idname {
    font-family: "Lucida Console", "Lucida Sans Typewriter", monaco, "Bitstream Vera Sans Mono", monospace;
     font-size: 44px;
     font-style: normal;
     font-variant: normal;
     font-weight: 700;
     font-weight: bold;
}
#actuphoto {
    width: 50%;
    height: 60%;

}
#bar {
    width: 400%;
    height: 20px;
    transform: rotate(-90deg) translate(5%, -180%);
    margin-top: -10%;
    margin-right: 10%;
    margin-left: -15%;
    margin-bottom: -15%;
}
#flagimg {
    
    width: 300px;
    height: 200px;
    margin-top: -10%;
    margin-bottom: -10%;
}
#idname, #idin {
    text-transform: uppercase;
}
#sign {
    width: 100px;
    height: 30px;
    margin-top: -8px;
}

.idback {
    width: 100%;
    height: 100%;
    font-size: small;
    color: white;
    border-spacing: 0px;
}
.idback td, th {
    width: 150px;
    height: 10%;
    border-spacing: 0px;
    
}
.idback th {
    font-size: large;
    color: black;
    background-color: rgb(12, 105, 77);
    border-radius: 10px 10px 0px 0px;
}

#topth {
    border-radius: 6px 6px 0px 0px;
}
#bsign {
    width: 30%;
}
#idspace {
    background-color: rgba(255, 255, 255, 0.3);
}
#add {
    color: #161a28;
    font-size: small;
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
    <p>This ID card was issued by AHADU, National Institute Authentication of Citizenship, as a part of government from Department of Internal Affairs.</p>
    
    <div class="idpage" id="idpage">
            
    <div class="iddiv" id="iddiv">
    
    <div class="idcardfr" id="idcardfr">
<table class="idfront" id="idfront">
<tr>
    <td colspan="2" rowspan="2" id="flag"><img src="./image/Icon/ethiopia-flag-transparent-watercolor-painted_5326751.png" alt="" id="flagimg"></td>
    <th colspan="6">AHADU</th>
</tr>
<tr>
    <th colspan="6">National Institute Authentication of Citizenship</th>
</tr>
<tr>
    <td colspan="2" rowspan="5" id="photoonid" id="title"><img src="./image/Photo/photo.jpg" alt="" id="actuphoto"></td>
    <td></td>
    <td class="title" id="title">Name</td>
    <td></td>
    <td></td>
    <td></td>
    <td rowspan="7" id="bartd"><img src="./image/images.png" alt="" id="bar"></td>
</tr>
<tr>
    <td></td>
    <td colspan="4" id="idname">xxxxxx xxxxxx xxxxxx</td>
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
    <td colspan="2" id="idin">xxxxxx</td>
    <td colspan="2" id="idin">xxxxxx</td>
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
    <td id="idin">xxxxxx</td>
    <td></td>
    <td colspan="2" id="idin">xxxxxx</td>
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
    <td colspan="2" id="idin">xxxxxx</td>
    <td colspan="2" id="idin">xxxxxx</td>
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
    
    </div>
');

$mpdf->Output('ID card.pdf','D');

?>