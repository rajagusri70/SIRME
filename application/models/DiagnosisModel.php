<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiagnosisModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambah($data){
		$this->db->insert('tb_diagnosis', $data);
	}

	public function view($where){
		$this->db->select('*');
		$this->db->from('tb_diagnosis');
		$this->db->where($where);
		return $this->db->get()->result();
	}

	public function hapus($where){
		$this->db->delete('tb_diagnosis',$where);
	}

	public function search($like){
		$this->db->select('*');
		$this->db->where($like);
   		return $this->db->get('tb_diagnosis');
	}
	
}