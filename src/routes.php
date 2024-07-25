<?php 

$router->get('/', ['App\Controllers\HomeController', 'home'],[])
        ->get('/contact', ['App\Controllers\ContactController', 'contact'])

        ->get('/login', ['App\Controllers\LoginController', 'login'])
        ->post('/login', ['App\Controllers\LoginController', 'loginHandeler'], $_POST)

        ->get('/register', ['App\Controllers\RegisterController', 'register'], [])
        ->post('/register', ['App\Controllers\RegisterController', 'registerHandeler'], 
        $_POST );
