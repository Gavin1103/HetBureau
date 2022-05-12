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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Smooch+Sans:wght@100;200&display=swap" rel="stylesheet">
</head>

<body>
    <div id="container">
        <div class="menu">
            <img src="../assets/Materiaal/img/dashboard.png" alt="dashboard" class="dashboard">
            <img src="../assets/Materiaal/img/foto2.png" alt="docentfoto" class="foto2">
            <img src="../assets/Materiaal/img/linee.png" alt="line" class="line">
            <img src="../assets/Materiaal/img/Uitloggen.png" alt="uitloggen" class="uitloggen">
        </div>
        <div class="background">
            <div class="left">
                <div class="name">Naam Achternaam | Fase 1</div>
                <hr>
                <img src="../assets/Materiaal/img/foto1.png" alt="foto1" class="foto1">
                <div class="small">Klas: <?php echo $showFormF1["klas"] ?><br>Studentnummer: <?php echo $showFormF1["leerlingnummer"] ?></div>
                <hr class="hr2">
                <img src="../assets/Materiaal/img/foto2.png" alt="foto1" class="foto1">
                <div class="small2">Coach: <?php echo $showFormF1["coach"] ?></div>
                <hr class="hr2">
                <img src="../assets/Materiaal/img/foto3.png" alt="foto1" class="foto1">
                <div class="small2">Assessor: <?php echo $showFormF1["coach"] ?></div>
                <hr class="hr2">
            </div>
            <div class="middle">
                <div class="semi">
                    <img src="../assets/Materiaal/img/slideleft.png" alt="slideleft" class="slideleft">
                    <div class="box">
                        <?php
                        $checkForm = $FormClass->CheckFormF1();
                        ?>
                    </div>
                    <img src="../assets/Materiaal/img/slideright.png" alt="slideright" class="slideright">
                </div>
                <img src="../assets/Materiaal/img/slideindicator.png" class="slide">
                <hr class="hr3">
                <div class="downloadbox"><img src="../assets/Materiaal/img/Downloaden.png" class="download">
                    <div class="downloadboxtext">Downloaden</div>
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