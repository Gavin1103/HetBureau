<?php

class verifyAdminLoginClass
{
    public $con;
    private $hashWachtwoord_login;
    private $admin_email;
    private $admin_wachtwoord;

    function CheckInputAdmin()
    {
        if (isset($_POST["submit_admin"])) {
            $this->admin_email = $_POST["email_admin"];
            $this->admin_wachtwoord = $_POST["ww_admin"];

            if (!empty($this->admin_email) && !empty($this->admin_wachtwoord)) {
                // inlog functie...
                header("location: ../formulieren/inlog_admin.php?admin=$this->admin_email");
                $this->verifyUser();
                exit();
            } else {
                header("location: ../inlog_admin.php?error=nietallesingevuld");
                exit("Please fill both the username and password fields!");
            }
        } else {
            header("location: ../inlog_admin.php?error=moetInloggen");
            exit();
        }
    }


    function verifyUser()
    {
        $db = new Database();

        $this->admin_email = $_POST["email_admin"];
        $this->admin_wachtwoord = $_POST["ww_admin"];

        $this->hashWachtwoord_login = hash("sha256", $this->admin_wachtwoord);

        $verifyUser = mysqli_query($db->con, "");
        $checkInDataBase = mysqli_fetch_array($verifyUser);

        if (is_array($checkInDataBase)) {
            $_SESSION[$this->admin_email] = $checkInDataBase['leerlingnummer'];
            $_SESSION[$this->hashWachtwoord_login] = $checkInDataBase['wachtwoord'];
        } else {
            echo 'fout';
            header("location: ../inlog_admin.php?error=foutLogin");
        }
    }
}
