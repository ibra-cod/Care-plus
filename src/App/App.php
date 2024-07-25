<?php ;
namespace App\App;
use PDO;
use App\Router\Router;
use Core\Config\Config;
use App\Exception\RouteNotFoundException;
use Core\Database\Database;

class App 
{

    private  static $instance;
    private  $database;

    public static function getInstance() : App
    {
        if (is_null(static::$instance)) {
           static::$instance = new App();
        }    
        return static::$instance;
    }


    public function requireIt(string $filename, ?string $constante = null) : void  {
            if ( $constante !== null)
                require $constante . ($filename) . '.php';
            
            if ($constante === null)
                require VIEW_PATH . ($filename) . '.php';
            
    }

    public function getDB() : Database
    {       
        if (!is_null($this->getInstance()))  {
            if (is_null($this->database)) {
                $config = Config::getInstance(SRC_PATH . 'DBConfig.php');
                $this->database = new Database($config->getConfigKey('name'),$config->getConfigKey('host'),$config->getConfigKey('pass'), $config->getConfigKey('user'));
        }
    }
        return  $this->database;
    }


   
}
