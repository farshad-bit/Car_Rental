<?php

namespace App\Controller;

use App\Service\Database;

require_once 'BaseController.php';
require_once __DIR__ . '/../Service/Database.php';

class CarangeboteController extends BaseController
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function index()
    {
        $pdo = $this->database->getPDO();
        $cars = $this->database->getCars();

        // if (!empty($cars)) {
        //     foreach ($cars as $car) {
        //         echo "Marke: " . $car['make'] . ", Modell: " . $car['model'] . "<br>";
        //     }
        // } else {
        //     echo "Keine Autos gefunden.";
        // }

        parent::loadView('index', 'Carangebote', ['cars' => $cars]);
    }
}
