<?php

include("../core/databaseConnection.php");
include("../functions/getFormFase4.php");

$database = new Database();
$db = $database->getConnection();

$getForm = new retrieveFormFase4($db);
$executeForm = $getForm->getFormFase4();

echo "<pre>";
var_dump($executeForm);
?>
