<?php
/*
mPDF: Generate PDF from HTML/CSS (Complete Code)
*/

require_once __DIR__ . '/vendor/autoload.php' ;// Include mdpf
/*$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/custom/font/directory',
    ]),
    'fontdata' => $fontData + [
        'Quicksand' => [
            'R' => 'Quicksand-Regular.ttf',
            'B' => 'Quicksand-Bold.ttf',
        ]
    ],
  
    'default_font' => 'Qucksand'
]);*/

// $mpdf = new \Mpdf\Mpdf([]);
// $mpdf->AddPageByArray([
//     'margin-left' => 0,
//     'margin-right' => 0,
//     'margin-top' => 0,
//     'margin-bottom' => 0,
// ]);

//$stylesheet = file_get_contents('style3.css'); // Get css content*/
/*$html = file_get_contents('template11.html');*/
//$mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($html);
// Setup PDF
 // New PDF object with encoding & page size

//  ob_clean();  // For sending Output to browser
// $mpdf->Output(); // For Download


?>
