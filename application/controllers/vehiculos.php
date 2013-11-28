<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehiculos extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('vehiculo_model');
		if( !$this->session->userdata('isLoggedIn') ) {
        	redirect('usuarios/show_login');
    	}		
	}
	public function ver_vehiculos()
	{				
		$data['vehiculos'] = $this->vehiculo_model->get_all_vehiculos();		
		$data['main_content'] = 'pages/vehiculo/vehiculo';
		$this->load->view('main_template', $data);
	}

	public function editar_vehiculo($id)
	{
		$data['vehiculo'] = $this->vehiculo_model->get_one_vehiculo($id);		
		$data['main_content'] = 'pages/vehiculo/edit_vehiculo';
		$this->load->view('main_template', $data);		
	}

	public function nuevo_vehiculo()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('placa', 'Vehiculo','required' );
		#$this->form_validation->set_rules('telefono', 'Telefono', 'required');
		#$this->form_validation->set_rules('celular', 'Celular', 'required');
		if($this->form_validation->run()===FALSE)
		{
			$data['main_content'] = 'pages/vehiculo/add_vehiculo';
			$this->load->view('main_template', $data);
		}
		else
		{
			$vehiculo= array(
				'placa'=> $this->input->post('placa'),
				'modelo'=> $this->input->post('modelo'),
				'marca'=> $this->input->post('marca'),
				'precio'=> $this->input->post('precio')
			);
			$this->vehiculo_model->insert_vehiculo($vehiculo);
			$this->ver_vehiculos();
		}
		
	}

	public function modificar_vehiculo()
	{
		$vehiculo= array(
				'placa'=> $this->input->post('placa'),
				'modelo'=> $this->input->post('modelo'),
				'marca'=> $this->input->post('marca'),
				'precio'=> $this->input->post('precio')
			);
		
		$this->vehiculo_model->update_vehiculo($vehiculo, $this->input->post('id'));
		$this->ver_vehiculos();
		
	}

	public function eliminar_vehiculo($id)
	{
		if($this->vehiculo_model->delete_vehiculo($id))
			redirect('vehiculos/ver_vehiculos');
	}
	
}

/* End of file vehiculo.php */
/* Location: ./application/controllers/vehiculo.php */