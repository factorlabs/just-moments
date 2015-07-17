<?php

namespace JustMomments\Kernel;

use JustMomments\ServiceContainer\Container;
use JustMomments\Routing\Router;

class Kernel
{
    public function handle(Router $router)
    {
        $router->createController();
        
        $controller = $router->getController();
        
        echo $router->dispatch();
    }
}
