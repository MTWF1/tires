<!DOCTYPE html>
<html>
<head>
    <title>Lista Samochodów</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .buttons {
            margin-top: 20px;
            margin-bottom: 40px; 
        }
        .buttons a {
            display: inline-block;
            margin-right: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Opony letnie</h2>

<div class="buttons">
    <a href="dodaj_opone.php">Dodaj oponę</a>
    <a href="index.php">Wróć</a>
    </div>

<?php
// Dane do połączenia z bazą danych
$host = 'localhost';
$username = 'root'; // Twoja nazwa użytkownika
$password = ''; // Twoje hasło
$database = 'tires'; // Nazwa twojej bazy danych

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM summertires";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>#</th><th>Nazwa</th><th>Profil</th><th>Szerokość</th><th>Średnica</th><th>Typ</th><th>Bieżnik</th></tr>";
        $counter = 1;
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $counter++ . "</td><td>"  . $row["Name"]. "</td><td>" . $row["profile"]. "</td><td>" . $row["width"]. "</td><td>" . $row["size"]. "</td><td>" . $row["type"]. "</td><td>" . $row["tread"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Brak danych o oponach letnich";
    }
}

$conn->close();
?>

</body>
</html>