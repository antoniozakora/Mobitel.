<?php require ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Naslov</title>
</head>

<body>
<h1>
    Naslov
</h1>

<p>
    <?php
    $sql = "SELECT id, registracija, ime FROM automobili";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - registracija: " . $row["registracija"]. " " . $row["ime"]. "<br>";
        }
    } else {
        echo "Nema automobila";
    }
    $conn->close();
    ?>
</p>
</body>
</html>