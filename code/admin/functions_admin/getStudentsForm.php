<?php

include("./code/core/databaseConnection.php");



class adminFunctions
{


    private $student_naam;

    function getStudentForms()
    {

        $db = new Database();

        $getStudent_qry = mysqli_query($db->con, "SELECT `id`, `naam`, `achternaam`, `email`, `wachtwoord`, `functie`, `afkorting` FROM `admin_docent` WHERE afkorting = '$this->afkorting_admin'");
        $results = mysqli_fetch_assoc($getStudent_qry);
        $result_array = [];
        return $result_array;
    }


    function getKlassen()
    {

        $db = new Database();

        $getKlassen_qry = mysqli_query($db->con, "SELECT klassen, id FROM klassen");
        $results = mysqli_num_rows($getKlassen_qry);
        // var_dump($results);

        if ($results > 0) {
            while ($row = mysqli_fetch_assoc($getKlassen_qry)) {
                echo $row["klassen"];
                echo "-";
                echo $row["id"];
                echo "<a href='admin/index.php?klas=".$row.["klassen"]."'>openen</a>";
                echo "<hr>";
               
            }
        }
    }
}
