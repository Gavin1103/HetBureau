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

        $this->afkorting = $db->con->real_escape_string($_POST["afkorting_admin"]);
        $this->wachtwoord = $db->con->real_escape_string($_POST["ww_admin"]);

        $hashwachtwoord = hash("sha256", $this->wachtwoord);
        $verifyAdminUser = $db->con->prepare("SELECT afkorting, wachtwoord FROM `admin_docent` WHERE afkorting = '$this->afkorting' AND wachtwoord = '$hashwachtwoord'");
        // $checkInDataBase = mysqli_fetch_array($verifyAdminUser);

        if ($verifyAdminUser->execute()) {

            $getResult = $verifyAdminUser->get_result();
            $result = $getResult->fetch_assoc();

            if (is_array($result)) {
                $_SESSION["afkorting_admin"] = $result['afkorting'];
                $_SESSION["wachtwoord"] = $result['wachtwoord'];
                // exit();
            } else {
                // echo 'fout';
                header("location: ../index.php?error=Incorrect");
            }
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

        $getAdminInfo_sql = $db->con->prepare("SELECT `id`, `naam`, `achternaam`, `email`,
        `wachtwoord`, `functie`, `afkorting` FROM `admin_docent` WHERE afkorting = '$this->afkorting'");
        // $results = mysqli_fetch_assoc($getAdminInfo_sql);
        if ($getAdminInfo_sql->execute()) {

            $getResult = $getAdminInfo_sql->get_result();
            $result = $getResult->fetch_assoc();

            $result_array = [
                "naam" => $result["naam"],
                "afkorting" => $result["afkorting"],
                "achternaam" => $result["achternaam"],
                "email" => $result["email"],
                "wachtwoord" => $result["wachtwoord"],
                "functie" => $result["functie"],
                "id" => $result["id"],
            ];
            return $result_array;
        }
    }

    // account aanmaken
    function AddAdminUser()
    {
        $db = new Database();
        $this->naam = $db->con->real_escape_string($_POST["naam_admin"]);
        $this->achternaam = $db->con->real_escape_string($_POST["achternaam_admin"]);
        $this->email = $db->con->real_escape_string($_POST["email_admin"]);
        $this->wachtwoord = $db->con->real_escape_string($_POST["wachtwoord_admin"]);
        $this->ww_opniew_admin = $db->con->real_escape_string($_POST["ww_opniew_admin"]);
        $this->functie_admin = $db->con->real_escape_string($_POST["functie_admin"]);
        $this->afkorting = $db->con->real_escape_string($_POST["afkorting_admin"]);
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
            $addAdmin_sql = $db->con->prepare("INSERT INTO `admin_docent`(`naam`, `achternaam`, `email`, `wachtwoord`, `functie`, `afkorting`) VALUES
            ('$this->naam','$this->achternaam','$this->email','$this->hashedwachtwoord','$this->functieUser','$this->afkorting')");
            if ($addAdmin_sql->exexute()) {
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
        $verifyAfkorting = $db->con->prepare("SELECT afkorting FROM `admin_docent` WHERE afkorting = '$this->afkorting' ");
        $checkInDataBase = mysqli_fetch_array($verifyAfkorting);
        if (is_array($checkInDataBase)) {
            $this->afkorting = $checkInDataBase['afkorting'];
            echo "gebruiker bestaat al";
            exit();
        }
    }
}
class StudentUser extends User
{
    public $leerlingNummer;


    public function searchStudent()
    {
        if (isset($_POST["studentNumber"])) {
            $this->leerlingNummer = $_POST["studentNumber"];
            $db = new Database();
            // Query
            $selectQuery = $db->con->prepare("SELECT `id`, `leerlingnummer`, `naam` FROM `studenten` WHERE leerlingnummer LIKE '$this->leerlingNummer%'");
            if ($selectQuery === false) {
                echo mysqli_error($db->con);
            }
            if ($selectQuery->execute()) {
                $selectQueryResult = $selectQuery->get_result();
                // Loop 
                while ($results = $selectQueryResult->fetch_assoc()) {
                    $studentInfoArray = [
                        "leerlingnummer" => $results["leerlingnummer"],
                        "naam" => $results["naam"]
                    ];
                    echo "
                        <div class='innerResultContainer'>
                        <a href='studentInfo.php?leerlingNummer={$studentInfoArray['leerlingnummer']}'><div class='resultStudent'>
                        <div class='resultStudentLeft'>
                        <img src='../assets/Materiaal/img/foto2.png' alt=''>
                        </div>                                                                                                                              
                        <div class='resultStudentRight'>
                        <p>{$studentInfoArray['leerlingnummer']}</p>
                        <p>{$studentInfoArray['naam']}</p>
                        </div>
                        </div>
                        </a>
                        </div>
                        ";
                }
            } else {
                echo mysqli_error($db->con);
                echo 'asdfsafdsaf';
            }
        }
    }
}
