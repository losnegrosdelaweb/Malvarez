<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetPropiedad extends CI_Controller {
	
	public function index($id)
	{
		$this->load->model('PropiedadModel');		

		$array = array();
		//$Propiedad = $this->PropiedadModel->getPropiedadbyIdUbicacion($id);
		$Propiedad = $this->PropiedadModel->getPropiedadCompletaById($id);	
		$array = $this->PropiedadModel->getImagenes($id);	
		$data['Propiedad'] = $Propiedad[0];
		$data['catalogo'] = $array;
		$this->load->view('sidebar/menu');
		$this->load->view('detpropiedad/detpropiedad', $data);
		$this->load->view('sidebar/footer');	
	}

}
