<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RM1BModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahAsesmen($data){
		$this->db->insert('tb_rm1b', $data);
	}

	public function updateAsesmen($where,$data){
		$this->db->where("id_rawat",$where);
		$this->db->update("tb_rm1b",$data);
	}

	public function tampilkan($where){
		$this->db->select('*');
		$this->db->from('tb_rm1b');
		$this->db->where('id_rawat',$where);
		return $this->db->get()->result();
	}
	
}