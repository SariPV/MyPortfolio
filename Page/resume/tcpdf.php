<?php
/*
mPDF: Generate PDF from HTML/CSS (Complete Code)
*/
include('library/tcpdf.php');// Include mdpf
$pdf = new TCPDF('p','mm', 'A4');

//$stylesheet = file_get_contents('style3.css'); // Get css content*/
$html = file_get_contents('r22.html');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//$mpdf->WriteHTML($stylesheet,1);
$pdf->WriteHTML($html,true,true);
// Setup PDF
 // New PDF object with encoding & page size
  // For sending Output to browser
$pdf->Output(); // For Download


?>