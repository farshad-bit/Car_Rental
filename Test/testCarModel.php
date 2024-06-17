<?php

// Definiere den absoluten Pfad zur Database.php-Datei
$databaseFilePath = 'C:/xampp/htdocs/Mario_2024/App/src/Service/Database.php';

// Überprüfe, ob die Datei existiert
if (file_exists($databaseFilePath)) {
    // Führe die Database.php-Datei ein
    require_once($databaseFilePath);

    // Echo zur Bestätigung
    echo "Die Datei Database.php wurde erfolgreich gefunden und eingebunden. Du kannst nun die Datenbankverbindung nutzen.";

    
} else {
    // Datei existiert nicht, zeige eine Fehlermeldung an
    echo "Die Datei Database.php wurde nicht gefunden.";
    
}
