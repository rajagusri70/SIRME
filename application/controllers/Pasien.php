<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('PasienModel'); 
	}
	
	// public function index(){
	// 	$data['siswa'] = $this->PasienModel->view();
	// 	$this->load->view('pasien/index', $data);
	// }
	
	public function daftar(){
		$data = array();
		$this->load->view('pasien/form_daftar');
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			$upload = $this->PasienModel->upload();
			if($upload['result'] == "success"){
				$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
				redirect('pasien/daftar');
			}else{
				$data['message'] = $upload['error'];
			}
		}
	}
}
