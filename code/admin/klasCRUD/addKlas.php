<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>klas aanmaken</title>
</head>

<body>
<form action="#" method="post">
		Naam van klas:<input type="text" name="klasnaam" id="" placeholder=""><br>
		<input type="submit" name="submit" value="submit"><br>
	</form>
</body>

<?php

include_once dirname(__DIR__) . ("../../core/databaseConnection.php");
include("../../functions/crudKlassen.php");

if (isset($_POST['submit']) && $_POST['submit'] != '') {
	$db = new Database();
	// initialize object
	$crudklassen = new crudklassen();
	// read products will be here
	// query products

	$klasnaam = mysqli_real_escape_string($db->con, $_POST['klasnaam']);

	echo "$klasnaam is Toegevoegd";
	echo "<br>";

	$result = $crudklassen->create($klasnaam);
	// form legen
    if (!$result){
        header("location: ../index.php");
        exit();
    }
}
?>
</html>