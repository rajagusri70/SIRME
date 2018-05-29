<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RiwayatHamilModel extends CI_Model{

	function __construct() {
        parent::__construct(); 
    }

	public function tambah($data){
		$this->db->insert('tb_riwayat_hamil', $data);
	}

	public function view($where){
		$this->db->select('*');
		$this->db->from('tb_riwayat_hamil');
		$this->db->where('no_pasien',$where);
		return $this->db->get()->result();
	}

	public function hapus($where){
		$this->db->delete('tb_riwayat_hamil',$where);
	}
	
}