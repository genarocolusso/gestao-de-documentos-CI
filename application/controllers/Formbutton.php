<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formbutton extends CI_Controller {

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
 		$this->load->helper(array('form', 'url'));
 		 $this->load->helper('date');
 		$this->load->helper('array'); 
 		 $this->load->helper('file');
 		$this->load->library('upload');
 	}

	public function enviar()
	{
		 
				
				 $config['file_name'] = 'arquivo'.now();
		  		$config['upload_path'] = './uploads/';
                $config['allowed_types'] =  'gif|jpg|png|pdf';
                $this->load->library('upload', $config);
                 $this->upload->initialize($config);
                $this->upload->do_upload('arquivo');
               


	$data = array(
   'fd' =>  	 $this->input->post('fd'),
   'secao' =>    $this->input->post('secao'),
   'subsecao' => $this->input->post('subsecao'),
   'serie' =>    $this->input->post('serie'),
   'subserie' => $this->input->post('subserie'),
   'tipodocumento' => $this->input->post('tipodoc'),
   'data' =>     $this->input->post('data'),
   'arquivo'=>   $config['file_name']

			);

		$this->db->insert('caixas', $data); 

		$dados = array(
			 'titulo_da_pagina' => 'Início',
			 'view_principal' => 'home',
			 'sucesso' => '1'
		);
		redirect('Pages/sucesso',$dados);

	}

	
}
