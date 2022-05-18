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
    private $doorgroei_advies;
    // checkkboxen
    private $checkboxen;
    private $checkboxen_json;
    private $mysqliQRY;

    public function sendForm_AF1()
    {
        if (isset($_POST["submit_form_AF1"])) {
            if (!empty($_POST["student_name_af1"]) && !empty($_POST["coach_name_af1"]) && !empty($_POST["leerlingNummer"])) {

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
                $this->doorgroei_advies = $_POST["doorgroeiAdvies_af1"];

                $veld_a_beoordeling = $_POST["veld_a_beoordeling"];
                $veld_b_beoordeling = $_POST["veld_b_beoordeling"];
                $veld_c_beoordeling = $_POST["veld_c_beoordeling"];


                // exit();
                $this->checkboxen = $_POST["checkbox_vakken"];
                $this->checkboxen_json = json_encode($this->checkboxen);
                $trimArray = json_encode(array_keys($this->checkboxen));

                $db = new Database();

                // exit();
                $this->checkIfStudentExistF1();
                $this->mysqliQRY = mysqli_query($db->con, "INSERT INTO `opgeslagen_form_af1`(`student`, `leerlingnummer`, `coach`,  `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld`, `doorgroei_advies`, `veld_a_beoorldeing`, `veld_b_beoorldeing`, `veld_c_beoorldeing`) VALUES ('$this->student','$this->leerlingNummer','$this->coach','$this->klas','$this->datum',' $trimArray','$this->vormgeven','$this->techniek','$this->ondernemend','$this->AVO','$this->softskills','$this->evt_kwaliteiten', '$this->doorgroei_advies', '$veld_a_beoordeling', '$veld_b_beoordeling', '$veld_c_beoordeling')");
                if ($this->mysqliQRY) {
                    echo "Formulier opgeslagen";
                    header("location: ../admin/studentInfo.php?leerlingNummer={$this->leerlingNummer}");
                }
                echo '<pre>';
                var_dump($this->checkboxen_json);
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


    function editForm_AF1()
    {
        if (isset($_POST["edit_form_AF1"])) {
            // echo 1;
            $_leerlingNummer = $_GET["leerlingNummer"];
            $this->student = $_POST["student_name_af1"];
            $this->coach = $_POST["coach_name_af1"];
            // $this->leerlingNummer = $_POST["leerlingNummer"];
            // $this->datum = $_POST["datum_name_af1"];
            // $this->klas = $_POST["klas_name"];
            $this->vormgeven = $_POST["vormgeven_name_af1"];
            $this->techniek = $_POST["techniek_name_af1"];
            $this->ondernemend = $_POST["ondernemend_name_af1"];
            $this->softskills = $_POST["softskills_name_af1"];
            $this->AVO = $_POST["avo_name_af1"];
            $this->evt_kwaliteiten = $_POST["evt_name_af1"];
            $this->doorgroei_advies = $_POST["doorgroeiAdvies_af1"];


            $this->checkboxen = $_POST["checkbox_vakken"];
            $this->checkboxen_json = json_encode($this->checkboxen);
            $trimArray = json_encode(array_keys($this->checkboxen));


            $veld_a_beoordeling = $_POST["veld_a_beoordeling"];
            $veld_b_beoordeling = $_POST["veld_b_beoordeling"];
            $veld_c_beoordeling = $_POST["veld_c_beoordeling"];

            $db = new Database();
            $this->mysqliQRY = mysqli_query($db->con, "UPDATE `opgeslagen_form_af1` SET `student`='$this->student',`coach`='$this->coach',`klas`='$this->klas',`checkboxen`='$trimArray',`vormgeven_veld`='$this->vormgeven',`techniek_veld`='$this->techniek',`ondernemend_veld`='$this->ondernemend',`AVO_veld`='$this->AVO',`softskills_veld`=' $this->softskills',`evtKwaliteiten_veld`='$this->evt_kwaliteiten',`doorgroei_advies`='$this->doorgroei_advies',`veld_a_beoordeling`='$veld_a_beoordeling',`veld_b_beoordeling`='$veld_b_beoordeling',`veld_c_beoordeling`='$veld_c_beoordeling' WHERE leerlingnummer = '$_leerlingNummer'");
            if ($this->mysqliQRY) {
                echo "Formulier bewerkt";
                // header("location: ../admin/studentInfo.php?leerlingNummer={$this->leerlingNummer}");
            } else {
                echo 'error';
            }
        }
    }
}
