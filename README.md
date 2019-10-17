

Download Codeigniter 3

https://codeigniter.com/

Or

Create Codeigniter

composer create-project codeigniter/framework


Then Add

"autoload": {
        "classmap": [
			"application/",
			"system/"
        ],
}

in your composer.json file which is located in your root directory

Then Add
/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */


require 'vendor/autoload.php';


require_once BASEPATH.'core/CodeIgniter.php';


in index.php file in which is located in your root directory;


Next

download ci_facade support using bellow composer command in you cli command promt

composer require kodevz/ci_support 









