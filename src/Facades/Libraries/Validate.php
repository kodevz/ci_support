<?php
namespace CISupport\Libraries\Facades;




class Validate {




    private $config = array();

    private static $instance = null;

    public function __construct()
    {

    }

    private static function getInstance()
    {
        return static::$instance;    
    }

    public static function load($config = array())
    {
        
        if(!static::$instance){

            static::$instance = (new \CI_Upload)->initialize($config);
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