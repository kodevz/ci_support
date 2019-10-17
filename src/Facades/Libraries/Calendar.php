<?php
namespace CISupport\Libraries\Facades;

use CI_Calendar;


class Calendar {

    public function __call($name, $arguments)
    {   
        return (new \CI_Calendar)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Calendar)->$name(...$arguments);
    }

}