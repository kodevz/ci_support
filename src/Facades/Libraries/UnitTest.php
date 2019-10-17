<?php
namespace CISupport\Libraries\Facades;


class UnitTest {

    public function __call($name, $arguments)
    {   
        return (new \CI_Unit_test)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Unit_test)->$name(...$arguments);
    }

}