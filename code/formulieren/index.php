<?php

include("../core/databaseConnection.php");
include("../functions/verifyLogin.php");
include("../functions/verifySignUp.php");
include("../functions/getAccount.php");

if (isset($_POST["submit_login"])) {
    $executeFunction = new verifyLogin();
    $checkLoginFunction = $executeFunction->CheckInputs();
    exit();
}


if (isset($_POST["submit_createAcc"])) {
    $verfySignUp = new classVerifySignUp();
    $checkSignUpFucntion = $verfySignUp->checkSignUp();
}

$getAccountClass = new getAccountInfo();
$getStudentAccountFunction = $getAccountClass->getStudentAccount();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<h1>Welkom <?php echo $getStudentAccountFunction["naam"];?> <?php echo $getStudentAccountFunction["leerling nummer"];?></h1>

<p>Kies hier welk formulier u wilt invullen.</p>
<body>
    <a href="../formulieren/form.php?formID=1">Formulier fase 1</a>
    <a href="../formulieren/form.php?formID=2">Formulier fase 2</a>
    <a href="../formulieren/form.php?formID=3">Formulier fase 3</a>
    <a href="../formulieren/form.php?formID=4">Formulier fase 4</a>
</body>

</html>