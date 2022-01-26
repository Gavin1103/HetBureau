<?php

include("../core/databaseConnection.php");
include("../functions/getForms/getFormFase2.php");
require_once "../../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();

$database = new Database();
$con = $database->getConnection($_ENV["host"],$_ENV["username"],$_ENV["password"],$_ENV["db"]);


$data = mysqli_query($con,"SELECT * FROM form_questions WHERE form_id = 3");
header('Content-type: application/json; charset=utf-8');
while ($row = mysqli_fetch_assoc($data)) {
    $kaas[]=json_decode($row["vraagen"]);
}
echo json_encode($kaas, JSON_PRETTY_PRINT);
?>