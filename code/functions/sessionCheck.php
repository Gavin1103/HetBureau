<?php
// session_start();

if ($_SESSION['functie'] != "admin" && $_SESSION['functie'] != "docent") {
    header("location: index.php");
}
