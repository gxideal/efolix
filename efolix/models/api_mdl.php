<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_mdl extends CI_Model{
	private $_param = array();
	
	public function __construct($tb = 'api_detail'){
		$this->load->database();
		$this->tb = $tb; 
	}
	
	/**
	 * 添加客户
	 */
	public function add($data = null){
		$this->db->insert($this->tb,$data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function get($face_to='ios'){
		$res = $this->db->query("SELECT * from `api_detail` where ".($face_to == 'ios'?"`faceto`!=2":"`faceto`!=2"));
		return $res->result_array();
	}
	
	public function del($id){
		$this->db->where('id',$id)->delete($this->tb);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function get_one($id){
		$res = $this->db->where('id',$id)->get($this->tb);
		return $res->row_array();
	}
	
	public function update($data = null,$where = null){
		$res = $this->db->update($this->tb,$data,$where);
		//var_dump($res);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function get_last(){
		$res = $this->db->select('`id`,`name`,`ctime`')->order_by('ctime','desc')->limit(10)->get($this->tb);
		return $res->result_array();
	}
}