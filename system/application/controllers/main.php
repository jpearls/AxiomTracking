<?php

class Main extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('index');
	}
}

/* End of file main.php */
/* Location: ./system/application/controllers/main.php */