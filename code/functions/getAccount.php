<?php

class getAccountInfo
{

    public $con;
    private $leerlingNummer;
    public $naam;
    private $afkorting_admin;

    function getStudentAccount()
    {
        $db = new Database();
        $this->leerlingNummer = $_GET["studentNumber"];

        if(!isset($_GET["studentNumber"])){
            echo "fout";
            header("location: ../index.php?error=fout22");
        }

        $getUserInfo_qry = mysqli_query($db->con, "SELECT id, leerlingnummer, naam, achternaam, wachtwoord, email, klas FROM `studenten` WHERE leerlingnummer = '$this->leerlingNummer'");
        $results = mysqli_fetch_assoc($getUserInfo_qry);
        $result_array = [
            "id" => $results["id"],
            "leerling nummer" =>$results["leerlingnummer"],
            "naam" => $results["naam"],
            "achternaam" => $results["achternaam"],
            "wachtwoord" => $results["wachtwoord"],
            "email" => $results["email"],
            "klas" => $results["klas"]
        ];
        return $result_array;
    }


    function getAdminAccount()
    {

        $db = new Database();
        $this->afkorting_admin = $_GET["admin"];

        if(!isset($_GET["admin"])){
            echo "fout";
            header("location: ../inlog_admin.php?error=fout22");
        }

        $getAdminInfo_sql = mysqli_query($db->con, "SELECT `id`, `naam`, `achternaam`, `email`, `wachtwoord`, `functie`, `afkorting` FROM `admin_docent` WHERE afkorting = '$this->afkorting_admin'");
        $results = mysqli_fetch_assoc($getAdminInfo_sql);
        $result_array = [
            "naam" => $results["naam"],
            "afkorting" => $results["afkorting"],
            "achternaam" => $results["achternaam"],
            "email" => $results["email"],
            "wachtwoord" => $results["wachtwoord"],
            "functie" => $results["functie"],
            "id" => $results["id"],
        ];
        return $result_array;
    }
}
