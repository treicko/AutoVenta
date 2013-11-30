<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venta extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('venta_model');
		
	}
	public function index()
	{
		$this->load->helper('form');
		$data['main_content'] = 'pages/venta/nueva_venta';
		$this->load->view('main_template_vendedores', $data);


		
			//$this->ver_vehiculos();
	}

	public function nuevaVenta(){
		$this->load->helper('form');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['main_content'] = 'pages/venta/nueva_venta';
		$this->load->view('main_template_vendedores', $data);
		
		

		
/*
		$venta= array(
				'id'=> $this->input->post('id_venta'),
				'id_cliente'=> $this->input->post('id_cliente'),
				'id_vehiculo'=> $this->input->post('id_vehiculo'),
				'id_vendedor'=> $this->input->post('id_vendedor'),
				'fecha'=> $this->input->post('fecha')
			);
			$this->venta_model->insert_venta($venta);
			$this->load->view('vehiculo');
*/
	}


	public function validarCliente()
	{
		$data['nombre'] = $this->session->userdata('nombre');
		$usuarrio=array( 'respuesta'=>$this->input->post('respuesta'));

		if ($usuarrio['respuesta']=='registrado') {

			$this->load->helper('form');
			$data['main_content'] = 'pages/venta/get_ci_cliente';
			$this->load->view('main_template_vendedores', $data);

			# code...
		} else {
			$this->load->helper('form');
			$data['main_content'] = 'pages/venta/get_placa_auto';
			#$data['main_content'] = 'pages/venta/venta_sin_cliente';
			$this->load->view('main_template_vendedores', $data);
			# code...
		}


	}

	public function registrarVenta()
	{
		echo $this->input->post('direccion');
		echo $this->input->post('cliente_nombres');

		$venta= array(
				'cliente_nombres'=> $this->input->post('cliente_nombres'),
				//'cliente_apellidos'=> $this->input->post('cliente_apellidos'),
				'cliente_ci'=> $this->input->post('cliente_ci'),
				'direccion'=> $this->input->post('direccion'),
				'telefono'=> $this->input->post('telefono'),
				'usuario_nombres'=> $this->input->post('usuario_nombres'),
				'usuario_ci'=> $this->input->post('usuario_ci'),
				'placa'=> $this->input->post('placa'),
				'marca'=> $this->input->post('marca'),
				'modelo'=> $this->input->post('modelo'),
				'precio'=> $this->input->post('precio'),
				
				'fecha'=> $this->input->post('fecha')
			);
			$ci=$this->input->post('usuario_ci');
			$this->load->model('vehiculo_model');
			$this->load->model('user_model');

			$this->vehiculo_model->cambiarEstadoVehiculoVendido($venta['placa']);

			//redirect('usuarios/sumarVenta/'$ci);
			//$this->user_model->($venta['usuario_ci']);


			$this->venta_model->insert_venta($venta);
			//$this->load->view('index.php');
		
	}
	public function getCliente()
	
	{
		$nombre_usuario_sesion = $this->session->userdata('nombre');
		$data['nombre'] = $nombre_usuario_sesion;

		$this->load->helper('form');
		$this->load->model('user_model');
		$this->load->model('vehiculo_model');
		$cliente=$this->input->post('ci');
		$auto=$this->input->post('placa');
		
		$data['cliente']=$this->user_model->get_one_user_ci($cliente);
		$data['auto']=$this->vehiculo_model->get_one_vehiculo_placa($auto);
		$data['vendedor'] = $this->user_model->get_one_user_by_name($nombre_usuario_sesion);


		$data['main_content'] = 'pages/venta/venta_con_cliente';

		$this->load->view('main_template_vendedores', $data);
	}

	public function getPlacaVehiculo()
	{
		$data['nombre'] = $this->session->userdata('nombre');
		$this->load->helper('form');
		$this->load->model('vehiculo_model');
		$auto=$this->input->post('placa');
		


		//$data['cliente']=$this->user_model->get_one_user_ci($cliente);
		$data['auto']=$this->vehiculo_model->get_one_vehiculo_placa($auto);

		$data['main_content'] = 'pages/venta/venta_sin_cliente';
		$this->load->view('main_template_vendedores', $data);
	}

}
?>