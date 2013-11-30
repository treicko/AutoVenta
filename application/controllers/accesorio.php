<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accesorio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('accesorio_model');
		
	}
	public function index()
	{
		$this->mostrarAccesorios();

	}

	public function nuevoAccesorio()
	{
		$data['nombre'] = $this->session->userdata('nombre');
		$this->load->helper('form');
		$data['main_content'] = 'pages/accesorio/nuevo_Accesorio';
		$this->load->view('main_template_administrador', $data);
		
	}

	public function registrarAccesorio()
	{
			$accesorio=array('nombre'=>$this->input->post('nombre'),
							'categoria'=>$this->input->post('categoria'),
							'precio'=>$this->input->post('precio'),
							'descripcion'=>$this->input->post('descripcion')



				);

			$this->accesorio_model->insert_accesorio($accesorio);
			$this->mostrarAccesorios();
	}

	public function editarAccesorio($id)
	{

		$data['accesorio'] = $this->accesorio_model->get_one_accesorio($id);		
		$data['main_content'] = 'pages/accesorio/edit_accesorio';
		$this->load->view('main_template_administrador', $data);	


		/*
		$accesorio=array('nombre'=>$this->input->post('nombre'),
							'categoria'=>$this->input->post('categoria'),
							'precio'=>$this->input->post('precio'),
							'descripcion'=>$this->input->post('descripcion')



				);

			$this->accesorio_model->update_accesorio($accesorio);
			*/
	}
	public function mostrarAccesorios()
	{
		$data['accesorios']=$this->accesorio_model->read_accesorios();

		$data['main_content'] = 'pages/accesorio/lista_Accesorios';
		$this->load->view('main_template_administrador', $data);


	}

	public function actualizarAccesorio()
	{
		$accesorio=array('nombre'=>$this->input->post('nombre'),
							'categoria'=>$this->input->post('categoria'),
							'precio'=>$this->input->post('precio'),
							'descripcion'=>$this->input->post('descripcion')



				);

			$this->accesorio_model->update_accesorio($accesorio, $this->input->post('id'));
		
		//$this->vehiculo_model->update_vehiculo($vehiculo, $this->input->post('id'));
		$this->mostrarAccesorios();
		
	}

	public function eliminarAccesorio($id)
	{
		if($this->accesorio_model->delete_Accesorio($id))
			redirect('accesorio/mostrarAccesorios');
	}

}
?>