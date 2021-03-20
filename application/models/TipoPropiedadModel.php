<?php
class TipoPropiedadModel extends CI_Model {
	//print_r($this->db->last_query()); 

	

	public function getTiposPropiedades($filtroActivo = false)
	{
		$this->load->database();
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $query = $this->db->get('tipospropiedades');
        return $query->result();
	}

	public function getTipoPropiedad($id)
	{
		$this->load->database();
        $query = $this->db->get_where('tipospropiedades', array('id_tipo_propiedad' => $id));
        return $query->result()[0];
	}

	public function postTipoPropiedad($data)
	{
		$this->load->database();
        $this->db->insert('tipospropiedades', $data);
	}

	public function putTipoPropiedad($id , $data)
	{
		$this->load->database();
        $this->db->where('id_tipo_propiedad', $id);
		$this->db->update('tipospropiedades', $data);
	}

	public function disabledTipoPropiedad($id)
	{
		$this->load->database();
        $this->db->where('id_tipo_propiedad', $id);
		$this->db->update('tipospropiedades', array('activo' =>0));
	}

	public function enabledTipoPropiedad($id)
	{
		$this->load->database();
        $this->db->where('id_tipo_propiedad', $id);
		$this->db->update('tipospropiedades', array('activo' =>1));
	}


	

}
?>