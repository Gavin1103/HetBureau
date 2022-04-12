<?php

use Spipu\Html2Pdf\Html2Pdf;

require_once "../../vendor/autoload.php";   
$html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');

// haal post body op
$http_body = file_get_contents('php://input');

// write css to pdf
$html2pdf->writeHTML('<link rel="stylesheet" type="text/css" href="style.css">');


// schrijf post body naar het pdf
$html2pdf->writeHTML($http_body);

// stuu de pdf 
$html2pdf->output();