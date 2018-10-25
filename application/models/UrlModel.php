<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UrlModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function insert($data){
		$this->db->insert('tb_fhir_url', $data);
	}

	public function view(){
		$this->db->select('*');
		$this->db->from('tb_fhir_url');
		return $this->db->get()->result();
	}

	public function selectWhere($where){
		$this->db->select('*');
		$this->db->from('tb_fhir_url');
		$this->db->where($where);
		return $this->db->get();
	}

	public function delete($where){
		$this->db->delete('tb_fhir_url',$where);
	}
	
}