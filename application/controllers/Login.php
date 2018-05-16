<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect(base_url("home")); //Jika user sudah Login, maka saat visit Login page, akan dialihkan ke halaman welcome
		}
		$this->load->model('AdminModel');		
		// $this->load->model('LoginModel');
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->AdminModel->cek_login("admin",$where)->num_rows();
		$cek_tipe = $this->AdminModel->cek_login("admin",$where);
		$tipe_admin = $cek_tipe->result_array();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'tipe_admin' => $tipe_admin[0]['tipe_admin']
				);
			if($tipe_admin[0]['tipe_admin'] == 'resepsionis'){
				$this->session->set_userdata($data_session);
				redirect(base_url('home'));
			}else{
				$this->session->set_userdata($data_session);
				// echo "<b>Fitur untuk Dokter/Perawat Sedang dalam tahap pengembangan</b>";
				redirect(base_url('poli_umum/check_up/pasien_terdaftar'));
			}
		}else{
			echo "Username dan password salah !";
		}
	}
}