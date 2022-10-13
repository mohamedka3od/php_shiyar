<?php
require_once __DIR__ . '/pdf/autoload.php';

// $mpdf = new \Mpdf\Mpdf();
// or
/* Define a default page size/format by array - page will be 190mm wide x 236mm height */
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190, 236]]);

/* to make arabic supported */
$mpdf->autoScriptToLang= true;
$mpdf->autoLangToFont= true;


$mpdf->AddPage("P");// L -> landscape (big width) || P -> portrait
$stylesheet = file_get_contents('style.css'); //get the content of the css file you want to link

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);// link with css stylesheet

if(isset($_POST['submit'])){
    $img=$_POST['img'];
    $name=$_POST['name'];
    $obj=$_POST['obj'];
    $date=date('jS M Y',strtotime($_POST['date']));
    $status=$_POST['status'];
}
// $html = file_get_contents("templet.php");
/**to include $html */
include 'templet.php';

$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);


$mpdf->Output("mpdf.pdf","I");// D for download || I for view online