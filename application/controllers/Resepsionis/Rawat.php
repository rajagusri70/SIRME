<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rawat extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('PasienModel');
		$this->load->model('AdminModel');
	}

	public function index(){
		
	}

	public function diagnosa(){
		// $tipe_admin = $this->session->userdata("tipe_admin");
		// if($tipe_admin == "dokter"){
			$users['users'] = $this->AdminModel->tampilkan();
			$this->load->view('poli_umum/check_up',$users);
		// }else{
		// 	echo "no authority";
		// }
	}
}