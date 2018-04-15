<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PasienModel extends CI_Model{

	public function view(){

	}

	public function upload(){
		$newname = $this->input->post('input_no_ktp');
	    $config['upload_path'] = './images/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']	= '2048';
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
		$data = array(
			"no_ktp" => $this->input->post('input_no_ktp'),
			"no_kk" => $this->input->post('input_no_kk'),
			"nama" => $this->input->post('input_nama'),
			"jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
			"tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
			"tempat_lahir" => $this->input->post('input_tempat_lahir'),
			"umur" => $this->input->post('input_umur'),
			"alamat" => $this->input->post('input_alamat'),
			"pekerjaan" => $this->input->post('input_pekerjaan'),
			"pendidikan" => $this->input->post('input_pendidikan'),
			"golongan_darah" => $this->input->post('input_golongan_darah'),
			"status_pernikahan" => $this->input->post('input_status_pernikahan'),
			"nama_orangtua" => $this->input->post('input_nama_orangtua'),
			"pekerjaan_orangtua" => $this->input->post('input_pekerjaan_orangtua'),
			"nama_suamistri" => $this->input->post('input_nama_suamistri'),
			"agama" => $this->input->post('input_agama'),
			"no_telpon" => $this->input->post('input_no_telpon'),
			"foto" => $upload['file']['file_name']
		);
		$this->db->insert('pasien', $data);
	}
}