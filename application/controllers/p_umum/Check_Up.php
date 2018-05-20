<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_Up extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('RawatModel');
		$this->load->model('ObatModel');
		$this->load->model('ResepModel');
		$this->load->model('UmumModel');
		$this->load->model('TransaksiModel');
		$this->load->model('PoliklinikModel');
		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index()
	{
		echo "Forbiden Acces";
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
		$users = $this->AdminModel->tampilkan();
		$tanggal = date("d-m-Y");
        $waktu = date("H:i:s");
		foreach ($users as $user) {
			$data = array(
			'id_rawat' => $id_rawat,
			'user_id' => $user->user_id,
			'tanggal_masuk' => $tanggal,
			'jam_masuk' => $waktu
			);
			$this->UmumModel->tambah($data);
		}
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien_terdaftar'] = $this->RawatModel->cariStatus('tb_poli_umum','rawat_jalan.id_rawat',$id_rawat);
		//$data['id_rawat'] = $id_rawat;
		//$data['jumlah_resep'] = $this->RawatModel->count($id_rawat);

		# Menambahkan item di transaksi
		// $where = array(
		// 	'nama_poli' => 'Poliklinik Umum', 
		// );
		// $poli = $this->PoliklinikModel->viewPoliWhere($where);
		// foreach ($poli as $p) {
		// 	$transaksi = array(
		// 		'id_rawat' => $id_rawat,
		// 		'nama_transaksi' => 'Pendaftaran dan Pemeriksaan',
		// 		'jenis_transaksi' => 'Pendaftaran',
		// 		'biaya' => $p->biaya_pendaftaran 
		// 	);
		// 	$this->TransaksiModel->tambahTrx($transaksi);			
		// }
		//$biaya = $poli['biaya_pendaftaran'];
		$data['id_rawat'] = $id_rawat;
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
			'id_poli_umum' => $this->input->post('id_poli_umum'),
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

	public function resep($id_poli_umum){
		$data['daftar_obat'] = $this->ObatModel->viewObat();
		$data['id_poli_umum'] = $id_poli_umum;
		$this->load->view('poli_umum/daftar_obat',$data);
	}

	public function tambahResep(){
		$data = array(
			'no_obat' => $this->input->post('no_obat'),
			'id_poli_umum' => $this->input->post('id_poli_umum')
		);
		$this->ResepModel->tambahResep($data);
		echo json_encode(array('status' => true));
	}

	public function viewResep($id_poli_umum){
		$data = $this->ResepModel->viewResep('tb_resep.id_poli_umum',$id_poli_umum);
		echo json_encode($data);
	}

	public function hapusResep(){
		$no_id = $this->input->post('no_id');
		$where = array('no_id' => $no_id);
		$this->ResepModel->hapusResep($where);
		echo json_encode(array('status' => true));
	}

	public function updateResep(){
		$no_id = $this->input->post('no_id');
		$data = array(
			'kuantitas' => $this->input->post('kuantitas'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->ResepModel->updateResep($no_id,$data);
		echo json_encode(array('status' => true));
	}

	// public function viewObat(){
	// 	$data = $this->ObatModel->viewObat();
	// 	echo json_encode($data);
	// }

	public function selesai($id_rawat){
		$data = array(
			'status' => 'Selesai', 
		);
		$this->RawatModel->updateStatus($id_rawat, $data);

		// menambahkan Pendaftaran ke transaksi
		$where_poli = array(
			'nama_poli' => 'Poliklinik Umum', 
		);
		$poli = $this->PoliklinikModel->viewPoliWhere($where_poli);
		foreach ($poli as $p) {
			$transaksi = array(
				'id_rawat' => $id_rawat,
				'nama_transaksi' => $p->nama_poli,
				'jenis_transaksi' => 'Pendaftaran',
				'biaya' => $p->biaya_pendaftaran 
			);
			$this->TransaksiModel->tambahTrx($transaksi);			
		}

		// $datatrx = array(
		// 	'id_rawat' => $id_rawat,
		// 	'jenis' => 'Pendaftaran',
		// 	'nama_transaksi' => 'Pendaftaran dan Pemeriksaan', 
		// );
		//$this->TransaksiModel->tambahTrx($data);

		//menambahkan resep obat ke Transaksi
		$where_umum = array(
			'id_rawat' => $id_rawat, 
		);
		$poli_umum = $this->UmumModel->viewWhere($where_umum);
		foreach ($poli_umum as $pu) {
			$id_poli_umum = $pu->id_poli_umum;
			$resep_obat = $this->ResepModel->viewResep('tb_resep.id_poli_umum',$id_poli_umum);
			foreach ($resep_obat as $ro) {
				$data = array(
					'id_rawat' => $id_rawat,
					'jenis_transaksi' => 'Pembelian Obat',
					'nama_transaksi' => $ro->nama_obat,
					'biaya' => $ro->harga,
				);
				$this->TransaksiModel->tambahTrx($data);
			}
		}



		# Menambahkan item di transaksi
		// $where = array(
		// 	'nama_poli' => 'Poliklinik Umum', 
		// );
		// $poli = $this->PoliklinikModel->viewPoliWhere($where);
		// foreach ($poli as $p) {
		// 	$transaksi = array(
		// 		'id_rawat' => $id_rawat,
		// 		'nama_transaksi' => 'Pendaftaran dan Pemeriksaan',
		// 		'jenis_transaksi' => 'Pendaftaran',
		// 		'biaya' => $p->biaya_pendaftaran 
		// 	);
		// 	$this->TransaksiModel->tambahTrx($transaksi);			
		// }
		//$biaya = $poli['biaya_pendaftaran'];
	echo json_encode(array('status' => true));
	}

	public function test(){
		$this->load->view('test');
	}


}
