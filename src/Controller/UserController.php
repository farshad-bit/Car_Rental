<?php

namespace App\Controller;

use App\Service\Database;

require_once 'BaseController.php';
require_once __DIR__ . '/../Service/Database.php';

class UserController extends BaseController
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function index()
    {
        
        include_once __DIR__ . '/../View/user/index.php';
    }

    public function showLoginForm()
    {
        // Zeige das Anmeldeformular an
        $this->loadView('user/index.php');
    }

    public function login()
    {
        // Überprüfe die Anmeldeinformationen
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->database->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Anmeldung erfolgreich, weiterleiten oder andere Aktionen ausführen
            header('Location: /carangebote');
            exit;
        } else {
            // Anmeldung fehlgeschlagen, Anmeldeformular erneut anzeigen oder Fehlermeldung anzeigen
            echo "Anmeldung fehlgeschlagen. Bitte überprüfen Sie Ihre Anmeldeinformationen.";
        }
    }

    public function rentCar()
    {
        // Überprüfe, ob der Benutzer angemeldet ist
        if ($this->isLoggedIn()) {
            // Der Benutzer ist angemeldet, erlaube das Mieten des Autos
            // Führe die entsprechenden Aktionen aus
        } else {
            // Der Benutzer ist nicht angemeldet, leite ihn zur Anmeldung weiter
            header('Location: /user/login');
            exit;
        }
    }

    private function isLoggedIn()
    {
        // Fügen Sie hier die Logik zur Überprüfung der Anmeldung des Benutzers hinzu
        // Zum Beispiel überprüfen Sie, ob $_SESSION-Werte vorhanden sind oder ähnliches
        // Für dieses Beispiel lasse ich es einfach und nehme an, dass der Benutzer immer angemeldet ist
        return true;
    }
}
