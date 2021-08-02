<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedad extends CI_Controller {
	
	public function index()
	{
		$this->load->model('TipoPropiedadModel');
		$this->load->model('PropiedadModel');
		$this->load->model('UbicacionModel');
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

		$Propiedad = $this->PropiedadModel->getPropiedadbyId($id);
		$Adjuntos = $this->AdjuntoModel->getImagesAllByIdPropiedad($id);

		$data['Propiedad'] = $Propiedad;
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
			$Id = isset($_POST['id']) ? $_POST['id'] : NULL;
			$data = array(				
        		'id_tipo' => $_POST['TipoPropiedad'],
				//'id_barrio' => $_POST['Barrio'],
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
				//'fecha' => $_POST['Descripcion'],
			);

			if($Id!=NULL)
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


}
