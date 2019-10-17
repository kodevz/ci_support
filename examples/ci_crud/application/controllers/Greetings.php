<?php

use CISupport\Facades\Pagination;

class Greetings extends CI_Controller {

	public function __construct()
	{
		
	}

	public function index()
	{
		$this->load->view('master');
	}

	public function greetings()
	{
		
		echo "Hai Welcome";
	}
}
