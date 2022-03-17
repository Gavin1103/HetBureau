<?php

include("../core/databaseConnection.php");
include("./getForms/getFormFase2.php");

$database = new Database();

$getForm = new retrieveFormFase2();
$executeForm = $getForm->getFormFase2();

echo "<pre>";
var_dump($executeForm);
?>
