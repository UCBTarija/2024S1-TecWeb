<?php

$texto = "este es un?texto largo lleno@ de cosas";

echo strtok($texto, '?');
echo '<br>';
echo strtok('@');
echo '<br>';
echo strtok('');