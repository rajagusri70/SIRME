<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasir extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('RawatModel');
		$this->load->model('UserModel');
		$this->load->model('TransaksiModel');
	}

	public function index(){
		
	}

	public function transaksi(){
		$data['users'] = $this->UserModel->tampilkan();
		$data['data_trx'] = $this->TransaksiModel->viewAllTrx();
		$this->load->view('resepsionis/kasir',$data);
	}

	public function detail($id_rawat){
		$id_transaksi = '';
		$where = array('no_rawat_jalan' => $id_rawat, );
		$transaksi = $this->TransaksiModel->viewTrx($where);
		foreach ($transaksi as $trx) {
			$id_transaksi = $trx->id_transaksi;
		}

		$pendaftaran = array('jenis_transaksi' => 'Pendaftaran','tb_transaksi.id_transaksi' => $id_transaksi, );
		$pemeriksaan = array('jenis_transaksi' => 'Pemeriksaan','tb_transaksi.id_transaksi' => $id_transaksi, );
		$pengobatan = array('jenis_transaksi' => 'Pembelian Obat','tb_transaksi.id_transaksi' => $id_transaksi, );

		$data['pendaftaran'] = $this->TransaksiModel->viewTrxItem($pendaftaran);
		$data['pemeriksaan'] = $this->TransaksiModel->viewTrxItem($pemeriksaan);
		$data['data_trx'] = $this->TransaksiModel->viewAllTrxWhere('tb_transaksi.no_rawat_jalan',$id_rawat);
		
		$data['sumBiaya'] = $this->TransaksiModel->sumBiaya($id_transaksi);
		$data['id_rawat'] = $id_rawat;
		$this->load->view('resepsionis/transaksi',$data);
	}

	public function updateBayar($id_rawat){
		$status = 'Lunas';
		$where = array(
			'no_rawat_jalan' => $id_rawat, 
		);
		$id_transaksi = $this->TransaksiModel->viewTrx($where);
		foreach ($id_transaksi as $it) {
			$status_data = array(
				'status' => $status, 
			);
			$where_data = array('id_transaksi' => $it->id_transaksi, );
			$this->TransaksiModel->updateTrx($where_data,$status_data);
			echo json_encode(array('status' => true));
		}
	}
}