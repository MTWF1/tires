<!DOCTYPE html>
<html>
<head>
    <title>Lista Samochodów</title>
    <style>
      /* Globalne style */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1, h2, h3, h4, h5, h6 {
    margin: 20px 0;
    text-align: center;
}

/* Style dla tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    border: 1px solid black;
}

th {
    background-color: #f2f2f2;
}

/* Style dla przycisków */
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

.buttons a:hover {
    background-color: #45a049;
}

/* Style dla formularza */
label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}
    </style>
</head>
<body>

<h2>Opony letnie</h2>

<div class="buttons">
    <a href="dodaj_opone_letnia.php">Dodaj oponę</a>
    <a href="index.php">Wróć</a>
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

$sql = "SELECT * FROM summertires";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>#</th><th>Nazwa</th><th>Profil</th><th>Szerokość</th><th>Średnica</th><th>Bieżnik</th></tr>";
        $counter = 1;
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $counter++ . "</td><td>"  . $row["Name"]. "</td><td>" . $row["profile"]. "</td><td>" . $row["width"]. "</td><td>" . $row["size"]. "</td><td>" . $row["tread"]. "</td></tr>";
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