<?php
namespace CISupport\Facades;

use CI_Controller;

class DB {

    private static $instance = null;

    public function __construct()
    {
        $this->setInstance();
    }

    private function setInstance()
    {
      
        if(!static::$instance){

            static::$instance = CI_Controller::get_instance()->db;
        }

        return self::$instance;
    }
    
    public static function instance()
    {
        return static::$instance;  
    }


    public function __call($name, $arguments)
    {   
        return $this->setInstance()->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new static)->setInstance()->$name(...$arguments);
    }   

    public static function clone()
    {
        return clone static::$instance;  
    }


}