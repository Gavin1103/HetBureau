<?php
class retrieveFormFase1
{
    public $con;
    function __construct($db = null)
    {
        $this->con = $db;
    }
    public function getFormFase1()
    {
        $selectForm1_QRY = $this->con->prepare("
        SELECT id, AF1, tekst_intro, checklist_titel, veld_student, veld_leerlingnummer, veld_coach, datum, checkboxen_id, review_fase_1, titel_docent_invullen ,review_fase_1_tekst, vormgeven_beoordeling, techniek_beoordeling, ondernemend_beoordeling, softskills_beoordeling, avo_beoordeling, bijzondere_kwaliteiten, terug_koppelingsfase_1, deel_c_tekst_1, deel_c_tekst_2, deel_c_tekst_3, doorgroei_advies, handtekening_assessor, handtekening_student FROM `assesment_form1` ");
        if ($selectForm1_QRY === false) {
            echo mysqli_error($this->con);
        } else {
            $selectForm1_QRY->bind_result(

                $id,
                $AF1,
                $tekst_intro,
                $checklist,
                $student,
                $leerling_nummer,
                $coach,
                $datum,
                $checkboxen_id,
                $Review_fase_1,
                $titel_docent_invullen,
                $review_fase_1_tekst,
                $Vormgeven_beoordeling,
                $techniek_beoordeling,
                $ondernemend_beoordeling,
                $softskills_beoordeling,
                $AVO_beoordeling,
                $evt_kwaliteiten,
                $terug_koppelingsfase_1,
                $deel_c_tekst_1,
                $deel_c_tekst_2,
                $deel_c_tekst_3,
                $Doorgroei_advies,
                $handtekening_assessor,
                $handtekening_student
            );

            if ($selectForm1_QRY->execute()) {
                $selectForm1_QRY->store_result();
                while ($selectForm1_QRY->fetch()) {
                    $array = [
                        "student" => $id,
                        "afsluiting fase 1" => $AF1,
                        "tekst_intro" => $tekst_intro,
                        "checklist_titel" => $checklist,
                        "student" => $student,
                        "leerling nummer" => $leerling_nummer,
                        "coach" => $coach,
                        "datum" => $datum,
                        "checkboxen_id" => $checkboxen_id,
                        "Review_fase_1" => $Review_fase_1,
                        "titel_docent_invullen" => $titel_docent_invullen,
                        "review_fase_1_tekst" => $review_fase_1_tekst,
                        "Vormgeven_beoordeling" => $Vormgeven_beoordeling,
                        "techniek_beoordeling" => $techniek_beoordeling,
                        "ondernemend_beoordeling" => $ondernemend_beoordeling,
                        "softskills_beoordeling" => $softskills_beoordeling,
                        "AVO_beoordeling" => $AVO_beoordeling,
                        "evt_kwaliteiten" => $evt_kwaliteiten,
                        "terug_koppelingsfase_1" => $terug_koppelingsfase_1,
                        "deel_c_tekst_1" => $deel_c_tekst_1,
                        "deel_c_tekst_2" => $deel_c_tekst_2,
                        "deel_c_tekst_3" => $deel_c_tekst_3,
                        "Doorgroei_advies" => $Doorgroei_advies,
                        "handtekening_assessor" => $handtekening_assessor,
                        "handtekening_student" => $handtekening_student
                    ];
                }
                return $array;
            }
            $selectForm1_QRY->close();
        }
    }
}
$getForm = new retrieveFormFase1();
