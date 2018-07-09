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
		$this->load->model('RM1AModel');
		$this->load->model('RM1BModel');
		$this->load->model('PeriksaModel');
		$this->load->model('KeluhanModel');
		$this->load->model('PemeriksaanModel');
		$this->load->model('DiagnosaModel');
		$this->load->model('TindakanModel');

		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index($no_pasien){
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
		$pasien = $this->PasienModel->pasienRawatJalan($id_rawat);
		foreach ($pasien as $p) {
			$no_pasien = $p->no_pasien;
		}
		$data['pasien'] = $this->PasienModel->pasienRawatJalan($id_rawat);
		$data['rawat_jalan'] = $this->RawatModel->viewWhere('id_rawat',$id_rawat);
		$where_rawat_jalan = array(
			'id_rawat' => $id_rawat, 
		);
		$periksa = $this->PeriksaModel->viewWhere($where_rawat_jalan); //get id_periksa
		foreach ($periksa as $prks) {
			$id_periksa = $prks->id_periksa;
			$user_id = $prks->user_id;
		}
		$data['rm1a'] = $this->RM1AModel->tampilkan($id_periksa);
		$data['rm1b'] = $this->RM1BModel->tampilkan($id_periksa);
		$data['riwayat_penyakit'] = $this->RiwayatPenyakitModel->viewRiwayatPenyakit($no_pasien);
		$data['riwayat_alergi'] = $this->RiwayatAlergiModel->viewRiwayat($no_pasien);
		$data['keluhan'] = $this->KeluhanModel->view($id_periksa);
		$data['pemeriksaan'] = $this->PemeriksaanModel->view($id_periksa);
		$data['diagnosa'] = $this->DiagnosaModel->view($id_periksa);
		$data['tindakan'] = $this->TindakanModel->view($id_periksa);
		$data['dokter_pemeriksa'] = $this->AdminModel->view($user_id);
		$this->load->view('pasien/rawat_jalan',$data);
	}
}
