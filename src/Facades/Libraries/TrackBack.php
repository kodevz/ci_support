<?php
namespace CISupport\Libraries\Facades;


class TrackBack {

    public function __call($name, $arguments)
    {   
        return (new \CI_Trackback)->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return (new \CI_Trackback)->$name(...$arguments);
    }

}