<?php
class retrieveFormFase4
{
    public $con;

    private $id;
    private $AF4;
    private $tekst_intro;
    private $checklist_titel;
    private $veld_student;
    private $veld_leerlingnummer;
    private $veld_coach;
    private $datum;
    private $checkboxen_id;
    private $review_fase_4;
    private $titel_docent_invullen;
    private $review_fase_4_tekst;
    private $vormgeven_beoordeling;
    private $techniek_beoordeling;
    private $ondernemen_beoordeling;
    private $softskills_beoordeling;
    private $avo_beoordeling;
    private $bijzondere_kwaliteiten;
    private $terug_kopppelingsfase_4;
    private $deel_c_tekst_1;
    private $deel_c_tekst_2;
    private $deel_c_tekst_3;
    private $deel_c_tekst_4;
    private $doorgroei_advies;
    private $handtekening_assesor;
    private $handtekening_student;


    public function getFormFase4()
    {
        $db = new Database();
        $selectForm4_QRY = $db->con->prepare("SELECT id,
         AF4,
         tekst_intro,
         checklist_titel,
         veld_student,
         veld_leerlingnummer,
         veld_coach ,
         datum,
         checkboxen_id,
         review_fase_4,
         titel_docent_invullen ,
         review_fase_4_tekst,
         vormgeven_beoordeling,
         techniek_beoordeling,
         ondernemen_beoordeling,
         softskills_beoordeling,
         AVO_beoordeling,
         bijzondere_kwaliteiten,
         terug_koppelingsfase_4,
         deel_c_tekst_1,
         deel_c_tekst_2,
         deel_c_tekst_3,
         deel_c_tekst_4,
         doorgroei_advies,
         handtekening_assesor,
         handtekening_student FROM `assesment_form4`");
        if ($selectForm4_QRY === false) {
            echo mysqli_error($this->con);
        } else {
            $selectForm4_QRY->bind_result(
                $this->id,
                $this->AF4,
                $this->tekst_intro,
                $this->checklist_titel,
                $this->veld_student,
                $this->veld_leerlingnummer,
                $this->veld_coach,
                $this->datum,
                $this->checkboxen_id,
                $this->review_fase_4,
                $this->titel_docent_invullen,
                $this->review_fase_4_tekst,
                $this->vormgeven_beoordeling,
                $this->techniek_beoordeling,
                $this->ondernemen_beoordeling,
                $this->softskills_beoordeling,
                $this->avo_beoordeling,
                $this->bijzondere_kwaliteiten,
                $this->terug_kopppelingsfase_4,
                $this->deel_c_tekst_1,
                $this->deel_c_tekst_2,
                $this->deel_c_tekst_3,
                $this->deel_c_tekst_4,
                $this->doorgroei_advies,
                $this->handtekening_assesor,
                $this->handtekening_student
            );

            if ($selectForm4_QRY->execute()) {
                $selectForm4_QRY->store_result();
                while ($selectForm4_QRY->fetch()) {
                    $array = [
                        "student" => $this->id,
                        "afsluiting fase 4" => $this->AF4,
                        "tekst_intro" => $this->tekst_intro,
                        "checklist_titel" => $this->checklist_titel,
                        "student" => $this->veld_student,
                        "leerling nummer" => $this->veld_leerlingnummer,
                        "coach" => $this->veld_coach,
                        "datum" => $this->datum,
                        "checkboxen_id" => $this->checkboxen_id,
                        "Review_fase_1" => $this->review_fase_4,
                        "titel_docent_invullen" => $this->titel_docent_invullen,
                        "review_fase_1_tekst" => $this->review_fase_4_tekst,
                        "Vormgeven_beoordeling" => $this->vormgeven_beoordeling,
                        "techniek_beoordeling" => $this->techniek_beoordeling,
                        "tools_beoordeling" => $this->ondernemen_beoordeling,
                        "softskills_beoordeling" => $this->softskills_beoordeling,
                        "AVO_beoordeling" => $this->avo_beoordeling,
                        "bijzondere_kwaliteiten" => $this->bijzondere_kwaliteiten,
                        "terug_koppelingsfase_2" => $this->terug_kopppelingsfase_4,
                        "deel_c_tekst_1" => $this->deel_c_tekst_1,
                        "deel_c_tekst_2" => $this->deel_c_tekst_2,
                        "deel_c_tekst_3" => $this->deel_c_tekst_3,
                        "deel_c_tekst_4" => $this->deel_c_tekst_4,
                        "Doorgroei_advies" => $this->doorgroei_advies,
                        "handtekening_assessor" => $this->handtekening_assesor,
                        "handtekening_student" => $this->handtekening_student
                    ];
                }
                return $array;
            }
            $selectForm4_QRY->close();
        }
    }
}

