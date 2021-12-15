<?php
include("./core/databaseConnection.php");
include("./functions/function.php");

$database = new Database();
$db = $database->getConnection();

// var_dump($db);
// initialize object
$getForm = new retrieveFormFase1($db);
$getForm->getFormFase1();

?>