<?php
include_once dirname(__DIR__) . ("../core/databaseConnection.php");




$stmt = mysqli_prepare($db->con, $sql);
$stmt->bind_param("s", $_GET['q']);
echo $_GET['q'];
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($lnum, $lnaam);
$stmt->fetch();
$stmt->close();

echo $lnum;
echo $lnaam;

// if (isset($_POST["searchSubmit"])) {
    // if (isset($lnum)) {
echo "<a style='text-decoration:none; color:white;' href='studentInfo.php?leerlingNummer={$searchStudentFunction['leerlingnummer']}'><div class='resultStudent'>";
echo "<div class='resultStudentLeft'>";
echo "<img src='../assets/Materiaal/img/foto2.png' alt=''>";
echo "</div>";
echo "<div class='resultStudentRight'>";
echo "<p>". $lnum ."</p>";
echo "<p>". $lnaam ."</p>";
echo "</div>";
echo "</div>";
echo "</a>";

function fetch_data(){
    $db = new Database();
    
    $sql = "SELECT leerlingnummer, naam FROM studenten WHERE leerlingnummer = ?";

}
    // }else{
    //     echo 'gebruiker niet gevonden';

    // }
        // }

?>