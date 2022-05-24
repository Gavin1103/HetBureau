

<?php

echo $_GET["test"];

include '../functions/classes/userClass.php';
$studentClass = new StudentUser();
$searchStudentFunction = $studentClass->searchStudent();
// if (isset($searchStudentFunction["leerlingnummer"]) && isset($searchStudentFunction["naam"])) {
    echo "
<a style='text-decoration:none; color:white;' href='studentInfo.php?leerlingNummer={$searchStudentFunction['leerlingnummer']}'><div class='resultStudent'>
<div class='resultStudentLeft'>
<img src='../assets/Materiaal/img/foto2.png' alt=''>
</div>
<div class='resultStudentRight'>
<p>{$searchStudentFunction['leerlingnummer']}</p>
<p>{$searchStudentFunction['naam']}</p>
</div>
</div>
</a>";
// }else{
//     echo 'gebruiker niet gevonden';
// }

?>