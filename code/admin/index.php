<?php
session_start();

include("../core/databaseConnection.php");
include '../functions/classes/userClass.php';

$userClass = new User();
$studentClass = new StudentUser();

$loginUserFunction = $userClass->CheckInputAdmin();
$getAdminAccountFunction = $userClass->getAdminAccount();

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
    <?php
    // if (isset($_GET["admin"])) {
    //     echo "
    //     <div class='loader-bg'>
    //     <img class='preloader-img' src='../assets/Materiaal/icoonset/stop-button.png' alt='glu-logo'>
    //     </div>
    //     <script>
    //     setTimeout(function() {
    //     $('.loader-bg').fadeToggle();
    //     }, 1250);
    //     </script>
    //     ";
    // }
    ?>

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
                        <h2>Fase 1 Formulier</h2>
                    </div>
                    <div class="block_right">
                        <a href="#">
                            <div class="settingsIcon"></div>
                        </a>
                        
                        <a href="../forms/formulieren_fase_1.php?formNumber=form1">
                            <div class="plusIcon"></div>
                        </a>

                    </div>
                </div>
                <div class="block green">
                    <div class="block_left">
                        <h2>Fase 2 Formulier</h2>
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
                        <h2>Fase 3 Formulier</h2>
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
                        <h2>Fase 4 Formulier</h2>
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
                        <h2>Fase 5 Formulier</h2>
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
                        <h2>Fase 6 Formulier</h2>
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
        <div class="containerMiddle">
            <div id="innerContainerMiddle">
                <form id="searchForm" action="index.php" method="post">
                    <div id="searchContainer">
                        <!-- <div class="searchIcon"><img src="../assets/Materiaal/icoonset/Zoeken.svg" alt="search"></div> -->
                        <div class="searchInnerContainer">
                            <input id="searchButton" name="searchSubmit" type="submit" value="">
                        </div>
                        <div class="searchInnerContainerMiddle">
                            <input type="search" name="studentNumber" id="searchStudentInput">
                        </div>
                        <div class="searchInnerContainer">
                            <div class="filterIcon"><img src="../assets/Materiaal/icoonset/filter.svg" alt="Filter"></div>
                        </div>
                    </div>
                </form>
                <div id="resultContainer">
                    <?php
                    $searchStudentFunction = $studentClass->searchStudent();
                    ?>
                </div>
                <!-- <script>
                    let searchInput = document.getElementById("searchStudentInput");
                    searchInput.addEventListener('input', function() {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // Typical action to be performed when the document is ready:
                                // document.getElementById("resultContainer").innerHTML = xhttp.responseText;
                                console.log(xhttp.responseText);
                                // document.write(xhttp.responseText)
                                
                            }
                        };
                        xhttp.open("POST", "searchFunction.php?test=<?php echo $searchStudentFunction['leerlingnummer'] ?>", true);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- <script>
        setTimeout(function() {
            $('.loader-bg').fadeToggle();
        }, 1250);
    </script> -->
</body>

</html>