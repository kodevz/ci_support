<?php
namespace CISupport\Libraries\Facades;




class FTP {


    public function __call($name, $arguments)
    {   
        return (new \CI_FTP())->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_FTP())->$name(...$arguments);
    }

}