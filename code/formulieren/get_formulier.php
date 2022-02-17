<?php

include("../core/databaseConnection.php");
require_once "../../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();

class GetFormFunction
{
    
    public $con;
    function __construct()
    {
        $database = new Database();
        $this->con = $database->getConnection($_ENV["host"], $_ENV["username"], $_ENV["password"], $_ENV["db"]);
    }
    function get_formulieren($id)
    {
        $formID = $_GET["formID"];
        $data = mysqli_query($this->con, "SELECT id, vraagen FROM form_questions WHERE form_id = $formID;");
        $form = mysqli_fetch_array($data);
        $new_form_data = (json_decode($form["vraagen"]));
        return $new_form_data;
    }
}
