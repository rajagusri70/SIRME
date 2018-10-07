<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('RawatModel');
		$this->load->model('UserModel');
		$this->load->model('TransaksiModel');
		$this->load->model('PasienModel');
		$this->load->model('RawatModel');
	}

	public function index(){
		$data['users'] = $this->UserModel->tampilkan();
		$data['pasien_hari_ini'] = $this->PasienModel->pasienBaruHariIni();
		$data['rawat_hari_ini'] = $this->RawatModel->hariIni();
		$data['antrian'] = $this->RawatModel->antrian();
		$data['selesai'] = $this->RawatModel->selesai();
		$this->load->view('resepsionis/home',$data);
	}
}