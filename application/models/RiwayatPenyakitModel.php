<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RiwayatPenyakitModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahRiwayat($data){
		$this->db->insert('tb_riwayat_penyakit', $data);
	}

	public function viewRiwayatPenyakit($where){
		$this->db->select('*');
		$this->db->from('tb_riwayat_penyakit');
		$this->db->where($where);
		return $this->db->get()->result();
	}

	public function hapusRiwayatPenyakit($where){
		$this->db->delete('tb_riwayat_penyakit',$where);
	}
	
}