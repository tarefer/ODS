<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//$this->load->model('Model_Usuario'); 
	}
	/*
	This function show us the view 'plantilla' and also get profiles from the model
	*/
	public function index()
	{
		$data['contenido'] = "usuario/index";
		//$data['getPerfil'] = $this->Model_Usuario->getPerfil();
		//$data['listUsers'] = $this->Model_Usuario->listUsers();
		$this->load->view('template', $data);
	}
	/*
	This function get the data from the form
	*/
	public function insert(){
		$datos = $this->input->post();
		if (isset($datos)) {
			$txtId = $datos['txt-idProfile'];
			$txtNames = $datos['txt-names'];
			$txtLastNames = $datos['txt-lastNames'];
			$txtEmail = $datos['txt-email'];
			$txtPhoneNumer = $datos['txt-phoneNumber'];
			$this->Model_Usuario->insertUsers($txtId, $txtNames, $txtLastNames, $txtEmail, $txtPhoneNumer);
			redirect ('');
		}
	}


}
