vendedor<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendedor extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		if($this->session->userdata('isLoggedIn'))
		{
			redirect('principal/index');
		}
		else
		{
			$this->show_login(false);
		}
	}
	function show_login( $show_error = false ) {
        $data['error'] = $show_error;
        $this->load->helper(array('form'));
		$data['main_content'] = 'pages/form_login';
		$this->load->view('login_template', $data);
    }
	
	public function verify_login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Usuario','required' );
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()===FALSE)
		{
			$data['main_content'] = 'pages/form_login';
			$this->load->view('login_template', $data);
		}
		else
		{
			$user= $this->input->post('user');				
			$password = $this->input->post('password');
			
			$result=$this->user_model->login($user, $password);
			if($result)
			{
				#$data['main_content'] = 'pages/index';
				#$this->load->view('main_template', $data);
				redirect('principal/index_Cliente');
			}
			else
			{
				#$this->form_validation->set_message('verify_login', 'Error session');
				$this->show_login(true);
			}
			
		}
	}
	public function logout_user() 
	{
		$this->session->sess_destroy();
      	$this->index();
    }
	public function ver_usuarios()
	{		
		$data['usuarios'] = $this->user_model->get_all_user();		
		$data['main_content'] = 'pages/user/user';
		$this->load->view('main_template', $data);
	}	
	public function nuevo_usuario()
	{		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Usuario','required' );
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		$this->form_validation->set_rules('confirmPassword', 'Confirmar contraseña', 'required');
		if($this->form_validation->run()===FALSE)
		{			
			$data['main_content'] = 'pages/user/add_user';
			$this->load->view('main_template', $data);
		}
		else
		{
			if($this->input->post('password')== $this->input->post('confirmPassword'))
			{
				$user= array(
					'nombre'=> $this->input->post('nombre'),
					'ci'=> $this->input->post('ci'),
					'telefono'=> $this->input->post('telefono'),
					'celular'=> $this->input->post('celular'),
					'email'=> $this->input->post('email'),
					'direccion'=> $this->input->post('direccion'),
					'usuario'=> $this->input->post('usuario'),
					'password'=> $this->input->post('password'),
					'nivelAcceso'=> $this->input->post('nivelAcceso'),
					'estado'=> 'Activo'
				);
				$this->user_model->insert_user($user);
				$this->ver_usuarios();
			}
			else
			{
				$data['errores'] = false;	
				$data['main_content'] = 'pages/user/add_user';
				$this->load->view('main_template', $data);
			}
		}		
	}
	public function editar_usuario($id)
	{
		$data['usuario'] = $this->user_model->get_one_user($id);		
		$data['main_content'] = 'pages/user/edit_user';
		$this->load->view('main_template', $data);		
	}
	public function modificar_usuario()
	{
		$user= array(
			'nombre'=> $this->input->post('nombre'),
			'ci'=> $this->input->post('ci'),
			'telefono'=> $this->input->post('telefono'),
			'celular'=> $this->input->post('celular'),
			'email'=> $this->input->post('email'),
			'direccion'=> $this->input->post('direccion'),
			'nivelAcceso'=> $this->input->post('nivelAcceso'),
			'usuario'=> $this->input->post('usuario'),
			'password'=> $this->input->post('password'),
			'estado'=> $this->input->post('estado')
		);		
		$this->user_model->update_user($user, $this->input->post('id'));
		$this->ver_usuarios();		
	}
	public function eliminar_usuario($id)
	{
		if($this->user_model->delete_user($id))
			redirect('usuarios/ver_usuarios');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */