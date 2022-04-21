<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-style.css">
    <title>Login docent/admin</title>
</head>
<!-- <body>
    <h1>admin/docent</h1>
    <a href="./index.php">terug</a>
    <form action="./admin/index.php" method="POST">
        <input type="text" name="afkorting_admin" placeholder="afkorting">
        <input type="text" name="ww_admin" placeholder="wachtwoord">
        <input name="submit_admin" type="submit">
    </form>
</body> -->
<body>
    <div class="containerLeft"></div>
    <div class="containerRight">

        <div class="miniContainer">
            <form action="./admin/index.php" method="POST">
                <img class="logo" src="assets/Materiaal/Logo/Logo-Login.svg" alt="logo">
                <h1>Login</h1>
                <p>Docentafkorting</p>
                <input name="afkorting_admin" value="" class="inputText" type="text">
                <p>Wachtwoord</p>
                <input name="ww_admin" value="" class="inputText" type="password"> <br>
                <div class="remember">
                    <div class="onthoudmij">
                        <input class="checkBox" id="Box" type="checkbox">
                        <label for="Box">Onthoud mij</label>
                    </div>
                    <a href="#">Wachtwoord vergeten?</a>
                </div>
                <!-- <button><a class=" button" href="home.html">Login</a></button> -->
                <input name="submit_admin" type="submit" value="Login">
            </form>
        </div>
    </div>
</body>

<!-- inloggen voor studenten -->
<h1>leerling</h1>
<form action="./formulieren/index.php" method="POST">
    <input name="leerlingNummer_login" type="text" placeholder="Leerling nummer">
    <input name="wachtwoord_login" type="text" placeholder="wachtwoord">
    <input name="submit_login" type="submit">
</form>
<p>Nog geen account? <a href="create_account.php">klik</a> dan hier</p>
<p>wachtwoord vergeten? <a href="#">klik</a> dan hier</p>
<p>inloggen als admin/docent <a href="inlog_admin.php">klik</a> dan hier</p>
<p>assesment formulier invullen zonder account?<a href="./formulieren_zonder_account/index.html">klik</a> dan hier.<br>
let op! zonder account word je formulier niet opgeslagen en kan je het alleen downloaden</p>
    
</body>
</html>