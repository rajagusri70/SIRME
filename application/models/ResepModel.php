<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ResepModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahResep($data){
		$this->db->insert('tb_resep', $data);
	}

	public function viewResep($where,$id_rawat){
		$this->db->select('*'); //memeilih semua field
	    $this->db->from('tb_resep'); //memeilih tabel
	    $this->db->join('tb_obat', 'tb_resep.no_obat = tb_obat.no_obat');
	    $this->db->where($where,$id_rawat);
	    return $this->db->get()->result();
		// $where = array('id_rawat' => $id_rawat, );
		// return $this->db->get_where("tb_resep",$where)->result();
	}

	public function hapusResep($where){
		$this->db->delete('tb_resep',$where);
	}
}