<?php
require_once 'dompdf_1-0-2/dompdf/autoload.inc.php';

use Dompdf\Dompdf; 
$dompdf = new Dompdf();
$html = file_get_contents("template1.html"); 
$dompdf->loadHtml($html); 
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("package",array("Attachment"=>0));?>