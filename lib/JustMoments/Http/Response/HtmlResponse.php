<?php

namespace JustMoments\Http\Response;

use JustMoments\Http\Response\ResponseInterface;

class HtmlResponse implements ResponseInterface
{
  protected $layout;
  protected $vars;
  
  public function __construct($layout, array $vars)
  {    
    $this->layout = __DIR__.'../../../../../app/view/' . $layout . '.php';
    $this->vars = $vars;
  }
  public function __toString()
  {
    ob_start();
    extract($this->vars);
    include $this->layout;
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
