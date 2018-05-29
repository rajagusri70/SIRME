<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ItemTransaksiModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahItem($data){
		$this->db->insert('tb_item_transaksi', $data);
	}
}