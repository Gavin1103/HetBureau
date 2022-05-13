<?php
include_once dirname(__DIR__) . ("../core/databaseConnection.php");



class crudformulieren
{
    private $tablename;

    function __construct($tablename) {
        $this->tablename = $tablename;
    }

    public function update($id, $AF1, $tekst_intro, $review_fase_1, $review_fase_1_tekst)
	{
        $db = new Database;

        // echo $AF1;
		$sql = "UPDATE ".$this->tablename." 
        SET `AF1`='$AF1', `tekst_intro`='$tekst_intro', `review_fase_1`='$review_fase_1', `review_fase_1_tekst`='$review_fase_1_tekst' WHERE id='$id'";
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
