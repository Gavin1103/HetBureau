<?php

class User
{
    public $naam;
    public $achternaam;
    public $afkorting;
    public $wachtwoord;
    public $ww_opniew;
    public $email;
    public $functieUser; //docent of admin

    // voor leerlingen
    public $leerlingNummer;

    // voor inloggen
    public function CheckInputAdmin()
    {
        if (isset($_POST["submit_admin"])) {
            $this->afkorting = $_POST["afkorting_admin"];
            $this->wachtwoord = $_POST["ww_admin"];
            if (!empty($this->afkorting) && !empty($this->wachtwoord)) {
                // inlog functie...
                header("location: ../admin/index.php?admin=$this->afkorting");
                $this->verifyUser();
                exit();
            } else {
                header("location: ../index.php?error=geenWachtwoordOfLeerlingnummer");
                exit("Please fill both the username and password fields!");
            }
        }
    }
    private function verifyUser()
    {
        $db = new Database();

        $this->afkorting = $_POST["afkorting_admin"];
        $this->wachtwoord = $_POST["ww_admin"];

        $hashwachtwoord = hash("sha256", $this->wachtwoord);
        $verifyAdminUser = mysqli_query($db->con, "SELECT afkorting, wachtwoord FROM `admin_docent` WHERE afkorting = '$this->afkorting' AND wachtwoord = '$hashwachtwoord'");
        $checkInDataBase = mysqli_fetch_array($verifyAdminUser);

        if (is_array($checkInDataBase)) {
            $_SESSION["afkorting_admin"] = $checkInDataBase['afkorting'];
            $_SESSION["wachtwoord"] = $checkInDataBase['wachtwoord'];
            // exit();
        } else {
            // echo 'fout';
            header("location: ../index.php?error=Incorrect");
        }
    }

    // account informatie ophalen

    public function getAdminAccount()
    {
        $db = new Database();
        $this->afkorting = $_SESSION["afkorting_admin"];

        if (!isset($this->afkorting)) {
            echo "fout";
            session_destroy();
            header("location: ../index.php?error=fout99");
        }
        $getAdminInfo_sql = mysqli_query($db->con, "SELECT `id`, `naam`, `achternaam`, `email`,
        `wachtwoord`, `functie`, `afkorting` FROM `admin_docent` WHERE afkorting = '$this->afkorting'");
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
    // student formulier opzoeken
    public function searchStudent()
    {
        if (isset($_POST["studentNumber"])) {
            $this->leerlingNummer = $_POST["studentNumber"];
            $db = new Database();
            // Query
            $selectQuery = $db->con->prepare("SELECT `id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum` FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->leerlingNummer' LIMIT 1;");
            if ($selectQuery === false) {
                echo mysqli_error($db->con);
            }
            if ($selectQuery->execute()) {
                $selectQueryResult = $selectQuery->get_result();
                // Loop 
                while ($results = $selectQueryResult->fetch_assoc()) {
                    $formF1_array = [
                        "id" => $results["id"],
                        "student" => $results["student"],
                        "leerlingnummer" => $results["leerlingnummer"],
                        "coach" => $results["coach"],
                        "klas" => $results["klas"],
                        "datum" => $results["datum"],
                    ];
                    // var_dump($formF1_array);
                    return $formF1_array;
                }
            } else {
                echo mysqli_error($db->con);
                echo 'asdfsafdsaf';
            }
        }
    }
    // account aanmaken
    function AddAdminUser()
    {
        $db = new Database();
        $this->naam = $_POST["naam_admin"];
        $this->achternaam = $_POST["achternaam_admin"];
        $this->email = $_POST["email_admin"];
        $this->wachtwoord = $_POST["wachtwoord_admin"];
        $this->ww_opniew_admin = $_POST["ww_opniew_admin"];
        $this->functie_admin = $_POST["functie_admin"];
        $this->afkorting = $_POST["afkorting_admin"];
        if (
            !empty($this->naam) &&
            !empty($this->achternaam) &&
            !empty($this->wachtwoord) &&
            !empty($this->email) &&
            !empty($this->ww_opniew) &&
            !empty($this->functieUser) &&
            !empty($this->afkorting)
        ) {
            $this->existUser();
            $this->verifyPwd();
            $this->hashwachtwoord_admin = hash("sha256", $this->ww_opniew);
            $addAdmin_sql = mysqli_query($db->con, "INSERT INTO `admin_docent`(`naam`, `achternaam`, `email`, `wachtwoord`, `functie`, `afkorting`) VALUES
            ('$this->naam','$this->achternaam','$this->email','$this->hashedwachtwoord','$this->functieUser','$this->afkorting')");
            if ($addAdmin_sql) {
                echo "Admin/Docent $this->naam toegevoegd";
            }
        } else {
            echo "niet alles ingevuld";
        }
    }
    private function verifyPwd()
    {
        $this->wachtwoord = $_POST["wachtwoord_admin"];
        $this->ww_opniew = $_POST["ww_opniew_admin"];

        if ($this->wachtwoord !== $this->ww_opniew) {
            echo "wachtwoord niet hetzelfde";
            exit();
        }
    }
    private function existUser()
    {
        $db = new Database();
        $this->afkorting = $_POST["afkorting_admin"];
        $verifyAfkorting = mysqli_query($db->con, "SELECT afkorting FROM `admin_docent` WHERE afkorting = '$this->afkorting' ");
        $checkInDataBase = mysqli_fetch_array($verifyAfkorting);
        if (is_array($checkInDataBase)) {
            $this->afkorting = $checkInDataBase['afkorting'];
            echo "gebruiker bestaat al";
            exit();
        }
    }
}
