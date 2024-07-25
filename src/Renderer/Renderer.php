<?php 

namespace App\Renderer;

use App\App\App;

class Renderer 
{

    public function __construct(private string $viewPath, private ?array $params = []) {}

    public function view() 
    {
        $newPath = explode('.' , $this->viewPath);
        $newPath = implode('/', $newPath);

        ob_start();
        $this->params['app'] = App::getInstance();
        extract($this->params);
        require VIEW_PATH . $newPath . '.php';
        $content =   ob_get_clean();
        require VIEW_PATH . 'template/template' . '.php';

    }
    
}
