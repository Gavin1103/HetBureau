<?php

include("../core/databaseConnection.php");
// include("./getForms/getFormFase1.php");
include '../functions/classes/formClass.php';
include '../functions/classes/checkboxenClass.php';
// include '../functions/sendForms.php';
include '../functions/getklassen.php';
include '../functions/classes/userClass.php';

$database = new Database();   
$getCheckboxFunction = new checkboxen();
$FormClass = new Formulier();
$addStudentClass = new StudentUser();
$sendFormClass = new sendForms();
$getFormF1 = $FormClass->getFormF1();
$errorFunction = $FormClass->errorMelding();
$sendFormFunction = $sendFormClass->checkIfStudentExistF1();
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
    <!-- lettertype -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>

<body>
    <form action="formulieren_fase_1.php?formNumber=form1" method="POST">
        <div id="container_1">
            <nav>
                <a href="<?php echo BASEURL; ?>admin/"><i class="fa-solid fa-chevron-left"></i> terug</a>
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

                    <h2><?php echo $getFormF1["checklist_titel"]; ?></h2>
                    <p>samen met coach invullen.</p>

                    <hr>
                </div>
                <!-- <form action="formulieren_fase_1.php" action="POST"> -->
                <p>
                    <?php echo $getFormF1["veld_student"]; ?>
                </p>
                <input class="mustHaveInput" name="student_name_af1" type="text" />
                <br />
                <p>
                    <?php echo $getFormF1["veld_leerlingnummer"]; ?>
                </p>
                <input class="mustHaveInput" name="leerlingNummer_af1" type="text" />
                <br />
                <p>
                    <?php echo $getFormF1["veld_coach"]; ?>
                </p>
                <input class="mustHaveInput" name="coach_name_af1" type="text" />
                <br />
                <p>
                    <?php echo $getFormF1["veld_klas"] ?>
                </p>
                <select class="klasSelect" name="klas_name_af1" id="klas">
                    <?php
                    $getKlassenFunction = $getKlassen->selectKlas();
                    ?>
                </select>
                <br />
                <p>
                    <?php echo $getFormF1["datum"]; ?>
                </p>
                <input class="dateInput" name="datum_name_af1" type="date" />
                <br />
                <br>
                <div class="gay">
                    <ul>
                        <?php
                        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm1();
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
                        <label class="red"><input value="rood" name="veld_1_rating" type="radio"><span class="radioChecked"></label>
                        <label class="orange"><input value="geel" name="veld_1_rating" type="radio"><span class="radioChecked"></label>
                        <label class="green"><input value="groen" name="veld_1_rating" type="radio"><span class="radioChecked"></label>
                    </div>
                </div>
                <input placeholder="type hier..." name="vormgeven_name_af1" type="textarea" />
                <br />
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["techniek_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input value="rood" name="veld_2_rating" type="radio"><span class="radioChecked"></label>
                        <label class="orange"><input value="geel" name="veld_2_rating" type="radio"><span class="radioChecked"></label>
                        <label class="green"><input value="groen" name="veld_2_rating" type="radio"><span class="radioChecked"></label>
                    </div>
                </div>
                <input placeholder="type hier..." name="techniek_name_af1" type="textarea" />
                <br />
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["ondernemend_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input value="rood" name="veld_3_rating" type="radio"><span class="radioChecked"></label>
                        <label class="orange"><input value="geel" name="veld_3_rating" type="radio"><span class="radioChecked"></label>
                        <label class="green"><input value="groen" name="veld_3_rating" type="radio"><span class="radioChecked"></label>
                    </div>
                </div>
                <input placeholder="type hier..." name="ondernemend_name_af1" type="textarea" />
                <br />
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["softskills_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input value="rood" name="veld_4_rating" type="radio"><span class="radioChecked"></label>
                        <label class="orange"><input value="geel" name="veld_4_rating" type="radio"><span class="radioChecked"></label>
                        <label class="green"><input value="groen" name="veld_4_rating" type="radio"><span class="radioChecked"></label>
                    </div>
                </div>
                <input placeholder="type hier..." name="softskills_name_af1" type="textarea" />
                <br />
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["avo_beoordeling"] ?></p>
                    <div class="rating">
                        <label class="red"><input value="rood" name="veld_5_rating" type="radio"><span class="radioChecked"></label>
                        <label class="orange"><input value="geel" name="veld_5_rating" type="radio"><span class="radioChecked"></label>
                        <label class="green"><input value="groen" name="veld_5_rating" type="radio"><span class="radioChecked"></label>
                    </div>
                </div>
                <input placeholder="type hier..." name="avo_name_af1" type="textarea" />
                <br />
                <div class="prestatieWrapper">
                    <p><?php echo $getFormF1["bijzondere_kwaliteiten"] ?></p>
                    <div class="rating">
                        <label class="red"><input value="rood" name="veld_6_rating" type="radio"><span class="radioChecked"></label>
                        <label class="orange"><input value="geel" name="veld_6_rating" type="radio"><span class="radioChecked"></label>
                        <label class="green"><input value="groen" name="veld_6_rating" type="radio"><span class="radioChecked"></label>
                    </div>
                </div>
                <input placeholder="type hier..." name="evt_name_af1" type="textarea" />
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
                                <label class="red"><input value="rood" name="veld_a_beoordeling" type="radio"><span class="radioChecked"></label>
                                <label class="orange"><input value="geel" name="veld_a_beoordeling" type="radio"><span class="radioChecked"></label>
                                <label class="green"><input value="groen" name="veld_a_beoordeling" type="radio"><span class="radioChecked"></label>
                            </div>
                        </div>
                    </div>
                    <div class="ratingInnerContainer">
                        <div class="ratingText"><?php echo $getFormF1["deel_c_tekst_2"] ?></div>
                        <div class="rating">
                            <label class="red"><input value="rood" name="veld_b_beoordeling" type="radio"><span class="radioChecked"></label>
                            <label class="orange"><input value="geel" name="veld_b_beoordeling" type="radio"><span class="radioChecked"></label>
                            <label class="green"><input value="groen" name="veld_b_beoordeling" type="radio"><span class="radioChecked"></label>
                        </div>
                    </div>
                    <div class="ratingInnerContainer">
                        <div class="ratingText"><?php echo $getFormF1["deel_c_tekst_3"] ?></div>
                        <div class="rating">
                            <label class="red"><input value="rood" name="veld_c_beoordeling" type="radio"><span class="radioChecked"></span></label>
                            <label class="orange"><input value="geel" name="veld_c_beoordeling" type="radio"><span class="radioChecked"></label>
                            <label class="green"><input value="groen" name="veld_c_beoordeling" type="radio"><span class="radioChecked"></label>
                        </div>
                    </div>
                </div>
            </div>




            <footer>
                <div class="footer-block">

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