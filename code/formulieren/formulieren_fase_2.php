<?php

include("../core/databaseConnection.php");
include("../functions/getForms/getFormFase2.php");

$database = new Database();

$getForm = new retrieveFormFase2();
$executeForm = $getForm->getFormFase2();

echo "<pre>";
var_dump($executeForm);
?>
