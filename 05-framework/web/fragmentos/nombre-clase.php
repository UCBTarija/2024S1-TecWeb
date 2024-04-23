<?php


class Demo
{
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }
}

print_r(Demo::class);
echo '<br>';

$nombreClase = 'Demo';
$nombreFuncion = 'suma';

$instanciaClase = new $nombreClase();
$resultado = $instanciaClase->$nombreFuncion(6,5);

print_r($resultado);
