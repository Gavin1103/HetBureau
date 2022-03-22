<?php
// ob_end_clean();
// require_once "../../vendor/autoload.php";   
// use Fpdf\Fpdf;
 
// // Instantiate and use the FPDF class 
// $pdf = new FPDF();
  
// //Add a new page
// $pdf->AddPage();
  
// // Set the font for the text
// $pdf->SetFont('Arial', 'B', 18);
  
// // Prints a cell with given text 
// // $pdf->Cell(60,20,'Hello GeeksforGeeks!');

// $kaas = 20;
// foreach ($_POST as $key => $answer){
//     // $pdf->Cell(60,(20 + ($kaas + 20)),$answer);
//     $pdf->Cell(20,20,"{$key}: {$answer}");
//     $pdf->Ln();

//     $kaas++;
// }
  
// // return the generated output
// $pdf->Output();

// // echo $pdf;
$kaas  = json_decode($_POST);   
var_dump($kaas);
var_dump($_POST);
?>