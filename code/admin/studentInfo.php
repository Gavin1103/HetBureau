<?php
include "../core/databaseConnection.php";
include '../functions/classes/formClass.php';
$FormClass = new Formulier();
$showFormF1 = $FormClass->showFormF1();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/studentinfo.css">
    <link rel="stylesheet" href="../assets/css/mediaqry.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Smooch+Sans:wght@100;200&display=swap" rel="stylesheet">
    <!-- lettertype -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>

<body>
    <div id="container">
        <nav>
            <div class="innerMenuLeft">
                <img src="../assets/Materiaal/img/dashboard.png" alt="dashboard" class="logo">
            </div>
            <div class="innerMenuRight">
                <img src="../assets/Materiaal/img/foto2.png" alt="docentfoto" class="foto2">
                <img src="../assets/Materiaal/img/linee.png" alt="line" class="line">
                <img src="../assets/Materiaal/img/Uitloggen.png" alt="uitloggen" class="uitloggen">
            </div>
        </nav>
        <div class="background">
            <div class="left">


                <a class="terugKnop" href="<?php echo BASEURL; ?>admin/">Terug</a>
                <div id="titleContainer">
                    <h2>Assesment Formulier Fase 1</h2>
                </div>
                <div class="zoekbar resZoekbar">
                    <img src="../assets/Materiaal/img/Zoeken.png" class="zoeken">
                    <input type="search" placeholder="Zoeken" class="search">
                </div>
                <div class="innerContainer">
                    <div class="innerContainerLeft">
                        <img src="../assets/Materiaal/img/profielFoto.png" alt="">
                    </div>
                    <div class="innerContainerRight">
                        <h3>Klas: <?php echo $showFormF1["klas"] ?></h3>
                        <h3>Student: <?php echo $showFormF1["leerlingnummer"] ?></h3>
                    </div>
                </div>
                <div class="innerContainer">
                    <div class="innerContainerLeft">
                        <img src="../assets/Materiaal/img/profielFoto.png" alt="">
                    </div>
                    <div class="innerContainerRight">
                        <h3>Coach: <?php echo $showFormF1["coach"] ?></h3>
                    </div>
                </div>
                <div class="innerContainer">
                    <div class="innerContainerLeft">
                        <img src="../assets/Materiaal/img/profielFoto.png" alt="">
                    </div>
                    <div class="innerContainerRight">
                        <h3>Assesor: <?php echo $showFormF1["coach"] ?></h3>
                    </div>
                </div>
            </div>


            <div class="middle">
                <div class="semi">
                    <img src="../assets/Materiaal/img/slideleft.png" alt="slideleft" class="slideleft">
                    <div class="box">
                        <div class="innerBox">
                            <?php
                            $checkForm = $FormClass->CheckFormF1();
                            $checkForm = $FormClass->CheckFormF2();
                            // $checkForm = $FormClass->CheckFormF2();
                            // $checkForm = $FormClass->CheckFormF2();
                            ?>
                        </div>
                    </div>
                    <img src="../assets/Materiaal/img/slideright.png" alt="slideright" class="slideright">
                </div>
                <div class="semi2">
                    <img src="../assets/Materiaal/img/slideindicator.png" class="slide">
                    <hr class="hr3">
                    <div class="downloadbox"><img src="../assets/Materiaal/img/Downloaden.png" class="download">
                        <a href="../forms/formF1PDF.php?leerlingNummer=<?php echo $showFormF1["leerlingnummer"] ?>" class="downloadboxtext">Downloaden</a>
                    </div>
                </div>
            </div>





            <div class="right">
                <div class="zoekbar">
                    <img src="../assets/Materiaal/img/Zoeken.png" class="zoeken">
                    <input type="search" placeholder="Zoeken" class="search">
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>