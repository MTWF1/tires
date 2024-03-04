<!DOCTYPE html>
<html>
<head>
    <title>Dodaj oponę</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<h2>Dodaj oponę</h2>

<form action="dodaj_opone.php" method="post">
    <label for="Name">Nazwa:</label><br>
    <input type="text" id="Name" name="Name" required><br><br>
    
    <label for="profil">Profil:</label><br>
    <input type="numbers" id="profil" name="profil" required><br><br>
    
    <label for="szerokosc">Szerokość:</label><br>
    <input type="numbers" id="szerokosc" name="szerokosc" required><br><br>
    
    <label for="srednica">Średnica:</label><br>
    <input type="numbers" id="srednica" name="srednica" required><br><br>
    
    <label for="typ">Typ:</label><br>
<select id="typ" name="typ" required>
    <option value="Letnia">Letnia</option>
    <option value="Zimowa">Zimowa</option>
</select><br><br>
    
    <label for="bieznik">Bieżnik:</label><br>
    <input type="numbers" id="bieznik" name="bieznik" required><br><br>
    
    <input type="submit" value="Dodaj oponę">
    
</form>
<div class="buttons">
    <a href="index.php">Wróć</a>
    </div>
</body>
</html>

<?php
$host = 'localhost';
$username = 'root'; // Twoja nazwa użytkownika
$password = ''; // Twoje hasło
$database = 'tires'; // Nazwa twojej bazy danych

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST['Name'];
    $profil = $_POST['profil'];
    $szerokosc = $_POST['szerokosc'];
    $srednica = $_POST['srednica'];
    $typ = $_POST['typ'];
    $bieznik = $_POST['bieznik'];

    $sql = "INSERT INTO summertires (nazwa, profil, szerokosc, srednica, typ, bieznik) VALUES ('$nazwa', '$profil', '$szerokosc', '$srednica', '$typ', '$bieznik')";

    if ($conn->query($sql) === TRUE) {
        echo "Opona dodana pomyślnie";
    } else {
        echo "Błąd podczas dodawania opony: " . $conn->error;
    }
}

$conn->close();
?>