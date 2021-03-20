<?php
class LoginModel extends CI_Model {	

	public function login($email, $clave)
	{
		$this->load->database();
		$this->db->where('email', $email);
		$this->db->where('clave', $clave);
		$query = $this->db->get('usuarios');
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return false;
		}        
	}
}
?>