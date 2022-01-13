<?php

include("../core/databaseConnection.php");
include("../functions/verifyLogin.php");
include("../functions/verifySignUp.php");

if (isset($_POST["submit_login"])) {
    $executeFunction = new verifyLogin();
    $checkLoginFunction = $executeFunction->CheckInputs();
    exit();
}

if (isset($_POST["submit_createAcc"])) {
    $verfySignUp = new classVerifySignUp();
    $checkSignUpFucntion = $verfySignUp->checkSignUp();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <a href="../formulieren/formulieren_fase_1.php">Formulier fase 1</a>
    <a href="../formulieren/formulieren_fase_2.php">Formulier fase 2</a>
    <a href="../formulieren/formulieren_fase_3.php">Formulier fase 3</a>
    <a href="../formulieren/formulieren_fase_4.php">Formulier fase 4</a>

</body>

</html>