<?php
class retrieveFormFase1
{

    private $id;
    private $AF1;
    private $tekst_intro;
    private $checklist;
    private $student;
    private $leerling_nummer;
    private $coach;
    private $datum;
    private $checkboxen_id;
    private $Review_fase_1;
    private $titel_docent_invullen;
    private $review_fase_1_tekst;
    private $Vormgeven_beoordeling;
    private $techniek_beoordeling;
    private $ondernemend_beoordeling;
    private $softskills_beoordeling;
    private $AVO_beoordeling;
    private $evt_kwaliteiten;
    private $terug_koppelingsfase_1;
    private $deel_c_tekst_1;
    private $deel_c_tekst_2;
    private $deel_c_tekst_3;
    private $Doorgroei_advies;
    private $handtekening_assessor;
    private $handtekening_student;

    public $con;
    
    public function getFormFase1()
    {
        $db = new Database();

        $selectForm1_QRY = $db->con->prepare("
        SELECT id,
         AF1,
         tekst_intro,
         checklist_titel,
         veld_student,
         veld_leerlingnummer,
         veld_coach,
         datum,
         checkboxen_id,
         review_fase_1,
         titel_docent_invullen ,
        review_fase_1_tekst,
         vormgeven_beoordeling,
         techniek_beoordeling,
         ondernemend_beoordeling,
         softskills_beoordeling,
         avo_beoordeling,
         bijzondere_kwaliteiten,
         terug_koppelingsfase_1,
         deel_c_tekst_1,
         deel_c_tekst_2,
         deel_c_tekst_3,
         doorgroei_advies,
         handtekening_assessor,
         handtekening_student FROM `assesment_form1` ");
        if ($selectForm1_QRY === false) {
            echo mysqli_error($this->con);
        } else {
            $selectForm1_QRY->bind_result(

                $this->id,
                $this->AF1,
                $this->tekst_intro,
                $this->checklist,
                $this->student,
                $this->leerling_nummer,
                $this->coach,
                $this->datum,
                $this->checkboxen_id,
                $this->Review_fase_1,
                $this->titel_docent_invullen,
                $this->review_fase_1_tekst,
                $this->Vormgeven_beoordeling,
                $this->techniek_beoordeling,
                $this->ondernemend_beoordeling,
                $this->softskills_beoordeling,
                $this->AVO_beoordeling,
                $this->evt_kwaliteiten,
                $this->terug_koppelingsfase_1,
                $this->deel_c_tekst_1,
                $this->deel_c_tekst_2,
                $this->deel_c_tekst_3,
                $this->Doorgroei_advies,
                $this->handtekening_assessor,
                $this->handtekening_student
            );

            if ($selectForm1_QRY->execute()) {
                $selectForm1_QRY->store_result();
                while ($selectForm1_QRY->fetch()) {
                    $array = [
                        "student" => $this->id,
                        "afsluiting fase 1" => $this->AF1,
                        "tekst_intro" => $this->tekst_intro,
                        "checklist_titel" => $this->checklist,
                        "student" => $this->student,
                        "leerling nummer" => $this->leerling_nummer,
                        "coach" => $this->coach,
                        "datum" => $this->datum,
                        "checkboxen_id" => $this->checkboxen_id,
                        "Review_fase_1" => $this->Review_fase_1,
                        "titel_docent_invullen" => $this->titel_docent_invullen,
                        "review_fase_1_tekst" => $this->review_fase_1_tekst,
                        "vormgeven_beoordeling" => $this->Vormgeven_beoordeling,
                        "techniek_beoordeling" => $this->techniek_beoordeling,
                        "ondernemend_beoordeling" => $this->ondernemend_beoordeling,
                        "softskills_beoordeling" => $this->softskills_beoordeling,
                        "AVO_beoordeling" => $this->AVO_beoordeling,
                        "evt_kwaliteiten" => $this->evt_kwaliteiten,
                        "terug_koppelingsfase_1" => $this->terug_koppelingsfase_1,
                        "deel_c_tekst_1" => $this->deel_c_tekst_1,
                        "deel_c_tekst_2" => $this->deel_c_tekst_2,
                        "deel_c_tekst_3" => $this->deel_c_tekst_3,
                        "Doorgroei_advies" => $this->Doorgroei_advies,
                        "handtekening_assessor" => $this->handtekening_assessor,
                        "handtekening_student" => $this->handtekening_student
                    ];
                }
                return $array;
            }
            $selectForm1_QRY->close();
        }
    }
}

