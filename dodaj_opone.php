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

$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'tires'; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

