<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PemeriksaanModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambah($data){
		$this->db->insert('tb_pemeriksaan', $data);
	}

	public function view($where){
		$this->db->select('*');
		$this->db->from('tb_pemeriksaan');
		$this->db->where('no_rawat_jalan',$where);
		return $this->db->get()->result();
	}

	public function hapus($where){
		$this->db->delete('tb_pemeriksaan',$where);
	}
	
}