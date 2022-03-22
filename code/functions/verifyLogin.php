<?php
// include("../core/databaseConnection.php");
class verifyLogin
{
    public $con;
    private $leerlingNummer_login;
    private $wachtwoord_login;
    private $hashWachtwoord_login;
    function CheckInputs()
    {
        $this->leerlingNummer_login = $_POST["leerlingNummer_login"];
        $this->wachtwoord_login = $_POST["wachtwoord_login"];
        if (!empty($this->leerlingNummer_login) && !empty($this->wachtwoord_login)) {
            // inlog functie...
            header("location: ../formulieren/index.php?studentNumber=$this->leerlingNummer_login");
            // header("location: ".BASEHREF."formulieren/index.php?studentNumber=$this->leerlingNummer_login");
            $this->verifyUser();
            exit();
        } else {
            header("location: ../index.php?error=geenWachtwoordOfLeerlingnummer");
            exit("Please fill both the username and password fields!");
        }
    }
    function verifyUser()
    {
        $db = new Database();
        $this->leerlingNummer_login = $_POST["leerlingNummer_login"];
        $this->wachtwoord_login = $_POST["wachtwoord_login"];
        $this->hashWachtwoord_login = hash("sha256", $this->wachtwoord_login);
        $verifyUser = mysqli_query($db->con, "SELECT leerlingnummer, wachtwoord FROM `studenten` WHERE leerlingnummer = '$this->leerlingNummer_login' AND wachtwoord = '$this->hashWachtwoord_login' ");
        $checkInDataBase = mysqli_fetch_array($verifyUser);

        if (is_array($checkInDataBase)) {
            $_SESSION[$this->leerlingNummer_login] = $checkInDataBase['leerlingnummer'];
            $_SESSION[$this->hashWachtwoord_login] = $checkInDataBase['wachtwoord'];
        } else {
            echo 'fout';
            header("location: ../index.php?error=foutLogin");
        }
    }
}
