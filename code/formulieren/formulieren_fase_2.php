<?php

include("../core/databaseConnection.php");
include("../functions/getForms/getFormFase2.php");

$database = new Database();
$db = $database->getConnection();

$getForm = new retrieveFormFase2($db);
$executeForm = $getForm->getFormFase2();

echo "<pre>";
var_dump($executeForm);
?>
