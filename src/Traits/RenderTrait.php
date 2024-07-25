<?php 
namespace App\Traits;
use App\Renderer\Renderer;

trait RenderTrait {

    private function render (string $view) 
    {
        $Renderer = new Renderer($view);
        $Renderer->view();
    }

}