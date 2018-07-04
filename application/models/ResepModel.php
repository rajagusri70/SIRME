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

	public function updateResep($where,$data){
		$this->db->where("no_id",$where);
		$this->db->update("tb_resep",$data);
	}

	public function viewResepPasien($no_pasien){
		$this->db->select('tb_obat.nama_obat,tb_obat.jenis,tb_obat.kategori,tb_resep.id_periksa,tb_resep.no_obat,tb_resep.kuantitas,tb_resep.keterangan,tb_periksa.tanggal_masuk'); //memeilih semua field
	    $this->db->from('tb_resep'); //memeilih tabel
	    $this->db->join('tb_periksa','tb_resep.id_periksa = tb_periksa.id_periksa');
	    $this->db->join('rawat_jalan','tb_periksa.id_rawat = rawat_jalan.id_rawat');
	    $this->db->join('pasien','rawat_jalan.no_pasien = pasien.no_pasien');
	    $this->db->join('tb_obat', 'tb_resep.no_obat = tb_obat.no_obat');
	    $this->db->where('pasien.no_pasien',$no_pasien);
	    return $this->db->get()->result();
	}
	
}