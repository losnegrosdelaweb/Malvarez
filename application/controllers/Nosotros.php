<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('sidebar/menu');
		$this->load->view('nosotros/nosotros');
		$this->load->view('sidebar/footer');	
	}

}
