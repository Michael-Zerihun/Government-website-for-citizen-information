<?php

require('fpdf181/fpdf.php');

$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->WriteHTML('<h1>Hello world!</h1>');
$fpdf->setFont('Arial','B',16);
$fpdf->Cell(100,20,'hello world');
$mpdf->Output();
?>