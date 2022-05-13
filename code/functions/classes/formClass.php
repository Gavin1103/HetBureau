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
        $selectQuery = $db->con->prepare("SELECT `id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld` FROM `opgeslagen_form_af1` WHERE leerlingnummer = '$this->_leerlingnummer' LIMIT 1;");
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
                ];
                // var_dump($formF1_array);
                return $formF1_array;
            }
        } else {
            echo mysqli_error($db->con);
            echo 'asdfsafdsaf';
        }
    }

    // checken of formulier van deze leerling bestaat

    public function CheckFormF1()
    {
        if (isset($_GET["leerlingNummer"])) {
            // $db = new Database();
            $this->_leerlingnummer = $_GET["leerlingNummer"];
            echo "<div class='boxtext'><a href='../forms/fulledInForm_F1.php?formNumber=form1&leerlingNummer={$this->_leerlingnummer}'>Fase 1 Assessmentformulier</a></div>";
        } else {
            header("location: ../admin/?error=geenstudentNummer");
        }
    }
}
