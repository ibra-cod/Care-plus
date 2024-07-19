<?php 

namespace App\Controllers;

use App\Models\User;
use App\Renderer\Renderer;
use Core\Database\Database;
use Core\Controller\Controller;

class HomeControllers 
{
    public function home()  {
        $Renderer = new Renderer('home.index');
        $Renderer->view();
    }
}
