<?php 

namespace App\Controllers;

use App\App\App;
use Core\Models\Models;
use App\Models\UserModel;
use App\Renderer\Renderer;
use App\Traits\RenderTrait;
use Core\Database\Database;
use Core\Controller\Controller;
use App\FormValidator\FormValidator;

class LoginController
{
    use RenderTrait;

    public function Login()  {
       $this->render('auth.login');
    }
    
    public function loginHandle($params, $rules)  
    {
            $model = new UserModel((new App())->getDB());
            if (isset($_POST['submit'])) {
               $form = new FormValidator($params,$rules);
            }  
            
     $this->render('auth.login');
    }

    
}
