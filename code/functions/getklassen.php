<?php
include("crudKlassen.php");


class getKlassen
{
    private $klas;

    function loopKlas()
    {
        $db = new Database();
        $crudklas = new crudklassen();
        $sql = "SELECT id, klas FROM `klassen`";
        $qry = mysqli_query($db->con, $sql);

        if ($qry->num_rows > 0) {
            # code...
            echo"<table border=1>";
	        echo "<tr bgcolor='#CCCCCC'>";
		    echo "<td>Id</td>";
		    echo "<td>Klas</td>";
		    echo "<td>edit</td>";
            echo "<td>delete</td>";
	        echo "</tr>";
            while($this->klas = $qry->fetch_assoc()){

                echo "<tr>";
                echo "<td>".$this->klas["id"]."</td>";
                echo "<td>".$this->klas["klas"]."</td>";
                echo "<td><a href=\"klasCRUD/editKlas.php?id=".$this->klas["id"]."\">Edit</a></td>";
                echo "<td><a href=\"klasCRUD/deleteklas.php?id=".$this->klas["id"]."\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
}
