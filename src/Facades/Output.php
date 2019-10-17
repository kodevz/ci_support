<?php
namespace CISupport\Facades;

use CI_Controller;

class Output {

    public function __call($name, $arguments)
    {   
        return CI_Controller::get_instance()->output->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return CI_Controller::get_instance()->output->$name(...$arguments);
    }

}