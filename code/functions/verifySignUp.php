<?php

include("../core/databaseConnection.php");

class classVerifySignUp
{
    public $con;
    function checkSignUp()
    {

        if (isset($_POST["submit"])) {

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
            header("location: ../create_account.php");
            // $_GET["error"];
            // echo $_GET["error"];
            // echo $error;
            exit();
        };
    }

    function hashWachtwoord(){

    }


    function addUser()
    {
        
            $leerlingNummer = $_POST["leerling_nummer"];
            $naam = $_POST["naam"];
            $achternaam = $_POST["achternaam"];
            $email = $_POST["email"];
            $klas = $_POST["klas"];
            $wwopnieuw = $_POST["wwopnieuw"];
            $db = new Database();
            $liqry = $db->con->prepare("INSERT INTO `studenten`(`leerlingnummer`, `naam`, `achternaam`, `wachtwoord`, `email`, `klas`) VALUES ('$leerlingNummer','$naam','$achternaam','$wwopnieuw','$email','$klas')");
            if ($liqry === false) {
                echo mysqli_error($db->con);
            } else {
                // $liqry->bind_param('s', $name);
                if ($liqry->execute()) {
                    echo "woord is toegevoegd";
                }
            }
    }

    // function getCreatedAccount(){
    //     echo $_GET["studentID"];
    // }
}

$verfySignUp = new classVerifySignUp();
$checkSignUpFucntion = $verfySignUp->checkSignUp();
