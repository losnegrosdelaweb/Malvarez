<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function index()
	{
		$this->load->model('UsuarioModel');
		$listadoUsuario = $this->UsuarioModel->getUsuarios();
		$datos['listadoUsuario'] = $listadoUsuario;
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/usuario/listadoUsuarios',$datos);
		$this->load->view('admin/usuario/modalUsuario');
		$this->load->view('admin/footer');
	}
	
	public function postUsuario(){

		$this->load->model('UsuarioModel');
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$id = isset($_POST['id']) ? $_POST['id'] : NULL;
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
		$clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$fecha = date("Y-m-d H:i:s"); 
		if($email!=NULL)
		{
			$data = array(
        		'email' => $email,
				'nombre' => $nombre,
				'telefono' => $tel,
				'clave' => $clave,
				'fecha' => $fecha,
			);
			if($id!=NULL)
			{
				$this->UsuarioModel->putUsuario($id, $data);		
			}else{
				$this->UsuarioModel->postUsuario($data);				
			}
		}
		redirect("../../Usuario");	
	}

	public function getUsuario($id){
		$this->load->model('UsuarioModel');
		$Usuario=NULL;
		if($id!=NULL){			
			$Usuario = $this->UsuarioModel->getUsuario($id);			
		}
		echo json_encode($Usuario[0]);	

	}

	public function putUsuario(){
		
		$this->load->model('UsuarioModel');
		$email = isset($_POST['Email']) ? $_POST['Email'] : NULL;

		if($email!=NULL){
			$data = array(
        	'Email' => $email,
			);
			$this->UsuarioModel->putUsuario($data);	
			redirect("../../Usuario");
		}
		
	}

	public function putEnabledDisabledUsuario($id){
		
		$this->load->model('UsuarioModel');
		$activo = isset($_POST['Activo']) ? $_POST['Activo'] : NULL;
		if($activo!=NULL){
			if($activo==1){
				$this->UsuarioModel->disabledUsuario($id);	
			}elseif($activo==0){
				$this->UsuarioModel->enabledUsuario($id);	
			}
			echo true;
		}
		echo false;
		
	}
}
