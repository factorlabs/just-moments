<?php

namespace JustMoments\Response;

use JustMoments\Request\Request;
use JustMoments\Response\ResponseInterface;

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
