<?php

namespace JustMoments\Controller;

abstract class FrontController
{
    public function forward($controller, $action, array $params = array())
    {
       $controller = (is_object($controller)) ? $controller : $controller . 'Controller';
       return call_user_func_array(
            array(
                $controller,
                $action . 'Action'
            ),
            $params
        ); 
    }
    public function __construct()
    {
        $this->preDispatch();
    }
    public function __destruct()
    {
        $this->postDispatch();
    }
    protected function preDispatch() {}
    protected function postDispatch() {}
}
