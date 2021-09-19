<?php
class PropiedadModel extends CI_Model {	

	function __construct()
	{
	    parent::__construct();
	    $this->load->database();
	}

	/*public function getPropiedades($filtroActivo = false)
	{
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $query = $this->db->get('propiedades');

        return $query->result();
	}*/

	public function getPropiedades($filtroActivo = false)
	{
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $this->db->select('propiedades.*,ubicacion.descripcion AS ubicacion,ciudad.descripcion AS ciudad');
        $this->db->from('propiedades');
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $this->db->join('ciudad', 'propiedades.id_ciudad = ciudad.id_ciudad');
        $query = $this->db->get();
        
        return $query->result();
	}

	public function getImagenes($id)
	{
        $this->db->where('id_propiedad', $id);        
        $query = $this->db->get('images');
        return $query->result();
	}

	public function getPropiedadCompletaById($id)
	{
        $this->db->select('propiedades.id_propiedad, 
        	ubicacion.descripcion AS ubicacion, 
        	tipospropiedades.descripcion AS tipoPropiedad, 
        	propiedades.condicion, 
        	propiedades.activo,
        	propiedades.visitas,
        	propiedades.fecha,
        	propiedades.expensas,
        	propiedades.precio,
        	propiedades.ambientes,
        	propiedades.dormitorios,
        	propiedades.banos,
        	propiedades.descripcion,
        	propiedades.direccion,
        	propiedades.suptotal,
        	propiedades.supcub,
        	propiedades.supdesc,
        	ciudad.descripcion AS ciudad,
        	moneda.descripcion AS moneda,
        	moneda.signo AS signo_moneda,
        	operacion.descripcion AS descOper');
        $this->db->where('propiedades.id_propiedad', $id);
        $this->db->from('propiedades');
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $this->db->join('tipospropiedades', 'propiedades.id_tipo = tipospropiedades.id_tipo_propiedad');
        $this->db->join('moneda', 'propiedades.id_moneda = moneda.id');
        $this->db->join('ciudad', 'propiedades.id_ciudad = ciudad.id_ciudad');
        $this->db->join('operacion', 'propiedades.id_operacion = operacion.id');
        $query = $this->db->get();
        return $query->result();
	}

	public function getPropiedadesCompletas($filtroActivo = false)
	{        
		if($filtroActivo){
        	$this->db->where('propiedades.activo', 1);
        }
        $this->db->select('propiedades.id_propiedad, 
        	ubicacion.descripcion AS ubicacion, 
        	tipospropiedades.descripcion AS tipoPropiedad, 
        	propiedades.condicion, 
        	propiedades.activo');
        $this->db->from('propiedades');
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $this->db->join('tipospropiedades', 'propiedades.id_tipo = tipospropiedades.id_tipo_propiedad');
        $query = $this->db->get();
        return $query->result();
	}

	public function getPropiedadFiltro($moneda, $precioDesde, $precioHasta, $tipoPropiedad, $dormitoriosDesde, $dormitoriosHasta, $ambientesDesde, $ambientesHasta, $ubicacion)
	{
        if($moneda!=null && $moneda!=0){
        	$this->db->where('id_moneda', $moneda);
        }

        if($precioDesde!=null && $precioDesde!=0){
        	$this->db->where('precio >=', $precioDesde);
        }

        if($precioHasta!=null && $precioHasta!=0){        	
        	$this->db->where('precio <=', $precioHasta);
        }

        if($tipoPropiedad!=null && $tipoPropiedad!=0){
        	$this->db->where('id_tipo', $tipoPropiedad);
        }


        if($dormitoriosDesde!=null && $dormitoriosDesde!=0){
        	$this->db->where('dormitorios >=', $dormitoriosDesde);
        }

        if($dormitoriosHasta!=null && $dormitoriosHasta!=0){
        	$this->db->where('dormitorios <=', $dormitoriosHasta);
        }

        if($ambientesDesde!=null && $ambientesDesde!=0){
        	$this->db->where('ambientes >=',$ambientesDesde);
        }

        if($ambientesHasta!=null && $ambientesHasta!=0){
        	$this->db->where('ambientes <=', $ambientesHasta);
        }

        if($ubicacion!=null && $ubicacion!=0){
        	$this->db->where('id_ubicacion', $ubicacion);
        }
         $this->db->select('propiedades.*,ubicacion.descripcion AS ubicacion,ciudad.descripcion AS ciudad');
        $this->db->from('propiedades');
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $this->db->join('ciudad', 'propiedades.id_ciudad = ciudad.id_ciudad');
        //$query = $this->db->get('propiedades');
        $query = $this->db->get();
        //var_dump($this->db->last_query());
        return $query->result();
	}

	public function getPropiedadbyId($id)
	{
        $query = $this->db->get_where('propiedades', array('id_propiedad' => $id));
        return $query->result()[0];
	}

	public function getPropiedadbyIdUbicacion($id)
	{        
        $this->db->from('propiedades');
        $this->db->where('id_propiedad', $id);
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $query = $this->db->get();

        return $query->result();
	}

	public function postPropiedad($data)
	{
        $this->db->insert('propiedades', $data);
	}

	public function putPropiedad($id , $data)
	{
        $this->db->where('id_propiedad', $id);
		$this->db->update('propiedades', $data);
	}

	public function disabledPropiedad($id)
	{
        $this->db->where('id_propiedad', $id);
		$this->db->update('propiedades', array('activo' =>0));
	}

	public function enabledPropiedad($id)
	{
        $this->db->where('id_propiedad', $id);
		$this->db->update('propiedades', array('Activo' =>1));
	}

	public function getDepartamentos()
	{

        $this->db->where("id_provincia",2)->or_where("id_provincia",6);
        $query = $this->db->get('departamento');        
        return $query->result();
	}

	public function getCiudades($id)
	{
        $this->db->where('id_departamento', $id);
        $query = $this->db->get('ciudad');
        return $query->result();
	}

	public function getPropiedadCatalogo($id)
	{
        $this->db->where('id_propiedad', $id);
        $query = $this->db->get('images');
        return $query->result();
	}
	public function getPropiedadesUbicacion($filtroActivo = false)
	{
	    /*
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }*/
        /*
        $this->db->get('propiedades');
        $query = $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        return $query->result();*/
        
        $this->db->from('propiedades');
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $query = $this->db->get();
        return $query->result();
	}

	public function getMonedas()
	{
        $query = $this->db->get('moneda');
        return $query->result();
	}

	public function getOperacion()
	{
        $query = $this->db->get('operacion');
        return $query->result();
	}

	public function getCiudad()
	{
        $query = $this->db->get('ciudad');
        return $query->result();
	}

	

	public function getPropiedadCompletaDestacadas($filtroActivo = false)
	{
		if($filtroActivo){
        	$this->db->where('propiedades.activo', 1);
        }
        $this->db->select('propiedades.id_propiedad, 
        	ubicacion.descripcion AS ubicacion, 
        	tipospropiedades.descripcion AS tipoPropiedad, 
        	propiedades.condicion, 
        	propiedades.activo,
        	propiedades.visitas,
        	propiedades.fecha,
        	propiedades.expensas,
        	propiedades.precio,
        	propiedades.ambientes,
        	propiedades.dormitorios,
        	propiedades.banos,
        	propiedades.descripcion,
        	propiedades.direccion,
        	propiedades.suptotal,
        	moneda.descripcion AS moneda,        	
        	ciudad.descripcion AS ciudad,
        	moneda.signo AS signo_moneda');
        $this->db->where('propiedades.destacada', 1);
        $this->db->from('propiedades');
        $this->db->join('ubicacion', 'propiedades.id_ubicacion = ubicacion.id_ubicacion');
        $this->db->join('tipospropiedades', 'propiedades.id_tipo = tipospropiedades.id_tipo_propiedad');
        $this->db->join('moneda', 'propiedades.id_moneda = moneda.id');        
        $this->db->join('ciudad', 'propiedades.id_ciudad = ciudad.id_ciudad');
        $query = $this->db->get();
        return $query->result();
	}
	

}