<!DOCTYPE html>
<html>
<head>
    <title>Lista Samochodów</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Lista samochodów</h2>

<div class="buttons">
    <a href="opony_letnie.php">Opony letnie</a>
    <a href="opony_zimowe.php">Opony zimowe</a>
    <a href="komplety_opon.php">Komplety opon</a>
    <a href="opony_zdekompletowane.php">Opony zdekompletowane</a>
    <a href="opony_usuniete.php">Opony usunięte</a>
</div>


<?php
// Dane do połączenia z bazą danych
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'tires'; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>#</th><th>Numer rejestracyjny</th><th>Nazwa samochodu</th><th>Typ samochodu</th><th>Założone opony</th></tr>";
    $counter = 1;
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $counter++ . "</td><td>" . $row["registration_number"]. "</td><td>" . $row["car_name"]. "</td><td>" . $row["car_type"]. "</td><td>" . $row["SETID"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak danych w tabeli samochodów";
}




$conn->close();
?>

</body>
</html>