<?php
namespace CISupport\Libraries\Facades;


class Parser {

    public function __call($name, $arguments)
    {   
        return (new \CI_Parser)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Parser)->$name(...$arguments);
    }

}