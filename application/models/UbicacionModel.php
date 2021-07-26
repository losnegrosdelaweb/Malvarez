<?php
class UbicacionModel extends CI_Model {	

	function __construct()
	{
	    parent::__construct();
	    $this->load->database();
	}

	public function getUbicaciones($filtroActivo = false)
	{
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $query = $this->db->get('ubicacion');
        return $query->result();
	}
	
	public function getUbicacionbyId($id)
	{
        $query = $this->db->get_where('ubicacion', array('id_ubicacion' => $id));
        return $query->result()[0];
	}

	public function postUbicacion($data)
	{
        $this->db->insert('ubicacion', $data);
	}

	public function putUbicacion($id , $data)
	{
        $this->db->where('id_ubicacion', $id);
		$this->db->update('ubicacion', $data);
	}

	public function disabledUbicacion($id)
	{
        $this->db->where('id_ubicacion', $id);
		$this->db->update('ubicacion', array('activo' =>0));
	}

	public function enabledUbicacion($id)
	{
        $this->db->where('id_ubicacion', $id);
		$this->db->update('ubicacion', array('Activo' =>1));
	}	

}