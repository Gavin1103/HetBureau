<?php

// database verbinding
include("../core/databaseConnection.php");
$database = new Database();

// voor de formulier
include '../functions/classes/formFunctions/formClass.php';
include '../functions/classes/formFunctions/formF1.php';
$FormClass = new Formulieren();
$errorFunction = $FormClass->errorMelding();
$FormF1Class = new FormulierF1();
$getFormF1 = $FormF1Class->getFormF1();
$showFormF1 = $FormF1Class->showFormF1();

$editFormClass = new editFormF1();
$editFormFucntion = $editFormClass->editForm_AF1();

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
    <form action="fulledInForm_F1.php?formNumber=form1&leerlingNummer=<?php echo $showFormF1["leerlingnummer"]  ?>" method="POST">
        <div id="container_1">
            <nav>
                <a href="<?php echo BASEURL; ?>admin/studentInfo.php?leerlingNummer=<?php echo $showFormF1["leerlingnummer"]  ?>"><i class="fa-solid fa-chevron-left"></i>terug</a>
                <div class="save">
                    <!-- <div class="dowloadIcon">
                        <img src="../assets/Materiaal/icoonset/opslaan.svg" alt="">
                    </div> -->
                    <input value="Bewerken" class="createFormButton" type="submit" name="edit_form_AF1">
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
                <input class="mustHaveInput" value="<?php echo $showFormF1["student"] ?>" name="student_name_af1" type="text" />
                <br />
                <p>
                    <?php echo $getFormF1["veld_leerlingnummer"]; ?>
                </p>
                <input class="mustHaveInput" value="<?php echo $showFormF1["leerlingnummer"] ?>" disabled type="text" />
                <p>
                    <?php echo $getFormF1["veld_coach"]; ?>
                </p>
                <input class="mustHaveInput" value="<?php echo $showFormF1["coach"] ?>" name="coach_name_af1" type="text" />
                <br />
                <h3>
                    <?php echo $getFormF1["veld_klas"] ?> <?php echo $showFormF1["klas"] ?>
                </h3>
                <input class="mustHaveInput" value="<?php echo $showFormF1["klas"] ?>" disabled type="text" />

                <h3>Aanmaak datum: <?php echo $showFormF1["datum"]; ?></h3>
                <div class="gay">
                    <ul>
                        <?php
                        include '../functions/classes/checkboxenClass.php';
                        $getCheckboxFunction = new checkboxen;
                        $checkboxen_true = (array) json_decode($showFormF1["checkboxen"]);
                        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm($checkboxen_true);
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
                        <label class="red"><input <?php
                                                    if ($showFormF1["veld_1_rating"] === "rood") {
                                                        echo "checked";
                                                    }
                                                    ?> value="rood" name="veld_1_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="orange"><input <?php
                                                        if ($showFormF1["veld_1_rating"] === "geel") {
                                                            echo "checked";
                                                        }
                                                        ?> value="geel" name="veld_1_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="green"><input <?php
                                                    if ($showFormF1["veld_1_rating"] === "groen") {
                                                        echo "checked";
                                                    }
                                                    ?> value="groen" name="veld_1_rating" type="radio"><span class="radioChecked"></span></label>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["vormgeven_veld"] ?>" name="vormgeven_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["techniek_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input <?php
                                                    if ($showFormF1["veld_2_rating"] === "rood") {
                                                        echo "checked";
                                                    }
                                                    ?> value="rood" name="veld_2_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="orange"><input <?php
                                                        if ($showFormF1["veld_2_rating"] === "geel") {
                                                            echo "checked";
                                                        }
                                                        ?> value="geel" name="veld_2_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="green"><input <?php
                                                    if ($showFormF1["veld_2_rating"] === "groen") {
                                                        echo "checked";
                                                    }
                                                    ?> value="groen" name="veld_2_rating" type="radio"><span class="radioChecked"></span></label>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["techniek_veld"] ?>" name="techniek_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["ondernemend_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input <?php
                                                    if ($showFormF1["veld_3_rating"] === "rood") {
                                                        echo "checked";
                                                    }
                                                    ?> value="rood" name="veld_3_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="orange"><input <?php
                                                        if ($showFormF1["veld_3_rating"] === "geel") {
                                                            echo "checked";
                                                        }
                                                        ?> value="geel" name="veld_3_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="green"><input <?php
                                                    if ($showFormF1["veld_3_rating"] === "groen") {
                                                        echo "checked";
                                                    }
                                                    ?> value="groen" name="veld_3_rating" type="radio"><span class="radioChecked"></span></label>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["ondernemend_veld"] ?>" name="ondernemend_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["softskills_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input <?php
                                                    if ($showFormF1["veld_4_rating"] === "rood") {
                                                        echo "checked";
                                                    }
                                                    ?> value="rood" name="veld_4_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="orange"><input <?php
                                                        if ($showFormF1["veld_4_rating"] === "geel") {
                                                            echo "checked";
                                                        }
                                                        ?> value="geel" name="veld_4_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="green"><input <?php
                                                    if ($showFormF1["veld_4_rating"] === "groen") {
                                                        echo "checked";
                                                    }
                                                    ?> value="groen" name="veld_4_rating" type="radio"><span class="radioChecked"></span></label>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["softskills_veld"] ?>" name="softskills_name_af1" type="textarea" />
                <br />

                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["avo_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input <?php
                                                    if ($showFormF1["veld_5_rating"] === "rood") {
                                                        echo "checked";
                                                    }
                                                    ?> value="rood" name="veld_5_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="orange"><input <?php
                                                        if ($showFormF1["veld_5_rating"] === "geel") {
                                                            echo "checked";
                                                        }
                                                        ?> value="geel" name="veld_5_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="green"><input <?php
                                                    if ($showFormF1["veld_5_rating"] === "groen") {
                                                        echo "checked";
                                                    }
                                                    ?> value="groen" name="veld_5_rating" type="radio"><span class="radioChecked"></span></label>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["AVO_veld"] ?>" name="avo_name_af1" type="textarea" />
                <br />
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["bijzondere_kwaliteiten"] ?></p>
                    <div class="rating">
                        <label class="red"><input <?php
                                                    if ($showFormF1["veld_6_rating"] === "rood") {
                                                        echo "checked";
                                                    }
                                                    ?> value="rood" name="veld_6_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="orange"><input <?php
                                                        if ($showFormF1["veld_6_rating"] === "geel") {
                                                            echo "checked";
                                                        }
                                                        ?> value="geel" name="veld_6_rating" type="radio"><span class="radioChecked"></span></label>
                        <label class="green"><input <?php
                                                    if ($showFormF1["veld_6_rating"] === "groen") {
                                                        echo "checked";
                                                    }
                                                    ?> value="groen" name="veld_6_rating" type="radio"><span class="radioChecked"></span></label>
                    </div>
                </div>
                <input value="<?php echo $showFormF1["evtKwaliteiten_veld"] ?>" name="evt_name_af1" type="textarea" />
                <br />
                <div id="terugKoppeling">
                    <h2>
                        <?php echo $getFormF1["terug_koppelingsfase_1"] ?>
                    </h2>
                    <hr>
                </div>
            </div>

            <div id="container_3">

                <div class="innerContainer">
                    <div class="ratingInnerContainer">
                        <div class="ratingInnerContainer">
                            <div class="ratingText"><?php echo $getFormF1["deel_c_tekst_1"] ?></div>
                            <div class="rating">
                                <label class="red"><input <?php
                                                            if ($showFormF1["veld_a_beoordeling"] === "rood") {
                                                                echo "checked";
                                                            }
                                                            ?> value="rood" name="veld_a_beoordeling" type="radio"><span class="radioChecked"></label>
                                <label class="orange"><input <?php
                                                                if ($showFormF1["veld_a_beoordeling"] === "geel") {
                                                                    echo "checked";
                                                                }
                                                                ?> value="geel" name="veld_a_beoordeling" type="radio"><span class="radioChecked"></label>
                                <label class="green"><input <?php

                                                            if ($showFormF1["veld_a_beoordeling"] === "groen") {
                                                                echo "checked";
                                                            }
                                                            ?> value="groen" name="veld_a_beoordeling" type="radio"><span class="radioChecked"></label>
                            </div>
                        </div>
                    </div>
                    <div class="ratingInnerContainer">
                        <div class="ratingText"><?php echo $getFormF1["deel_c_tekst_2"] ?></div>
                        <div class="rating">
                            <label class="red"><input <?php
                                                        if ($showFormF1["veld_b_beoordeling"]   === "rood") {
                                                            echo "checked";
                                                        }
                                                        ?> value="rood" name="veld_b_beoordeling" type="radio"><span class="radioChecked"></label>
                            <label class="orange"><input <?php
                                                            if ($showFormF1["veld_b_beoordeling"] === "geel") {
                                                                echo "checked";
                                                            }
                                                            ?> value="geel" name="veld_b_beoordeling" type="radio"><span class="radioChecked"></label>
                            <label class="green"><input <?php

                                                        if ($showFormF1["veld_b_beoordeling"] === "groen") {
                                                            echo "checked";
                                                        }
                                                        ?> value="groen" name="veld_b_beoordeling" type="radio"><span class="radioChecked"></label>
                        </div>
                    </div>
                    <div class="ratingInnerContainer">
                        <div class="ratingText"><?php echo $getFormF1["deel_c_tekst_3"] ?></div>
                        <div class="rating">
                            <label class="red"><input <?php
                                                        if ($showFormF1["veld_c_beoordeling"] === "rood") {
                                                            echo "checked";
                                                        } ?> value="rood" name="veld_c_beoordeling" type="radio"><span class="radioChecked"></span></label>
                            <label class="orange"><input <?php

                                                            if ($showFormF1["veld_c_beoordeling"] === "geel") {
                                                                echo "checked";
                                                            }
                                                            ?> value="geel" name="veld_c_beoordeling" type="radio"><span class="radioChecked"></label>
                            <label class="green"><input <?php

                                                        if ($showFormF1["veld_c_beoordeling"] === "groen") {
                                                            echo "checked";
                                                        }
                                                        ?> value="groen" name="veld_c_beoordeling" type="radio"><span class="radioChecked"></label>
                        </div>
                    </div>


                    <h2><?php echo $getFormF1["doorgroei_advies"] ?></h2>
                    <input value="<?php echo $showFormF1["doorgroei_advies"] ?>" name="doorgroeiAdvies_af1" type="textarea" />
                </div>
            </div>
            <footer>
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