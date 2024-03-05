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
    $Name = $_POST['car_name']; // Przyjmuję, że dane są przesyłane metodą POST
    $registration = $_POST['registration_number'];
    $type = $_POST['car_type'];
    

    // Zapytanie SQL do wstawienia nowej pozycji
    $sql = "INSERT INTO cars (car_name, registration_number, car_type) VALUES ('$Name', '$registration', '$type')";

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
    <title>Dodaj auto</title>
</head>
<body>
    <h2>Dodaj auto</h2>
    <form method="post" action="dodaj_auto.php">
        Nazwa: <input type="text" name="car_name"><br><br>
        Numer rejestracyjny: <input type="text" name="registration_number"><br><br>
        Typ: <input type="text" name="car_type"><br><br>
        <input type="submit" value="Dodaj auto">
    </form>
    <div class="buttons">
        <a href="index.php">Wróć</a>
    </div>
</body>
</html>

