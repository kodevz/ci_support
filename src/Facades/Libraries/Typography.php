<?php
namespace CISupport\Libraries\Facades;


class Typography {

    public function __call($name, $arguments)
    {   
        return (new \CI_Typography)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Typography)->$name(...$arguments);
    }

}