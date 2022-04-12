<?php

class verifyAdminLoginClass
{
    public $con;
    private $hashwachtwoord;
    private $admin_afkorting;
    private $admin_wachtwoord;

    function CheckInputAdmin()
    {
        if (isset($_POST["submit_admin"])) {
            $this->admin_afkorting = $_POST["afkorting_admin"];
            $this->admin_wachtwoord = $_POST["ww_admin"];

            if (!empty($this->admin_afkorting) && !empty($this->admin_wachtwoord)) {
                // inlog functie...

                header("location: ../admin/index.php?admin=$this->admin_afkorting");
                $this->verifyUser();
                exit();
            } else {
                // header("location: ../.php?error=geenWachtwoordOfLeerlingnummer");
                exit("Please fill both the username and password fields!");
            }
        } 
    }
    function verifyUser()
    {
        $db = new Database();

        $this->admin_afkorting = $_POST["afkorting_admin"];
        $this->admin_wachtwoord = $_POST["ww_admin"];

        $this->hashwachtwoord = hash("sha256", $this->admin_wachtwoord);
        $verifyAdminUser = mysqli_query($db->con, "SELECT afkorting, wachtwoord, functie FROM `admin_docent` WHERE afkorting = '$this->admin_afkorting' AND wachtwoord = '$this->hashwachtwoord'");

        $checkInDataBase = mysqli_fetch_array($verifyAdminUser);

        if (is_array($checkInDataBase)) {
            $_SESSION["afkorting_admin"] = $checkInDataBase['afkorting'];
            $_SESSION["userType"] = $checkInDataBase['functie'];
            // exit();
        } else {
            echo 'fout';
            header("location: ../inlog_admin.php?error=foutLogin444");
        }
    }
}

