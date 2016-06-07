<?php require ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mobitel</title>
</head>

<body>
<h1 style="color: darkorange; text-align: center; font-family: 'Abyssinica SIL'">
    Mobitel
</h1>

<p>
    <hr>
    <?php
    $sql = "SELECT id,naziv,o_mobitelu, cijena FROM Mobitel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo ('<table>');
        echo ('<tr><tr>Id</tr><tr>Naziv</tr><tr>O mobitelu</tr><tr>Cijena</tr></tr>');
        while($row = $result->fetch_assoc()) {
            echo ('<tr>');
           // echo "id: " . $row["id"]. " - registracija: " . $row["registracija"]. " " . $row["ime"]. "<br>";
            echo ('<td>'. $row ['id'] .  '|'  .'</td>');
            echo ('<td>'. $row ['naziv'] .   '|'   .'</td>');
            echo ('<td>'. $row ['o_mobitelu'] .   '|'   .'</td>');
            echo ('<td>'. $row ['cijena']. 'kn' .'</td>');
            echo ('<td><a href ="delete.php?id='. $row['id']. '"><img src ="delete.png"></a></td>');
            echo ('<td><a href ="edit.php?id='. $row['id']. '"><img src ="edit.png"></a></td>');
            echo ('</tr>');
        }
        echo ('</table>');
    } else {
        echo "Nema mobitela!";
    }
    $conn->close();
    ?>
    <hr>
</p>
    <a href="unos.php">Unos novog mobitela</a>
<p>
</p>
</body>
</html>