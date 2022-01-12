<?php
class retrieveFormFase4
{
    public $con;
    function __construct($db = null)
    {
        $this->con = $db;
    }
    public function getFormFase4()
    {
        $selectForm4_QRY = $this->con->prepare("SELECT id, AF4, tekst_intro, checklist_titel, veld_student, veld_leerlingnummer, veld_coach ,datum, checkboxen_id, review_fase_4, titel_docent_invullen ,review_fase_4_tekst, vormgeven_beoordeling, techniek_beoordeling, ondernemen_beoordeling, softskills_beoordeling, AVO_beoordeling, bijzondere_kwaliteiten, terug_koppelingsfase_4, deel_c_tekst_1, deel_c_tekst_2, deel_c_tekst_3, deel_c_tekst_4, doorgroei_advies, handtekening_assesor, handtekening_student FROM `assesment_form4`");
        if ($selectForm4_QRY === false) {
            echo mysqli_error($this->con); 
        } else {
            $selectForm4_QRY->bind_result($id, $AF4, $tekst_intro, $checklist_titel, $veld_student, $veld_leerlingnummer, $veld_coach, $datum, $checkboxen_id, $review_fase_4, $titel_docent_invullen ,$review_fase_4_tekst, $vormgeven_beoordeling, $techniek_beoordeling, $ondernemen_beoordeling, $softskills_beoordeling, $avo_beoordeling, $bijzondere_kwaliteiten,$terug_kopppelingsfase_4, $deel_c_tekst_1, $deel_c_tekst_2, $deel_c_tekst_3, $deel_c_tekst_4 ,$doorgroei_advies, $handtekening_assesor, $handtekening_student);
            if ($selectForm4_QRY->execute()) {
                $selectForm4_QRY->store_result();
                while ($selectForm4_QRY->fetch()) {
                    $array = [
                        "student" => $id,
                        "afsluiting fase 4" => $AF4,
                        "tekst_intro" => $tekst_intro,
                        "checklist_titel" => $checklist_titel,
                        "student" => $veld_student,
                        "leerling nummer" => $veld_leerlingnummer,
                        "coach" => $veld_coach,
                        "datum" => $datum,
                        "checkboxen_id" => $checkboxen_id,
                        "Review_fase_1" => $review_fase_4,
                        "titel_docent_invullen" => $titel_docent_invullen,
                        "review_fase_1_tekst" => $review_fase_4_tekst,
                        "Vormgeven_beoordeling" => $vormgeven_beoordeling,
                        "techniek_beoordeling" => $techniek_beoordeling,
                        "tools_beoordeling" => $ondernemen_beoordeling,
                        "softskills_beoordeling" => $softskills_beoordeling,
                        "AVO_beoordeling" => $avo_beoordeling,
                        "bijzondere_kwaliteiten" => $bijzondere_kwaliteiten,
                        "terug_koppelingsfase_2" => $terug_kopppelingsfase_4,
                        "deel_c_tekst_1" => $deel_c_tekst_1,
                        "deel_c_tekst_2" => $deel_c_tekst_2,
                        "deel_c_tekst_3" => $deel_c_tekst_3,
                        "deel_c_tekst_4" => $deel_c_tekst_4,
                        "Doorgroei_advies" => $doorgroei_advies,
                        "handtekening_assessor" => $handtekening_assesor,
                        "handtekening_student" => $handtekening_student
                    ];
                }
                return $array;
            }
            $selectForm4_QRY->close();
        }
    }  
}
$getForm = new retrieveFormFase4();