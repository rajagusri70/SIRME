<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('PasienModel');
		$this->load->model('AdminModel');

	}
	
	public function index(){
		$users['users'] = $this->AdminModel->tampilkan();
		$this->load->view('pasien/cari_pasien',$users);
	}
	
	public function daftar(){
		// $session_id = $this->session->userdata('nama');
		// $where = array(
		// 	'username' => $session_id);
		// $x['users'] = $this->AdminModel->tampilkan($where);
		$users['users'] = $this->AdminModel->tampilkan();
		$data = array();
		$this->load->view('pasien/form_daftar',$users);
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			$upload = $this->PasienModel->upload();
			if($upload['result'] == "success"){
				$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
				redirect('pasien/daftar');
			}else{
				//$data['message'] = $upload['error'];
				$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
				redirect('pasien/daftar');
			}
		}
	}

	public function cari(){
		$cari_input = $this->input->post('cari_input');
		$data['users'] = $this->AdminModel->tampilkan();
		if(!empty($cari_input)){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->PasienModel->cari();
			$this->load->view('pasien/cari_pasien',$data);
		}else{
			$this->load->view('pasien/cari_pasien',$data);
		}
	}

	public function pasien_lama(){
		$users['users'] = $this->AdminModel->tampilkan();
		$this->load->view('pasien/pasien_lama',$users);
	}

	public function daftar_pasien_lama(){
		$parameter = $this->input->post('parameter_input');
		$data['users'] = $this->AdminModel->tampilkan();
		if($parameter == 'id_pasien'){
			$data['pasien'] = $this->PasienModel->cariPasienLama('id_pasien');
			$this->load->view('pasien/pasien_lama',$data);
		}elseif ($parameter == 'nama_pasien') {
			$data['pasien'] = $this->PasienModel->cariPasienLama('nama_pasien');
			$this->load->view('pasien/pasien_lama',$data);
		}elseif ($parameter == 'no_ktp'){
			$data['pasien'] = $this->PasienModel->cariPasienLama('no_ktp');
			$this->load->view('pasien/pasien_lama',$data);
		}elseif ($parameter == 'no_kk') {
			$data['pasien'] = $this->PasienModel->cariPasienLama('no_kk');
			$this->load->view('pasien/pasien_lama',$data);
		}else{
			$this->load->view('pasien/pasien_lama',$data);
		}
	}
}
