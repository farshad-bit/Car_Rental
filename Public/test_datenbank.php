<?php

// require_once __DIR__ . '/../src/Service/Database.php';

// use App\Service\Database;

// // Erstelle eine neue Datenbankverbindung
// $database = new Database();

// // Teste das Abrufen von Autos
// $cars = $database->getCars();

// echo "<h2>Autos in der Datenbank:</h2>";
// if (!empty($cars)) {
//     foreach ($cars as $car) {
//         echo "<p>Marke: " . htmlspecialchars($car['make']) . ", Modell: " . htmlspecialchars($car['model']) . ", Jahr: " . htmlspecialchars($car['year']) . "</p>";
//     }
// } else {
//     echo "<p>Keine Autos gefunden.</p>";
// }

// // Teste das Hinzufügen eines neuen Benutzers mit Eingabewerten
// $username = 'Fra';
// $password = 'testpd';
// $email = 't@le.com';

// $added = $database->addUser($username, $password, $email);

// if ($added) {
//     echo "<p>Neuer Benutzer wurde erfolgreich hinzugefügt.</p>";
// } else {
//     echo "<p>Fehler beim Hinzufügen des neuen Benutzers.</p>";
// }

// // Teste das Abrufen eines Benutzers nach Benutzername
// $usernameToFind = 'testuser';
// $user = $database->getUserByUsername($usernameToFind);

// echo "<h2>Benutzer abrufen:</h2>";
// if ($user) {
//     echo "<p>Benutzer gefunden:</p>";
//     echo "<p>Benutzername: " . htmlspecialchars($user['username']) . ", Email: " . htmlspecialchars($user['email']) . "</p>";
// } else {
//     echo "<p>Benutzer nicht gefunden.</p>";
// }
