<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubicacion extends CI_Controller {
	
	public function index()
	{
		$this->load->model('UbicacionModel');
		$listadoUbicaciones = $this->UbicacionModel->getUbicaciones(false);		
		$data['listadoUbicaciones'] = $listadoUbicaciones;

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/ubicacion/listadoUbicacion',$data);
		$this->load->view('admin/ubicacion/modalUbicacion');
		$this->load->view('admin/footer');
	}

	public function postUbicacion(){

		$this->load->model('UbicacionModel');

		if(isset($_POST)){
			$id = isset($_POST['id']) ? $_POST['id'] : NULL;
			$data = array(				
        		'descripcion' => $_POST['descripcion'],
			);

			if($id!=NULL)
			{
				$this->UbicacionModel->putUbicacion($id, $data);		
			}else{
				$this->UbicacionModel->postUbicacion($data);				
			}
		}	
		redirect("../../Ubicacion");	
	}

	public function getUbicacion($id){
		$this->load->model('UbicacionModel');
		$Ubicacion=NULL;
		if($id!=NULL){			
			$Ubicacion = $this->UbicacionModel->getUbicacionbyId($id);			
		}
		echo $Ubicacion->descripcion;
	}

	public function putUbicacion(){
		
		$this->load->model('UbicacionModel');
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;

		if($nombre!=NULL){
			$data = array(
        	'descripcion' => $nombre,
			);
			$this->UbicacionModel->putTipoPropiedad($data);	
			redirect("../../tipoPropiedad");
		}
		
	}

	public function putEnabledDisabledUbicacion($id){
		
		$this->load->model('UbicacionModel');
		$activo = isset($_POST['activo']) ? $_POST['activo'] : NULL;
		if($activo!=NULL){
			if($activo==1){
				$this->UbicacionModel->disabledUbicacion($id);	
			}elseif($activo==0){
				$this->UbicacionModel->enabledUbicacion($id);	
			}
			echo true;
		}
		echo false;
		
	}

}
