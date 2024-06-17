<?php

// Verbindungsdaten für die Datenbank
$host = 'localhost'; // Hostname
$dbname = 'car_rental'; // Name der Datenbank
$username = 'root'; // Benutzername
$password = ''; // Passwort (leer lassen, wenn Sie keins haben)

try {
    // Verbindung zur Datenbank herstellen
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Erfolgsmeldung ausgeben
    echo "Verbindung zur Datenbank erfolgreich hergestellt!";
} catch (PDOException $e) {
    // Fehlermeldung ausgeben, wenn die Verbindung fehlschlägt
    echo "Verbindung zur Datenbank fehlgeschlagen: " . $e->getMessage();
}
?>
