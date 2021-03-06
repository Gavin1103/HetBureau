<?php
include("../core/databaseConnection.php");
session_start();
class AddAdmin
{
    private $naam_admin;
    private $achternaam_admin;
    private $email_admin;
    private $wachtwoord_admin;
    private $ww_opniew_admin;
    private $hashawchtwoord_admin;
    private $functie_admin;
    private $afkorting_admin;
    private $addAdmin_sql;
    function AddAdminUser()
    {
        $db = new Database();
        $this->naam_admin = $_POST["naam_admin"];
        $this->achternaam_admin = $_POST["achternaam_admin"];
        $this->email_admin = $_POST["email_admin"];
        $this->wachtwoord_admin = $_POST["wachtwoord_admin"];
        $this->ww_opniew_admin = $_POST["ww_opniew_admin"];
        // $this->functie_admin = $_POST["functie_admin"];
        $this->afkorting_admin = $_POST["afkorting_admin"];
        if (
            !empty($this->naam_admin) &&
            !empty($this->achternaam_admin) &&
            !empty($this->wachtwoord_admin) &&
            !empty($this->email_admin) &&
            !empty($this->wachtwoord_admin) &&
            !empty($this->ww_opniew_admin) &&
            !empty($this->functie_admin) &&
            !empty($this->afkorting_admin)
        ) {
            $this->existUser();
            $this->verifyPwd();
            $this->hashwachtwoord_admin = hash("sha256", $this->ww_opniew_admin);
            $this->addAdmin_sql = mysqli_query($db->con, "INSERT INTO `admin_docent`(`naam`, `achternaam`, `email`, `wachtwoord`, `functie`, `afkorting`) VALUES
            ('$this->naam_admin','$this->achternaam_admin','$this->email_admin','$this->hashwachtwoord_admin','Docent','$this->afkorting_admin')");
            if ($this->addAdmin_sql) {
                echo "Admin/Docent $this->naam_admin toegevoegd";
            }
        } else {
            header("location: ../admin/addAdminUser.php?error*");
        }
    }
    function verifyPwd()
    {
        $this->wachtwoord_admin = $_POST["wachtwoord_admin"];
        $this->ww_opniew_admin = $_POST["ww_opniew_admin"];

        if ($this->wachtwoord_admin !== $this->ww_opniew_admin) {
            echo "wachtwoord niet hetzelfde";
            exit();
        }
    }
    function existUser()
    {
        $db = new Database();
        $this->afkorting_admin = $_POST["afkorting_admin"];
        $verifyAfkorting = mysqli_query($db->con, "SELECT afkorting FROM `admin_docent` WHERE afkorting = '$this->afkorting_admin' ");
        $checkInDataBase = mysqli_fetch_array($verifyAfkorting);
        if (is_array($checkInDataBase)) {
            $this->afkorting_admin = $checkInDataBase['afkorting'];
            echo "gebruiker bestaat al";
            exit();
        }
    }

    public function checkFields()
    {
        if (isset($_GET["error*"])) {
            echo "<div class='error'>Niet alles met een ster ingevuld.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>add admin</title>
</head>

<body>
    <?php
    $addAminFunction = new AddAdmin();
    ?>
    <div id="container">
        <div id="innerContainerLeft">
        </div>
        <div id="innerContainerRight">
            <form action="addAdminUser.php" method="POST">
                <?php
                $addAdmin = $addAminFunction->checkFields();
                ?>
                <h1>Registreren als docent:</h1>
                <input type="text" name="naam_admin" placeholder="naam*">
                <input type="text" name="achternaam_admin" placeholder="achternaam*">
                <input type="text" name="email_admin" placeholder="email*">
                <input type="text" name="wachtwoord_admin" placeholder="wachtwoord*">
                <input type="text" name="ww_opniew_admin" placeholder="wachtwoord opniew*">
                <input type="text" name="afkorting_admin" placeholder="afkorting*">
                <input type="submit" value="maak account" name="submit_add_admin">
            </form>
            <?php
            if (isset($_POST["submit_add_admin"])) {
                $addAdmin = $addAminFunction->AddAdminUser();
            }
            ?>
        </div>
    </div>
</body>

</html>