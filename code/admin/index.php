<?php
session_start();

include("../core/databaseConnection.php");
include '../functions/classes/userClass.php';

$userClass = new User();
$studentClass = new StudentUser();

$loginUserFunction = $userClass->CheckInputAdmin();
$getAdminAccountFunction = $userClass->getAdminAccount();

$searchStudentFunction = $studentClass->searchStudent();
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
            <div class="innerLeftContainer">
                <div class="block blue">
                    <div class="block_left">
                        <h2>Fase 1 Formulier</h2>
                    </div>
                    <div class="block_right">
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
                            <div class="plusIcon"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // $(document).on('click','#showData',function(e){
            //     $.ajax({    
            //         type: "GET",
            //         url: "backend-script.php",             
            //         dataType: "html",                  
            //         success: function(data){                    
            //             $("#table-container").html(data); 
           
            //         }
            //     });
            // });
            // function showStudent(str) {
            //     var xhttp;
            //     if (str == "") {
            //         document.getElementById("resultContainer").innerHTML = "";
            //         return;
            //     }
            //     xhttp = new XMLHttpRequest();
            //     xhttp.onreadystatechange = function() {
            //         if (this.readyState == 4 && this.status == 200) {
            //             document.getElementById("resultContainer").innerHTML = this.responseText;
            //         }
            //     };
            //     xhttp.open("GET", "livesearch.php?q="+str, true);
            //     xhttp.send();
            // }
            
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="ajax.js"></script>
        <div class="containerMiddle">
            <div id="innerContainerMiddle">
                <form id="searchForm" action="index.php" method="post">
                    <div id="searchContainer">
                        <!-- <div class="searchIcon"><img src="../assets/Materiaal/icoonset/Zoeken.svg" alt="search"></div> -->
                        <div class="searchInnerContainer">
                            <!-- <input name="searchSubmit" type="submit" value="Zoeken"> -->
                            <button id="showStudent">show student</button>
                        </div>
                        <div class="searchInnerContainerMiddle">
                            <input type="search" name="studentNumber" id="searchStudentInput" onkeyup="showStudent(this.value)" value="533187">

                        </div>
                        <div class="searchInnerContainer">
                            <div class="filterIcon"><img src="../assets/Materiaal/icoonset/filter.svg" alt="Filter"></div>
                        </div>
                    </div>
                </form>
                <!-- https://www.w3schools.com/xml/ajax_database.asp -->
                <!-- gebruik link, vindt vervang code -->
                <div id="resultContainer">
                    test
                    <?php
                    // include "../functions/livesearch.php";
                    ?>
                </div>
                
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