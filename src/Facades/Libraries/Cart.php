<?php
namespace CISupport\Libraries\Facades;

use CI_Cart;


class Cart {

    public function __call($name, $arguments)
    {   
        return (new \CI_Cart)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Cart)->$name(...$arguments);
    }

}