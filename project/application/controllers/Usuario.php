<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Model_User'); 
	}
	/*
	This function show us the view 'plantilla' and also get profiles from the model
	*/
	public function index()
	{
		$data['contenido'] = "user/index";
		
		$this->load->view('header');
		$this->load->view('template', $data);
		$this->load->view('footer');
	}
	/*
	This function get the data from the form
	*/
	public function insert(){
		$datos = $this->input->post();
		if (isset($datos)) {
			$txtId = $datos[''];
			$txtNames = $datos[''];
			$txtLastNames = $datos[''];
			$txtEmail = $datos[''];
			$txtPhoneNumer = $datos[''];
			$this->Model_User->insertUsers($txtId, $txtNames, $txtLastNames, $txtEmail, $txtPhoneNumer);
			redirect ('');
		}
	}

	public function register(){
		$data['contenido'] = "user/register";
		$data['getPerfil'] = $this->Model_User->getPerfil();
		//$data['listUsers'] = $this->Model_User->listUsers();
		$this->load->view('header');
		$this->load->view('template', $data);
		$this->load->view('footer');
	
	}


}
