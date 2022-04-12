<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form editen</title>
</head>

<body>
    <form action="#" method="post">
        Naam van form veranderen:<input type="text" name="AF1" id="" placeholder=""><br>
        Info tekst van form:<input type="text" name="tekst_intro" id="" placeholder=""><br>
        Review titel veranderen:<input type="text" name="review_fase_1" id="" placeholder=""><br>
        Review info tekst:<input type="text" name="review_fase_1_tekst" id="" placeholder=""><br>
		<input type="submit" name="submit" value="submit"><br>
	</form>
</body>

<?php

include_once dirname(__DIR__) . ("../../core/databaseConnection.php");
include("../../functions/crudFormulieren.php");

if (isset($_POST['submit']) && $_POST['submit'] != '') {
	$database = new Database();
	// initialize object
        
    $tablename = $_GET['tablename'];
	$crudformulieren = new crudformulieren($tablename);
	// read products will be here
	// query products

    // $id = $_GET['id'];
    $id = 1;
	$AF1 = mysqli_real_escape_string($db->con, $_POST['AF1']);
	$tekst_intro = mysqli_real_escape_string($db->con, $_POST['tekst_intro']);
	$review_fase_1 = mysqli_real_escape_string($db->con, $_POST['review_fase_1']);
	$review_fase_1_tekst = mysqli_real_escape_string($db->con, $_POST['review_fase_1_tekst']);



	// echo "$AF1 is aangepast";
	// echo "<br>";

	$result = $crudformulieren->update($id, $AF1, $tekst_intro, $review_fase_1, $review_fase_1_tekst);
	// form legen
    echo $result;
    if (!$result){
        header("location: ../../admin/index.php");
        exit();
    }
}
?>
</html>