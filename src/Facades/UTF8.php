<?php
namespace CISupport\Facades;

use CI_Controller;

class UTF8 {

    public function __call($name, $arguments)
    {   
        return CI_Controller::get_instance()->utf8->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return CI_Controller::get_instance()->utf8->$name(...$arguments);
    }

}