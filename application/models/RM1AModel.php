<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RM1AModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahAsesmen($data){
		$this->db->insert('tb_rm1a', $data);
	}

	public function updateAsesmen($where,$data){
		$this->db->where("id_periksa",$where);
		$this->db->update("tb_rm1a",$data);
	}

	public function tampilkan($where){
		$this->db->select('*');
		$this->db->from('tb_rm1a');
		$this->db->where('id_periksa',$where);
		return $this->db->get()->result();
	}
	
}