<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Web extends My_Controller{
	private $_device_arr = array(
		0	=>	"J'utilise mon iPad",
		1	=>	"iPad Mini (16G)",
		2	=>	"iPad 2 (16G)",
		3	=>	"iPad with Retina display"
	);
	
	private $_lang_arr = array(
		0	=>	'Français',
		1	=>	'English',
		2	=>	'Deutsch',
		3	=>	'中文'
	);
	
	public function __construct(){
		parent::__construct();
		$this->lang->load('common', $this->u_lang);
	}
	
	public function index(){
		$this->load->view('head',array('page'=>'index'));
		$this->load->view('index');
		$this->load->view('foot');
	}
	
	public function product(){
		$this->load->view('head',array('page'=>'product'));
		$this->load->view('product');
		$this->load->view('foot');
	}

	public function mobilecommande(){
		$this->load->view('head',array('page'=>'mobilecommande'));
		$this->load->view('mobilecommande');
		$this->load->view('foot');
	}

	public function mobilecommande_fr(){
		$this->load->view('head',array('page'=>'mobilecommande'));
		$this->load->view('mobilecommande_fr');
		$this->load->view('foot');
	}
	
	public function order(){
		$prices = array(
			'base' => 2949,		//基础价格
			'license' => array(	//授权数量报价
				'1' => 0,
				'2' => 399,
				'3' => 650,
				'4' => 650+399,
				'5' => 650+399*2,
				'6' => 650+399*3,
				'7' => 650+399*4,
				'8' => 650+399*5,
				'9' => 650+399*6				
			),
			'ipad' => array(	//ipad型号报价
				0 => 0,
				1 => 350,
				2 => 399,
				3 => 519	
			)
		);
		if($this->get('op')=='get_price'){			
			$device = $this->post('device')?$this->post('device'):0;
			$num = $this->post('num')?$this->post('num'):0;
			$price = $prices['base'] + $prices['license'][$num] + $prices['ipad'][$device]*$num;
			exit(json_encode(array('success'=>1,'price'=>'€ '.$price)));
		}		
		$this->load->view('head',array('page'=>'order','device_arr'=>$this->_device_arr,'lang_arr'=>$this->_lang_arr,'prices'=>$prices));
		$this->load->view('order');
		$this->load->view('foot');
	}
	
	public function aboutus(){
		$this->load->view('head',array('page'=>'aboutus'));
		$this->load->view('aboutus');
		$this->load->view('foot');
	}
	
	public function contact(){
		$this->load->view('head',array('page'=>'contact'));
		$this->load->view('contact');
		$this->load->view('foot');
	}
	
	public function makemail(){
		$device = $this->post('device');
		$num = $this->post('num');
		$lang = $this->post('lang');
		if(intval($num)>0 && intval($num)<10 && array_key_exists($device, $this->_device_arr) && array_key_exists($lang, $this->_lang_arr)){
			$msg_tpl = $this->lang->line('order_mail_tpl');
			$msg = sprintf($msg_tpl,intval($num)." x ".$this->_device_arr[$device],intval($num)." x ".$this->lang->line('order_license'),$this->_lang_arr[$lang]);
			exit(json_encode(array('success'=>1,'msg'=>$msg)));
		}else{
			exit(json_encode(array('success'=>0,'msg'=>"erreur de l'information")));
		}
	}
	
	public function send(){
		$device = $this->post('device');
		$num = $this->post('num');
		$lang = $this->post('lang');
		$company = $this->post('company',null,true);
		$contact = $this->post('contact',null,true);
		$phone = $this->post('phone',null,true);
		$msg = $this->post('msg',null,true);
		if(intval($num)>0 && intval($num)<10 &&  array_key_exists($device, $this->_device_arr) && array_key_exists($lang, $this->_lang_arr) && $company && $contact && $phone && $msg){
			if($this->sendmail($company,$contact,$phone,$device,$num,$lang,$msg)){
				exit(json_encode(array('success'=>1,'msg'=>"erreur de l'information")));
			}
			exit(json_encode(array('success'=>0,'msg'=>"Désolé, impossible d'envoyer message")));
		}else{
			exit(json_encode(array('success'=>0,'msg'=>"Parameter error")));
		}
	}
	
	public function contact_send(){
		$company = $this->post('company',null,true);
		$contact = $this->post('contact',null,true);
		$phone = $this->post('phone',null,true);
		$msg = $this->post('msg',null,true);
		
		if(!$company || !$contact || !$phone || !$msg){
			exit(json_encode(array('success'=>0,'msg'=>'please fill up all blank needed!')));
		}
		
		$this->load->library('email');		
		$config['protocol'] = 'smtp';
		$config['charset'] = 'utf-8';
		$config['mailpath'] = 'news/index';
		$config['smtp_host'] = 'smtp.efolix.com';
		$config['smtp_user'] = 'ptb532p5';
		$config['smtp_pass'] = 'efolix587855';
		$config['mailtype'] = 'html';		
		$this->email->initialize($config);		
		$this->email->from('modestand@efolix.com', 'eFolix');
		$this->email->to('info@efolix.com,gb@efolix.com,gxideal@gmail.com');	
		//$this->email->to('angelmfy@gmail.com');	
		$this->email->subject("eFolix Notification");
		$msg = 'Company:'.$company."<br/>Contact:".$contact."<br/>Phone:".$phone."<br/>Said:<pre>".$msg."</pre>";
		$this->email->message($msg);
		@file_put_contents('important_order_log.txt', date("Y-m-d H:i:s")."\t".$msg."\n",FILE_APPEND);
		if(@$this->email->send()){
			exit(json_encode(array('success'=>1)));
		}else{
			exit(json_encode(array('success'=>0,'msg'=>"Mail Send Failed, Please Retry.")));
		}
	}
	
	private function sendmail($company,$contact,$phone,$device,$num,$lang,$msg){
		$this->load->library('email');
		$config['protocol'] = 'smtp';
		$config['charset'] = 'utf-8';
		$config['mailpath'] = 'news/index';
		$config['smtp_host'] = 'smtp.efolix.com';
		$config['smtp_user'] = 'ptb532p5';
		$config['smtp_pass'] = 'efolix587855';
		$config['mailtype'] = 'html';		
		$this->email->initialize($config);		
		$this->email->from('modestand@efolix.com', 'eFolix');
		$this->email->to('info@efolix.com,gb@efolix.com,gxideal@gmail.com');	
		//$this->email->to('angelmfy@gmail.com');	
		$this->email->subject("A New Order Was Made!");
		$msg = 'Company:'.$company."<br/>Contact:".$contact."<br/>Phone:".$phone."<br/>Order:".$num."*".$this->_device_arr[$device]."<br/>Language:".$this->_lang_arr[$lang]."<br/>Said:<pre>".$msg."</pre>";
		$this->email->message($msg);
		@file_put_contents('important_order_log.txt', date("Y-m-d H:i:s")."\t".$msg."\n",FILE_APPEND);
		return @$this->email->send();
	}
}
