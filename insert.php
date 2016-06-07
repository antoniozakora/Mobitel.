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
    <?php
    $sql = "INSERT INTO Mobitel (naziv, o_mobitelu, cijena) VALUES ('" . $_POST['naziv']. "','" . $_POST['o_mobitelu']."','". $_POST['cijena']. "')";
    $result = $conn->query($sql);
    echo ('Novi mobitel je unesen! <br>');
    echo ('<a href="index.php">Povratak na prikaz novih mobitela! </a>')
    ?>
</p>
</body>
</html>