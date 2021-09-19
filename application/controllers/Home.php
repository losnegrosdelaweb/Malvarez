<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('TipoPropiedadModel');
		$this->load->model('PropiedadModel');
		$array = array();
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$listadoPropiedad = $this->PropiedadModel->getPropiedadCompletaDestacadas(true);
		$datos['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		//$datos['listadoPropiedad'] = $listadoPropiedad;

		foreach ($listadoPropiedad as $key => $value) {
			$PropiedadCatalogo = $this->PropiedadModel->getPropiedadCatalogo($value->id_propiedad);

			$data = array(				
        		'propiedad' => $value,
				'imagenes' => $PropiedadCatalogo,
			);

			array_push($array, $data);
		}
		$datos['catalogo'] = $array;
		//var_dump($datos['catalogo']);die;
		$this->load->view('sidebar/menu');
		$this->load->view('home/inicio', $datos);
		$this->load->view('sidebar/footer');	
	}

}
