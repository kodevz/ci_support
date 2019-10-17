<?php
namespace CISupport\Facades;

use CI_Controller;

class Loader {

    public function __call($name, $arguments)
    {   
        return CI_Controller::get_instance()->load->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return CI_Controller::get_instance()->load->$name(...$arguments);
    }

}