<?php
ob_end_clean();
require_once "../../vendor/autoload.php";   
use Fpdf\Fpdf;

// haal en parse de data uit de post body
$raw_http_body = file_get_contents('php://input');
$post_body = json_decode($raw_http_body,JSON_PRETTY_PRINT);   

// Instantiate and use the FPDF class 
$pdf = new FPDF();
  
//Add a new page
$pdf->AddPage();
  
// Set the font for the text
$pdf->SetFont('Arial', 'B', 12);

$row = 20;
foreach ($post_body as $key => $antwoord){
    $vraag = $antwoord["label"];
    $user_antwoord = $antwoord["answer"];
    $pdf->Cell(20,20,"{$key} {$vraag}: {$user_antwoord}");
    $pdf->Ln();

    $row++;
}

// return the generated output
$pdf->Output();

// echo $pdf;

?>