<?php
namespace CISupport;


class Facade {
    
    public function generate()
    {
        $classMaps = require __DIR__.'/../vendor/composer/autoload_classmap.php';
    }
}