<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emprendimientos extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('sidebar/menu');
		$this->load->view('emprendimientos/emprendimientos');
		$this->load->view('sidebar/footer');	
	}

}
