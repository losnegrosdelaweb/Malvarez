<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
	{
		parent::__construct();		
		$this->load->model('PropiedadModel');
		$this->load->model('TipoPropiedadModel');
		$this->load->model('UbicacionModel');
	}

	public function index()
	{
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

	public function BuscarPropiedad()
	{

		if(isset($_POST)){	
			if(isset($_POST['property_types']))
			{	
				$tipoPropiedad = $_POST['property_types'];
			}else{
				$tipoPropiedad =0;
			}

			$buscadorText = $_POST['BuscadorText'];
			if($_POST['operations']==1){ 				
				//redirect('../../catalogo', 'location');	
				$this->CatalogoVentas($tipoPropiedad, $buscadorText);
			}else{
				//redirect('../../catalogo-alquileres', 'location');	
				$this->CatalogoAlquiler($tipoPropiedad, $buscadorText);
			}
		}

		
	}

	function CatalogoVentas($tipoPropiedad, $buscadorText)
	{
		$array = array();
		$listadoPropiedad = $this->PropiedadModel->getPropiedadesVentasFiltros($tipoPropiedad, $buscadorText);
		$listadoDepartamento = $this->PropiedadModel->getDepartamentos();		
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$listadoUbicacion = $this->UbicacionModel->getUbicaciones(true);
		

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
		$data['listadoUbicacion'] = $listadoUbicacion;
		$data['tipoCatalogo'] = 1;
		

		$vista['vista'] = $this->load->view('catalogo/listado', $data, true);

		$this->load->view('sidebar/menu');
		$this->load->view('catalogo/filtroCatalogo', $vista);
		$this->load->view('sidebar/footer');
	}


	function CatalogoAlquiler($tipoPropiedad, $buscadorText)
	{
	$array = array();

		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$listadoUbicacion = $this->UbicacionModel->getUbicaciones(true);

		$listadoPropiedad = $this->PropiedadModel->getPropiedadesAlquilerFiltros($tipoPropiedad, $buscadorText);	
		foreach ($listadoPropiedad as $key => $value) {
			$PropiedadCatalogo = $this->PropiedadModel->getPropiedadCatalogo($value->id_propiedad);
			$data = array(				
        		'propiedad' => $value,
				'imagenes' => $PropiedadCatalogo,
			);
			array_push($array, $data);
		}
		
		$data['catalogo'] = $array;
		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		$data['listadoUbicacion'] = $listadoUbicacion;
		$data['tipoCatalogo'] = 2;
		

		$vista['vista'] = $this->load->view('catalogo/listado', $data, true);

		$this->load->view('sidebar/menu');
		$this->load->view('catalogo/filtroCatalogo', $vista);
		$this->load->view('sidebar/footer');
	}

	public function BuscarPropiedadMobile()
	{
		if(isset($_POST)){	
			if(isset($_POST['property_types-2']))
			{	
				$tipoPropiedad = $_POST['property_types-2'];
			}else{
				$tipoPropiedad =0;
			}

			$buscadorText = $_POST['BuscadorText-2'];
			if($_POST['operations-2']==1){ 				
				//redirect('../../catalogo', 'location');	
				$this->CatalogoVentas($tipoPropiedad, $buscadorText);
			}else{
				//redirect('../../catalogo-alquileres', 'location');	
				$this->CatalogoAlquiler($tipoPropiedad, $buscadorText);
			}
		}
	}

}
