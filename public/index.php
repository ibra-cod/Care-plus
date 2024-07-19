<?php

use App\App\App;
use App\Router\Router;
use App\Exception\RouteNotFoundException;

require '../vendor/autoload.php';

DEFINE('PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src/views' . DIRECTORY_SEPARATOR);
$router = new Router();

$router->get('/', ['App\Controllers\HomeControllers', 'home']);
$router->post('/contact', ['App\Controllers\contactController', 'contact']);

$router->run($router,[
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD']
]);

