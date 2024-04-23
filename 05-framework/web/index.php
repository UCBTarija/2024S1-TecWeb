<?php

use App\Framework\Application;

require '../src/Framework/Application.php';
require '../src/Framework/Router.php';
require '../src/Framework/Controller.php';
require '../src/Controllers/ProductoController.php';

$app = new Application();
$app->run();
