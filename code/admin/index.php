<?php
session_start();

include("../core/databaseConnection.php");
include '../functions/classes/userClass.php';
include '../functions/studentCount.php';

$userClass = new User();
$studentClass = new StudentUser();

$loginUserFunction = $userClass->CheckInputAdmin();
$getAdminAccountFunction = $userClass->getAdminAccount();
// $searchStudentFunction = $studentClass->searchStudent();

$count = new countstudent("studenten");

// $searchStudentFunction = $userClass->searchStudent();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/mediaqry.css">
    <script src="https://kit.fontawesome.com/3d742e90d9.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- aanzetten wanneer livesearch werkt; -->
    <div class='loader-bg'>
        <img class='preloader-img' src='../assets/Materiaal/icoonset/stop-button.png' alt='glu-logo'>
    </div>


    <nav>
        <div class="nav-left"><img src="../assets/Materiaal/logo/Logo-Dashboard.svg" alt="logo"></div>
        <div class="nav-right">
            <p><?php echo $getAdminAccountFunction["naam"] ?></p>
            <a style="height: 80%;" href="<?php echo BASEURL; ?>admin/profile.php?id=<?php echo $getAdminAccountFunction["afkorting"] ?>">
                <img class="pfp" src="../assets/Materiaal/icoonset/pfp.jpg" style="border-radius: 50%;" alt="pfp">
            </a>
            <a href="logout.php"><img class="logout-icon" src="../assets/Materiaal/icoonset/Uitloggen.svg" alt="logout"></a>
        </div>
    </nav>
    <div class="container">
        <div class="containerLeft">
            <div class="innerLeftContainer">
                <div class="block blue">
                    <div class="block_left">
                        <h2 class="blockTitle">Fase 1 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="../forms/formCRUD/editform.php">
                            <div class="settingsIcon"></div>
                        </a>

                        <a href="../forms/formulieren_fase_1.php?formNumber=form1">
                            <div class="plusIcon"></div>
                        </a>

                    </div>
                </div>
                <div class="block green">
                    <div class="block_left">
                        <h2 class="blockTitle">Fase 2 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="#">
                            <div class="settingsIcon"></div>
                        </a>
                        <a href="../forms/formulieren_fase_2.php?formNumber=form2">
                            <div class="plusIcon"></div>
                        </a>
                    </div>
                </div>
                <div class="block purple">
                    <div class="block_left">
                        <h2 class="blockTitle">Fase 3 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="#">
                            <div class="settingsIcon"></div>
                        </a>
                        <a href="../forms/formulieren_fase_3.php?formNumber=form3">
                            <div class="plusIcon"></div>
                        </a>
                    </div>
                </div>
                <div class="block yellow">
                    <div class="block_left">
                        <h2 class="blockTitle">Fase 4 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="#">
                            <div class="settingsIcon"></div>
                        </a>
                        <a href="../forms/formulieren_fase_4.php?formNumber=form4">
                            <div class="plusIcon"></div>
                        </a>
                    </div>
                </div>
                <div class="block grey">
                    <div class="block_left">
                        <h2 class="blockTitle">Fase 5 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="#">
                            <div class="settingsIcon"></div>
                        </a>
                        <a href="#">
                            <div class="plusIcon"></div>
                        </a>
                    </div>
                </div>
                <div class="block red">
                    <div class="block_left">
                        <h2 class="blockTitle">Fase 6 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="#">
                            <div class="settingsIcon"></div>
                        </a>
                        <a href="#">
                            <div class="plusIcon"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="containerMiddle">
            <div id="innerContainerMiddle">
                <!-- <form id="searchForm" action="index.php" method="post"> -->
                <div id="searchContainer">
                    <!-- <div class="searchIcon"><img src="../assets/Materiaal/icoonset/Zoeken.svg" alt="search"></div> -->
                    <div class="searchInnerContainer">
                        <!-- <input name="searchSubmit" type="submit" value="Zoeken"> -->
                    </div>
                    <div class="searchInnerContainerMiddle">
                        <input type="number" placeholder="leerlingnummer" number name="studentNumber" id="searchStudentInput" onkeyup="showHint(this.value)">
                        <!-- <div id="resultContainer" class="searchresults">test </div> -->
                    </div>
                    <div class="searchInnerContainer">
                        <div class="filterIcon"><img src="../assets/Materiaal/icoonset/filter.svg" alt="Filter"></div>
                    </div>
                </div>
                <!-- </form> -->
                <div id="resultContainer">
                </div>
            </div>
        </div>
        <div class="containerRight">
            <div class="mini-block blue-border">
                <p><?php echo $count->countAll("opgeslagen_form_af1"); ?> studenten</p>
            </div>
            <div class="mini-block green-border">
                <p>(test) Studenten</p>
            </div>
            <div class="mini-block purple-border">
                <p>(test) Studenten</p>
            </div>
            <div class="mini-block yellow-border">
                <p>(test) Studenten</p>
            </div>
            <div class="mini-block grey-border">
                <p>(test) Studenten</p>
            </div>
            <div class="mini-block red-border">
                <p>(test) Studenten</p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script>
        setTimeout(function() {
            $('.loader-bg').fadeToggle();
        }, 500);
    </script>
</body>

</html>