<?php

include_once dirname(__DIR__) . ("../../core/databaseConnection.php");
include("../../functions/crudFormulieren.php");
include '../../functions/classes/formClass.php';

$FormClass = new Formulier();
$getFormF1 = $FormClass->getFormF1();


if (isset($_POST['submit']) && $_POST['submit'] != '') {
	$database = new Database();
	// initialize object
        
	$crudformulieren = new crudformulieren("assesment_form1");
	// read products will be here
	// query products

    // $id = $_GET['id'];
    $id = 1;
	$AF1 = mysqli_real_escape_string($db->con, $_POST['AF1']);
	$tekst_intro = mysqli_real_escape_string($db->con, $_POST['tekst_intro']);
    $checklist_titel = mysqli_real_escape_string($db->con, $_POST['checklist_titel']);
	$veld_student = mysqli_real_escape_string($db->con, $_POST['veld_student']);
	$veld_leerlingnummer = mysqli_real_escape_string($db->con, $_POST['veld_leerlingnummer']);
	$veld_coach = mysqli_real_escape_string($db->con, $_POST['veld_coach']);
	$veld_klas = mysqli_real_escape_string($db->con, $_POST['veld_klas']);
	$datum = mysqli_real_escape_string($db->con, $_POST['datum']);

	$review_fase_1 = mysqli_real_escape_string($db->con, $_POST['review_fase_1']);
	$review_fase_1_tekst = mysqli_real_escape_string($db->con, $_POST['techniek_beoordeling']);
	$vormgeven_beoordeling = mysqli_real_escape_string($db->con, $_POST['vormgeven_beoordeling']);
	$techniek_beoordeling = mysqli_real_escape_string($db->con, $_POST['techniek_beoordeling']);
	$ondernemend_beoordeling = mysqli_real_escape_string($db->con, $_POST['ondernemend_beoordeling']);
	$avo_beoordeling = mysqli_real_escape_string($db->con, $_POST['avo_beoordeling']);
	$softskills_beoordeling = mysqli_real_escape_string($db->con, $_POST['softskills_beoordeling']);
	$bijzondere_kwaliteiten = mysqli_real_escape_string($db->con, $_POST['bijzondere_kwaliteiten']);



	echo "$AF1 is aangepast";
	echo "<br>";

	$result = $crudformulieren->update($id, $AF1, $tekst_intro, $checklist_titel, $veld_student, $veld_leerlingnummer, $veld_coach, $veld_klas, $datum, $review_fase_1, $review_fase_1_tekst, $vormgeven_beoordeling, $techniek_beoordeling, $ondernemend_beoordeling, $avo_beoordeling, $softskills_beoordeling, $bijzondere_kwaliteiten);
	// form legen
    echo $result;
    if (!$result){
        // header("location: ../../admin/index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form editen</title>
</head>

<body>
    <a href="../../admin\index.php">back to admin</a>
    <form action="#" method="post">
        Naam van form veranderen:<input type="text" name="AF1" id="" value="<?php echo $getFormF1["AF1"]; ?>"><br>
        <!-- grote tekstvelden omzetten naar textarea's -->
        Info tekst van form:<input type="text" name="tekst_intro" id="" value="<?php echo $getFormF1["tekst_intro"]; ?>"><br>
        Checklist titel:<input type="text" name="checklist_titel" id="" value="<?php echo $getFormF1["checklist_titel"]; ?>"><br>
        Student:<input type="text" name="veld_student" id="" value="<?php echo $getFormF1["veld_student"]; ?>"><br>
        Leerling nummer:<input type="text" name="veld_leerlingnummer" id="" value="<?php echo $getFormF1["veld_leerlingnummer"]; ?>"><br>
        coach:<input type="text" name="veld_coach" id="" value="<?php echo $getFormF1["veld_coach"]; ?>"><br>
        <!--klas en datum hoeft misschien niet -->
        klas:<input type="text" name="veld_klas" id="" value="<?php echo $getFormF1["veld_klas"]; ?>"><br>
        datum:<input type="text" name="datum" id="" value="<?php echo $getFormF1["datum"]; ?>"><br>

        review_fase_1:<input type="text" name="review_fase_1" id="" value="<?php echo $getFormF1["review_fase_1"]; ?>"><br>
        titel_docent_invullen:<input type="text" name="titel_docent_invullen" id="" value="<?php echo $getFormF1["titel_docent_invullen"]; ?>"><br>
        review_fase_1_tekst:<input type="text" name="review_fase_1_tekst" id="" value="<?php echo $getFormF1["review_fase_1_tekst"]; ?>"><br>

        vormgeven_veld:<input type="text" name="vormgeven_beoordeling" id="" value="<?php echo $getFormF1["vormgeven_beoordeling"]; ?>"><br>
        techniek:<input type="text" name="techniek_beoordeling" id="" value="<?php echo $getFormF1["techniek_beoordeling"]; ?>"><br>
        ondernemend:<input type="text" name="ondernemend_beoordeling" id="" value="<?php echo $getFormF1["ondernemend_beoordeling"]; ?>"><br>
        AVO:<input type="text" name="avo_beoordeling" id="" value="<?php echo $getFormF1["avo_beoordeling"]; ?>"><br>
        softskills:<input type="text" name="softskills_beoordeling" id="" value="<?php echo $getFormF1["softskills_beoordeling"]; ?>"><br>
        evtKwaliteiten_veld:<input type="text" name="bijzondere_kwaliteiten" id="" value="<?php echo $getFormF1["bijzondere_kwaliteiten"]; ?>"><br>

        
        <input type="submit" name="submit" value="submit"><br>
	</form>
</body>


</html>