<?php
 include('../../include/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage ();
$pdf->SetFont ('Arial','B',16);
$pdf->Cell (40,10 ,'Bonjour !');
$pdf ->Output();
?>