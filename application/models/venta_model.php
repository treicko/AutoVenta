<?php 

class venta_model extends CI_Model
{
	var $details;
	public function __construct()
	{
		$this->load->database();
	}
	public function insert_venta($client)
	{		
		$this->db->insert('ventas',$client);
	}

}

?>