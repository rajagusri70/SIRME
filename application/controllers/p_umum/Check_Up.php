<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_Up extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('RawatModel');
 
	}

	public function index()
	{
		// $this->load->view('admin/login');
	}

	public function pasien_terdaftar(){
		$where = array(
			'rawat_jalan.status' => 'Menunggu' ,
			'rawat_jalan.stsatus' => 'Dalam Pemeriksaan'
		);
		$data['users'] = $this->AdminModel->tampilkan();
		$data['rawat_jalan'] = $this->RawatModel->tampilkanRawat('rawat_jalan',$where);
		$this->load->view('poli_umum/pasien_terdaftar',$data);
	}

	public function periksa($id_rawat){
			
			$data['users'] = $this->AdminModel->tampilkan();
			$data['pasien_terdaftar'] = $this->RawatModel->cariStatus('rawat_jalan','id_rawat',$id_rawat);
			$this->load->view('poli_umum/check_up',$data);
	}

	public function viewDiagnosa($id_rawat){
		$data = $this->RawatModel->viewDiagnosa($id_rawat);
		echo json_encode($data);
	}

	public function hapusDiagnosa(){
		$id_diagnosa = $this->input->post('id_diagnosa');
		$where = array('id_diagnosa' => $id_diagnosa);
		$this->RawatModel->hapusDiagnosa($where);
		echo json_encode(array('status' => true));
	}

	public function simpan(){
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");
		$data = array(
			'id_rawat' => $this->input->post('no_rawat'),
			'tanggal_cek' => $tanggal,
			'jam_cek' => $waktu,
			'periksa' => $this->input->post('periksa'),
			'kode_penyakit' => $this->input->post('kode'),
			'diagnosa' => $this->input->post('keterangan'),
			'tindakan' => $this->input->post('tindakan'),
			'biaya' => ''
		);
		$this->RawatModel->simpan($data);
		echo json_encode(array('status' => true));
	}

	public function test(){
		$this->load->view('test');
	}


}
