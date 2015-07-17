<?php

namespace JustMoments\Http\Response;

use JustMoments\Http\Request\Request;
use JustMoments\Http\Response\ResponseInterface;

class JsonResponse implements ResponseInterface
{
  protected $vars;

  public function __construct(array $vars)
  {
    $this->vars = $vars;
  }
  public function __toString()
  {
    return json_encode($this->vars);
  }
}
