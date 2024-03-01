<!DOCTYPE html>
<html>
<head>
    <title>Dodaj oponę</title>
</head>
<body>

<h2>Dodaj oponę</h2>

<form action="dodaj_opone.php" method="post">
    <label for="nazwa">Nazwa:</label><br>
    <input type="text" id="nazwa" name="nazwa" required><br><br>
    
    <label for="profil">Profil:</label><br>
    <input type="text" id="profil" name="profil" required><br><br>
    
    <label for="szerokosc">Szerokość:</label><br>
    <input type="text" id="szerokosc" name="szerokosc" required><br><br>
    
    <label for="srednica">Średnica:</label><br>
    <input type="text" id="srednica" name="srednica" required><br><br>
    
    <label for="typ">Typ:</label><br>
    <input type="text" id="typ" name="typ" required><br><br>
    
    <label for="bieznik">Bieżnik:</label><br>
    <input type="text" id="bieznik" name="bieznik" required><br><br>
    
    <input type="submit" value="Dodaj oponę">
</form>

</body>
</html>

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

// Pobranie danych z formularza
$name = $_POST['nazwa'];
$profile = $_POST['profil'];
$width = $_POST['szerokosc'];
$size = $_POST['srednica'];
$type = $_POST['typ'];
$tread = $_POST['bieznik'];

// Zapytanie SQL do dodania opony do bazy danych
$sql = "INSERT INTO summertires (name, profile, width, srednica, typ, bieznik) VALUES ('$name', '$profile', '$width', '$size', '$type', '$tread')";

if ($conn->query($sql) === TRUE) {
    echo "Opona dodana pomyślnie";
} else {
    echo "Błąd podczas dodawania opony: " . $conn->error;
}

$conn->close();
?>