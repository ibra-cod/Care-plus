<?php 
namespace Core\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Table
{
    
    public function __construct( private string $table) {}


    public function getTable() : string
    {
        return $this->table;
    }
    
}
