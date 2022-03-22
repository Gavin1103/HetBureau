<?php
class getKlassen
{
    private $klas;
    function loopKlas()
    {
        $db = new Database();
        $sql = "SELECT id, klas FROM `klassen`";
        $qry = mysqli_query($db->con, $sql);
        
        if ($qry->num_rows > 0) {
            # code...
            while($this->klas = $qry->fetch_assoc()){

                echo $this->klas["klas"];
                echo "<br>";
                echo "<a href='#'>bewerken</a>";
                echo "<br>";
                echo "<br>";
            }

        }
    }
}
