<?php
namespace CISupport\Libraries\Facades;


class Migration {

    public function __call($name, $arguments)
    {   
        return (new \CI_Migration)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Migration)->$name(...$arguments);
    }

}