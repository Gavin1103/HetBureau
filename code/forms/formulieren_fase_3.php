<?php

include("../core/databaseConnection.php");
include '../functions/classes/formClass.php';
include '../functions/classes/checkboxenClass.php';
include '../functions/getklassen.php';
include '../functions/classes/userClass.php';

$database = new Database();
$getCheckboxFunction = new checkboxen();
$FormClass = new Formulier();
$addStudentClass = new StudentUser();
$sendFormClass = new sendForms();
$getFormF1 = $FormClass->getFormF3();
$errorFunction = $FormClass->errorMelding();
$sendFormFunction = $sendFormClass->checkIfStudentExistF3();
$getKlassen = new getKlassen();
?>
<!-- checkboxen loop. Zet het op de goede plek zodra het formulier klaar is. -->
      <?php
        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm();
        ?>