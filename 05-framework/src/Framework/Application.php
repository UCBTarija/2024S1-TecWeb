<?php

namespace App\Framework;


class Application
{
    public function run()
    {
        $router = new Router();
        $router->dispatch();
    }
}
