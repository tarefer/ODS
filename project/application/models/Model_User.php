<?php

	class Model_User extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		/*
		This function get profiles from the DataBase and the variable 'query' obtained the result
		*/
		public function getPerfil(){
				$query = $this->db->query("select * from profile");
				return $query->result();
		}
		/*
		This function insert profiles to the Database
		*/
		public function insertUsers($idPer, $names, $lastNames, $email, $phoneNumber){
			$arrayDatos = array(
				'per_id' => $idPer,
				'usu_nombres' => $names,
				'usu_apellidos' => $lastNames,
				'usu_correo' => $email,
				'usu_telefono' => $phoneNumber);
			$this->db->insert('usuario', $arrayDatos);
		}
		/*
		This function provides a list of users
		*/
		public function listUsers(){
			$query = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id=p.per_id");
			return $query->result();
		}

	}