<?php

// Fehlerberichterstattung aktivieren, um alle Fehler anzuzeigen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Alle erforderlichen Controller-Dateien einbinden
require_once __DIR__ . '/../src/Controller/BaseController.php';
require_once __DIR__ . '/../src/Controller/CarangeboteController.php';
require_once __DIR__ . '/../src/Controller/HomeController.php';
require_once __DIR__ . '/../src/Controller/UserController.php';

// Die erforderlichen Controller-Klassen verwenden
use App\Controller\HomeController;
use App\Controller\CarangeboteController;
use App\Controller\UserController;

// Den gewünschten Controller-Namen aus der GET-Anfrage erhalten oder den Standardwert "home" verwenden
$controllerName = $_GET['controller'] ?? 'home';

// Je nach Controller-Namen die entsprechende Controller-Instanz erstellen
if ($controllerName === 'carangebote') {
    $controller = new CarangeboteController();
} elseif ($controllerName === 'home') {
    $controller = new HomeController();
} elseif ($controllerName === 'user') {
    $controller = new UserController();
} else {
    // Fehlermeldung ausgeben, wenn der Controller nicht gefunden wurde
    echo '404 - Controller not found';
    exit;
}

// Die "index" Methode des ausgewählten Controllers aufrufen
$controller->index();
