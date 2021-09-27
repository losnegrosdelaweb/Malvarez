<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {
	
	public function index()
	{
		$this->load->model('ConsultaModel');
		$listadoConsulta = $this->ConsultaModel->getConsultas();
		$datos['listadoConsulta'] = $listadoConsulta;
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/consulta/listadoConsulta',$datos);
		//$this->load->view('admin/consulta/modalConsulta');
		$this->load->view('admin/footer');
	}
	
	public function postConsulta(){

		$this->load->model('ConsultaModel');		
		$id_consulta = isset($_POST['id_consulta']) ? $_POST['id_consulta'] : NULL;
		$id_operacion = isset($_POST['id_operacion']) ? $_POST['id_operacion'] : NULL;
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$fecha = date("Y-m-d H:i:s"); 
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : NULL;

		if($id_operacion!=NULL)
		{
			$data = array(
        		'id_operacion' => $id_operacion,
        		'fecha' => $fecha,
				'nombre' => $nombre,
				'telefono' => $tel,
				'email' => $email,
				'mensaje' => $mensaje,
			);
			if($id_consulta!=NULL)
			{
				$this->ConsultaModel->putConsulta($id_consulta, $data);		
			}else{
				$this->ConsultaModel->postConsulta($data);				
			}
		}
		redirect("../../Consulta");	
	}

	public function getConsulta($id_consulta){
		$this->load->model('ConsultaModel');
		$Consulta=NULL;
		if($id_consulta!=NULL){			
			$Consulta = $this->ConsultaModel->getConsulta($id_consulta);			
		}
		echo json_encode($Consulta[0]);	

	}

	public function putConsulta(){
		
		$this->load->model('ConsultaModel');
		$id_consulta = isset($_POST['id_consulta']) ? $_POST['id_consulta'] : NULL;

		if($id_consulta!=NULL){
			$data = array(
        	'id_consulta' => $id_consulta,
			);
			$this->ConsultaModel->putConsulta($data);	
			redirect("../../Consulta");
		}
		
	}

	public function putEstadoConsulta($id_consulta){
		
		$this->load->model('ConsultaModel');
		$activo = isset($_POST['activo']) ? $_POST['activo'] : NULL;
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
