<?php require ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mobitel</title>
</head>

<body>
<h1 style="color: deepskyblue; text-align: center; font-family: 'Abyssinica SIL'">
    Mobitel
</h1>

<p>
    <?php
    $sql = "DELETE FROM Mobitel WHERE id=" . $_GET['id'];

    $result = $conn ->query($sql);
    header ('Location: index.php');
    ?>
</p>
</body>
</html>