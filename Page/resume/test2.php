<?php
require_once __DIR__ . '/vendor/autoload.php' ;
ob_start();
// include("temp3.html");
//include("r222.html");
$mpdf = new \Mpdf\Mpdf([]);
// $mpdf->AddPageByArray([
//     'margin-left' => 0,
//     'margin-right' => 0,
//     'margin-top' => 0,
//     'margin-bottom' => 0,
// ]);

//$stylesheet = file_get_contents('style3.css'); // Get css content*/
$html = file_get_contents('temp11.html');
//$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);
// Setup PDF
 // New PDF object with encoding & page size

  ob_clean();  // For sending Output to browser
$mpdf->Output(); // For Download

?>