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

}
