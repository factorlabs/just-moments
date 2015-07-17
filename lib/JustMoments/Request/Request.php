<?php

namespace JustMoments\Request;

class Request
{
    public function __construct()
    {
        $this->data = array_merge($_REQUEST, $_SERVER);
    }
    
    public function getPath()
    {
        return $this->data['PATH_INFO'];
    }
    public function get($key)
    {
        return htmlspecialchars($this->data[$key]);
    }
    public function getMethod()
    {
        return $this->data['REQUEST_METHOD'];
    }
}
