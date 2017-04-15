<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){

		parent::__construct();

		if($this->session->userdata('logado')){

		if($this->uri->segment(2) != "sair"){
			$this->load->view('admin/dashboard');
		}

		}
		

		//var_dump($this->session->all_userdata());
	}

	public function index()
	{
		$alerta = array();
		$this->load->view('admin/login', $alerta);
	}



	public function login(){
		$alerta = array();
		
		if (isset($_POST['acesso'])) {

			// regras de validação dos campos
			$this->form_validation->set_rules('login', 'LOGIN', 'required');
			$this->form_validation->set_rules('senha', 'SENHA', 'required|min_length[6]|max_length[12]');
			//verificando se as regras foram atendidas
			if($this->form_validation->run() === TRUE){
				$login  = $_POST['login'];
				$senha = $_POST['senha'];
				$this->load->model('admin_model');
				$login_existe = $this->admin_model->check_login($login, $senha);
				if ($login_existe) {
					# login valido e autorizado --- iniciar session
					$usuario = $login_existe;

					//iniciar sessão redirecionar para o dashboard
					$session = array(
							'login'	=>	$usuario['login'],
					        'email' => $usuario['email'],
					        'nivel' => $usuario['nivel'],
					        'logado' => TRUE
					);
					// inicializando a sessão
					$this->session->set_userdata($session);

					redirect('admin/dashboard');
					//$this->load->view('admin/dashboard');


				}else{
					# login invalido
					$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Login inválido. <br>"
					);
				}
			}else{
				// Houveram erros no formulário
				$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Falha na validação do formulário. <br>".validation_errors()
					);
			}
		}
		$dados = array(
			"alerta" => $alerta
			);

		//redirect('administracao', $dados);
		$this->load->view('admin/login', $dados);

	}

		public function dashboard(){

			$this->load->view('admin/dashboard');
	}

	public function sair(){
		$this->session->sess_destroy();

		$alerta = array(
					"class" => "success",
					"mensagem" => "Logout realizado com sucesso. <br>"
					);

		$dados = array(
			"alerta" => $alerta
			);

		redirect('administracao', $dados);
	}
}
