<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedad extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect("../../../");
		}
	}
	public function index()
	{
		$this->load->model('TipoPropiedadModel');
		$this->load->model('PropiedadModel');
		$this->load->model('UbicacionModel');

		$listadoPropiedad = $this->PropiedadModel->getPropiedadesCompletas(false);		
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$listadoUbicaciones = $this->UbicacionModel->getUbicaciones(true);
		$listadoMonedas = $this->PropiedadModel->getMonedas();
		
		$data['listadoPropiedad'] = $listadoPropiedad;
		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		$data['listadoUbicaciones'] = $listadoUbicaciones;
		$data['listadoMonedas'] = $listadoMonedas;
		/*
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);		
		$listadoPropiedad = $this->PropiedadModel->getPropiedadesUbicacion(true);
		$listadoUbicaciones = $this->UbicacionModel->getUbicaciones(true);
		$listadoDepartamento = $this->PropiedadModel->getDepartamentos();
		//$listadoPropiedad = $this->PropiedadModel->getPropiedades(true);
		//var_dump($listadoDepartamento);die;
		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		$data['listadoPropiedad'] = $listadoPropiedad;
		$data['listadoDepartamento'] = $listadoDepartamento;
		$data['listadoUbicaciones'] = $listadoUbicaciones;
		*/

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoPropiedad',$data);
		$this->load->view('admin/propiedad/modalAdjunto');	
		$this->load->view('admin/propiedad/modalPropiedad');
		$this->load->view('admin/footer');
	}

	public function ListadoAdjuntos($id)
	{
		$this->load->model('PropiedadModel');		
		$this->load->model('AdjuntoModel');

		//$Propiedad = $this->PropiedadModel->getPropiedadbyIdUbicacion($id);
		$Propiedad = $this->PropiedadModel->getPropiedadCompletaById($id);	
		$Adjuntos = $this->AdjuntoModel->getImagesAllByIdPropiedad($id);
		$data['Propiedad'] = $Propiedad[0];
		$data['Adjuntos'] = $Adjuntos;

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoAdjunto',$data);
		$this->load->view('admin/propiedad/modalAdjunto');	
		$this->load->view('admin/footer');
	}


	public function postPropiedad(){

		$this->load->model('PropiedadModel');

		if(isset($_POST)){
			$id = isset($_POST['id']) ? $_POST['id'] : NULL;
			$data = array(				
        		'id_tipo' => $_POST['TipoPropiedad'],
				'id_moneda' => $_POST['Moneda'],
				'id_ubicacion' => $_POST['Ubicacion'],
				'ambientes' => $_POST['Ambientes'],
				'dormitorios' => $_POST['Dormitorios'],
				'banos' => $_POST['Bano'],
				'cocheras' => $_POST['Cochera'],
				'pisos' => $_POST['Pisos'],
				'antiguedad' => $_POST['Antiguedad'],
				'situacion' => $_POST['Situacion'],
				'expensas' => $_POST['Expensas'],
				'orientacion' => $_POST['Orientacion'],
				'disposicion	' => $_POST['Disposicion'],
				'condicion' => $_POST['Estado'],
				'precio' => $_POST['Precio'],
				'descripcion' => $_POST['Descripcion'],
				//'fecha' => $_POST['Descripcion'],
			);

			if($id!=NULL)
			{
				$this->PropiedadModel->putPropiedad($id, $data);		
			}else{
				$this->PropiedadModel->postPropiedad($data);				
			}
		}	
		redirect("../../Propiedad");	
	}

	public function getCiudades($id)
	{
		$this->load->model('PropiedadModel');			
		$ciudades = $this->PropiedadModel->getCiudades($id);	
		$lista = array();
		foreach ($ciudades as $key => $value) {
			$data = array(				
        		'id' => $value->id_ciudad,
        		'text' => $value->descripcion
        	);
			array_push($lista, $data);
		}
		echo json_encode($lista);	
	}

	public function getPropiedad($id){
		$this->load->model('PropiedadModel');
		$Propiedad=NULL;
		if($id!=NULL){			
			$Propiedad = $this->PropiedadModel->getPropiedadbyId($id);			
		}
		//var_dump($Propiedad);die;
		echo json_encode($Propiedad);
	}	

	public function putEnabledDisabledPropiedad($id){
		
		$this->load->model('PropiedadModel');
		$activo = isset($_POST['activo']) ? $_POST['activo'] : NULL;
		if($activo!=NULL){
			if($activo==1){
				$this->PropiedadModel->disabledPropiedad($id);	
			}elseif($activo==0){
				$this->PropiedadModel->enabledPropiedad($id);	
			}
			echo true;
		}
		echo false;
		
	}




}
