<?php
include_once dirname(__DIR__) . ("../core/databaseConnection.php");



class crudformulieren
{
    private $tablename;

    function __construct($tablename) {
        $this->tablename = $tablename;
    }

    public function update($id, $AF1, $tekst_intro, $checklist_titel, $veld_student, $veld_leerlingnummer, $veld_coach, $veld_klas, $datum, $review_fase_1, $review_fase_1_tekst, $vormgeven_beoordeling, $techniek_beoordeling, $ondernemend_beoordeling, $avo_beoordeling, $softskills_beoordeling, $bijzondere_kwaliteiten)
	{
        $db = new Database;

        // echo $AF1;
		$sql = "UPDATE ".$this->tablename." 
        SET `AF1`='$AF1', `tekst_intro`='$tekst_intro', `checklist_titel`='$checklist_titel', `veld_student`='$veld_student',`veld_leerlingnummer`='$veld_leerlingnummer', `veld_coach`='$veld_coach',`veld_klas`='$veld_klas', `datum`='$datum', `review_fase_1`='$review_fase_1', `review_fase_1_tekst`='$review_fase_1_tekst', `vormgeven_beoordeling`='$vormgeven_beoordeling', `techniek_beoordeling`='$techniek_beoordeling', `ondernemend_beoordeling`='$ondernemend_beoordeling', `avo_beoordeling`='$avo_beoordeling', `softskills_beoordeling`='$softskills_beoordeling', `bijzondere_kwaliteiten`='$bijzondere_kwaliteiten' WHERE id='$id'";
        $qry = mysqli_query($db->con, $sql);

        // echo "<br>";
        // echo $sql;
        // echo "<br>";
        // echo "<br>";
        // echo $qry;

		if ($qry) {
			echo 'Data updated in database.';
		}
	}

    // public function delete($id)
    // {
    //     $db = new Database;
    //     // echo $id;
    //     $sql = "DELETE FROM ".$this->tablename." WHERE id=$id";
    //     // echo $sql;
    //     $qry = mysqli_query($db->con, $sql);
    //     // echo $qry;
    //     if ($qry) {
	// 		echo 'Data deleted in database.';
	// 	}
    // }
}
