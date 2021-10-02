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
	    $from = "consultas@malvarezsi.com";
	    $to = "info@malvarezsi.com";
	    $subject = "Checking PHP mail";
	    $message = "PHP mail works just fine";
	    $headers = "From:" . $from;
	    mail($to,$subject,$message, $headers);
	    echo "The email message was sent.";
	}

	public function postEnviarMail()
	{	
	    
	    $mailAlvarez = "consultas@malvarezsi.com";
		$mailAlvarezReply = "info@malvarezsi.com";
		$mailAlvarezReply3 = "mati.diamant@hotmail.com";
		$mailAlvarezReply2 = "jorgecutuli@gmail.com";
	  
		$bandera = false;
		if(isset($_POST)){
			$name = $_POST['inputName'];
			$email = $_POST['inputEmail'];
			$tel = $_POST['Tel'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
			$header = "From: ".$mailAlvarez. "\r\n";
			$header .= "Reply-To: ".$mailAlvarezReply. "\r\n";
			$header .= "X-Mailer: PHP/". phpversion();
			$cuerpo = "Contacto\r\n";
			$cuerpo .= "Email:". $email. " \r\n";
			$cuerpo .= "Telefono:". $tel. " \r\n";
			$cuerpo .= "Asuno:". $asunto. " \r\n";
			$cuerpo .= $mensaje. " \r\n";
			$email = mail($mailAlvarezReply, $asunto, $cuerpo, $header);

			if($email){
				$bandera = true;
			}
			echo $bandera;
		}
	}


}
