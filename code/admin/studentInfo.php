<?php

include "../core/databaseConnection.php";
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
    <?php
    include '../functions/showForm.php';
    $showFormLinkF1 = new CheckIfFormExist();
    $FormLinkF1 = $showFormLinkF1->CheckFormF1();

    // echo "<p>Bekijk formulier fase 1 van deze persoon</p>";
                // echo "<a href='../forms/fulledInForm_F1.php?formNumber=form1&leerlingNummer='{$this->_leerlingnummer}'>Form fase 1</a>";
    ?>
 bn

</body>

</html>