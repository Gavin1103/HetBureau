<?php

// gebruik formF1.php als voorbeeld
class FormulierF4 extends Formulieren
{
    // formulier fase 2 ophalen
    public function getFormF4()
    {
        echo 'word nog aan gewerkt 2';
    }
    // checken of formulier van deze leerling bestaat
    public function showStudentBlockF4()
    {
        if (isset($_GET["leerlingNummer"])) {
            // $db = new Database();
            $this->_leerlingnummer = $_GET["leerlingNummer"];
            echo "<div class='boxtext F4'><a href='../forms/fulledInForm_F4.php?formNumber=form2&leerlingNummer={$this->_leerlingnummer}'>Fase 2 Assessmentformulier</a></div>";
        } else {
            header("location: ../admin/?error=geenstudentNummer");
        }
    }
    public function showFormF4()
    {
        
    }
    
}

class sendFormF4 extends Formulieren
{
    private $student;
    private $leerlingNummer;
    private $coach;
    private $klas;
    private $datum;
    private $vormgeven;
    private $techniek;
    private $ondernemend;
    private $softskills;
    private $AVO;
    private $evt_kwaliteiten;
    private $doorgroei_advies;
    // checkkboxen
    private $checkboxen;
    private $checkboxen_json;
    private $mysqliQRY;
    private $naam;

    // formulier f1 versturen

    // eerst kijken of deze leerling al een formulier heeft in deze fase
    public function checkIfStudentExistF4()
    {
        $db = new Database();
        if (isset($_POST["submit_form_AF3"])) {
            if (!empty($_POST["student_name_af3"]) && !empty($_POST["coach_name_af3"]) && !empty($_POST["leerlingNummer_af3"]) && !empty($_POST["klas_name_af3"]) && !empty($_POST["datum_name_af3"])) {
                $this->leerlingNummer = $_POST["leerlingNummer_af3"];
                $verifyStudent = $db->con->prepare("SELECT leerlingnummer FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->leerlingNummer'");

                if ($verifyStudent->execute()) {
                    $checkInDataBase = $verifyStudent->get_result();
                    // $checkInDataBase = mysqli_fetch_array($verifyStudent);
                    $result = $checkInDataBase->fetch_assoc();
                    if (is_array($result)) {
                        $this->afkorting_admin = $result['leerlingnummer'];
                        header("location: ../forms/formulieren_fase_4.php?formNumber=form1&&error=studentExist");
                    } else {
                        // heeft deze persoon nog geen formulier dan wordt deze functie uitgevoerd
                        $this->sendForm_AF4();
                    }
                }
            } else {
                echo "niet alles ingevuld";
            }
        }
    }

    private function sendForm_AF4()
    {
        $db = new Database();
        // met deze functie word er gekeken of deze leerling ook toegevoegd is aan een appart tabel dat "studenten" heet. Die tabel is er voor om leerling op te zoeken. Als het goed is hoef je er niks aan te veranderen, maar bij errors check altijd of dit ermee te maken heeft.
        $this->existStudent();
        // schrijf hier je code














    }
    private function existStudent()
    {
        $db = new Database();
        // $_POST["leerlingNummer_af1"];

        $this->leerlingNummer = $db->con->real_escape_string($_POST["leerlingNummer_af4"]);
        $checkStudent = $db->con->prepare("SELECT leerlingnummer FROM `studenten` WHERE leerlingnummer = '$this->leerlingNummer'");
        // $checkInDataBase = mysqli_fetch_array($checkStudent);
        if ($checkStudent->execute()) {

            $getResult = $checkStudent->get_result();
            $result = $getResult->fetch_assoc();

            if (is_array($result)) {
                $this->leerlingNummer = $result['leerlingnummer'];
                echo "student bestaat al";
            } else {
                $this->addStudent();
            }
        }
    }
    private function addStudent()
    {
        $db = new Database();
        $this->leerlingNummer = $db->con->real_escape_string($_POST["leerlingNummer_af4"]);
        $this->naam = $db->con->real_escape_string($_POST["student_name_af4"]);
        // $this->existStudent();
        $db = new Database();
        $addStudentQRY = $db->con->prepare("INSERT INTO `studenten`( `leerlingnummer`, `naam`) VALUES ('$this->leerlingNummer','$this->naam')");
        if ($addStudentQRY->execute()) {
            echo "leerling toegevoegd";
        } else {
            "leerling niet toegevoegd";
        }
    }
}



// CRUD systeem 
class editFormF4 extends Formulieren
{
    function editForm_AF4()
    {
      
        
    }
}