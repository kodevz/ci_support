<?php
namespace CISupport\Libraries\Facades;


class Zip {

    public function __call($name, $arguments)
    {   
        return (new \CI_Zip)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Zip)->$name(...$arguments);
    }

}