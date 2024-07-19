<?php ;
namespace App\App;
use App\Router\Router;
use App\Exception\RouteNotFoundException;
use Core\Config\Config;

class App 
{

    private $instance;

    public function __construct() {
    }

    public function getInstance() : App
    {
        if (is_null($this->instance)) {
           $this->instance = new App();
        }    
        return $this->instance;
    }


    public function requireIt(string $filename) {
        if (!is_null($this->getInstance()) ) {
                require PATH . DIRECTORY_SEPARATOR . ($filename) . '.php';
        }
    }

   
}
