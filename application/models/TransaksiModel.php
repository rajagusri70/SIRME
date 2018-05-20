<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahTrx($data){
		$this->db->insert('tb_transaksi', $data);
	}
}