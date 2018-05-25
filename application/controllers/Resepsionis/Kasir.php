<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasir extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('RawatModel');
		$this->load->model('AdminModel');
		$this->load->model('TransaksiModel');
	}

	public function index(){
		
	}

	public function transaksi(){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['data'] = $this->TransaksiModel->viewAllTrx();
		$this->load->view('resepsionis/kasir',$data);
	}

	public function detail($id_rawat){
		$data['pendaftaran'] = $this->TransaksiModel->viewTrxItem('jenis_transaksi','Pendaftaran');
		$data['pemeriksaan'] = $this->TransaksiModel->viewTrxItem('jenis_transaksi','Pemeriksaan');
		$data['pengobatan'] = $this->TransaksiModel->viewTrxItem('jenis_transaksi','Pembelian Obat');
		$data['data'] = $this->TransaksiModel->viewAllTrx();
		$sum = $this->TransaksiModel->viewAllTrx();
		foreach ($sum as $sum) {
			$data['sumBiaya'] = $this->TransaksiModel->sumBiaya($sum->id_transaksi);

		}
		$this->load->view('resepsionis/transaksi',$data);
		
	}
}