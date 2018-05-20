<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PoliklinikModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function viewPoli(){
		return $this->db->get('tb_poliklinik')->result_array();
	}

	public function viewPoliWhere($where){
		return $this->db->get_where('tb_poliklinik',$where)->result();
	}
}