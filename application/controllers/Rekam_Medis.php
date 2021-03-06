<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekam_medis extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('RawatModel');
		$this->load->model('PasienModel');
		$this->load->model('RiwayatPenyakitModel');
		$this->load->model('RiwayatAlergiModel');
		$this->load->model('PenatalaksanaanModel');
		$this->load->model('ItemResepModel');
		$this->load->model('ResepModel');
		$this->load->model('ObservationModel');
		$this->load->model('RM1BModel');
		$this->load->model('PeriksaModel');
		$this->load->model('KeluhanModel');
		$this->load->model('PemeriksaanModel');
		$this->load->model('DiagnosisModel');
		$this->load->model('TindakanModel');
		$this->load->model('UrlModel');
		$this->load->model('ImagingModel');

		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index($no_pasien){
		$data['users'] = $this->UserModel->tampilkan();
		$data['pasien_terdaftar'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);

		$this->load->view('pasien/profile_pasien',$data);
	}

	public function pasien($no_pasien){
		$data['users'] = $this->UserModel->tampilkan();
		$data['patient'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		$data['encounter'] = $this->RawatModel->viewWhere(array('no_pasien' => $no_pasien, ));
		$data['observation'] = $this->ObservationModel->viewObservation(array('no_pasien' => $no_pasien, ));
		$data['condition'] = $this->DiagnosisModel->view(array('no_pasien' => $no_pasien, ));
		$data['imagingstudy'] = $this->ImagingModel->selectStudy(array('no_pasien' => $no_pasien, ));
		$data['pasien_terdaftar'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		$data['diagnosis'] = $this->DiagnosisModel->view(array('no_pasien' => $no_pasien, ));
		$data['data_rawat'] = $this->RawatModel->viewWhere(array('no_pasien' => $no_pasien, ));
		$data['riwayat_penyakit'] = $this->RiwayatPenyakitModel->viewRiwayatPenyakit($no_pasien);
		$data['riwayat_alergi'] = $this->RiwayatAlergiModel->viewRiwayat(array('no_pasien' => $no_pasien, ));
		$where = array('pasien.no_pasien' => $no_pasien, );
		$data['resep_obat'] = $this->ItemResepModel->viewAll($where);
		$data['server'] = $this->UrlModel->view();
		$data['no_pasien'] = $no_pasien;
		$pasien = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		foreach ($pasien as $p) {
			$tanggal_lahir  = $p->tanggal_lahir;
		}
		$tahun = date("Y");
		$tahun_lahir = substr($tanggal_lahir, -4);
		$umur = $tahun - $tahun_lahir;
		$data['umur'] = $umur;
		$data['imagingall'] = $this->ImagingModel->view(array('no_pasien' => $no_pasien, ));
		$this->load->view('pasien/profile_pasien',$data);
	}

	public function rawat_jalan($id_rawat){
		$pasien = $this->PasienModel->pasienRawatJalan($id_rawat);
		foreach ($pasien as $p) {
			$no_pasien = $p->no_pasien;
		}
		$data['pasien'] = $this->PasienModel->pasienRawatJalan($id_rawat);
		$data['id_rawat'] = $id_rawat;
		$data['rawat_jalan'] = $this->RawatModel->viewWhere(array('id_rawat' => $id_rawat ));
		$data['observation'] = $this->ObservationModel->viewObservation(array('no_rawat_jalan' => $id_rawat, ));
		$data['riwayat_penyakit'] = $this->RiwayatPenyakitModel->viewRiwayatPenyakit(array('no_rawat_jalan' => $id_rawat, ));
		$data['keluhan_utama'] = $this->KeluhanModel->view(array('no_rawat_jalan' => $id_rawat, 'jenis_keluhan' => 'Keluhan Utama'));
		$data['keluhan_tambahan'] = $this->KeluhanModel->view(array('no_rawat_jalan' => $id_rawat, 'jenis_keluhan' => 'Keluhan Tambahan'));
		$data['pemeriksaan_fisik'] = $this->PemeriksaanModel->viewWhere(array('no_rawat_jalan' => $id_rawat,));
		$data['diagnosis'] = $this->DiagnosisModel->view(array('no_rawat_jalan' => $id_rawat, ));
		$data['rencana_penatalaksanaan'] = $this->PenatalaksanaanModel->view(array('no_rawat_jalan' => $id_rawat, ));

		$dokter_pemeriksa = $this->RawatModel->viewWhere(array('id_rawat' => $id_rawat, )); //get id_periksa
		foreach ($dokter_pemeriksa as $dp) {
			$user_id = $dp->dokter;
		}

		
		// $data['riwayat_penyakit'] = $this->RiwayatPenyakitModel->viewRiwayatPenyakit($no_pasien);
		// $data['riwayat_alergi'] = $this->RiwayatAlergiModel->viewRiwayat($no_pasien);
		// $data['keluhan'] = $this->KeluhanModel->view($id_periksa);
		// $data['pemeriksaan'] = $this->PemeriksaanModel->view($id_periksa);
		// $data['diagnosa'] = $this->DiagnosaModel->view($id_periksa);
		// $data['tindakan'] = $this->TindakanModel->view($id_periksa);
		$data['dokter_pemeriksa'] = $this->UserModel->view($user_id);
		$this->load->view('pasien/rawat_jalan',$data);
	}


	public function image(){
		$server = $_GET['server'];
		$endpoint = $_GET['endpoint'];
		#get  server address
		$serverData = $this->UrlModel->selectWhere(array('pk' => $server, ))->result();
		foreach ($serverData as $sd) {
			$url = $sd->url.'/Endpoint/'.$endpoint;
		}

		$content = @file_get_contents($url); 
		$json = json_decode($content);

		#get endpoint address from API
		if($content){
			$endpointAddress = $json->address;
			$objectUID = $_GET['objectUID'];
			$data['objectUID'] = $objectUID;
			$data['endpointAddress'] = $endpointAddress.'/wado?requestType=wado&studyUID=&seriesUID=&objectUID=';
		}else{
			$data['objectUID'] ="";
			$data['endpointAddress'] = '';
		}
		$this->load->view('pasien/imaging',$data);		
	}
}
