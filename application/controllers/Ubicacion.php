<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubicacion extends CI_Controller {
	
	public function index()
	{
		$this->load->model('UbicacionModel');

		$listadoUbicaciones = $this->UbicacionModel->getUbicaciones(true);		

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
			$Id = isset($_POST['id']) ? $_POST['id'] : NULL;
			$data = array(				
        		'descripcion' => $_POST['descripcion'],
			);

			if($Id!=NULL)
			{
				$this->UbicacionModel->putUbicacion($id, $data);		
			}else{
				$this->UbicacionModel->postUbicacion($data);				
			}
		}	
		redirect("../../Ubicacion");	
	}

}
