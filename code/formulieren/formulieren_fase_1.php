<?php

include("../core/databaseConnection.php");
include("..//functions/getForms/getFormFase1.php");

$database = new Database();
$db = $database->getConnection();

$getForm = new retrieveFormFase1($db);
$executeForm = $getForm->getFormFase1();

echo "<pre>";
var_dump($executeForm);
?>


