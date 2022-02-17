

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
</head>

<body>


    <form action="./formulieren/index.php" method="POST">

        <input type="text" name="leerling_nummer" placeholder="leerling nummer">
        <br>
        <input type="text" name="naam" placeholder="naam">
        <br>
        <input type="text" name="achternaam" placeholder="achternaam">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="text" name="klas" placeholder="klas">
        <br>
        <input type="text" name="wachtwoord" placeholder="wachtwoord">
        <br>
        <input type="text" name="wwopnieuw" placeholder="bevestig wachtwoord">
        <br>
        <br>
        <input type="submit" name="submit_createAcc" value="maak account">
    </form>

</body>

</html>