<?php 

namespace App\Controllers;

use App\Renderer\Renderer;
use Core\Database\Database;
use Core\Controller\Controller;

class RegisterController
{
    public function register()  {
        $Renderer = new Renderer('auth.register');
        $Renderer->view();
    }

    public function handleRegister()  {
        
    }
}
