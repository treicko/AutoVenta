<?php 

class principal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
  	{
    	parent::__construct();

    	if( !$this->session->userdata('isLoggedIn') ) {
        	redirect('usuarios/show_login');
    	}
  	}
	public function index()
	{
		#$this->load->view('welcome_message');
		#$data['title'] = 'Muebles Santiago';
		#$data['user']= $this->session->userdata('usuario');
		#$data['password']= $this->session->userdata('password');
		#$data['nombre']= $this->session->userdata('nombre');		
		$data['main_content'] = 'pages/index';
		$this->load->view('main_template', $data);
	}
	/*public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Oh, oh... no tenemos una pagina para esto!
			show_404();
		}
		$data['title'] = ucfirst($page); // Capitaliza la primera letra
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */