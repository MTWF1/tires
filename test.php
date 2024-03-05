<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dane do połączenia z bazą danych
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'tires';

    // Nawiązanie połączenia z bazą danych
    $connection = new mysqli($host, $username, $password, $database);

    // Sprawdzenie czy połączenie zostało ustanowione poprawnie
    if ($connection->connect_error) {
        die("Błąd połączenia z bazą danych: " . $connection->connect_error);
    }

    // Dane nowej pozycji
    $Name = $_POST['nazwa']; // Przyjmuję, że dane są przesyłane metodą POST
    $Number = $_POST['numer'];

    // Zapytanie SQL do wstawienia nowej pozycji
    $sql = "INSERT INTO test (Name, Number) VALUES ('$Name', '$Number')";

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
    <title>Formularz dodawania pozycji</title>
</head>
<body>
    <h2>Dodaj nową pozycję</h2>
    <form method="post" action="test.php">
        Nazwa: <input type="text" name="nazwa"><br><br>
        Numer: <input type="text" name="numer"><br><br>
        <input type="submit" value="Dodaj pozycję">
    </form>
</body>
</html>
<div class="buttons">
    <a href="index.php">Wróć</a>
    </div>
</body>
</html>

