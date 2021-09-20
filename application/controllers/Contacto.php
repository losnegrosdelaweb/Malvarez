<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('sidebar/menu');
		$this->load->view('contacto/contacto');
		$this->load->view('sidebar/footer');	
	}

	public function validarContacto()
	{		

		ini_set( 'display_errors', 1 );
	    error_reporting( E_ALL );
	    $from = "info@malvarezsi.com";
	    $to = "mati.diamant@hotmail.com";
	    $subject = "Checking PHP mail";
	    $message = "PHP mail works just fine";
	    $headers = "From:" . $from;
	    mail($to,$subject,$message, $headers);
	    echo "The email message was sent.";
	}

	public function postEnviarMail()
	{	
		$bandera = false;
		if(isset($_POST)){
			$name = $_POST['inputName'];
			$email = $_POST['inputEmail'];
			$tel = $_POST['Tel'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
			$header = "From: jorgecutuli@gmail.com". "\r\n";
			$header .= "Reply-To: jorgecutuli@gmail.com". "\r\n";
			$header .= "X-Mailer: PHP/". phpversion();
			$cuerpo = "<h4>asunto</h4>\r\n";
			$cuerpo .= "Email:". $email. " \r\n";
			$cuerpo .= "Telefono:". $tel. " \r\n";
			$cuerpo .= "Asuno:". $asunto. " \r\n";
			$cuerpo .= "email:". $email. " \r\n";
			$cuerpo .= $mensaje. " \r\n";
			$email = mail($email, $asunto, $cuerpo, $header);

			if($email){
				$bandera = true;
			}
			echo $bandera;
		}
	}


}
