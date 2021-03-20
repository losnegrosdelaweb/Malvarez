<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetPropiedad extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('sidebar/menu');
		$this->load->view('detpropiedad/detpropiedad');
		$this->load->view('sidebar/footer');	
	}

}
