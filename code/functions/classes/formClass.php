<?php

class Formulier
{

    private $_id;
    private $_student;
    private $_leerlingnummer;
    private $_coach;
    private $_klas;
    private $_datum;
    private $_checkboxen;
    private $_vormgeven_veld;
    private $_techniek_veld;
    private $_ondernemend_veld;
    private $_AVO_veld;
    private $_softskills;
    private $_evtKwaliteiten_veld;

    public function errorMelding()
    {
        if (isset($_GET["error"])) {
            echo "gebruiker heeft al een formulier in deze fase.";
        }
    }

    public function getFormF1()
    {

        $db = new Database();
        // Query
        $selectQuery = $db->con->prepare("
        
        SELECT `id`, `AF1`, `tekst_intro`, `checklist_titel`, `veld_student`, `veld_leerlingnummer`, `veld_coach`, `veld_klas`, `datum`, `checkboxen_id`, `review_fase_1`, `titel_docent_invullen`, `review_fase_1_tekst`,
         `vormgeven_beoordeling`, `techniek_beoordeling`, `ondernemend_beoordeling`, `softskills_beoordeling`, `avo_beoordeling`, `bijzondere_kwaliteiten`, `terug_koppelingsfase_1`, `deel_c_tekst_1`, 
         `deel_c_tekst_2`, `deel_c_tekst_3`, `doorgroei_advies`, `handtekening_assessor`, `handtekening_student` FROM `assesment_form1` ");
        if ($selectQuery === false) {
            echo mysqli_error($db->con);
        }
        if ($selectQuery->execute()) {
            $selectQueryResult = $selectQuery->get_result();
            // Loop 
            while ($results = $selectQueryResult->fetch_assoc()) {
                // echo $selectQueryRow['my_column'];
                // var_dump($results);
                $formF1_array = [
                    "id" => $results["id"],
                    "AF1" => $results["AF1"],
                    "tekst_intro" => $results["tekst_intro"],
                    "checklist_titel" => $results["checklist_titel"],
                    "veld_student" => $results["veld_student"],
                    "veld_leerlingnummer" => $results["veld_leerlingnummer"],
                    "veld_coach" => $results["veld_coach"],
                    "veld_klas" => $results["veld_klas"],
                    "datum" => $results["datum"],
                    "checkboxen_id" => $results["checkboxen_id"],
                    "review_fase_1" => $results["review_fase_1"],
                    "titel_docent_invullen" => $results["titel_docent_invullen"],
                    "review_fase_1_tekst" => $results["review_fase_1_tekst"],
                    "vormgeven_beoordeling" => $results["vormgeven_beoordeling"],
                    "techniek_beoordeling" => $results["techniek_beoordeling"],
                    "ondernemend_beoordeling" => $results["ondernemend_beoordeling"],
                    "softskills_beoordeling" => $results["softskills_beoordeling"],
                    "avo_beoordeling" => $results["avo_beoordeling"],
                    "bijzondere_kwaliteiten" => $results["bijzondere_kwaliteiten"],
                    "terug_koppelingsfase_1" => $results["terug_koppelingsfase_1"],
                    "deel_c_tekst_1" => $results["deel_c_tekst_1"],
                    "deel_c_tekst_2" => $results["deel_c_tekst_2"],
                    "deel_c_tekst_3" => $results["deel_c_tekst_3"],
                    "doorgroei_advies" => $results["doorgroei_advies"],
                    "handtekening_assessor" => $results["handtekening_assessor"],
                    "handtekening_student" => $results["handtekening_student"],

                ];
                // var_dump($formF1_array);
                return $formF1_array;
            }
        } else {
            echo mysqli_error($db->con);
            echo 'fout2005';
        }
    }
    // checken of formulier van deze leerling bestaat
    public function CheckFormF1()
    {
        if (isset($_GET["leerlingNummer"])) {
            // $db = new Database();
            $this->_leerlingnummer = $_GET["leerlingNummer"];
            echo "<div class='boxtext F1'><a href='../forms/fulledInForm_F1.php?formNumber=form1&leerlingNummer={$this->_leerlingnummer}'>Fase 1 Assessmentformulier</a></div>";
        } else {
            header("location: ../admin/?error=geenstudentNummer");
        }
    }

    public function CheckFormF2()
    {
        if (isset($_GET["leerlingNummer"])) {
            // $db = new Database();
            $this->_leerlingnummer = $_GET["leerlingNummer"];
            echo "<div class='boxtext F2'><a href='../forms/fulledInForm_F2.php?formNumber=form2&leerlingNummer={$this->_leerlingnummer}'>Fase 2 Assessmentformulier</a></div>";
        } else {
            header("location: ../admin/?error=geenstudentNummer");
        }
    }

    public function getFormF2()
    {
        echo 'word nog aan gewerkt 2';
    }
    public function getFormF3()
    {
        echo 'word nog aan gewerkt 3';
    }

    public function getFormF4()
    {
        echo 'word nog aan gewerkt 4';
    }
    // ingevulde formulieren ophalen

    public function showFormF1()
    {
        if (isset($_GET["leerlingNummer"])) {

            $this->_leerlingnummer = $_GET["leerlingNummer"];
            // echo "p".$this->_leerlingnummer;
        } else {
            header("location: ../admin/");
        }
        $db = new Database();
        // Query
        $selectQuery = $db->con->prepare("SELECT `id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld`, `doorgroei_advies`, `veld_a_beoordeling`, `veld_b_beoordeling`, `veld_c_beoordeling` ,`veld_1_rating`, `veld_2_rating`, `veld_3_rating`, `veld_4_rating`, `veld_5_rating`, `veld_6_rating` FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->_leerlingnummer' LIMIT 1;");
        if ($selectQuery === false) {
            echo mysqli_error($db->con);
        }
        if ($selectQuery->execute()) {
            $selectQueryResult = $selectQuery->get_result();
            // Loop 
            while ($results = $selectQueryResult->fetch_assoc()) {
                // echo $selectQueryRow['my_column'];
                // var_dump($results);
                $formF1_array = [
                    "id" => $results["id"],
                    "student" => $results["student"],
                    "leerlingnummer" => $results["leerlingnummer"],
                    "coach" => $results["coach"],
                    "klas" => $results["klas"],
                    "datum" => $results["datum"],
                    "checkboxen" => $results["checkboxen"],
                    "vormgeven_veld" => $results["vormgeven_veld"],
                    "techniek_veld" => $results["techniek_veld"],
                    "ondernemend_veld" => $results["ondernemend_veld"],
                    "AVO_veld" => $results["AVO_veld"],
                    "softskills_veld" => $results["softskills_veld"],
                    "evtKwaliteiten_veld" => $results["evtKwaliteiten_veld"],
                    "doorgroei_advies" => $results["doorgroei_advies"],
                    "veld_a_beoordeling" => $results["veld_a_beoordeling"],
                    "veld_b_beoordeling" => $results["veld_b_beoordeling"],
                    "veld_c_beoordeling" => $results["veld_c_beoordeling"],
                    "veld_1_rating" => $results["veld_1_rating"],
                    "veld_2_rating" => $results["veld_2_rating"],
                    "veld_3_rating" => $results["veld_3_rating"],
                    "veld_4_rating" => $results["veld_4_rating"],
                    "veld_5_rating" => $results["veld_5_rating"],
                    "veld_6_rating" => $results["veld_6_rating"]
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


class sendForms extends Formulier
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
    public function checkIfStudentExistF1()
    {
        $db = new Database();
        if (isset($_POST["submit_form_AF1"])) {
            if (!empty($_POST["student_name_af1"]) && !empty($_POST["coach_name_af1"]) && !empty($_POST["leerlingNummer_af1"]) && !empty($_POST["klas_name_af1"]) && !empty($_POST["datum_name_af1"])) {
                $this->leerlingNummer = $_POST["leerlingNummer_af1"];
                $verifyStudent = mysqli_query($db->con, "SELECT leerlingnummer FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->leerlingNummer'");
                $checkInDataBase = mysqli_fetch_array($verifyStudent);
                if (is_array($checkInDataBase)) {
                    $this->afkorting_admin = $checkInDataBase['leerlingnummer'];
                    header("location: ../forms/formulieren_fase_1.php?formNumber=form1&&error=studentExist");
                } else {
                    $this->sendForm_AF1();
                }
            } else {
                echo "niet alles ingevuld";
            }
        }
    }

    private function sendForm_AF1()
    {
        $this->existStudent();
        $this->student = $_POST["student_name_af1"];
        $this->coach = $_POST["coach_name_af1"];
        $this->leerlingNummer = $_POST["leerlingNummer_af1"];
        $this->datum = $_POST["datum_name_af1"];
        $this->klas = $_POST["klas_name_af1"];
        $this->vormgeven = $_POST["vormgeven_name_af1"];
        $this->techniek = $_POST["techniek_name_af1"];
        $this->ondernemend = $_POST["ondernemend_name_af1"];
        $this->softskills = $_POST["softskills_name_af1"];
        $this->AVO = $_POST["avo_name_af1"];
        $this->evt_kwaliteiten = $_POST["evt_name_af1"];
        $this->doorgroei_advies = $_POST["doorgroeiAdvies_af1"];

        $veld_1_rating = $_POST["veld_1_rating"];
        $veld_2_rating = $_POST["veld_2_rating"];
        $veld_3_rating = $_POST["veld_3_rating"];
        $veld_4_rating = $_POST["veld_4_rating"];
        $veld_5_rating = $_POST["veld_5_rating"];
        $veld_6_rating = $_POST["veld_6_rating"];

        $veld_a_beoordeling = $_POST["veld_a_beoordeling"];
        $veld_b_beoordeling = $_POST["veld_b_beoordeling"];
        $veld_c_beoordeling = $_POST["veld_c_beoordeling"];
        // exit();
        $this->checkboxen = $_POST["checkbox_vakken"];
        $this->checkboxen_json = json_encode($this->checkboxen);
        $trimArray = json_encode(array_keys($this->checkboxen));

        $db = new Database();

        $this->mysqliQRY = mysqli_query($db->con, "INSERT INTO `opgeslagen_form_af1`(`student`, `leerlingnummer`, `coach`,  `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld`, `doorgroei_advies`, `veld_a_beoordeling`, `veld_b_beoordeling`, `veld_c_beoordeling` , `veld_1_rating`, `veld_2_rating`, `veld_3_rating`, `veld_4_rating`, `veld_5_rating`, `veld_6_rating`) VALUES ('$this->student','$this->leerlingNummer','$this->coach','$this->klas','$this->datum',' $trimArray','$this->vormgeven','$this->techniek','$this->ondernemend','$this->AVO','$this->softskills','$this->evt_kwaliteiten', '$this->doorgroei_advies', '$veld_a_beoordeling', '$veld_b_beoordeling', '$veld_c_beoordeling' ,'$veld_1_rating','$veld_2_rating','$veld_3_rating','$veld_4_rating','$veld_5_rating','$veld_6_rating' )");
        if ($this->mysqliQRY) {
            echo "Formulier opgeslagen";
            header("location: ../admin/studentInfo.php?leerlingNummer={$this->leerlingNummer}");
        }
    }
    private function existStudent()
    {
        $db = new Database();
        // $_POST["leerlingNummer_af1"];

        $this->leerlingNummer_af1 = $_POST["leerlingNummer_af1"];
        $checkStudent = mysqli_query($db->con, "SELECT leerlingnummer FROM `studenten` WHERE leerlingnummer = '$this->leerlingNummer'");
        $checkInDataBase = mysqli_fetch_array($checkStudent);
        if (is_array($checkInDataBase)) {
            $this->leerlingNummer = $checkInDataBase['leerlingnummer'];
            echo "student bestaat al";
        } else {
            $this->addStudent();
        }
    }
    private function addStudent()
    {


        $this->leerlingNummer = $_POST["leerlingNummer_af1"];
        $this->naam = $_POST["student_name_af1"];
        // $this->existStudent();
        $db = new Database();
        $addStudentQRY = mysqli_query($db->con, "INSERT INTO `studenten`( `leerlingnummer`, `naam`) VALUES ('$this->leerlingNummer','$this->naam')");
        if ($addStudentQRY) {
            echo "leerling toegevoegd";
        } else {
            "leerling niet toegevoegd";
        }
    }
}


class editForms extends Formulier{

    
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


            $veld_1_rating = $_POST["veld_1_rating"];
            $veld_2_rating = $_POST["veld_2_rating"];
            $veld_3_rating = $_POST["veld_3_rating"];
            $veld_4_rating = $_POST["veld_4_rating"];
            $veld_5_rating = $_POST["veld_5_rating"];
            $veld_6_rating = $_POST["veld_6_rating"];

            $veld_a_beoordeling = $_POST["veld_a_beoordeling"];
            $veld_b_beoordeling = $_POST["veld_b_beoordeling"];
            $veld_c_beoordeling = $_POST["veld_c_beoordeling"];

            $db = new Database();
            $this->mysqliQRY = mysqli_query($db->con, "UPDATE `opgeslagen_form_af1` SET `student`='$this->student',`coach`='$this->coach',`checkboxen`='$trimArray',`vormgeven_veld`='$this->vormgeven',`techniek_veld`='$this->techniek',`ondernemend_veld`='$this->ondernemend',`AVO_veld`='$this->AVO',`softskills_veld`=' $this->softskills',`evtKwaliteiten_veld`='$this->evt_kwaliteiten',`doorgroei_advies`='$this->doorgroei_advies',`veld_a_beoordeling`='$veld_a_beoordeling',`veld_b_beoordeling`='$veld_b_beoordeling',`veld_c_beoordeling`='$veld_c_beoordeling' ,`veld_1_rating`='$veld_1_rating',`veld_2_rating`='$veld_2_rating',`veld_3_rating`='$veld_3_rating',`veld_4_rating`='$veld_4_rating',`veld_5_rating`='$veld_5_rating',`veld_6_rating`='$veld_6_rating' WHERE leerlingnummer = '$_leerlingNummer'");
            if ($this->mysqliQRY) {
                echo "Formulier bewerkt";
                // header("location: ../admin/studentInfo.php?leerlingNummer={$this->leerlingNummer}");
            } else {
                echo 'error';
            }
        }
    }

}

