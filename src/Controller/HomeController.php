<?php

namespace App\Controller;

require_once 'BaseController.php';

class HomeController extends BaseController
{
    public function index(): void
    {
        // echo "HomeController aufgerufen.<br>";
        parent::loadView('home');
    }
}
