<?php
// include("../core/databaseConnection.php");
class verifyLogin
{
    public $con;
    // public $leerlingNummer = $_POST["leerlingnummer"];
    // public $wachtwoord = $_POST["wachtwoord"];
    function CheckInputs()
    {
        if (isset($_POST["submit_login"])) {

            $leerlingNummer_login = $_POST["leerlingNummer_login"];
            $wachtwoord_login = $_POST["wachtwoord_login"];
            // $this->leerlingNummer = $leerlingNummer;
            // $this->wachtwoord = $wachtwoord;
            if (!empty($leerlingNummer_login) && !empty($wachtwoord_login)) {
                // inloggen functie...
                header("location: ../formulieren/index.php?studentNumber=$leerlingNummer_login");
                $this->verifyUser();
                exit();
            } else {
                header("location: ../index.php?error=geenWachtwoordOfLeerlingnummer");
                exit("Please fill both the username and password fields!");
            }
        } else {
            header("location: ../index.php?error=moetInloggen");
            exit();
        }
    }

    function verifyUser()
    {
        $db = new Database();

        $leerlingNummer_login = $_POST["leerlingNummer_login"];
        $wachtwoord_login = $_POST["wachtwoord_login"];

        $hashWachtwoord_login = hash("sha256", $wachtwoord_login);
        $verifyUser = mysqli_query($db->con, "SELECT leerlingnummer, wachtwoord FROM `studenten` WHERE leerlingnummer = '$leerlingNummer_login' AND wachtwoord = '$hashWachtwoord_login' ");
        $checkInDataBase = mysqli_fetch_array($verifyUser);

        if(is_array($checkInDataBase)){
            $_SESSION[$leerlingNummer_login] = $checkInDataBase['leerlingnummer'];
            $_SESSION[$wachtwoord_login] = $checkInDataBase['wachtwoord'];
        }else{
            echo 'fout';
            header("location: ../index.php?error=foutLogin");
        }
    }
}


