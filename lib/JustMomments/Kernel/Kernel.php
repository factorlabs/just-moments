<?php

namespace JustMoments\Kernel;

use JustMoments\ServiceContainer\Container;
use JustMoments\Routing\Router;

class Kernel
{
    public function handle(Router $router)
    {
        $router->createController();
        
        $controller = $router->getController();
        
        echo $router->dispatch();
    }
}
