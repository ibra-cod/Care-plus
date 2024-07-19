<?php 
namespace Core\Database;

use PDO;
use Core\Config\Config;

class Database 
{
    
    private static   PDO $pdo;
    private  static $instance;

   public function getInstance () 
   {
        if (is_null($this->instance)) 
        {
             $this->instance = new Database();
        }
         return $this->instance ;
   }

    public static  function getPDO () 
    {
        if (is_null(self::$instance)) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'Trackmania12--!!', [
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        }
        return  self::$pdo;
    }


    public function query() 
    {
        
    }

    

  
}
