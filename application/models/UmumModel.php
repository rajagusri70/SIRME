<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UmumModel extends CI_Model{

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
		$query = "INSERT IGNORE INTO `tb_poli_umum` (`id_rawat`, `user_id`, `tanggal_masuk`, `jam_masuk`) VALUES ($id_rawat, $user_id, '$tanggal_masuk', '$jam_masuk')";
		$this->db->query($query);
		//$this->db->insert('tb_poli_umum', $data);
	}

	public function viewWhere($where){
		return $this->db->get_where("tb_poli_umum",$where)->result();
	}
}