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
</html>