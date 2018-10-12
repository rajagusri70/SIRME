<?php 

class UserModel extends CI_Model{
	// function tampilkanNama(){
	// 	$session_id = $this->session->userdata('nama');
	//  	//$where = array('username' => $session_id);

	// 	$this->db->select('nama');
	// 	$this->db->from('user');
	// 	$this->db->where('username',$session_id);
	// 	//$result = 
	// 	return $this->db->get()->result();
		
		//$nama = $result['nama'];
		//return $nama;
		//return $this->db->get()->result();
		//$this->db->get_where('user',$where)->result();
		//return "Raja Dwika Gusri";
	
	public function selectAll(){
		return $this->db->get('user')->result();
	}

	public function selectNot(){
		$username = $this->session->userdata('nama');
		//return $this->db->query($querry)->result();
		return $this->db->query('SELECT * FROM user WHERE NOT (username = "'.$username.'")')->result();
	}

	function selectWhere($user_id){
		$this->db->where('user_id', $user_id);
		return $this->db->get('user')->result();
	}

	function selectWheres($where){
		$this->db->where($where);
		return $this->db->get('user')->result();
	}

	function update($user_id,$data){
		$this->db->where("user_id",$user_id);
		$this->db->update("user",$data);
	}

	function cek_user_id($no_ktp,$nama){
		$this->db->where('no_ktp', $no_ktp);
		$this->db->or_where('nama', $nama);		
		// $this->db->where('no_ktp', $no_ktp);
  //   	$this->db->or_like('nama', $nama);
    	return $this->db->get('pasien');
	}

	function tampilkan(){
		$session_id = $this->session->userdata('nama');

		$where = array(
			'username' => $session_id);
		return $this->db->get_where("user",$where)->result();
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function view($user_id){
		$where = array(
			'user_id' => $user_id);
		return $this->db->get_where("user",$where)->result();
	}

	public function upload(){
		$newname = $this->input->post('input_user_id');
	    $config['upload_path'] = './images/admin/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']	= '5048';
	    $config['remove_space'] = TRUE;
	    $config['file_name'] = $newname; 
  
    	$this->load->library('upload', $config); // Load konfigurasi uploadnya
    	if ( $this->upload->do_upload('input_foto')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      		return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      		return $return;
		}
    }

    public function input($upload){
		
		$tanggal = date("d-m-Y");
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
			"jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
			"alamat" => $this->input->post('input_alamat'),
			"kota" => $this->input->post('input_kota'),
			"no_hp" => $this->input->post('input_no_hp'),
			"email" => $this->input->post('input_email'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password'),
			"tipe_admin" => $this->input->post('input_jabatan'),
			"foto" => $upload['file']['file_name']
		);
		$this->db->insert('user', $data);
	}

	public function getJabatan(){
		return $this->db->get('tb_jabatan')->result();
	}

	public function hapus($where){
		$this->db->delete('user',$where);
	}

	public function dokter($where,$like){
		$this->db->where($where);
		$this->db->like($like);
		return $this->db->get('user')->result();
	}
	
}