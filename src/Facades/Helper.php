<?php
namespace CISupport\Facades;



class Helper {

    public function __call($name, $arguments)
    {   
        return $name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return $name(...$arguments);
    }

}