<?php
include_once dirname(__DIR__) . ("../core/databaseConnection.php");



class crudklassen
{
    private $tablename= "klassen";
    private $_sql;

    public function create($klas)
    {
        $db = new Database;

        $sql = "INSERT INTO ".$this->tablename." (klas) VALUES ('$klas')";
        $qry = mysqli_query($db->con, $this->_sql);
        // echo $klas;
        // echo $sql;
        // echo $qry;

        if ($qry) {
			echo 'Data added in database.';
		}
    }

    public function read($id)
    {
        $db = new Database;

        $query = "SELECT * FROM " .$this->tableName . " WHERE id=$id";
        $qry = mysqli_query($db->con, $this->_sql);
    }

    public function read_all($id)
    {
        $db = new Database;

		$query = "SELECT * FROM " .$this->tableName;
        $qry = mysqli_query($db->con, $this->_sql);
    }

    public function update($klas, $id)
	{
        $db = new Database;

		$sql  = "UPDATE ".$this->tablename." SET `klas`='$klas' WHERE id='$id'";
        $qry = mysqli_query($db->con, $sql);
        // echo $klas;
        // echo $sql;
        // echo $qry;
        
		if ($qry) {
			echo 'Data updated in database.';
		}
	}

    public function delete($id)
    {
        $db = new Database;
        // echo $id;
        $sql = "DELETE FROM ".$this->tablename." WHERE id=$id";
        // echo $sql;
        $qry = mysqli_query($db->con, $sql);
        // echo $qry;
        if ($qry) {
			echo 'Data deleted in database.';
		}
    }
}
