<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	/**
  * Método Construtor
  */
 	public function __construct() {
    parent::__construct();
  }


	public function check_login($login, $senha){
		$this->db->from("admin");
    $this->db->where("login", $login);
    $this->db->where("senha", $senha);
    
    //executando a query no banco
    $usuarios = $this->db->get();

    //verificação
    if ($usuarios->num_rows()) {
      # existe usuarios no db
      $usuario = $usuarios->result_array();
      return $usuario[0];
    }else{
      return FALSE;
    }
	}



}
