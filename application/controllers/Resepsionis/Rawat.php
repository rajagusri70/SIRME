<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rawat extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('RawatModel');
		$this->load->model('AdminModel');
	}

	public function index(){
		
	}

	public function status(){
		$users['users'] = $this->AdminModel->tampilkan();
		$this->load->view('resepsionis/status_rawat',$users);
	}

	public function status_rawat(){
		$data['users'] = $this->AdminModel->tampilkan();
		$poliklinik = $this->input->post('input_poliklinik');
		$where = array(
			'rawat_jalan.poliklinik' => $poliklinik, 
		);
		if($poliklinik == "Poli Umum"){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->RawatModel->cariStatus('rawat_jalan','rawat_jalan.poliklinik',$poliklinik);
	  		$this->load->view('resepsionis/status_rawat',$data);
		}else if($poliklinik == "Poli Mata"){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->RawatModel->cariStatus('rawat_jalan','rawat_jalan.poliklinik',$poliklinik);
	  		$this->load->view('resepsionis/status_rawat',$data);
		}

		else{
			$this->load->view('resepsionis/status_rawat',$data);
		}
	 	// if($this->input->post('input_poli')){
	 	// 	if($poliklinik == "Poli Umum"){
	 	// 		$data['pasien'] = $this->PasienModel->cariStatus();
	 	// 		$this->load->view('pasien/status_rawat',$data);
	 	// 	}
	 	// }
	}

	
}