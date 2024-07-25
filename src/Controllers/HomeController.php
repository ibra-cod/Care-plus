<?php 

namespace App\Controllers;

use App\Models\User;
use App\Renderer\Renderer;
use App\Traits\RenderTrait;
use Core\Database\Database;
use Core\Controller\Controller;

class HomeController
{
    use RenderTrait;

    public function home()  {
        $this->render('userPages.index');
    }
}
