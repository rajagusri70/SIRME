<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ObatModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function viewObat(){
		return $this->db->get('tb_obat')->result();
	}
}