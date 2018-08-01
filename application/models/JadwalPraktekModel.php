<?php 

class JadwalPraktekModel extends CI_Model{

	

	function selectWheres($where){
		$this->db->where($where);
		return $this->db->get('admin')->result();
	}

	function update($user_id,$data){
		$this->db->where("user_id",$user_id);
		$this->db->update("tb_jadwal_praktek",$data);
	}
	
}