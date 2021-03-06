<?php
 
class Pages extends CI_Controller {

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
	public function __construct(){

 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->helper('array'); 
 		$this->load->library('session');
 		$this->load->library('upload');

 	}

	public function index($page = 'site')
	{
		if (file_exists(APPPATH."views/pages/". $page. ".php")) {

   $this->load->view("pages/". $page);

} 
		$dados = array(
			 'titulo_da_pagina' => 'Início',
			 'view_principal' => 'home',
			  
		);

 		$this->load->view('site', $dados); 

	}

	public function sucesso($page = 'site')
	{
		if (file_exists(APPPATH."views/pages/". $page. ".php")) {

   $this->load->view("pages/". $page);

      } 
		$dados = array(
			 'titulo_da_pagina' => 'Início',
			 'view_principal' => 'home',
			  
		);
		$this->session->set_flashdata('message_name', '<p class="text-center green"> <strong> Sucesso!</strong> Arquivo adicionado. </p> ');
 		$this->load->view('site', $dados); 

	}

}
