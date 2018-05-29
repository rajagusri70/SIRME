<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PenatalaksanaanModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambah($data){
		$this->db->insert('tb_penatalaksanaan', $data);
	}

	public function view($where){
		$this->db->select('*');
		$this->db->from('tb_penatalaksanaan');
		$this->db->where('id_periksa',$where);
		return $this->db->get()->result();
	}

	public function hapus($where){
		$this->db->delete('tb_penatalaksanaan',$where);
	}
	
}