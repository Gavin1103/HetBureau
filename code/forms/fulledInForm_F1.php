<?php

// include "../functions/showForm.php";
include("../core/databaseConnection.php");
include("../functions/classes/formClass.php");
include '../functions/classes/checkboxenClass.php';
include '../functions/sendForms.php';
include '../functions/getklassen.php';

$database = new Database();
$FormCLass = new Formulier();
$getFormF1 = $FormCLass->getFormF1();
$showFormF1 = $FormCLass->showFormF1();

$getCheckboxFunction = new checkboxen();

$sendFormClass = new sendForms();
$sendFormFunction_AF1 = $sendFormClass->sendForm_AF1();

// $showFormClass = new showForm();
// $showFormF1 = $showFormClass->showFormF1();
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
    <link rel="stylesheet" href="css/form.css" />
    <script src="https://kit.fontawesome.com/75e233cba8.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="formulieren_fase_1.php" method="POST">
        <div id="container_1">
            <nav>
                <a href="<?php echo BASEURL; ?>admin/studentInfo.php?leerlingNummer=<?php echo $showFormF1["leerlingnummer"]  ?>"><i class="fa-solid fa-chevron-left"></i>terug</a>
                <div class="save"><i class="fa-solid fa-download  fa-2x download"></i>
                    <p>Download</p>
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

                <p>
                    <?php echo $getFormF1["veld_student"]; ?>
                </p>
                <input value="<?php echo $showFormF1["student"] ?>" name="student_name_af1" type="text" />
                <br />

                <p>
                    <?php echo $getFormF1["veld_leerlingnummer"]; ?>
                </p>
                <input value="<?php echo $showFormF1["leerlingnummer"] ?>" name="leerlingNummer" type="text" />
                <br />

                <p>
                    <?php echo $getFormF1["veld_coach"]; ?>
                </p>
                <input value="<?php echo $showFormF1["coach"] ?>" name="coach_name_af1" type="text" />
                <br />

                <h3>
                    <?php echo $getFormF1["veld_klas"] ?> <?php echo $showFormF1["klas"] ?>
                </h3>
              
                <!-- <select name="klas_name" id="klas">
                    <?php
                    // $getKlassenFunction = $getKlassen->selectKlas();
                    ?>
                </select> -->
                
                <h3>Aanmaak datum: <?php echo $showFormF1["datum"]; ?></h3>
                <div class="gay">
                    <ul>
                        <?php
                        // echo "<pre>";
                        $checkboxen_true = (array) json_decode($showFormF1["checkboxen"]);
                        // var_dump($checkboxen_true);
                        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1($checkboxen_true);
                        // echo $showFormF1["checkboxen"];
                        // 
                        ?>
                    </ul>
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
                <input value="<?php echo $showFormF1["vormgeven_veld"] ?>" name="vormgeven_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["techniek_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["techniek_veld"] ?>" name="techniek_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["ondernemend_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["ondernemend_veld"] ?>" name="ondernemend_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["softskills_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["softskills_veld"] ?>" name="softskills_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["avo_beoordeling"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["AVO_veld"] ?>" name="avo_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["bijzondere_kwaliteiten"] ?></p>
                    <div class="rating">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["evtKwaliteiten_veld"] ?>" name="evt_name_af1" type="textarea" />
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
                    <input value="<?php echo $showFormF1["doorgroei_advies"] ?>" name="doorgroeiAdvies_af1" type="textarea" />
                </div>
                <div class="footer-logo"><img src="assets/img/Faselogo.png" alt=""></div>
            </footer>
            <input type="submit" name="submit_form_AF1">

        </div>
    </form>
</body>

</html>