<?php
include_once dirname(__DIR__) . ("../../core/databaseConnection.php");
include("../../functions/crudKlassen.php");

$database = new Database();
// $db = $database->getConnection();
$deleteklassen = new crudklassen();

$id = $_GET['id'];
// $rid = $database->real_escape_string($id);

$result = $deleteklassen->delete($id);
echo $result;
if (!$result){
    echo $id;

    header("location: ../index.php");
    exit();
}

