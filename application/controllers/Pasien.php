<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin"));
		}
		$this->load->model('PasienModel'); 
	}
	
	public function index(){
		$this->load->view('pasien/daftar_pasien');
	}
	
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
