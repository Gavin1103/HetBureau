<?php
session_start();

include("../functions/getAccount.php");
include("../functions/verifyAdmin.php");
include("../core/databaseConnection.php");

$verifyAdminLogin = new verifyAdminLoginClass();
$verifyAdmin = $verifyAdminLogin->checkInputAdmin();

$getAdminAccountClass = new getAccountInfo();
$getAdminAccountFunction = $getAdminAccountClass->getAdminAccount();
$searchStudentFunction = $getAdminAccountClass->searchStudent();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <script src="https://kit.fontawesome.com/3d742e90d9.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class="loader-bg">
        <img class="preloader-img" src="../assets/Materiaal/icoonset/stop-button.png" alt="glu-logo">
    </div> -->
    <nav>
        <div class="nav-left"><img src="../assets/Materiaal/logo/Logo-Dashboard.svg" alt="logo"></div>
        <div class="nav-right">
            <p><?php echo $getAdminAccountFunction["naam"] ?></p>
            <img class="pfp" src="../assets/Materiaal/icoonset/pfp.jpg" style="border-radius: 50%;" alt="pfp">
            <a href="logout.php"><img class="logout-icon" src="../assets/Materiaal/icoonset/Uitloggen.svg" alt="logout"></a>
        </div>
    </nav>
    <div class="container">
        <div class="containerLeft">
            <div class="block blue">
                <h2>Fase 1 Formulier</h2><a href="../forms/formulieren_fase_1.php?formNumber=form1"><img src="../assets/Materiaal/icoonset/toevoegen.svg" alt="plusIcon"></a>
            </div>
            <div class="block green">
                <h2>Fase 2 Formulier</h2><a href="../forms/formulieren_fase_2.php?formNumber=form2"><img src="../assets/Materiaal/icoonset/toevoegen.svg" alt="plusIcon"></a>
            </div>
            <div class="block purple">
                <h2>Fase 3 Formulier</h2><a href="../forms/formulieren_fase_3.php?formNumber=form3"><img src="../assets/Materiaal/icoonset/toevoegen.svg" alt="plusIcon"></a>
            </div>
            <div class="block yellow">
                <h2>Fase 4 Formulier</h2><a href="../forms/formulieren_fase_4.php?formNumber=form4"><img src="../assets/Materiaal/icoonset/toevoegen.svg" alt="plusIcon"></a>
            </div>
            <div class="block grey">
                <h2>Fase 5 Formulier</h2><a href="#"><img src="../assets/Materiaal/icoonset/toevoegen.svg" alt="plusIcon"></a>
            </div>
            <div class="block red">
                <h2>Fase 6 Formulier</h2><a href="#"><img src="../assets/Materiaal/icoonset/toevoegen.svg" alt="plusIcon"></a>
            </div>
        </div>
        <div class="containerMiddle">



            <div id="innerContainerMiddle">
                <form id="searchForm" id="searchForm" action="index.php" method="post">
                    <div id="searchContainer">
                        <!-- <div class="searchIcon"><img src="../assets/Materiaal/icoonset/Zoeken.svg" alt="search"></div> -->
                        <input type="submit" value="Zoeken">
                        <input type="search" name="studentNumber" id="searchStudentInput">
                        <div class="filterIcon"><img src="../assets/Materiaal/icoonset/filter.svg" alt="Filter"></div>
                        
                    </div>
                </form>




                <div id="resultContainer">
                    <?php
                    $searchStudentFunction = $getAdminAccountClass->searchStudent();
                    if (isset($searchStudentFunction["leerlingnummer"]) && isset($searchStudentFunction["student"])) {
                        echo $searchStudentFunction["leerlingnummer"];
                        echo $searchStudentFunction["student"];
                        echo "<a href='studentInfo.php?leerlingNummer={$searchStudentFunction['leerlingnummer']}'>Formulieren</a>";
                    } else {
                        echo 'gebruiker niet gevonden';
                    }
                    ?>
                </div>
                <!-- <script>
                    let searchInput = document.getElementById("searchStudentInput");

                    searchInput.addEventListener('input', function() {
                        console.log("aan het zoeken...");

                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // Typical action to be performed when the document is ready:
                                document.getElementById("resultContainer").innerHTML = xhttp.responseText;
                            }
                        };
                        xhttp.open("GET", "searchFunction.php", true);
                        xhttp.send();

                    });
                </script> -->


            </div>
        </div>
        <div class="containerRight">
            <div class="mini-block blue-border">
                <p>43 Studenten</p>
            </div>
            <div class="mini-block green-border">
                <p>27 Studenten</p>
            </div>
            <div class="mini-block purple-border">
                <p>24 Studenten</p>
            </div>
            <div class="mini-block yellow-border">
                <p>35 Studenten</p>
            </div>
            <div class="mini-block grey-border">
                <p>23 Studenten</p>
            </div>
            <div class="mini-block red-border">
                <p>28 Studenten</p>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function() {
            $('.loader-bg').fadeToggle();
        }, 1250);
    </script> -->


</body>

</html>