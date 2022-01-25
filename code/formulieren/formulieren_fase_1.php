<?php

include("../core/databaseConnection.php");
include("..//functions/getForms/getFormFase1.php");

$database = new Database();

$getForm = new retrieveFormFase1();
$executeForm = $getForm->getFormFase1();

echo "<pre>";
var_dump($executeForm);
?>


