<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('sidebar/menu');
		$this->load->view('login/login');
		$this->load->view('sidebar/footer');	
	}

	public function validarLogin()
	{		
		$this->load->model('LoginModel');	
		/*	
		$email = isset($this->input->post("email")) ? $this->input->post("email") : NULL;
		$clave = isset($this->input->post("clave")) ? $this->input->post("clave") : NULL;
		*/

		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
		
		if($email!=NULL && $clave!=NULL){
			$result = $this->LoginModel->Login($email, $clave);	
			if($result){
				$data = array(
				'email' => $email, 
				'user' => 'Usuario',
				'id' => 0, 
				'login' => true, 
				);
				$this->session->set_userdata($data);
				redirect("../../dashboard");
			}else{				
				redirect("../../login");
			}
			
		}else{
			redirect("../../login");
		}
		



		

		//$this->session->unset_userdata($data);
		//$this->session->sess_destroy();
		//var_dump($this->session->set_userdata('email'));die;	
	}

}