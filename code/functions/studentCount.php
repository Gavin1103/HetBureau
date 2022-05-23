<?php

include_once dirname(__DIR__) . ("../core/databaseConnection.php");


class countstudent
{
    private $tablename;

    function __construct($tablename) {
        $this->tablename = $tablename;
    }

    public function countAll()
	{
        $db = new Database;

		$sql = "SELECT COUNT(*) as total FROM ".$this->tablename." ";
        $qry = mysqli_query($db->con, $sql);
        $data = mysqli_fetch_assoc($qry);
        return ($data['total']);
	}

    public function countklas($klas)
	{
        $db = new Database;

		$sql = "SELECT COUNT(*) as total FROM ".$this->tablename." WHERE `klas`='$klas'";
        $qry = mysqli_query($db->con, $sql);
        $data = mysqli_fetch_assoc($qry);
        return ($data['total']);
	}
}