<?php

namespace App;

class Demo
{
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }
}

$a = new Demo();
$a->suma(10,20);

print_r(Demo::class);
echo '<br>';

$nombreClase = 'App\Demo';
$nombreFuncion = 'suma';

$instanciaClase = new $nombreClase();
$resultado = $instanciaClase->$nombreFuncion(6,5);

print_r($resultado);
