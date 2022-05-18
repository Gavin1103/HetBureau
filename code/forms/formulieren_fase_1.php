<?php

include("../core/databaseConnection.php");
// include("./getForms/getFormFase1.php");
include '../functions/classes/formClass.php';
include '../functions/classes/checkboxenClass.php';
include '../functions/sendForms.php';
include '../functions/getklassen.php';
include '../functions/classes/userClass.php';

$database = new Database();
$getCheckboxFunction = new checkboxen();
$sendFormClass = new sendForms();
$FormClass = new Formulier();
$addStudentClass = new StudentUser();

$getFormF1 = $FormClass->getFormF1();
$errorFunction = $FormClass->errorMelding();
$sendFormFunction_AF1 = $sendFormClass->sendForm_AF1();
// exit();
// $addStudentFunction = $addStudentClass->addStudent();

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
    <link rel="stylesheet" href="css/form.css" />
    <script src="https://kit.fontawesome.com/75e233cba8.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="formulieren_fase_1.php" method="POST">
        <div id="container_1">
            <nav>
                <a href="<?php echo BASEURL;?>admin/"><i class="fa-solid fa-chevron-left"></i> terug</a>
                <div class="save">
                    <!-- <div class="dowloadIcon">
                        <img src="../assets/Materiaal/icoonset/opslaan.svg" alt="">
                    </div> -->
                <input value="Opslaan" class="createFormButton" type="submit" name="submit_form_AF1">
                </div>
            </nav>
            <div class="innerContainer">
                <header>
                    <h1>
                        <h1><?php echo $getFormF1["AF1"]; ?></h1>
                    </h1>
                    <p> <?php echo $getFormF1["tekst_intro"]; ?></p>
                </header>
                <div id="checklist">
                    <h2>
                        <h2><?php echo $getFormF1["checklist_titel"]; ?></h2>
                        <p>samen met coach invullen.</p>
                    </h2>
                    <hr>
                </div>
                <!-- <form action="formulieren_fase_1.php" action="POST"> -->
                <p>
                    <?php echo $getFormF1["veld_student"]; ?>
                </p>
                <input name="student_name_af1" type="text" />
                <br />

                <p>
                    <?php echo $getFormF1["veld_leerlingnummer"]; ?>
                </p>
                <input name="leerlingNummer" type="text" />
                <br />

                <p>
                    <?php echo $getFormF1["veld_coach"]; ?>
                </p>
                <input name="coach_name_af1" type="text" />
                <br />

                <p>
                    <?php echo $getFormF1["veld_klas"] ?>
                </p>
                <select name="klas_name" id="klas">
                    <?php
                    $getKlassenFunction = $getKlassen->selectKlas();
                    ?>
                </select>
                <br />

                <p>
                    <?php echo $getFormF1["datum"]; ?>
                </p>
                <input name="datum_name_af1" type="date" />
                <br />
                <div class="gay">
                    <ul>
                        <?php
                        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1();
                        ?>
                    </ul>
                    <br>
                </div>
                <div id="prestaties">
                    <h2>
                        <?php echo $getFormF1["review_fase_1"]; ?>
                    </h2>
                    <p><?php echo $getFormF1["titel_docent_invullen"] ?></p>
                    <hr>
                </div>
            </div>
        </div>
        <div id="container_2">
            <div class="innerContainer">
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["vormgeven_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input name="vormgeven_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["techniek_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input name="techniek_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["ondernemend_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input name="ondernemend_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["softskills_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input name="softskills_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["avo_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input name="avo_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["bijzondere_kwaliteiten"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input name="evt_name_af1" type="textarea" />
                <br />


                <div id="terugKoppeling">
                    <p>
                        <?php echo $getFormF1["terug_koppelingsfase_1"] ?>
                    </p>
                    <hr>
                </div>
            </div>
            <div id="container_3">
                <div class="innerContainer">
                    <div class="prestatieWrapper">
                        <p><?php echo $getFormF1["deel_c_tekst_1"] ?></p>
                        <div class="rating">
                            <div class="red"></div>
                            <div class="orange"></div>
                            <div class="green"></div>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="innerContainer">
                    <div class="prestatieWrapper">
                        <p><?php echo $getFormF1["deel_c_tekst_2"] ?></p>
                        <div class="rating">
                            <div class="red"></div>
                            <div class="orange"></div>
                            <div class="green"></div>
                        </div>
                        <br />
                    </div>
                </div>
                <div class="innerContainer">
                    <div class="prestatieWrapper">
                        <p><?php echo $getFormF1["deel_c_tekst_3"] ?></p>
                        <div class="rating">
                            <div class="red"></div>
                            <div class="orange"></div>
                            <div class="green"></div>
                        </div>
                        <br />
                    </div>

                    <h2><?php echo $getFormF1["doorgroei_advies"] ?></h2>
                </div>
            </div>
            <footer>
                <div class="footer-block">
                    <input name="doorgroeiAdvies_af1" type="textarea" />
                </div>
                <div class="footer-logo"><img src="assets/img/Faselogo.png" alt=""></div>
            </footer>
            <!-- <input class="createFormButton" type="submit" name="submit_form_AF1"> -->

        </div>
    </form>
    <div id="footerIMG">
        <img src="../assets/Materiaal/footer.png" alt="">
    </div>
</body>

</html>