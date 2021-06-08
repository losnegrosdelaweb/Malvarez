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

	public function getConsulta($id_consulta){
		$this->load->model('ConsultaModel');
		$Consulta=NULL;
		if($id_consulta!=NULL){			
			$Consulta = $this->ConsultaModel->getConsulta($id_consulta);			
		}
		echo json_encode($Consulta[0]);	

	}

	public function putEnabledDisabledConsulta($id_consulta){
		
		$this->load->model('ConsultaModel');
		$activo = isset($_POST['Activo']) ? $_POST['Activo'] : NULL;
		if($activo!=NULL){
			if($activo==1){
				$this->ConsultaModel->disabledConsulta($id_consulta);	
			}elseif($activo==0){
				$this->ConsultaModel->enabledConsulta($id_consulta);	
			}
			echo true;
		}
		echo false;
		
	}

}
