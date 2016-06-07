<?php require ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mobitel</title>
</head>

<body>
<h1>
    Mobitel
</h1>

<p>
    <?php
    $sql = "UPDATE Mobitel SET naziv='". $_POST['naziv'] ."', o_mobitelu='". $_POST['o_mobitelu'] . "', cijena='". $_POST['cijena'] ."' WHERE id=" . $_POST['id'];
    $result = $conn->query($sql);


    echo ('Novi mobitel je unesen! <br>');
    echo ('<a href="index.php">Povratak na prikaz novih mobitela </a>')
    ?>
</p>
</body>
</html>