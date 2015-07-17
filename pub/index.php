<?php

ini_set( 'display_errors', 1 );
error_reporting(E_ALL);

require_once __DIR__ . '/../bootstrap.php';

use JustMoments\Request\Request;
use JustMoments\Routing\Router;
use JustMoments\Kernel\Kernel;

$router = new Router(new Request());

$kernel = new Kernel();

try {
    $kernel->handle($router);
} catch (Exception $e) {
    echo $e->getMessage();
}
