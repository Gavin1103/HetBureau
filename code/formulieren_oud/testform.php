<?php
include("../core/databaseConnection.php");

class addForm
{


    function addFase1Form()
    {


        if (!empty($_POST["student_nummer"]) && !empty($_POST["coach_name"])) {
            $db = new Database();

            $leerlingnummer_name = $_POST['student_nummer'];
            $coach_name = $_POST['coach_name'];
            $date_name = $_POST["date_name"];
            $form = [
                "formulier" => [
                    "deel_A" => [
                        [

                            "vraag" => "Wat is je leerlingnummer",
                            "antwoord" => [
                                "label" => "studentnummer",
                                "name" => "student_nummer",
                                "type" => "number",
                                "value" => "{$leerlingnummer_name}"
                            ]
                        ],
                        [
                            "vraag" => "Wie is je coach",
                            "antwoord" => [
                                "label" => "coach",
                                "name" => "coach_name",
                                "type" => "text",
                                "value" => "{$coach_name}"
                            ]
                        ], [
                            "vraag" => "aanmaak datum",
                            "antwoord" => [
                                "label" => "Datum",
                                "name" => "datum_name",
                                "type" => "date",
                                "value" => "{$date_name}"
                            ]
                        ]
                    ]
                ]
            ];
            $converToJSON = json_encode($form);


            $sql = $db->con->prepare("INSERT INTO `opgeslagen_formulier_af1`(`formulier`, `leerlingnummer`) VALUES ('$converToJSON','$leerlingnummer_name')");
            if ($sql === false) {
                mysqli_error($db->con);
            } else {
                if ($sql) {
                    echo "formulier opgeslagen";
                    $sql->execute();
                } else {
                    echo 'Er is iets fout gegaan';
                }
            }
            $sql->close();
        } else {
            echo 'niet alles ingevuld';
        }
    }
}


$jj = new addForm();
$dd = $jj->addFase1Form();

















// echo '<pre>';
// var_dump($newARR);
