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
		$this->load->model('ItemTransaksiModel');
		$this->load->model('RM1AModel');
		$this->load->model('RM1BModel');
		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index()
	{
		echo "Forbidden Acces";
		// $this->load->view('admin/login');
	}

	public function pasien_terdaftar(){
		
		$data['users'] = $this->AdminModel->tampilkan();
		$data['rawat_jalan'] = $this->RawatModel->tampilkanRawat('rawat_jalan');
		$this->load->view('poli_umum/pasien_terdaftar',$data);
	}

	public function status_selesai(){
		$where = array(
			'rawat_jalan.status' => 'Selesai' 
		);
		$data['users'] = $this->AdminModel->tampilkan();
		$data['rawat_jalan'] = $this->RawatModel->tampilkanSelesai('rawat_jalan');
		$this->load->view('poli_umum/status_selesai',$data);
	}

	public function periksa($id_rawat){

		$status_where = array('id_rawat' => $id_rawat, );
		$get_status = $this->RawatModel->viewStatus($status_where);

		foreach ($get_status as $status_rawat) {
			if($status_rawat->status == 'Selesai'){
				echo '<body>';
				echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';

				echo '<script type="text/javascript" >';
				echo 'swal({';
				echo '  title: "Pasien Telah Diperiksa",';
				echo '  text: "Rawat Jalan yang anda Pilih telah selesai",';
				echo '	icon: "success",';
				echo '  buttons: {';
				//echo '    cancel: "Run away!",';
				echo '    catch: {';
				echo '      text: "Oke",';
				echo '      value: "catch",';
				echo '    },';
				//echo '    defeat: true,';
				echo '  },';
				echo '})';
				echo '.then((value) => {';
				echo '  switch (value) {';				 
				echo '    case "defeat":';
				echo '      swal("Pikachu fainted! You gained 500 XP!");';
				echo '      break;';				 
				echo '    case "catch":';
				echo '      window.close();';
				echo '      break;';				 
				echo '    default:';
				echo '      swal("Got away safely!");';
				echo '  }';
				echo '});';
				echo '</script>';
				echo  '</body>';
			}else{
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
				$data = array(
					'status' => 'Dalam Pemeriksaan', 
				);
				$this->RawatModel->updateStatus($id_rawat, $data);
				$data['users'] = $this->AdminModel->tampilkan();
				$data['pasien_terdaftar'] = $this->RawatModel->cariStatus('tb_poli_umum','rawat_jalan.id_rawat',$id_rawat);
				$data['id_rawat'] = $id_rawat;

				#cek apakah data di tabel rm1a dan rm1b eksis
				$data['rm1a'] = $this->RM1AModel->tampilkan($id_rawat);
				$data['rm1b'] = $this->RM1BModel->tampilkan($id_rawat);
				$this->load->view('poli_umum/check_up',$data);
			}
		}
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

	public function simpanRm1a($id_rawat){
		$action = $this->input->post('actiona');
		$data = array(
			'id_rawat' => $this->input->post('id_rawat'),
			'RM1A11' => $this->input->post('RM1A11'),
			'RM1A12' => $this->input->post('RM1A12'), 
			'RM1A21' => $this->input->post('RM1A21'),
			'RM1A22' => $this->input->post('RM1A22'),
			'RM1A23' => $this->input->post('RM1A23'),
			'RM1A24' => $this->input->post('RM1A24'),
			'RM1A25' => $this->input->post('RM1A25'),
			'RM1A26' => $this->input->post('RM1A26'),
			'RM1A27' => $this->input->post('RM1A27'),
			'RM1A28' => $this->input->post('RM1A28'),
			'RM1A31' => $this->input->post('RM1A31'),
			'RM1A32' => $this->input->post('RM1A32'),
			'RM1A33' => $this->input->post('RM1A33'),
			'RM1A34' => $this->input->post('RM1A34'),
		);
		if($action == "Kirim"){
			$this->RM1AModel->tambahAsesmen($data);
		}else{
			$this->RM1AModel->updateAsesmen($id_rawat,$data);
		}
		echo json_encode(array('status' => true));
	}

	public function simpanRm1b($id_rawat){
		$action = $this->input->post('actionb');
		$data = array(
			'id_rawat' => $this->input->post('id_rawat'),
			'RM1B11' => $this->input->post('RM1B11'),
			'RM1B21' => $this->input->post('RM1B21'), 
			'RM1B22' => $this->input->post('RM1B22'),
			'RM1B23' => $this->input->post('RM1B23'),
			'RM1B31' => $this->input->post('RM1B31'),
			'RM1B32' => $this->input->post('RM1B32'),
			'RM1B33' => $this->input->post('RM1B33'),
			'RM1B34' => $this->input->post('RM1B34'),
			'RM1B35' => $this->input->post('RM1B35'),
			'RM1B36' => $this->input->post('RM1B36'),
			'RM1B37' => $this->input->post('RM1B37'),
		);
		if($action == "Kirim"){
			$this->RM1BModel->tambahAsesmen($data);
			echo json_encode(array('status' => true));
		}else{
			$this->RM1BModel->updateAsesmen($id_rawat,$data);
			echo json_encode(array('status' => true));
		}
		
	}

	public function selesai($id_rawat){
		#update Status rawat jalan pasien
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");
		$data = array(
			'status' => 'Selesai', 
		);
		$this->RawatModel->updateStatus($id_rawat, $data);

		#menambahkan Transaksi baru
		
	    $status = 'Belum Lunas';
	    $trxData = array(
	      'id_rawat' => $id_rawat,
	      'tanggal_transaksi' => $tanggal,
	      'jam_transaksi' => $waktu,
	      'status' => $status 
	    );
	    $this->TransaksiModel->tambahTrx($trxData);

		#menambahkan item ke transaksi
	    $where_trx = array(
	    	'id_rawat' => $id_rawat, 
	    );
	    $transaksi = $this->TransaksiModel->viewTrx($where_trx);
	    foreach ($transaksi as $trx) {
	    	$where_poli = array(
					'nama_poli' => 'Poli Umum', 
				);
			$poli = $this->PoliklinikModel->viewPoliWhere($where_poli);
			foreach ($poli as $p) {
				$transaksi = array(
					'id_transaksi' => $trx->id_transaksi,
					'jenis_transaksi' => 'Pendaftaran',
					'nama_transaksi' => $p->nama_poli,
					'jumlah' => '1',
					'harga' => $p->biaya_pendaftaran, 
				);
				$this->ItemTransaksiModel->tambahTrx($transaksi);
				$transaksi2 = array(
					'id_transaksi' => $trx->id_transaksi,
					'jenis_transaksi' => 'Pemeriksaan',
					'nama_transaksi' => $p->nama_poli,
					'jumlah' => '1',
					'harga' => '20000', 
				);
				$this->ItemTransaksiModel->tambahTrx($transaksi2);			
			}

			#menambahkan resep obat ke Transaksi
			$where_umum = array(
				'id_rawat' => $id_rawat, 
			);
			$poli_umum = $this->UmumModel->viewWhere($where_umum);
			foreach ($poli_umum as $pu) {
				$id_poli_umum = $pu->id_poli_umum;
				$waktuKeluar = array(
					'tanggal_keluar' => $tanggal, 
					'jam_keluar' => $waktu, 
				);
				$this->UmumModel->updateKeluar($id_poli_umum,$waktuKeluar);
				$resep_obat = $this->ResepModel->viewResep('tb_resep.id_poli_umum',$id_poli_umum);
				foreach ($resep_obat as $ro) {
					$data_item_trx = array(
						'id_transaksi' =>  $trx->id_transaksi,
						'jenis_transaksi' => 'Pembelian Obat',
						'nama_transaksi' => $ro->nama_obat,
						'jumlah' => $ro->kuantitas,
						'harga' => $ro->harga,

					);
					$this->ItemTransaksiModel->tambahTrx($data_item_trx);
				}
			}
    	}

		// $where_poli = array(
		// 	'nama_poli' => 'Poliklinik Umum', 
		// );
		// $poli = $this->PoliklinikModel->viewPoliWhere($where_poli);
		// foreach ($poli as $p) {
		// 	$transaksi = array(
		// 		'id_rawat' => $id_rawat,
		// 		'nama_transaksi' => $p->nama_poli,
		// 		'jenis_transaksi' => 'Pendaftaran',
		// 		'biaya' => $p->biaya_pendaftaran 
		// 	);
		// 	$this->TransaksiModel->tambahTrx($transaksi);			
		// }

		// $datatrx = array(
		// 	'id_rawat' => $id_rawat,
		// 	'jenis' => 'Pendaftaran',
		// 	'nama_transaksi' => 'Pendaftaran dan Pemeriksaan', 
		// );
		//$this->TransaksiModel->tambahTrx($data);

		#menambahkan resep obat ke Transaksi
		// $where_umum = array(
		// 	'id_rawat' => $id_rawat, 
		// );
		// $poli_umum = $this->UmumModel->viewWhere($where_umum);
		// foreach ($poli_umum as $pu) {
		// 	$id_poli_umum = $pu->id_poli_umum;
		// 	$resep_obat = $this->ResepModel->viewResep('tb_resep.id_poli_umum',$id_poli_umum);
		// 	foreach ($resep_obat as $ro) {
		// 		$data = array(
		// 			'id_rawat' => $id_rawat,
		// 			'jenis_transaksi' => 'Pembelian Obat',
		// 			'nama_transaksi' => $ro->nama_obat,
		// 			'biaya' => $ro->harga,
		// 		);
		// 		$this->TransaksiModel->tambahTrx($data);
		// 	}
		// }



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
