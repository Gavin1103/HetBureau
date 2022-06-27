<?php

include("../core/databaseConnection.php");
include '../functions/classes/formClass.php';
include '../functions/classes/checkboxenClass.php';
include '../functions/getklassen.php';
include '../functions/classes/userClass.php';

$database = new Database();

$FormClass = new Formulier();
$addStudentClass = new StudentUser();

$getFormF1 = $FormClass->getFormF2();
$errorFunction = $FormClass->errorMelding();

// voor het versturen van het formulier
$sendFormClass = new sendForms();
$sendFormFunction = $sendFormClass->checkIfStudentExistF2();

$getKlassen = new getKlassen();
?>

<!-- checkboxen loop. Zet het op de goede plek zodra het formulier klaar is. -->
<?php
$getCheckboxFunction = new checkboxen();
$executeCheckboxen = $getCheckboxFunction->getCheckboxenForm();
?>