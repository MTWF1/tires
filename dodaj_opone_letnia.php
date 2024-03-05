<?php
// Dane do połączenia z bazą danych
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tires';

// Sprawdzenie czy dane zostały przesłane z formularza
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nawiązanie połączenia z bazą danych
    $connection = new mysqli($host, $username, $password, $database);

    // Sprawdzenie czy połączenie zostało ustanowione poprawnie
    if ($connection->connect_error) {
        die("Błąd połączenia z bazą danych: " . $connection->connect_error);
    }

    // Dane nowej pozycji
    $Name = $_POST['nazwa']; // Przyjmuję, że dane są przesyłane metodą POST
    $profile = $_POST['profile'];
    $width = $_POST['width'];
    $size = $_POST['size'];
    $tread = $_POST['tread'];

    // Zapytanie SQL do wstawienia nowej pozycji
    $sql = "INSERT INTO summertires (Name, profile, width, size, tread) VALUES ('$Name', '$profile', '$width', '$size', '$tread')";

    // Wykonanie zapytania
    if ($connection->query($sql) === TRUE) {
        echo "Nowa pozycja została dodana pomyślnie.";
    } else {
        echo "Błąd: " . $sql . "<br>" . $connection->error;
    }

    // Zamknięcie połączenia
    $connection->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dodaj oponę letnią</title>
</head>
<body>
    <h2>Dodaj oponę letnią</h2>
    <form method="post" action="dodaj_opone_letnia.php">
        Nazwa: <input type="text" name="nazwa"><br><br>
        Profil: <input type="number" name="profile"><br><br>
        Szerokość: <input type="number" name="width"><br><br>
        Średnica: <input type="number" name="size"><br><br>
        Bieżnik: <input type="number" name="tread"><br><br>
        <input type="submit" value="Dodaj pozycję">
    </form>
    <div class="buttons">
        <a href="index.php">Wróć</a>
    </div>
</body>
</html>

