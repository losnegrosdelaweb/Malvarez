<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('PropiedadModel');
		$this->load->model('TipoPropiedadModel');
	}

	public function index()
	{
		$array = array();
		$listadoPropiedad = $this->PropiedadModel->getPropiedades();
		$listadoDepartamento = $this->PropiedadModel->getDepartamentos();		
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		

		foreach ($listadoPropiedad as $key => $value) {
			$PropiedadCatalogo = $this->PropiedadModel->getPropiedadCatalogo($value->id_propiedad);

			$data = array(				
        		'propiedad' => $value,
				'imagenes' => $PropiedadCatalogo,
			);

			array_push($array, $data);
		}
		$data['catalogo'] = $array;
		$data['listadoDepartamento'] = $listadoDepartamento;
		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;

		

		$vista['vista'] = $this->load->view('catalogo/listado', $data, true);

		$this->load->view('sidebar/menu');
		$this->load->view('catalogo/filtroCatalogo', $vista);
		$this->load->view('sidebar/footer');
	}

	public function getCatalogoFiltrado()
	{
		if(isset($_POST))
		{			
			$departamento = isset($_POST['departamento']) ? $_POST['departamento'] : NULL;
			$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : NULL;
			$estado = isset($_POST['estado']) ? $_POST['estado'] : NULL;
			$tipoPropiedad = isset($_POST['tipoPropiedad']) ? $_POST['tipoPropiedad'] : NULL;
			$dormitorios = isset($_POST['dormitorios']) ? $_POST['dormitorios'] : NULL;
			$palabraClave  = isset($_POST['palabraClave']) ? $_POST['palabraClave'] : NULL;
			$orden = isset($_POST['orden']) ? $_POST['orden'] : NULL;

		}

		$array = array();
		//$listadoPropiedad = $this->PropiedadModel->getPropiedades();
		$listadoPropiedad = $this->PropiedadModel->getPropiedadFiltro($departamento, $ciudad, $estado, $tipoPropiedad, $dormitorios, $palabraClave, $orden);
		

		foreach ($listadoPropiedad as $key => $value) {
			$PropiedadCatalogo = $this->PropiedadModel->getPropiedadCatalogo($value->id_propiedad);

			$data = array(				
        		'propiedad' => $value,
				'imagenes' => $PropiedadCatalogo,
			);

			array_push($array, $data);
		}
		$data['catalogo'] = $array;

		$vista['vista'] = $this->load->view('catalogo/listado', $data);

	}

}
