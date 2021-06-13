<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect("../../../");
		}
	}

	public function index()
	{
		$this->load->model('ConsultaModel');
		$listadoConsulta = $this->ConsultaModel->getConsultas();
		$datos['listadoConsulta'] = $listadoConsulta;
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/dashboard',$datos);
		$this->load->view('admin/footer');
	}



}
