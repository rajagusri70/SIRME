<?php 

class AdminModel extends CI_Model{
	// function tampilkanNama(){
	// 	$session_id = $this->session->userdata('nama');
	//  	//$where = array('username' => $session_id);

	// 	$this->db->select('nama');
	// 	$this->db->from('admin');
	// 	$this->db->where('username',$session_id);
	// 	//$result = 
	// 	return $this->db->get()->result();
		
		//$nama = $result['nama'];
		//return $nama;
		//return $this->db->get()->result();
		//$this->db->get_where('admin',$where)->result();
		//return "Raja Dwika Gusri";
	

	function tampilkan(){
		$session_id = $this->session->userdata('nama');

		$where = array(
			'username' => $session_id);
			return $this->db->get_where("admin",$where)->result();
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}