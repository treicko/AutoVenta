<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acerca_de extends CI_Controller {

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
	public function index()
	{
		#$this->load->view('welcome_message');
		$data['main_content'] = 'pages/acerca_de/perfil';
		$this->load->view('main_template_visitantes', $data);
	}

	public function mision()
	{
		#$this->load->view('welcome_message');
		$data['main_content'] = 'pages/acerca_de/mision';
		$this->load->view('main_template_visitantes', $data);
	}

	public function vision()
	{
		#$this->load->view('welcome_message');
		$data['main_content'] = 'pages/acerca_de/vision';
		$this->load->view('main_template_visitantes', $data);
	}

	public function objetivos()
	{
		#$this->load->view('welcome_message');
		$data['main_content'] = 'pages/acerca_de/objetivos';
		$this->load->view('main_template_visitantes', $data);
	}
}