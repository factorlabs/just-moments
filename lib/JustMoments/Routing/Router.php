<?php

namespace JustMoments\Routing;

use JustMoments\Request\Request;

class Router
{   
    protected $request;
    protected $controllerName;
    protected $actionName;
    protected $controller;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    public function createController()
    {
        $parts = explode('/', $this->request->getPath());
        
        $controllerName = (isset($parts[1]) && !empty($parts[1])) ? $parts[1] : 'index';
        $actionName = (isset($parts[2]) && !empty($parts[2])) ? $parts[2] : 'index';
        
        $this->controllerName = ucfirst($controllerName) . 'Controller';
        $this->actionName     = $actionName . 'Action';
        
        $this->controller = new $this->controllerName();
    }
    public function getController()
    {
        return $this->controller;
    }
    public function dispatch()
    {
        
        if (!method_exists($this->controller, $this->actionName) || !is_callable(array($this->controllerName, $this->actionName))) {
            throw new \Exception('Can not handle request');
        }
        
        return call_user_func(
            array(
                $this->controller,
                $this->actionName
            ),
            $this->request
        );
    }
}
