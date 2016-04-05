<?php require ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>

<body>
<h1>
    Automobili
</h1>

<p>
<form action="insert.php" method="post">
    Registracija:<br>
    <input type="text" name="registracija"><br>
    Ime:<br>
    <input type="text" name="ime"><br>
    <input type="submit" value="Unesi automobil">
</form>
</p>
</body>
</html>