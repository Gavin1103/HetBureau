<?php
$leerlingNummer = $_POST["leerlingnummer_name_af1"];
echo $leerlingNummer;

if(!empty($_POST["leerlingnummer_name_af1"])){
    echo "bestaat";
}else{
    echo "bestaat niet";
    header("location: ../forms/formulieren_fase_1.php?error=geenID");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentInfo</title>
</head>

<body>
    <br>
    Bekijk formulier fase 1 van deze persoon
    <a href="../forms/fulledInForm_F1.php?leerlingNummer=<?php echo $leerlingNummer ?>">Form fase 1</a>


</body>

</html>