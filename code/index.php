<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

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