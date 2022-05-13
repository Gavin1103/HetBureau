<?php

include("../core/databaseConnection.php");
// include("./getForms/getFormFase1.php");
include '../functions/classes/formClass.php';
include '../functions/classes/checkboxenClass.php';
include '../functions/sendForms.php';
include '../functions/getklassen.php';

$database = new Database();
$getCheckboxFunction = new checkboxen();

$FormClass = new Formulier();
$getFormF1 = $FormClass->getFormF4();

$getKlassen = new getKlassen();

// $leerlingNummer = $_POST["leerlingnummer_name_af1"];

?>

<select name="klas_name" id="klas">
    <?php
    $getKlassenFunction = $getKlassen->selectKlas();
    ?>
</select>