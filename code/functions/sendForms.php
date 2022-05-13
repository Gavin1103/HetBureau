<?php
// include '../core/databaseConnection.php';
class sendForms
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
    // checkkboxen
    private $checkboxen;
    private $checkboxen_json;
    private $addFormQRY;

    public function sendForm_AF1()
    {
        if (isset($_POST["submit_form_AF1"])) {
            if (!empty($_POST["student_name_af1"]) && !empty($_POST["coach_name_af1"]) && !empty($_POST["leerlingNummer"])) {
                // echo "Formulier is opgeslagen";
                $this->student = $_POST["student_name_af1"];
                $this->coach = $_POST["coach_name_af1"];
                $this->leerlingNummer = $_POST["leerlingNummer"];
                $this->datum = $_POST["datum_name_af1"];
                $this->klas = $_POST["klas_name"];

                $this->vormgeven = $_POST["vormgeven_name_af1"];
                $this->techniek = $_POST["techniek_name_af1"];
                $this->ondernemend = $_POST["ondernemend_name_af1"];
                $this->softskills = $_POST["softskills_name_af1"];
                $this->AVO = $_POST["avo_name_af1"];
                $this->evt_kwaliteiten = $_POST["evt_name_af1"];

                $this->checkboxen = $_POST["checkbox_vakken"];
                $this->checkboxen_json = json_encode($this->checkboxen);

                $db = new Database();

                $this->checkIfStudentExistF1();

                $this->addFormQRY = mysqli_query($db->con, "INSERT INTO `opgeslagen_form_af1`(`student`, `leerlingnummer`, `coach`,  `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld`) VALUES ('$this->student','$this->leerlingNummer','$this->coach','$this->klas','$this->datum','$this->checkboxen_json','$this->vormgeven','$this->techniek','$this->ondernemend','$this->AVO','$this->softskills','$this->evt_kwaliteiten')");
                if ($this->addFormQRY) {
                    echo "Formulier opgeslagen";
                    // header("location: ../admin/studentInfo.php?leerlingNummer={$this->leerlingNummer}");
                }
                // echo '<pre>';
                // var_dump($this->checkboxen_json);
            } else {
                echo "niet alles met een ster ingevuld";
                // header("location ../getForms/fulledInForm_F1.php");
            }
        }
    }

    private function checkIfStudentExistF1()
    {

        $db = new Database();
        $this->leerlingNummer = $_POST["leerlingNummer"];
        $verifyStudent = mysqli_query($db->con, "SELECT leerlingnummer FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->leerlingNummer'");
        $checkInDataBase = mysqli_fetch_array($verifyStudent);
        if (is_array($checkInDataBase)) {
            $this->afkorting_admin = $checkInDataBase['leerlingnummer'];
            header("location: ../forms/formulieren_fase_1.php?formNumber=form1&&error=studentExist");
            exit();
        }
    }
}
