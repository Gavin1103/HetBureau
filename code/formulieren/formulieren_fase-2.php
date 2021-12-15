<?php

include("../core/databaseConnection.php");
include("../functions/getFormFase1.php");

$database = new Database();
$db = $database->getConnection();

$getForm = new retrieveFormFase2($db);
$executeForm = $getForm->getFormFase2();

echo "<pre>";
var_dump($executeForm);
?>
