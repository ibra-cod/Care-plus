<?php 

namespace App\Controllers;

use App\Renderer\Renderer;
use Core\Database\Database;
use Core\Controller\Controller;

class ContactController
{
    public function contact()  {
        $Renderer = new Renderer('userPages.contact');
        $Renderer->view();
    }
}
