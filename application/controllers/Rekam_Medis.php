<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekam_medis extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('RawatModel');
		$this->load->model('PasienModel');
		$this->load->model('RiwayatPenyakitModel');
		$this->load->model('RiwayatAlergiModel');
		$this->load->model('RiwayatHamilModel');
		$this->load->model('ResepModel');

		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index($no_pasien)
	{
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien_terdaftar'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);

		$this->load->view('pasien/profile_pasien',$data);
	}

	public function pasien($no_pasien){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien_terdaftar'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		$data['data_rawat'] = $this->RawatModel->viewWhere('no_pasien',$no_pasien);
		$data['riwayat_penyakit'] = $this->RiwayatPenyakitModel->viewRiwayatPenyakit($no_pasien);
		$data['riwayat_alergi'] = $this->RiwayatAlergiModel->viewRiwayat($no_pasien);
		$data['riwayat_kehamilan'] = $this->RiwayatHamilModel->view($no_pasien);
		$data['resep_obat'] = $this->ResepModel->viewResepPasien($no_pasien);
		$this->load->view('pasien/profile_pasien',$data);
	}

	public function rawat_jalan($id_rawat){
		$this->load->view('pasien/rawat_jalan');
	}
}
