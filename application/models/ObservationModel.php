<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ObservationModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function tambahObservation($data){
		$this->db->insert('tb_observation', $data);
	}

	public function viewObservation($where){
		$this->db->select('*');
		$this->db->from('tb_observation');
		$this->db->where('no_rawat_jalan',$where);
		return $this->db->get()->result();
	}

	public function hapusObservation($where){
		$this->db->delete('tb_observation',$where);
	}
	
}