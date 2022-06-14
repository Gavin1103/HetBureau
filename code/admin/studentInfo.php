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
    <!-- <link rel="stylesheet" href="../assets/css/home.css"> -->
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
                    <img src="../assets/Materiaal/img/slideleft.png" onclick="plusSlides(-1)" alt="slideleft" class="slideleft">
                    <div class="box">
                        <div class="innerBox">
                            <?php
                            $checkForm = $FormClass->showStudentBlockF1();
                            $checkForm = $FormClass->showStudentBlockF2();
                            $checkForm = $FormClass->showStudentBlockF3();
                            $checkForm = $FormClass->showStudentBlockF4();
                            ?>
                        </div>
                    </div>
                    <img src="../assets/Materiaal/img/slideright.png" onclick="plusSlides(1)" alt="slideright" class="slideright">
                </div>
                <div class="semi2">
                    <!-- <img src="../assets/Materiaal/img/slideindicator.png" class="slide"> -->
                    <div class="dotContainer">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>

                    <hr class="hr3">
                    <div class="downloadbox"><img src="../assets/Materiaal/img/Downloaden.png" class="download">
                        <a href="../forms/formF1PDF.php?leerlingNummer=<?php echo $showFormF1["leerlingnummer"] ?>" class="downloadboxtext">Downloaden</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <!-- <div class="zoekbar">
                    <img src="../assets/Materiaal/img/Zoeken.png" class="zoeken">
                    <input type="search" placeholder="Zoeken" class="search">
                </div> -->
                <div id="innerContainerMiddle">
                    <!-- <form id="searchForm" action="index.php" method="post"> -->

                    <!-- <div class="searchIcon"><img src="../assets/Materiaal/icoonset/Zoeken.svg" alt="search"></div> -->


                    <input type="number" class="search" placeholder="leerlingnummer" number name="studentNumber" id="searchStudentInput" onkeyup="showHint(this.value)">
                    <!-- <div id="resultContainer" class="searchresults">test </div> -->
                    <!-- </form> -->
                    <div id="resultContainer">
                    </div>
                </div>
                <div id="resultContainer">
                </div>



            </div>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("boxtext");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "flex";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <script type="text/javascript">
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("resultContainer").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("resultContainer").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "../functions/livesearch.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

</body>

</html>