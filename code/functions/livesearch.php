<?php
include_once dirname(__DIR__) . ("../core/databaseConnection.php");


$q = $_REQUEST["q"];

if ($q !== "") {
    $db = new Database;

    $keyword =  trim($q) ;
    $query ="SELECT leerlingnummer, naam FROM studenten WHERE leerlingnummer LIKE '%".$keyword."%'";
    // $values = $search->query($qry);
    $qry = mysqli_query($db->con, $query);
    if($qry->num_rows != 0)
    {
        while($row = $qry->fetch_assoc())
        { 
            // echo $row['leerlingnummer']." ". $row['naam']."<br>";
            echo "<a style='text-decoration:none; color:white;'><div class='resultStudent'>";
            echo "<div class='resultStudentLeft'>";
            echo "<img src='../assets/Materiaal/img/foto2.png' alt=''>";
            echo "</div>";
            echo "<div class='resultStudentRight'>";
            echo "<p>". $row['leerlingnummer'] ."</p>";
            echo "<p>". $row['naam'] ."</p>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
        } 
    }
    else
        {
            echo 'No Results for :"'.$_GET['keyword'].'"';
        }
}

?>