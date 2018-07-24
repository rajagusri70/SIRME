<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PoliklinikModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function viewPoli(){
		return $this->db->get('tb_poliklinik')->result();
	}

	public function viewPoliWhere($where){
		return $this->db->get_where('tb_poliklinik',$where)->result();
	}

	public function count($where){
		$this->db->where($where);
		$this->db->from("tb_poliklinik");
		return $this->db->count_all_results();
	}

	public function update($where,$data){
		$this->db->where($where);
		$this->db->update("tb_poliklinik",$data);
	}

	
}