<?php
namespace Core\Models;

use Reflection;
use ReflectionClass;
use Core\Attributes\Table;
use Core\Database\Database;

class Models
{
    protected $table;
    protected Database $database;
    protected string $classname;

    public function __construct(Database $database, string $classname)
    {
        $this->database = $database;
        $this->classname = $classname;

    }

    public function selectAll() : array 
    {
        return $this->database->query(
            "SELECT * FROM {$this->getTable()}", 
            $this->classname, 
            false
        );
    }

    public  function getTable ()  
    {
        $class = new ReflectionClass($this->classname);
        $attributes = $class->getAttributes(Table::class);
        if (!empty($attributes)) {
            return  $attributes[0]->newInstance()->getTable();
        }
        return null;
    }
    

    public function PDORequest (string $stmt, ?array $attributes = [], bool $one = false) {

            if ($attributes) {
               return $this->database->prepare($stmt, $attributes , $this->classname, $one);
            }
            else {
               return  $this->database->query($stmt, $this->classname, $one);
            }

    }

    public function Create(string $value) 
    {
        // $stmt = $this->database->prepare("INSERT INTO ");
    }




} 
