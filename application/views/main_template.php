<?php 

$data['title'] = "Auto Venta"; // Capitaliza la primera letra
#$this->load->helper('url');
$data['nombre']= $this->session->userdata('nombre');
$this->load->view('templates/header', $data);
$this->load->view('templates/menu', $data);
$this->load->view($main_content);
#$this->load->view('templates/footer', $data);