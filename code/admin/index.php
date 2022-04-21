<?php
session_start();

include("../functions/getAccount.php");
include("../functions/verifyAdmin.php");
include("../core/databaseConnection.php");
include("functions_admin/getStudentsForm.php");



$verifyAdminLogin = new verifyAdminLoginClass();
$verifyAdmin = $verifyAdminLogin->checkInputAdmin();

$getAdminAccountClass = new getAccountInfo();
$getAdminAccountFunction = $getAdminAccountClass->getAdminAccount();


// if ($_SESSION['userType'] != "admin" && $_SESSION['userType'] != "docent") {
//     header("location: index.php");
// }
// include("../functions/sessionCheck.php")

// $getKlassen = new getKlassen();
// $getKlassenFunction = $getKlassen->loopKlas();
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
    <div class="loader-bg">
    <img class="preloader-img" src="../assets/Materiaal/icoonset/stop-button.png" alt="glu-logo">
  </div>
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
                <div id="searchContainer">
                    <div class="searchIcon"></div>
                    <form id="searchForm" action="" method="post">
                        <input type="search" name="" id="">
                        <input type="submit" value="zoeken">
                    </form>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function() {
            $('.loader-bg').fadeToggle();
        }, 1250);
    </script>

    <h1>Welkom <?php echo $getAdminAccountFunction["naam"] ?> <?php echo $getAdminAccountFunction["afkorting"] ?></h1>


    <a href="addAdminUser.php">Voeg een Admin/Docent toe</a>
    <h2>Klassen:</h2>
    <a href="klasCRUD/addKlas.php">Voeg klas toe</a>
    <p>
        <?php
        $getKlassen = new getKlassen();
        $getKlassenFunction = $getKlassen->loopKlas();
        ?>
    </p>
</body>

</html>