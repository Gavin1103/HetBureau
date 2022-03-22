CRUD komt hier
<?php
include("../functions/getAccount.php");
include("../functions/verifyAdmin.php");
include("../core/databaseConnection.php");

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
    <br>
    <p>Kies hier welk formulier u wilt invullen.</p>
    <a href="../formulieren/form.php?formID=1">Formulier fase 1</a>
    <a href="../formulieren/form.php?formID=2">Formulier fase 2</a>
    <a href="../formulieren/form.php?formID=3">Formulier fase 3</a>
    <a href="../formulieren/form.php?formID=4">Formulier fase 4</a>
    <br>
    <br>
    <form method="POST" action="#">
        <label for="zoeken">Zoek een leerling:</label>
        <input id="zoeken" type="text" name="zoeken" placeholder="leerlingnummer">
        <input type="submit" value="zoeken">
    </form>

</html>
</body>

</html>