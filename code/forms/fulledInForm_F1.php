<?php

include "../functions/showForm.php";
include("../core/databaseConnection.php");
include("./getForms/getFormFase1.php");
include './getForms/getCheckBoxen.php';
include '../functions/sendForms.php';
include '../functions/getklassen.php';

$database = new Database();
$getForm = new retrieveFormFase1();

$executeForm = $getForm->getFormFase1();
$getCheckboxFunction = new checkboxen();

$sendFormClass = new sendForms();
$sendFormFunction_AF1 = $sendFormClass->sendForm_AF1();


$showFormClass = new showForm();
$showFormF1 = $showFormClass->showFormF1();

// echo $sendFormClass["id"];


$getKlassen = new getKlassen();

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
    <form method="POST" action="#">
        <div id="container_1">
            <div class="innerContainer">
                <header>
                    <h1><?php echo $executeForm["afsluiting fase 1"]; ?></h1>
                    <p> <?php echo $executeForm["tekst_intro"]; ?></p>
                </header>
                <div id="checklist">
                    <h2><?php echo $executeForm["checklist_titel"]; ?></h2>
                    <p>samen met coach invullen.</p>
                </div>
                <p><?php echo $executeForm["student"]; ?></p>
                <input name="student_name_af1" type="text" value="<?php echo $showFormF1["student"] ?>" />
                <br />
                <p><?php echo $executeForm["leerling nummer"]; ?></p>
                <input name="leerlingnummer_name_af1" type="number" value="<?php echo $showFormF1["leerlingnummer"] ?>" />
                <br />
                <p><?php echo $executeForm["coach"]; ?></p>
                <input name="coach_name_af1" type="text" value="<?php echo $showFormF1["coach"] ?>" />
                <br />
                <p><?php echo $executeForm["klas"] ?></p>
                <select name="klas_name" id="klas">
                    <?php
                    $getKlassenFunction = $getKlassen->selectKlas();
                    ?>
                </select>
                <p><?php echo $executeForm["datum"]; ?></p>
                <input name="datum_name_af1" value="<?php echo $showFormF1["datum"] ?>" type="date" />
                <br />
                <ul>
                    <?php
                    // echo "<pre>";
                
                    $checkboxen_true = (array) json_decode($showFormF1["checkboxen"]);
                    // var_dump($checkboxen_true);
                    $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1($checkboxen_true);
                    // echo $showFormF1["checkboxen"];
                    ?>
                </ul>
                <div id="prestaties">
                    <h2><?php echo $executeForm["Review_fase_1"]; ?></h2>
                    <p>
                        <?php echo $executeForm["titel_docent_invullen"] ?>
                    </p>
                    <p>
                        <?php echo $executeForm["review_fase_1_tekst"] ?>
                    </p>
                </div>
            </div>
        </div>
        <div id="container_2">
            <div class="innerContainer">
                <p><?php echo $executeForm["vormgeven_beoordeling"] ?></p>
                <input name="vormgeven_name_af1" type="textarea" value="<?php echo $showFormF1["vormgeven_veld"] ?>" />
                <br />
                <p><?php echo $executeForm["techniek_beoordeling"] ?>
                </p>
                <input name="techniek_name_af1" value="<?php echo $showFormF1["techniek_veld"] ?>" type="text" />
                <br />
                <p><?php echo $executeForm["ondernemend_beoordeling"] ?></p>
                <input name="ondernemend_name_af1" value="<?php echo $showFormF1["ondernemend_veld"] ?>" type="text" />
                <br />
                <p><?php echo $executeForm["softskills_beoordeling"] ?></p>
                <input name="softskills_name_af1" value="<?php echo $showFormF1["softskills_veld"] ?>" type="text" />
                <br />
                <p><?php echo $executeForm["AVO_beoordeling"] ?></p>
                <input name="avo_name_af1" value="<?php echo $showFormF1["AVO_veld"] ?>" type="text" />
                <br />
                <p><?php echo $executeForm["evt_kwaliteiten"] ?>:</p>
                <input name="evt_name_af1" value="<?php echo $showFormF1["evtKwaliteiten_veld"] ?>" type="text" />
                <br />
                <input type="submit" value="bewerken" name="submit_form_AF1">
            </div>
        </div>
    </form>
</body>

</html>