<?php

// include("../core/databaseConnection.php");

class classVerifySignUp
{
    public $con;
    // public $leerlingNummer;
    function checkSignUp()
    {

        if (isset($_POST["submit_createAcc"])) {

            $leerlingNummer = $_POST["leerling_nummer"];
            $naam = $_POST["naam"];
            $achternaam = $_POST["achternaam"];
            $email = $_POST["email"];
            $klas = $_POST["klas"];
            $wachtwoord = $_POST["wachtwoord"];
            $wwopnieuw = $_POST["wwopnieuw"];

            if (empty($leerlingNummer && $naam && $achternaam && $email && $klas && $wachtwoord && $wwopnieuw)) {
                header("location: ../create_account.php?error=nietallesingevuld");
                exit();
            } elseif ($wwopnieuw !== $wachtwoord) {
                header("location: ../create_account.php?error=wwniethetzelfde");
                exit();
            } else {
                header("location: ../formulieren/index.php?studentNumber=$leerlingNummer");
                $this->addUser();
                exit();
            }
        } else {
            header("location: ../create_account.php?moetRegistreren");
            exit();
        };
    }

    function addUser()
    {
        $db = new Database();

        $leerlingNummer = $_POST["leerling_nummer"];
        $naam = $_POST["naam"];
        $achternaam = $_POST["achternaam"];
        $email = $_POST["email"];
        $klas = $_POST["klas"];
        $wwopnieuw = $_POST["wwopnieuw"];
        $hashWachtwoord = hash("sha256", $wwopnieuw);
        $liqry = $db->con->prepare("INSERT INTO `studenten`(`leerlingnummer`, `naam`, `achternaam`, `wachtwoord`, `email`, `klas`) VALUES ('$leerlingNummer','$naam','$achternaam','$hashWachtwoord','$email','$klas')");
        if ($liqry === false) {
            echo mysqli_error($db->con);
        } else {
            if ($liqry->execute()) {
                echo "gebruiker is toegevoegd";
            }
        }
    }
}



