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
<?php echo ($_GET['id']);
$sql = "SELECT id, naziv, o_mobitelu, cijena FROM Mobitel WHERE id=" . $_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $row = $result->fetch_assoc();
} else {
    echo "Nema mobitela";
    die();
}
$conn->close();
?>
<form action="update.php" method="post">
    Naziv:<br>
    <input type="text" name="naziv" value="<?php echo($row['naziv']); ?>"><br>
    O mobitelu:<br>
    <input type="text" name="o_mobitelu" value="<?php echo($row['o_mobitelu']); ?>"><br>
    Cijena:<br>
    <input type="text" name="cijena" value="<?php echo($row['cijena']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($row['id']); ?>"><br>
    <input type="submit" value="Unesi novi mobitel!">
</form>
</p>
</body>
</html>