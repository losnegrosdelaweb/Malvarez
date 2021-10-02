<?php
class ConsultaModel extends CI_Model {

	public function getConsultas($filtroActivo = false)
	{
		$this->load->database();
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $query = $this->db->get('consultas');
        return $query->result();
	}

	public function getConsulta($id)
	{
		$this->load->database();
        $query = $this->db->get_where('consultas', array('id_consulta' => $id));
        return $query->result_array();
	}

	public function postConsulta($data)
	{
		$this->load->database();
        $this->db->insert('consultas', $data);
	}

	public function putConsulta($id , $data)
	{
		$this->load->database();
        $this->db->where('id_consulta', $id);
		$this->db->update('consultas', $data);
	}

	public function disabledConsulta($id)
	{
		$this->load->database();
        $this->db->where('id_consulta', $id);
		$this->db->update('consultas', array('activo' =>0));
	}

	public function enabledConsulta($id)
	{
		$this->load->database();
        $this->db->where('id_consulta', $id);
		$this->db->update('consultas', array('activo' =>1));
	}


	

}
?>