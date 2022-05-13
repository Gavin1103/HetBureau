<?php

include("../core/databaseConnection.php");
// include("./getForms/getFormFase1.php");
include '../functions/classes/formClass.php';
include '../functions/classes/checkboxenClass.php';
include '../functions/sendForms.php';
include '../functions/getklassen.php';

$database = new Database();
$getCheckboxFunction = new checkboxen();

$FormClass = new Formulier();
$getFormF1 = $FormClass->getFormF1();

$sendFormClass = new sendForms();
$sendFormFunction_AF1 = $sendFormClass->sendForm_AF1();

$getKlassen = new getKlassen();

// $leerlingNummer = $_POST["leerlingnummer_name_af1"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AssesmentForm</title>
    <link rel="stylesheet" href="assets/style/style.css" />
</head>

<body>
    <form method="POST">
        <div id="container_1">
            <div class="innerContainer">
                <header>
                    <h1><?php echo $getFormF1["AF1"]; ?></h1>
                    <p> <?php echo $getFormF1["tekst_intro"]; ?></p>
                </header>
                <div id="checklist">
                    <h2><?php echo $getFormF1["checklist_titel"]; ?></h2>
                    <p>samen met coach invullen.</p>
                </div>
                <p><?php echo $getFormF1["veld_student"]; ?></p>
                <input name="student_name_af1" type="text"/>
                <br />
                <p><?php echo $getFormF1["veld_leerlingnummer"]; ?></p>
                <input name="leerlingNummer" type="number" />
                <br />
                <p><?php echo $getFormF1["veld_coach"]; ?>:</p>
                <input name="coach_name_af1" type="text" />
                <br />
                <p><?php echo $getFormF1["veld_klas"] ?></p>
                <select name="klas_name" id="klas">
                    <?php
                    $getKlassenFunction = $getKlassen->selectKlas();
                    ?>
                </select>
                <p><?php echo $getFormF1["datum"]; ?></p>
                <input name="datum_name_af1" type="date" />
                <br />
                <ul>
                    <?php
                    $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1();
                    ?>
                </ul>
                <div id="prestaties">
                    <h2><?php echo $getFormF1["review_fase_1"]; ?></h2>
                    <p>
                        <?php echo $getFormF1["titel_docent_invullen"] ?>
                    </p>
                    <p>
                        <?php echo $getFormF1["review_fase_1_tekst"] ?>
                    </p>
                </div>
            </div>
        </div>
        <div id="container_2">
            <div class="innerContainer">
                <p><?php echo $getFormF1["vormgeven_beoordeling"] ?></p>
                <input name="vormgeven_name_af1" type="textarea" />
                <br />
                <p><?php echo $getFormF1["techniek_beoordeling"] ?>
                </p>
                <input name="techniek_name_af1" type="text" />
                <br />
                <p><?php echo $getFormF1["ondernemend_beoordeling"] ?></p>
                <input name="ondernemend_name_af1" type="text" />
                <br />
                <p><?php echo $getFormF1["softskills_beoordeling"] ?></p>
                <input name="softskills_name_af1" type="text" />
                <br />
                <p><?php echo $getFormF1["avo_beoordeling"] ?></p>
                <input name="avo_name_af1" type="text" />
                <br />
                <p><?php echo $getFormF1["bijzondere_kwaliteiten"] ?>:</p>
                <input name="evt_name_af1" type="text" />
                <br />
                <input type="submit" name="submit_form_AF1">
            </div>
        </div>
    </form>
</body>

</html>