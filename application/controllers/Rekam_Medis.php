<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekam_medis extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('RawatModel');
		$this->load->model('PasienModel');
		

		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index($no_pasien)
	{
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien_terdaftar'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		$this->load->view('pasien/profile_pasien',$data);
	}

	

	public function rekam_medis(){
		
	}

	

}
