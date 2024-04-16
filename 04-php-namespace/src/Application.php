<?php

namespace App;

class Application
{
    public function saludar()
    {
        //$titulo = 'Titulo del Sitio';        
        //include 'views/main.php';

        $arreglo = [];
        $arreglo[] = "hola";
        $arreglo[] = "Juan";
        $arreglo[] = 10;
        $arreglo[] = true;

        for ($i = 0; $i < count($arreglo); $i++) {
            echo $arreglo[$i];
        }

        echo '<br>';

        foreach ($arreglo as $item) {
            echo $item;
        }


        // echo '<pre>';
        // print_r($arreglo);
        // exit();

        // var_dump($arreglo);
        // exit();

        $persona = [
            'id' => 1000,
            'nombre' => 'Juan',
            'universidad' => [
                'nombre' => 'UCB',
                'telefono' => 34324234,
            ],
            'materias' => [
                'SIS111',
                'SIS223', 
                'GRADO' => 'SIS344'
            ],
            'pesos' => [1, 3, 5, 6],
            1000,
            'chau',
        ];
        echo '<pre>';

        echo json_encode($persona);

        print_r($persona);
        exit();
    }
}
