<?php 

class vehiculo_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_all_vehiculos()
	{
		$query = $this->db->get('vehiculo');
		return $query->result_array();
	}

	public function get_one_vehiculo($id)
	{
		$query= $this->db->query("select * from vehiculo where Id_vehiculo='$id'");
		return $query->row_array();
	}
	public function get_one_vehiculo_placa($id)
	{
		$query= $this->db->query("select * from vehiculo where placa='$id'");
		return $query->row_array();
	}

	public function insert_vehiculo($client)
	{		
		$this->db->insert('vehiculo',$client);
	}

	public function update_vehiculo($vehiculo, $id)
	{		
		$this->db->where('Id_vehiculo', $id);
		$this->db->update('vehiculo',$vehiculo);
	}

	public function delete_vehiculo($id)
	{
		$this->db->where('Id_vehiculo',$id);
		if($this->db->delete('vehiculo'))
			return true;
		else
			return false;
	}
	public function cambiarEstadoVehiculoVendido($id)					
	{


		$data=array('estado'=>0);
		$this->db->where('placa', $id);
			$this->db->update('vehiculo', $data); 
		


	}
}