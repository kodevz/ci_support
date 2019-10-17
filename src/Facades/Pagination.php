<?php
namespace CISupport\Facades;

class Pagination {

    public function __call($name, $arguments)
    {
        return (new \CI_Pagination)->$name($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Pagination)->$name($arguments);
    }
}