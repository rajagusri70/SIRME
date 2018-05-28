<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KeluhanModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambah($data){
		$this->db->insert('tb_keluhan', $data);
	}

	public function view($where){
		$this->db->select('*');
		$this->db->from('tb_keluhan');
		$this->db->where('id_periksa',$where);
		return $this->db->get()->result();
	}

	public function hapus($where){
		$this->db->delete('tb_keluhan',$where);
	}
	
}