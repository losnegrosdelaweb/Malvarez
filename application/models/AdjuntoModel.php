<?php
class AdjuntoModel extends CI_Model {	

	public function getImagesAllByIdPropiedad($id)
	{
		$this->load->database();
        $this->db->where('id_propiedad', $id);
        $query = $this->db->get('images');
        return $query->result();
	}

	public function getImages($filtroActivo = false)
	{
		$this->load->database();
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $query = $this->db->get('images');
        return $query->result();
	}


	public function deleteAdjunto($id)
	{
		$this->db->where('id_imagenes', $id);
		$this->db->delete('images');
	}

	public function postImage($data)
	{
		$this->load->database();
        $this->db->insert('images', $data);
	}

	
}