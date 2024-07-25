<?php 
namespace Core\Database;

use Attribute;
use PDO;
use Core\Config\Config;

class Database 
{
    
    private  PDO $pdo;

    private $dbname;
    private $dbhost;
    private $pass;
    private $dbuser;
    

    public function __construct( string $dbname, string  $dbhost, string  $pass,string  $dbuser) {
        $this->dbname = $dbname;
        $this->dbhost = $dbhost;
        $this->pass = $pass;
        $this->dbuser = $dbuser;
    }


    public function getPDO () : PDO
    {
    
            $this->pdo = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", "$this->dbuser", "$this->pass", [
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
            return  $this->pdo;
    }


    public function query(string $statement, $nameOfTheClass , bool $one = true) : mixed
    {
            $stmt = $this->pdo->prepare($statement);
            $stmt->execute();

            if (is_null($nameOfTheClass)) {
                $stmt->setFetchMode(PDO::FETCH_OBJ);
            } else {
                $stmt->setFetchMode(PDO::FETCH_CLASS, $nameOfTheClass); 
            }

            if($one) {
                $result = $stmt->fetch(); 
                return $result;
            }
            return $result = $stmt->fetchAll(); 
            
    }

        public function prepare(string $statement, ?array $attributes = [], string $className, bool $one = false ) : array 
    {
            $stmt = $this->pdo->prepare($statement);
            $stmt->execute($attributes);

            if (is_null($className)) {
                $stmt->setFetchMode(PDO::FETCH_OBJ);
            } else {
                $stmt->setFetchMode(PDO::FETCH_CLASS, $className); 
            }

            if (!$one) {
                 return $stmt->fetchAll(); 
            } else {
               return  $stmt->fetch(); 
            }

            
        }
  
}
