<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login docent/admin</title>
</head>

<body>
    <h1>admin/docent</h1>
    <a href="./index.php">terug</a>
    <!-- inloggen voor docenten -->
    <form action="./admin/index.php" method="POST">
        <input type="text" name="afkorting_admin" placeholder="afkorting">
        <input type="text" name="ww_admin" placeholder="wachtwoord">
        <input name="submit_admin" type="submit">
    </form>
</body>

</html>