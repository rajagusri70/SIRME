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
		$data['data_trx'] = $this->TransaksiModel->viewAllTrx();
		$this->load->view('resepsionis/kasir',$data);
	}

	public function detail($id_rawat){
		$data['pendaftaran'] = $this->TransaksiModel->viewTrxItem('jenis_transaksi','Pendaftaran');
		$data['pemeriksaan'] = $this->TransaksiModel->viewTrxItem('jenis_transaksi','Pemeriksaan');
		$data['pengobatan'] = $this->TransaksiModel->viewTrxItem('jenis_transaksi','Pembelian Obat');
		$data['data_trx'] = $this->TransaksiModel->viewAllTrxWhere('tb_transaksi.id_rawat',$id_rawat);
		$sum = $this->TransaksiModel->viewAllTrx();
		foreach ($sum as $sum) {
			$data['sumBiaya'] = $this->TransaksiModel->sumBiaya($sum->id_transaksi);
		}
		$data['id_rawat'] = $id_rawat;
		$this->load->view('resepsionis/transaksi',$data);
	}

	public function updateBayar($id_rawat){
		$status = 'Lunas';
		$where = array(
			'id_rawat' => $id_rawat, 
		);
		$id_transaksi = $this->TransaksiModel->viewTrx($where);
		foreach ($id_transaksi as $it) {
			$status_data = array(
				'status' => $status, 
			);
			$this->TransaksiModel->updateTrx('id_transaksi',$it->id_transaksi,$status_data);
			echo json_encode(array('status' => true));
		}
	}
}