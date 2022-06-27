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

// Voor het versturen van het formulier
$sendFormF1Class = new sendFormF1();
$sendFormF1Function = $sendFormF1Class->checkIfStudentExistF1();
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
    <!-- <form id="pdf"> -->
    <form action="formulieren_fase_1.php?formNumber=form1" method="POST">
        <div id="container_1">
            <nav>
                <a href="<?php echo BASEURL; ?>admin/"><i class="fa-solid fa-chevron-left"></i> terug</a>
                <div class="save">
                    <!-- <div class="dowloadIcon"> -->
                    <!-- <img src="../assets/Materiaal/icoonset/opslaan.svg" alt=""> -->
                    <!-- </div> -->
                    <input value="Opslaan" class="createFormButton" type="submit" name="submit_form_AF1">
                </div>
            </nav>
            <div class="innerContainer">
                <div>
                    <h1>
                        <h1><?php echo $getFormF1["AF1"]; ?></h1>
                    </h1>
                    <p> <?php echo $getFormF1["tekst_intro"]; ?></p>
                </div>
                <div id="checklist">

                    <h2><?php echo $getFormF1["checklist_titel"]; ?></h2>
                    <p>samen met coach invullen.</p>
                    <hr>
                </div>
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
                    include '../functions/getklassen.php';
                    $getKlassen = new getKlassen();
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
                        // voor de checkboxen
                        include '../functions/classes/checkboxenClass.php';
                        $getCheckboxFunction = new checkboxen();
                        $executeCheckboxen = $getCheckboxFunction->getCheckboxenForm();
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
            <div>
                <div class="footer-block">
                </div>
            </div>
        </div>
    </form>
    <div id="footerIMG">
        <img src="../assets/Materiaal/footer.png" alt="">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.min.js" integrity="sha512-JMK7ImCd/9VxQM7FWvAT3njqo5iGKkWcOax6Bwzuq48xxFd7/jekKcgN+59ZRwBoEpZvv6Jkwh3fDGrBVWX5vA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/form.js"></script>
</body>

</html>