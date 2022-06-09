<?php

require_once __DIR__ . '/vendor/autoload.php';


//read template
ob_start();
//include("temp1.html");
include("r000.html");
$template_data = ob_get_contents();
ob_get_clean();

//echo $template_data;


$mpdf = new \Mpdf\Mpdf();
//$mpdf->SetWatermarkImage('images/cat1.png');
//$mpdf->showWatermarkImage = true;
$mpdf->WriteHTML($template_data);
$mpdf->Output();


?>