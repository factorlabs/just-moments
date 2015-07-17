<?php

use JustMomments\Request\Request;
use JustMomments\Response\JsonResponse;
use JustMomments\Response\HtmlResponse;
use JustMomments\Controller\FrontController as Base;

class IndexController extends Base
{
    public function indexAction(Request $request)
    {   
        return new HtmlResponse('index/index', array('name' => 'John'));
    }
    public function jsonAction(Request $request)
    {
        return new JsonResponse(array('name' => 'John'));
    }
    public function listAction(Request $request)
    {        
        return new HtmlResponse('index/list', array(
            'people' => array('John', 'Ann', 'Martin')
        ));
    }
    public function upperAction(Request $request)
    {        
        return new HtmlResponse('index/upper', array('name' => $request->get('name')));
    }
}
