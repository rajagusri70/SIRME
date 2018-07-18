<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		// $this->load->view('admin/login');
	}

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('status') == "login"){
		// 	$this->load->view('welcome_message');
		// }
				
		$this->load->model('AdminModel');
 
	}

	// function login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	$cek = $this->LoginModel->cek_login("admin",$where)->num_rows();
	// 	$cek_tipe = $this->LoginModel->cek_login("admin",$where);
	// 	$tipe_admin = $cek_tipe->result_array();
	// 	if($cek > 0){
	// 		$data_session = array(
	// 			'nama' => $username,
	// 			'status' => "login",
	// 			'tipe_admin' => $tipe_admin[0]['tipe_admin']
	// 			);
	// 		if($tipe_admin[0]['tipe_admin'] == 'resepsionis'){
	// 			$this->session->set_userdata($data_session);
	// 			redirect(base_url('home'));
	// 		}else{
	// 			$this->session->set_userdata($data_session);
	// 			// echo "<b>Fitur untuk Dokter/Perawat Sedang dalam tahap pengembangan</b>";
	// 			redirect(base_url('pasien'));
	// 		}
	// 	}else{
	// 		echo "Username dan password salah !";
	// 	}
	// }
	public function tambahDokter(){
		$this->load->view('admin/dokter_baru');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
