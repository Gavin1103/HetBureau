<?php
class getAccountInfo
{

    public $con;
    private $getLeerlingnummer;
    // public $leerlingNummer = $_GET['studentNumber'];
    private $id;
    private $leerlingNummer;
    public $naam;
    private $achternaam;
    private $wachtwoord;
    private $email;
    private $klas;

    function getStudentNumber()
    {
        echo $this->getLeerlingnummer = $_GET["studentNumber"];
        
    }

    function getStudentAccount()
    {
        $db = new Database();

        $this->getLeerlingnummer = $_GET["studentNumber"];

        $getUserInfo_qry = $db->con->prepare("SELECT id, leerlingnummer, naam, achternaam, wachtwoord, email, klas FROM `studenten` WHERE leerlingnummer = '$this->getLeerlingnummer'");
        if ($getUserInfo_qry === false) {
            echo mysqli_error($db->con);
        } else {
            $getUserInfo_qry->bind_result($this->id, $this->leerlingNummer, $this->naam, $this->achternaam, $this->wachtwoord, $this->email, $this->klas);
            if ($getUserInfo_qry->execute()) {
                $getUserInfo_qry->store_result();
                while ($getUserInfo_qry->fetch()) {
                    $userInfo_array = [
                        "id" => $this->id,
                        "leerling nummer" => $this->leerlingNummer,
                        "naam" => $this->naam,
                        "achternaam" => $this->achternaam,
                        "wachtwoord" => $this->wachtwoord,
                        "email" => $this->email,
                        "klas" => $this->klas
                    ];
                    return $userInfo_array;
                }
            }
            $getUserInfo_qry->close();
        }
    }
}
