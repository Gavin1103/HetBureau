<?php

include("../core/databaseConnection.php");
include("../functions/getForms/getFormFase4.php");

$database = new Database();

$getForm = new retrieveFormFase4();
$executeForm = $getForm->getFormFase4();

echo "<pre>";
var_dump($executeForm);
?>
