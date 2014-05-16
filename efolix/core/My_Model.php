<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Model extends CI_Model{
	public function __construct($tb = null){
		parent::__construct();
		$this->tb = $tb;
		$this->load->database();
	}
	
	//添加
	public function add($data = null){
		if(isset($data[0]) && is_array($data[0])){
			$this->db->insert_batch($this->tb,$data);
			return $this->db->affected_rows();
		}else{
			$this->db->insert($this->tb,$data);
			return ($this->db->insert_id() > 0) ? $this->db->insert_id() : FALSE;
		}
	}
	
	public function get($sql = '', $param = array() , $type = 'all'){
		$res = $this->db->query($sql,$param);
		if($type=='all'){
			return $res->result_array();
		}elseif($type=="row"){
			return $res->row_array();
		}elseif($type=='one'){
			$k = $res->row_array();
			return is_array($k)?array_pop($k):false;
		}
	}
	
	public function del($where = null){
		if(!$where) die("不允许不传限制条件的删除!");
		$this->db->where($where)->delete($this->tb);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function update($data = null,$where = null){
		$res = $this->db->update($this->tb,$data,$where);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}