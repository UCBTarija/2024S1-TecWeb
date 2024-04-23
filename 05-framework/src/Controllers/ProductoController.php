<?php

namespace App\Controllers;

use App\Framework\Controller;

class ProductoController extends Controller{

    public function listarProductos(){
        $titulo = 'Titulo del Sitio';
        $productos = [
            ['id' => 10, 'codigo' => 2000, 'nombre' => 'papa'],
            ['id' => 20, 'codigo' => 3000, 'nombre' => 'arroz'],
            ['id' => 30, 'codigo' => 4000, 'nombre' => 'tomate'],
            ['id' => 40, 'codigo' => 5000, 'nombre' => 'palta'],
        ];


        $this->render('productos-list', [
            'titulo' => $titulo,
            'productos' => $productos,
        ]);
    }

    public function guardar(){
        echo 'aaaa';
    }

}