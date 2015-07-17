<?php

namespace JustMoments\Http\Response;

class Header
{
  public function send($header)
  {
    header($header);
  }
}
