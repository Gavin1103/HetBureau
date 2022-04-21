<?php

include("../core/databaseConnection.php");
include("./getForms/getFormFase4.php");
include './getForms/getCheckBoxen.php';

$database = new Database();

$getForm = new retrieveFormFase4();
$executeForm = $getForm->getFormFase4();


$getCheckboxFunction = new checkboxen();
$executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1();


echo "<pre>";
var_dump($executeForm);

//  echo $executeForm["coach"];
