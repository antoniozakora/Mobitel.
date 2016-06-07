<?php require ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mobitel</title>
</head>

<body>
<h1 style="color: chartreuse; text-align: center; font-family: 'Abyssinica SIL'">
    Mobitel
</h1>

<p>
<form action="insert.php" method="post">
    Naziv:<br>
    <input type="text" name="naziv"><br>
    O mobitelu:<br>
    <input type="text" name="o_mobitelu"><br>
    Cijena:<br>
    <input type="text" name="cijena"><br>
    <input type="submit" value="Unesi novi mobitel">
</form>
</p>
</body>
</html>