<?php

namespace App\Controller;

class BaseController
{
    protected string $viewsPath = __DIR__ . '/../View/';

    public function loadView($viewName, $subDir = '', $data = []): void
    {
        $path = $this->viewsPath . ($subDir ? $subDir . '/' : '') . $viewName . '.php';

        if (file_exists($path)) {
            extract($data);
            require($path);
        } else {
            echo "Die View $viewName konnte nicht gefunden werden.";
        }
    }
}
