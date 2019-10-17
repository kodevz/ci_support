<?php
namespace CISupport\Libraries\Facades;


class UserAgent {

    public function __call($name, $arguments)
    {   
        return (new \CI_User_agent)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_User_agent)->$name(...$arguments);
    }

}