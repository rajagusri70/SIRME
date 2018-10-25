<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ImagingModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function insertStudy($data){
		$this->db->insert('tb_study', $data);
	}

	public function insertSeries($data){
		$this->db->insert('tb_series', $data);
	}

	public function insertInstance($data){
		$this->db->insert('tb_instance', $data);
	}

	public function view(){
		$this->db->select('*');
		$this->db->from('tb_study');
		$this->db->join('tb_series','tb_study.pk = tb_series.fk_study');
		$this->db->join('tb_instance','tb_series.pk = tb_instance.fk_series');
		return $this->db->get()->result();
	}

	public function selectWhere($where){
		$this->db->select('*');
		$this->db->from('tb_fhir_url');
		$this->db->where($where);
		return $this->db->get();
	}

	public function delete($where){
		$this->db->delete('tb_fhir_url',$where);
	}
	
}