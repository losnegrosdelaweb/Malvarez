<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('PropiedadModel');
		$this->load->model('TipoPropiedadModel');
		$this->load->model('UbicacionModel');
	}

	public function index()//Ventas
	{
		$array = array();
		$listadoPropiedad = $this->PropiedadModel->getPropiedadesVentas();
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

	public function indexAlquileres()//Alquiler
	{
		$array = array();

		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$listadoUbicacion = $this->UbicacionModel->getUbicaciones(true);

		$listadoPropiedad = $this->PropiedadModel->getPropiedadesAlquiler();	
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

	public function getCatalogoFiltrado()
	{
		if(isset($_POST))
		{	
			$moneda = isset($_POST['moneda']) ? $_POST['moneda'] : NULL;	
			$precioDesde = isset($_POST['precioDesde']) ? $_POST['precioDesde'] : NULL;
			$precioHasta = isset($_POST['precioHasta']) ? $_POST['precioHasta'] : NULL;
			$tipoPropiedad = isset($_POST['tipoPropiedad']) ? $_POST['tipoPropiedad'] : NULL;
			$dormitoriosDesde = isset($_POST['dormitoriosDesde']) ? $_POST['dormitoriosDesde'] : NULL;
			$dormitoriosHasta = isset($_POST['dormitoriosHasta']) ? $_POST['dormitoriosHasta'] : NULL;
			$ambientesDesde = isset($_POST['ambientesDesde']) ? $_POST['ambientesDesde'] : NULL;
			$ambientesHasta = isset($_POST['ambientesHasta']) ? $_POST['ambientesHasta'] : NULL;
			$ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : NULL;
			$tipoCatalogo = isset($_POST['tipoCatalogo']) ? $_POST['tipoCatalogo'] : NULL;

			$vista['FiltradoPor'] = $this->PrepararBotonesFiltro($moneda, $precioDesde, $precioHasta, $tipoPropiedad, $dormitoriosDesde, $dormitoriosHasta, $ambientesDesde, $ambientesHasta, $ubicacion);
		}
		//var_dump($tipoCatalogo);die;

		$array = array();
		$listadoPropiedad = $this->PropiedadModel->getPropiedadFiltro($moneda, $precioDesde, $precioHasta, $tipoPropiedad, $dormitoriosDesde, $dormitoriosHasta, $ambientesDesde, $ambientesHasta, $ubicacion, $tipoCatalogo);		

		foreach ($listadoPropiedad as $key => $value) {
			$PropiedadCatalogo = $this->PropiedadModel->getPropiedadCatalogo($value->id_propiedad);

			$data = array(				
        		'propiedad' => $value,
				'imagenes' => $PropiedadCatalogo,
			);

			array_push($array, $data);
		}
		$data['catalogo'] = $array;

		if(count($data['catalogo'])>0){
			$vista['vista'] = $this->load->view('catalogo/listado', $data, true);
		}else{
			$vista['vista'] = "<div class='alert alert-warning' role='alert' style='margin-top: 10%;font-size: x-large;'>No se encontró ninguna propiedad.</div>";
		}
		
		echo json_encode($vista);
	}


	function PrepararBotonesFiltro($moneda, $precioDesde, $precioHasta, $tipoPropiedad, $dormitoriosDesde, $dormitoriosHasta, $ambientesDesde, $ambientesHasta, $ubicacion){

		$filtros = "<h6 class='border-bottom pb-2 mb-0'>Filtros Aplicados</h6><br>";

        if($precioDesde!=null && $precioDesde!=0){
        	$filtros .= "<button type='button' class='btn btn-outline-danger close filtro-close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(precioDesde)'> Valor min ".$precioDesde." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($precioHasta!=null && $precioHasta!=0){        	
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(precioHasta)'> Valor max ".$precioHasta." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($tipoPropiedad!=null && $tipoPropiedad!=0){
        	$DescripcionTipoPropiedad = $this->TipoPropiedadModel->getTipoPropiedad($tipoPropiedad);
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(tipoPropiedad)'>".$DescripcionTipoPropiedad->descripcion." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($dormitoriosDesde!=null && $dormitoriosDesde!=0){
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(dormitoriosDesde)'> Dormitorios min ".$dormitoriosDesde." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($dormitoriosHasta!=null && $dormitoriosHasta!=0){
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(dormitoriosHasta)'> Dormitorios max ".$dormitoriosHasta." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($ambientesDesde!=null && $ambientesDesde!=0){
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(ambientesDesde)'> Ambientes min ".$ambientesDesde." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($ambientesHasta!=null && $ambientesHasta!=0){
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(ambientesHasta)'>Ambientes max ".$ambientesHasta." <span aria-hidden='true'>&times;</span></button>  ";
        }

        if($ubicacion!=null && $ubicacion!=0){
        	$DescripcionUbicacion = $this->UbicacionModel->getUbicacionbyId($ubicacion);
        	$filtros .= "<button type='button' class='btn btn-outline-danger close' data-dismiss='alert' aria-label='Close' style='margin: 1% 1% 0 0;' onclick='filtro_close(ubicacion)'>".$DescripcionUbicacion->descripcion." <span aria-hidden='true'>&times;</span></button>  ";
        }
        return $filtros;
	}
	
}
