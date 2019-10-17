<?php
namespace CISupport\Libraries\Facades;




class Encrypt {




    public function __call($name, $arguments)
    {   
        return (new \CI_Encrypt)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Encrypt)->$name(...$arguments);
    }

}