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

/*
	public function getEnviarMail($id)
	{	
		var_dump($id);
		echo true;
	}
	*/
	public function postEnviarMail()
	{	
		$this->load->model('PropiedadModel');
		$this->load->model('ConsultaModel');
		
		$bandera = false;

		$mailAlvarez = "consultas@malvarezsi.com";
		$mailAlvarezReply = "info@malvarezsi.com";
		$mailAlvarezReply3 = "mati.diamant@hotmail.com";
		$mailAlvarezReply2 = "jorgecutuli@gmail.com";
		if(isset($_POST)){

			$Propiedad = $this->PropiedadModel->getPropiedadCompletaById($_POST['id']);
			$nombre = $_POST['nombre'];
			$email = $_POST['Email'];
			$tel = $_POST['Tel'];
			$asunto = "Consulta de Propiedad";
			$mensaje = $_POST['Msj'];
			$header = "From: ".$mailAlvarez. "\r\n";
			$header .= "Reply-To: ".$mailAlvarezReply. "\r\n";
			$header .= "X-Mailer: PHP/". phpversion();

			$cuerpo = "Consulta de Propiedad\r\n";
			$cuerpo .= "Nombre: ". $nombre. " \r\n";
			$cuerpo .= "Email: ". $email. " \r\n";
			$cuerpo .= "Telefono: ". $tel. " \r\n";
			$cuerpo .= "Ubicación: ". $Propiedad[0]->ubicacion.", ".$Propiedad[0]->direccion. " \r\n";
			$cuerpo .= "Tipo Propiedad: ". $Propiedad[0]->descOper.", ".$Propiedad[0]->tipoPropiedad. " \r\n";			

			$cuerpo .= $mensaje. " \r\n";			
			$mail = mail($mailAlvarezReply, $asunto, $cuerpo, $header);

			if($mail){
				$bandera = true;
				$data = array(				
					'id_propiedad' => $_POST['id'],
					'nombre' => $Propiedad[0]->tipoPropiedad,
					'fecha' => date("Y-m-d H:i:s"),
					'tel' => $tel,
					'email' => $email,
					'mensaje' => $mensaje,					
				);
				$this->ConsultaModel->postConsulta($data);	
			}
			echo $bandera;
		}
	}

}
?>
