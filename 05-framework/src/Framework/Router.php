<?php

namespace App\Framework;

use Exception;

class Router
{
    private $routes = [
        'GET' => [
            'producto/list' => [
                'controller' => 'App\Controllers\ProductoController',
                'action' => 'listarProductos',
            ],
        ],
        'POST' => [
            'producto/guardar' => [
                'controller' => 'App\Controllers\ProductoController',
                'action' => 'guardar',
            ],
        ],
    ];

    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        parse_str($_SERVER['QUERY_STRING'], $query);

        if (array_key_exists('r', $query)) {
            $r = $query['r'];
        } else {
            $r = 'site/index';
        }

        if (array_key_exists($r, $this->routes[$method])) {
            $controllerClass = $this->routes[$method][$r]['controller'];
            $action = $this->routes[$method][$r]['action'];

            $controller = new $controllerClass();
            $controller->$action();
            return;
        }

        throw new Exception('Ruta desconocida');
    }
}
