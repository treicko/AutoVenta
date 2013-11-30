<?php 

class accesorio_model extends CI_Model
{
	var $details;
	public function __construct()
	{
		$this->load->database();
	}

	public function insert_accesorio($accesorio)
	{
		$this->db->insert('accesorios', $accesorio);
	}

	public function update_accesorio($accesorio,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('accesorios', $accesorio);
	}
	public function read_accesorios()
	{
		$accesorios=$this->db->get('accesorios');
		return $accesorios->result_array();
	}
	public function get_one_accesorio($id)
	{
		$query= $this->db->query("select * from accesorios where id='$id'");
		return $query->row_array();
	}
	public function delete_Accesorio($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('accesorios'))
			return true;
		else
			return false;
	}
	/*
	public function insert_venta($client)
	{		
		$this->db->insert('ventas',$client);
	}
	*/
}

?>