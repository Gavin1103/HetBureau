<?php

include("../core/databaseConnection.php");
include("./getForms/getFormFase1.php");

$database = new Database();

$getForm = new retrieveFormFase1();
$executeForm = $getForm->getFormFase1();



// echo "<pre>";
// var_dump($executeForm);
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
            <form action="POST">
                <p><?php echo $executeForm["student"]; ?></p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["leerling nummer"]; ?></p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["coach"]; ?>:</p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["datum"]; ?></p>
                <input type="text" />
                <br />
                <ul>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>
                            Het startportfolio dient als kapstok waar de opgedane kennis en ervaring zichtbaar wordt. Het portfolio moet een overzicht geven van jou als aankomend webdesigner.
                        </p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Challenge 1</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Onderzoek naar vakgebied</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Kennismakingsopdrachten</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Tools</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Vormgeven</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Webtechnieken</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Reviews van docenten</p>
                    </li>
                    <li>
                        <input class="circle" type="checkbox" />
                        <p>Eigen werk</p>
                    </li>
                </ul>
            </form>

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
            <form action="">
                <p><?php echo $executeForm["vormgeven_beoordeling"] ?></p>
                <input type="textarea" />
                <br />
                <p><?php echo $executeForm["techniek_beoordeling"] ?>
                </p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["ondernemend_beoordeling"] ?></p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["softskills_beoordeling"] ?></p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["AVO_beoordeling"] ?></p>
                <input type="text" />
                <br />
                <p><?php echo $executeForm["evt_kwaliteiten"] ?>:</p>
                <input type="text" />
                <br />
            </form>
        </div>
    </div>
</body>

</html>