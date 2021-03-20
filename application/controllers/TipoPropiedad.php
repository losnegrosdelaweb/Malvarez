<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoPropiedad extends CI_Controller {
	

	public function index()
	{
		$this->load->model('TipoPropiedadModel');
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades();
		$datos['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/tipoPropiedad/listadoTipoPropiedad',$datos);
		$this->load->view('admin/tipoPropiedad/modalTipoPropiedad');
		$this->load->view('admin/footer');
	}


	public function postTipoPropiedad(){

		$this->load->model('TipoPropiedadModel');
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$id = isset($_POST['id']) ? $_POST['id'] : NULL;
		
		if($nombre!=NULL)
		{
			$data = array(
        		'descripcion' => $nombre,
			);
			if($id!=NULL)
			{
				$this->TipoPropiedadModel->putTipoPropiedad($id, $data);		
			}else{
				$this->TipoPropiedadModel->postTipoPropiedad($data);				
			}
		}
		redirect("../../tipoPropiedad");	
	}

	public function getTipoPropiedad($id){
		$this->load->model('TipoPropiedadModel');
		$TipoPropiedad=NULL;
		if($id!=NULL){			
			$TipoPropiedad = $this->TipoPropiedadModel->getTipoPropiedad($id);			
		}
		//var_dump($TipoPropiedad);
		echo $TipoPropiedad->descripcion;
	}

	public function putTipoPropiedad(){
		
		$this->load->model('TipoPropiedadModel');
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;

		if($nombre!=NULL){
			$data = array(
        	'descripcion' => $nombre,
			);
			$this->TipoPropiedadModel->putTipoPropiedad($data);	
			redirect("../../tipoPropiedad");
		}
		
	}

	public function putEnabledDisabledTipoPropiedad($id){
		
		$this->load->model('TipoPropiedadModel');
		$activo = isset($_POST['activo']) ? $_POST['activo'] : NULL;
		if($activo!=NULL){
			if($activo==1){
				$this->TipoPropiedadModel->disabledTipoPropiedad($id);	
			}elseif($activo==0){
				$this->TipoPropiedadModel->enabledTipoPropiedad($id);	
			}
			echo true;
		}
		echo false;
		
	}

}
