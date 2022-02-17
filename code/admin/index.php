CRUD komt hier
<?php
include("../functions/getAccount.php");
include("../functions/verifyAdmin.php");
include("../core/databaseConnection.php");
include("../functions/getklassen.php");

$verifyAdminLogin = new verifyAdminLoginClass();
$verifyAdmin = $verifyAdminLogin->checkInputAdmin();

$getAdminAccountClass = new getAccountInfo();
$getAdminAccountFunction = $getAdminAccountClass->getAdminAccount();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Welkom <?php echo $getAdminAccountFunction["naam"] ?> <?php echo $getAdminAccountFunction["afkorting"] ?></h1>
    <a href="addAdminUser.php">Voeg een Admin/Docent toe</a>
    <h2>Klassen:</h2>
    <p>
        <?php
        $getKlassen = new getKlassen();
        $getKlassenFunction = $getKlassen->loopKlas();
        ?>
    </p>
</body>

</html>