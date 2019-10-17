<?php
namespace CISupport\Libraries\Facades;




class Email {

    public $config = array();

    private static $instance = null;

    public function __construct($config = array())
    {

    }

    public static function getInstance()
    {
        return static::$instance;    
    }

    public static function load($config = array())
    {
        
        if(!static::$instance){

            static::$instance = (new \CI_Email($config));
        }
        
        return static::$instance;       
    }


    public function __call($name, $arguments)
    {   
        return $this->load()->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return static::load()->$name(...$arguments);
    }

}