<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('RawatModel');
		$this->load->model('AdminModel');
		$this->load->model('TransaksiModel');
		$this->load->model('PasienModel');
	}

	public function index(){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien_hari_ini'] = $this->PasienModel->pasienBaruHariIni();
		$this->load->view('resepsionis/home',$data);
	}
}