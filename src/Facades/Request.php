<?php
namespace CISupport\Facades;

use CI_Controller;

class Request {

    public function __construct()
    {
        //$this->collectRequest();
    }

    public function collectRequest()
    {
        $input = CI_Controller::get_instance();

   
        if(count($input->post()))
        {
            foreach($input->post() as $key => $val)
            {
                $this->$key = $val;
            }
        }
        
        if(count($input->post()))
        {
            foreach($input->get() as $key => $val)
            {
                $this->$key = $val;
            }
        }

        if(count($input->post()))
        {
            foreach($input->put() as $key => $val)
            {
                $this->$key = $val;
            }
        }
    }

    public function __call($name, $arguments)
    {   
        return CI_Controller::get_instance()->input->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return CI_Controller::get_instance()->input->$name(...$arguments);
    }

    

}