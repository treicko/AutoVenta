<?php 

class autentificacion_model extends CI_Model
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
			'ci' => $this->details['ci'],
			'usuario' => $this->details['usuario'],
			'password' => $this->details['password'],
			'nivelAcceso'=> $this->details['nivelAcceso'],
			'isLoggedIn' =>true			
			
		));
	}

}