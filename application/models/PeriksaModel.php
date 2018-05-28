<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeriksaModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

    public function view(){

    }

	public function tambah($data){
		$id_rawat = $data['id_rawat'];
		$user_id = $data['user_id'];
		$tanggal_masuk = $data['tanggal_masuk'];
		$jam_masuk = $data['jam_masuk'];
		$query = "INSERT IGNORE INTO `tb_periksa` (`id_rawat`, `user_id`, `tanggal_masuk`, `jam_masuk`) VALUES ($id_rawat, $user_id, '$tanggal_masuk', '$jam_masuk')";
		$this->db->query($query);
		//$this->db->insert('tb_poli_umum', $data);
	}

	public function viewWhere($where){
		return $this->db->get_where("tb_periksa",$where)->result();
	}

	public function updateKeluar($where,$data){
		$this->db->where("id_periksa",$where);
		$this->db->update("tb_periksa",$data);
	}

}