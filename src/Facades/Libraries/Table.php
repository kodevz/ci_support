<?php
namespace CISupport\Libraries\Facades;


class Table {

    public function __call($name, $arguments)
    {   
        return (new \CI_Table)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Table)->$name(...$arguments);
    }

}