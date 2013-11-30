<?php 

class user_model extends CI_Model
{
	var $details;
	public function __construct()
	{
		$this->load->database();
	}

	public function login($user, $password)
	{
		$query= $this->db->query("select * from usuarios where usuario='$user' and password='$password' and estado='Activo'");
		if($query->num_rows()==1)
		{
			$this->details= $query->row_array();
			$this->set_session();
			return true;
		}
		else
		{
			return false;
		}
	}

	public function set_session()
	{
		$this->session->set_userdata(array(
			'nombre' => $this->details['nombre'],
			'usuario' => $this->details['usuario'],
			'password' => $this->details['password'],
			'nivelAcceso'=> $this->details['nivelAcceso'],
			'isLoggedIn' =>true			
			
		));
	}

	public function get_all_user()
	{
		$query = $this->db->query("select * from usuarios order by nombre asc");
		return $query->result_array();
	}

	public function get_one_user_ci($ci)
	{
		$query= $this->db->query("select * from usuarios where ci='$ci'");
		return $query->row_array();
	}
	
	public function get_one_user_by_name($name)
	{
		$query= $this->db->query("select * from usuarios where nombre='$name'");
		return $query->row_array();
	}

	public function get_one_user($id)
	{
		$query= $this->db->query("select * from usuarios where id='$id'");
		return $query->row_array();
	}	

	public function insert_user($user)
	{		
		$this->db->insert('usuarios',$user);
	}

	public function update_user($user, $id)
	{		
		$this->db->where('id', $id);
		$this->db->update('usuarios',$user);
	}
	
	public function delete_user($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('usuarios'))
			return true;
		else
			return false;
	}

}