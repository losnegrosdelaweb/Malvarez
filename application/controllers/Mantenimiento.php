<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('sidebar/menu');
		$this->load->view('errors/mantenimiento');
		$this->load->view('sidebar/footer');	
	}

}
