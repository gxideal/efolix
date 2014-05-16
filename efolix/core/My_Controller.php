<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->config->load('lang_error');
		$this->form_validation->set_error_delimiters('[', ']');
		$this->u_lang = 'fr';		//语种,Fuck!如果是$this->lang会与表单验证冲突!
		//$this->load->model('fake_mdl');
		date_default_timezone_set('Europe/Paris');
	}

	public function get($k=null,$v=null,$xssfiler=false){
		return $this->input->get($k,$xssfiler)===null?($v===null?null:$v):$this->input->get($k,$xssfiler);
	}
	
	public function post($k=null,$v=null,$xssfiler=false){
		return $this->input->post($k,$xssfiler)===null?($v===null?null:$v):$this->input->post($k,$xssfiler);
	}
}
