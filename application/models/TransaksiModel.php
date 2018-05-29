<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

    public function tambahTransaksi(){
    	$query = "INSERT IGNORE INTO `tb_transaksi` (`id_rawat`, `tanggal_transaksi`, `jam_transaksi`, `status`) VALUES ('$id_rawat', '$tanggal_transaksi', '$jam_transaksi', '$status')";
		$this->db->query($query);
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

	public function viewAllTrx(){
		$this->db->distinct();
		$this->db->select('tb_transaksi.id_transaksi, rawat_jalan.id_rawat, nama, tanggal_transaksi, jam_transaksi, tb_transaksi.status'); 
	    $this->db->from('tb_transaksi');
	    $this->db->join('rawat_jalan', 'tb_transaksi.id_rawat = rawat_jalan.id_rawat');
	    $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	    return $this->db->get()->result();
	}

	public function viewAllTrxWhere($where,$where_parameter){
		$this->db->distinct();
		$this->db->select('tb_transaksi.id_transaksi, rawat_jalan.no_pasien, tb_transaksi.id_rawat, nama, tanggal_transaksi, jam_transaksi, tb_transaksi.status'); //memeilih semua field
	    $this->db->from('tb_transaksi');
	    $this->db->join('rawat_jalan', 'tb_transaksi.id_rawat = rawat_jalan.id_rawat');
	    $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	    $this->db->where($where,$where_parameter);
	    return $this->db->get()->result();
	}

	

	public function viewTrxItem($where){
		$this->db->distinct();
		$this->db->select('nama_transaksi,jumlah,harga,tb_item_transaksi.biaya'); //memeilih semua field
	    $this->db->from('tb_item_transaksi');
	    $this->db->join('tb_transaksi', 'tb_item_transaksi.id_transaksi = tb_transaksi.id_transaksi');
	    $this->db->join('rawat_jalan', 'tb_transaksi.id_rawat = rawat_jalan.id_rawat');
	    $this->db->where($where);
	    return $this->db->get()->result();
	}

	public function sumBiaya($id_transaksi){
		$this->db->select_sum('biaya');
		$this->db->from('tb_item_transaksi');
		$this->db->where('id_transaksi',$id_transaksi);
		return $this->db->get()->result();
	}

	public function updateTrx($coloumn,$where,$data){
		$this->db->where($coloumn,$where);
		$this->db->update("tb_transaksi",$data);
	}

}