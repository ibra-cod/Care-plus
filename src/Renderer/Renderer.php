<?php 

namespace App\Renderer;

class Renderer 
{


    public function __construct(private string $viewPath, private ?array $params = []) {}

    public function view() 
    {
        $newPath = explode('.' , $this->viewPath);
        $newPath = implode('/', $newPath);

        ob_start();
        extract($this->params);
        require PATH . $newPath . '.php';
        $content =   ob_get_clean();
        require PATH . 'template/template' . '.php';

    }
    
}
