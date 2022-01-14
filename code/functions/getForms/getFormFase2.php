<?php
class retrieveFormFase2
{
    public $con;

    private $id;
    private $AF2;
    private $tekst_intro;
    private $checklist_titel;
    private $veld_student;
    private $veld_leerlingnummer;
    private $veld_coach;
    private $datum;
    private $checkboxen_id;
    private $review_fase_2;
    private $titel_docent_invullen;
    private $review_fase_2_tekst;
    private $vormgeven_beoordeling;
    private $techniek_beoordeling;
    private $tools_beoordeling;
    private $softskills_beoordeling;
    private $avo_beoordeling;
    private $bijzondere_kwaliteiten;
    private $terug_kopppelingsfase_2;
    private $deel_c_tekst_1;
    private $deel_c_tekst_2;
    private $deel_c_tekst_3;
    private $doorgroei_advies;
    private $handtekening_assesor;
    private $handtekening_student;


 
    public function getFormFase2()
    {
        $db = new Database();
        $selectForm1_QRY = $db->con->prepare("SELECT id,
         AF2,
         tekst_intro,
         checklist_titel,
         veld_student,
         veld_leerlingnummer,
         veld_coach,
         datum,
         checkboxen_id,
         review_fase_2,
         titel_docent_invullen ,
         review_fase_2_tekst,
         vormgeven_beoordeling,
         techniek_beoordeling,
         tools_beoordeling,
         softskills_beoordeling,
         avo_beoordeling,
         bijzondere_kwaliteiten,
         terug_kopppelingsfase_2,
         deel_c_tekst_1,
         deel_c_tekst_2,
         deel_c_tekst_3,
         doorgroei_advies,
         handtekening_assesor,
         handtekening_student 
         FROM `assesment_form2` WHERE 1;");
         
        if ($selectForm1_QRY === false) {
            echo mysqli_error($this->con);
        } else {
            $selectForm1_QRY->bind_result(

                $this->id,
                $this->AF2,
                $this->tekst_intro,
                $this->checklist_titel,
                $this->veld_student,
                $this->veld_leerlingnummer,
                $this->veld_coach,
                $this->datum,
                $this->checkboxen_id,
                $this->review_fase_2,
                $this->titel_docent_invullen,
                $this->review_fase_2_tekst,
                $this->vormgeven_beoordeling,
                $this->techniek_beoordeling,
                $this->tools_beoordeling,
                $this->softskills_beoordeling,
                $this->avo_beoordeling,
                $this->bijzondere_kwaliteiten,
                $this->terug_kopppelingsfase_2,
                $this->deel_c_tekst_1,
                $this->deel_c_tekst_2,
                $this->deel_c_tekst_3,
                $this->doorgroei_advies,
                $this->handtekening_assesor,
                $this->handtekening_student
            );

            if ($selectForm1_QRY->execute()) {
                $selectForm1_QRY->store_result();
                while ($selectForm1_QRY->fetch()) {
                    $array = [
                        "student" => $this->id,
                        "afsluiting fase 1" => $this->AF2,
                        "tekst_intro" => $this->tekst_intro,
                        "checklist_titel" => $this->checklist_titel,
                        "student" => $this->veld_student,
                        "leerling nummer" => $this->veld_leerlingnummer,
                        "coach" => $this->veld_coach,
                        "datum" => $this->datum,
                        "checkboxen_id" => $this->checkboxen_id,
                        "Review_fase_1" => $this->review_fase_2,
                        "titel_docent_invullen" => $this->titel_docent_invullen,
                        "review_fase_1_tekst" => $this->review_fase_2_tekst,
                        "Vormgeven_beoordeling" => $this->vormgeven_beoordeling,
                        "techniek_beoordeling" => $this->techniek_beoordeling,
                        "tools_beoordeling" => $this->tools_beoordeling,
                        "softskills_beoordeling" => $this->softskills_beoordeling,
                        "AVO_beoordeling" => $this->avo_beoordeling,
                        "bijzondere_kwaliteiten" => $this->bijzondere_kwaliteiten,
                        "terug_koppelingsfase_2" => $this->terug_kopppelingsfase_2,
                        "deel_c_tekst_1" => $this->deel_c_tekst_1,
                        "deel_c_tekst_2" => $this->deel_c_tekst_2,
                        "deel_c_tekst_3" => $this->deel_c_tekst_3,
                        "Doorgroei_advies" => $this->doorgroei_advies,
                        "handtekening_assessor" => $this->handtekening_assesor,
                        "handtekening_student" => $this->handtekening_student
                    ];
                }
                return $array;
            }
            $selectForm1_QRY->close();
        }
    }
}

