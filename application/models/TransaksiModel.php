<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahTrx($data){
		$id_rawat = $data['id_rawat'];
		$tanggal_transaksi = $data['tanggal_transaksi'];
		$jam_transaksi = $data['jam_transaksi'];
		$status = $data['status'];
		$query = "INSERT IGNORE INTO `tb_transaksi` (`id_rawat`, `tanggal_transaksi`, `jam_transaksi`, `status`) VALUES ('$id_rawat', '$tanggal_transaksi', '$jam_transaksi', '$status')";
		$this->db->query($query);
		//$this->db->insert('tb_transaksi', $data);
	}

	public function viewTrx($where){
		return $this->db->get_where('tb_transaksi',$where)->result();
	}
}