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
    $Name = $_POST['WName']; 
    $profile = $_POST['WProfile'];
    $width = $_POST['WWidth'];
    $size = $_POST['WSize'];
    $tread = $_POST['WTread'];

    // Zapytanie SQL do wstawienia nowej pozycji
    $sql = "INSERT INTO wintertires (WName, Wprofile, Wwidth, Wsize, Wtread) VALUES ('$Name', '$profile', '$width', '$size', '$tread')";

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
    <title>Dodaj oponę zomową</title>
</head>
<body>
    <h2>Dodaj oponę zimową</h2>
    <form method="post" action="dodaj_opone_zimowa.php">
        Nazwa: <input type="text" name="WName"><br><br>
        Profil: <input type="number" name="WProfile"><br><br>
        Szerokość: <input type="number" name="WWidth"><br><br>
        Średnica: <input type="number" name="WSize"><br><br>
        Bieżnik: <input type="number" name="WTread"><br><br>
        <input type="submit" value="Dodaj pozycję">
    </form>
    <div class="buttons">
        <a href="index.php">Wróć</a>
    </div>
</body>
</html>