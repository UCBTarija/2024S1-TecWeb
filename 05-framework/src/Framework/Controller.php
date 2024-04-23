<?php

namespace App\Framework;

class Controller
{
    public function render(string $view, array $params = [])
    {
        extract($params);

        ob_start();
        include __DIR__ . "/../Views/$view.php";
        $content = ob_get_clean();
        
        include __DIR__ . "/../Views/layout.php";
    }
}
