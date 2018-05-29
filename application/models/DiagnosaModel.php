<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiagnosaModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambah($data){
		$this->db->insert('tb_diagnosa_umum', $data);
	}

	public function view($where){
		$this->db->select('*');
		$this->db->from('tb_diagnosa_umum');
		$this->db->where('id_periksa',$where);
		return $this->db->get()->result();
	}

	public function hapus($where){
		$this->db->delete('tb_diagnosa_umum',$where);
	}
	
}