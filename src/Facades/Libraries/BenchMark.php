<?php
namespace CISupport\Libraries\Facades;


use CI_Controller;

class BenchMark {

    public function __call($name, $arguments)
    {   
        return CI_Controller::get_instance()->benchmark->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return CI_Controller::get_instance()->benchmark->$name(...$arguments);
    }

}