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
			$data[] = $this->;
			$this->load->view('poli_umum/check_up',$data);
	}

}
