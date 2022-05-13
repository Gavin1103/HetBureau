<?php
include("../functions/getAccount.php");
$getAdminAccountClass = new getAccountInfo();

$searchStudentFunction = $getAdminAccountClass->searchStudent();
// if (isset($searchStudentFunction["leerlingnummer"]) && isset($searchStudentFunction["student"])) {
    echo $searchStudentFunction["leerlingnummer"];
    echo $searchStudentFunction["student"];
    echo "<a href='studentInfo.php?leerlingNummer={$searchStudentFunction['leerlingnummer']}'>Formulieren</a>";
// }else{
//     echo 'fout';
// }
