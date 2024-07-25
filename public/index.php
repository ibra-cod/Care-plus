<?php

use App\App\App;
use App\Router\Router;
use App\Exception\RouteNotFoundException;

require '../vendor/autoload.php';
DEFINE('SRC_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);

DEFINE('VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src/views' . DIRECTORY_SEPARATOR);

DEFINE('PUBLIC_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR );
DEFINE('TEMPLATE', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src/views/template/template.php' . DIRECTORY_SEPARATOR);

DEFINE('CORE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR);

$router = new Router();

require_once SRC_PATH . 'routes.php';

$router->run($router,[
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD']
]);

