<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autentificacion extends CI_Controller {
	
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
		$data['main_content'] = 'pages/autentificacion/form_login';
		$this->load->view('main_template_visitantes', $data);
    }
	
	public function verify_login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Usuario','required' );
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()===FALSE)
		{
			$data['main_content'] = 'pages/autentificacion/form_login';
			$this->load->view('main_template_visitantes', $data);
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
				$tipoAcceso = $this->session->userdata('nivelAcceso');
				if($tipoAcceso == 'administrador')
				{
					redirect('principal/index_Administrador');
				}
				else if ($tipoAcceso == 'vendedor') {
					redirect('principal/index_Vendedor');
				}
				else
				{
					redirect('principal/index_Cliente');
				}
			}
			else
			{
				#$this->form_validation->set_message('verify_login', 'Error session');
				$this->show_login(true);
			}
			
		}
	}
	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('principal/index');
      	//$this->index();
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */