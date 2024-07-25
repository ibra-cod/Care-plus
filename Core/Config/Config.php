<?php 
namespace Core\Config;
class Config 
{
    
    private  static $instance;
    private $settingsFile;


    private function __construct(string $file) 
    {
      $this->settingsFile = require($file);
    }


    public static function getInstance($file) : self
    {
        if (is_null(static::$instance))
            static::$instance = new Config($file);

        return self::$instance;
    }

    public function getConfigKey(string $key) : string
    {
        if (!isset($this->settingsFile[$key])) 
           return null;

        return $this->settingsFile[$key];
    }

}
