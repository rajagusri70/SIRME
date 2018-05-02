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