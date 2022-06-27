<?php




// include "../functions/showForm.php";
include("../core/databaseConnection.php");
include("../functions/classes/formClass.php");
include '../functions/classes/formFunctions/formF1.php';
include '../functions/classes/checkboxenClass.php';
include '../functions/getklassen.php';

$database = new Database();
$FormClass = new Formulieren();
$FormClassF1 = new FormulierF1();
$getKlassen = new getKlassen();
$getCheckboxFunction = new checkboxen();



$getFormF1 = $FormClassF1->getFormF1();
$showFormF1 = $FormClassF1->showFormF1();


// $getFormF1 = $FormCLass->getFormF1();
// $showFormF1 = $FormCLass->showFormF1();

// $editFormClass = new editForms();
// $editFormFucntion = $editFormClass->editForm_AF1();



//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Gavin Tjin
//
// (c) Copyright:
//               Gavin Tjin
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Gavin Tjin
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('./tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Gavin Tjin');
$pdf->SetTitle('Formulier Fase 1');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
// $pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
// $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print

// $html = '<input style="border:red;" type="text">';
// $html .= "<p>zsdfghjkjhgfdsdfghjkl</p>";
// $html .= "<h1>hello world</h1>";

$html = '

<h1>Afsluiting Fase 1</h1>
<p> <?php echo $getFormF1["tekst_intro"]; ?></p>
';

// echo '<pre>';
// var_dump($html);

// Print text using writeHTMLCell()
$pdf->writeHTML($html, true, 0, true, 0);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('formulier_f1.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+