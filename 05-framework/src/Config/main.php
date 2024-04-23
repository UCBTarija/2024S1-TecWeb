<?php

return [
    'routes' => [
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
    ],
];
