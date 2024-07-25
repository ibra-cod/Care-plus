<?php 

namespace App\FormValidator;

class FormValidator 
{

    private $data;
    private $dataRules;
    private $isvalid = false;
    private $inputsName = ['email', 'password', 'button'];
    private $errors = [];
    const MIN_PASSWORD_LENGTH = 5;


    public function __construct(array $data) 
    {
        $this->data = $data;
        $this->checkData();
    }


    public function checkData() 
    {
       
    }


    public function isValid() 
    {
        return $this->isvalid;
    }


    public function addErrors(string $name, string $message) : void  
    {
         $this->errors[$name] = $message;
    }

    public function getErrors(string $name) : array 
    {
        if (!empty($this->errors)) {
            return $this->errors[$name]; 
        }
    }


}
