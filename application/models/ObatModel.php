<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ObatModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function viewObat(){
		return $this->db->get('tb_obat')->result();
	}

	public function viewWhere($where){
		$this->db->where($where);
		return $this->db->get('tb_obat')->result();
	}

	public function tambahObat($data){
		$this->db->insert('tb_obat',$data);
	}

	public function update($where,$data){
		$this->db->where($where);
		$this->db->update("tb_obat",$data);	
	}

	public function hapus($where){
		$this->db->delete('tb_obat',$where);
	}
}