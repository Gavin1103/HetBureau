<?php
session_start();

if ($_SESSION['userType'] != "admin" && $_SESSION['userType'] != "docent") {
    header("location: index.php");
}
