<?php

$arreglo = [
    'ci' => 1000,
    'nombre' => 'juan',
];

extract($arreglo);

print_r($ci);

echo '<br>';

print_r($nombre);
