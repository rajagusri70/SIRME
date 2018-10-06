<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_Up extends CI_Controller {

	

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}else{
			
		}
		$this->load->model('AdminModel');
		$this->load->model('AntrianModel');
		$this->load->model('RawatModel');
		$this->load->model('ObatModel');
		$this->load->model('ResepModel');
		$this->load->model('PeriksaModel');
		$this->load->model('TransaksiModel');
		$this->load->model('PoliklinikModel');
		$this->load->model('ItemTransaksiModel');
		$this->load->model('ItemResepModel');
		$this->load->model('RM1AModel');
		$this->load->model('RM1BModel');
		$this->load->model('RiwayatPenyakitModel');
		$this->load->model('RiwayatAlergiModel');
		$this->load->model('KeluhanModel');
		$this->load->model('PemeriksaanModel');
		$this->load->model('DiagnosisModel');
		$this->load->model('PenatalaksanaanModel');
		$this->load->model('TindakanModel');
		$this->load->model('RiwayatHamilModel');
		$this->load->model('ObservationModel');
		$this->load->library('pdf');

		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index()
	{
		echo "Forbidden Acces";
		// $this->load->view('admin/login');
	}

	public function pasien_terdaftar(){
		$user_id = $this->session->userdata('user_id');
		$data['users'] = $this->AdminModel->tampilkan();
		$data['antrian'] = $this->AntrianModel->tampilkanAntrian($user_id);
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

	public function getName($code){
		//$code = 'A75.1';
		//$code = $this->input->post('code');
		$url = 'https://clinicaltables.nlm.nih.gov/api/icd10cm/v3/search?sf=code&terms='.$code.'';
    	$data = file_get_contents($url);
    	$content = json_decode($data, true);
    	echo $content[3][0][1];
    	
	}

	public function encounter($id_antrian, $no_pasien){
		$user_id = $this->session->userdata('user_id');
		// $anrtrian =$this->AntrianModel->viewWhere
		$where = array(
			'no_pasien' => $no_pasien,
			'status' => 'in-progress', 
		);
		$cek = $this->RawatModel->viewWhere($where);
		foreach ($cek as $key) {
			$no_p = $key->no_pasien;
			$status = $key->status;
			$no_rawat_jalan = $key->id_rawat;
		}
		if($no_p == $no_pasien && $status == "in-progress"){
			redirect(base_url()."p_umum/check_up/periksa/".$no_rawat_jalan);
		}else{
			$kode = 'RJ'.date("dmy").uniqid();
			$tanggal = date("d-m-Y");
			$waktu = date("H:i:s");
			$data = array(
				'id' => $kode,
				'no_pasien' => $no_pasien,
				'tanggal' => $tanggal, 
				'waktu' => $waktu, 
				'status' => 'in-progress', 
				'dokter' => $user_id, 
			);
			$this->RawatModel->add($data);
			$where = array('id' => $kode, );
			$rawat_jalan = $this->RawatModel->viewWhere($where);
			foreach ($rawat_jalan as $rj) {
				$no_rawat_jalan = $rj->id_rawat;
			}
			$statusWhere = array('id' => $id_antrian, );
			$statusData = array('status' => 'Dalam Pemeriksaan', );
			$antrian = $this->AntrianModel->updateStatus($statusWhere,$statusData);
			redirect(base_url()."p_umum/check_up/periksa/".$no_rawat_jalan);
		}
	}

	public function periksa($id_rawat){

		$status_where = array('id_rawat' => $id_rawat, );
		$get_status = $this->RawatModel->viewStatus($status_where);

		foreach ($get_status as $status_rawat) {
			if($status_rawat->status == 'finished'){
				echo "<head>";
				echo '<link href='.base_url().'/assets/css/bootstrap.min.css" rel="stylesheet">';
				echo "</head>";
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

		        #menambahkan nama dokter pemeriksa
				// foreach ($users as $user) {
				// 	$data = array(
				// 	'id_rawat' => $id_rawat,
				// 	'user_id' => $user->user_id,
				// 	'tanggal_masuk' => $tanggal,
				// 	'jam_masuk' => $waktu
				// 	);
				// 	$this->PeriksaModel->tambah($data);
				// }
				//end of menambahkan nama dokter pemeriksa

				#merubah status rawat jalan menjadi Dalam Pemeriksaan
				
				//$this->RawatModel->updateStatus($id_rawat, $data);
				// end of merubah status rawat jalan

				#menampilkan nama dokter
				$data['users'] = $this->AdminModel->tampilkan();
				//end of menampilkan nama dokter

				#menampilkan data pasien yang diperiksa
				$data['pasien_terdaftar'] = $this->RawatModel->cariStatus('rawat_jalan','rawat_jalan.id_rawat',$id_rawat);
				//end of menampilkan data pasien yang diperiksa

				#untuk mempassing data id_periksa
				// $where = array(
				// 	'id_rawat' => $id_rawat, 
				// );
				// $periksa = $this->PeriksaModel->viewWhere($where);
				// foreach ($periksa as $pks) {
				// 	$id_periksa = $pks->id_periksa;
				// }
				$data['id_rawat'] = $id_rawat;
				// $data['id_periksa'] = $id_periksa;
				//end of mempassing data id_periksa

				#menambahkan Biaya pemeriksaan ke Transaksi
				// $datatrx = array(
				// 	'' => , );
				// $data_pendaftaran = $this->TransaksiModel->tambahTrx($datatrx);
				//end of menambahkan biaya pemeriksaan ke Transaksi

				#cek apakah data di tabel rm1a dan rm1b eksis
				
				$data['tanggal'] = $tanggal;

				#menambahkan resep per rawat jalan
				$where = array('no_rawat_jalan' => $id_rawat, );
				$cek = $this->ResepModel->cek($where)->num_rows();
				if($cek > 0){
			
				}else{
					$data_resep = array(
						'id' => 'RO'.date("dmy").uniqid(),
						'no_rawat_jalan' => $id_rawat, 
						'tanggal' => $tanggal, 
					);
					$this->ResepModel->tambahResep($data_resep);
				}
				$where_resep = array('no_rawat_jalan' => $id_rawat, );
				$resep_data = $this->ResepModel->viewResep($where_resep);
				foreach ($resep_data as $rd) {
					$id_resep = $rd->id;
				}
				$data['id_resep'] = $id_resep;
				$this->load->view('poli_umum/check_up',$data);
			}
		}
	}

	public function hapusDiagnosa(){
		$id_diagnosa = $this->input->post('id_diagnosa');
		$where = array('id_diagnosa' => $id_diagnosa);
		$this->RawatModel->hapusDiagnosa($where);
		echo json_encode(array('status' => true));
	}

	public function resep($id_resep){
		$tanggal = date("d-m-Y");
		// $where = array('id_periksa' => $id_periksa, );
		// $cek = $this->ResepModel->cek($where)->num_rows();
		// if($cek > 0){
			
		// }else{
		// 	$data_resep = array(
		// 		'id_periksa' => $id_periksa, 
		// 		'tanggal' => $tanggal, 
		// 		'status' => 'Belum Diambil', 
		// 	);
		// 	$this->ResepModel->tambahResep($data_resep);
		// }
		$data['daftar_obat'] = $this->ObatModel->viewObat();
		$data['id_resep'] = $id_resep;
		$this->load->view('poli_umum/daftar_obat',$data);
	}

	public function detail($id_resep){
		$where = array('id_resep' => $id_resep, );
		$data['daftar_resep'] = $this->ItemResepModel->viewResep($where);
		$where_all = array('tb_resep.id' => $id_resep, );
		$user_data = $this->ItemResepModel->viewAll($where_all);
		$data['nama'] = '';
		$data['umur'] = '';
		$data['alamat'] = '';
		$data['nama_dokter'] = '';
		$data['nip'] = '';
		$data['tanggal_masuk'] = '';
		foreach ($user_data as $ud) {
			$nama = $ud->nama;
			$umur = $ud->umur;
			$alamat = $ud->alamat;
			$tanggal_masuk = $ud->tanggal_resep;
			$nama_dokter = $ud->nama_dokter;
			$nip = $ud->no_sip;

			$data['nama'] = $nama;
			$data['umur'] = $umur;
			$data['alamat'] = $alamat;
			$data['nama_dokter'] = $nama_dokter;
			$data['nip'] = $nip;
			$data['tanggal_masuk'] = $tanggal_masuk;

		}
		// $data['nama'] = $nama;
		// $data['umur'] = $umur;
		// $data['alamat'] = $alamat;
		// $data['nama_dokter'] = $nama_dokter;
		// $data['nip'] = $nip;
		// $data['tanggal_masuk'] = $tanggal_masuk;
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");

		#menambahkan nama dokter pemeriksa
		
		
		$this->load->view('poli_umum/resep',$data);
	}

	public function tambahResep(){
		$data = array(
			'no_obat' => $this->input->post('no_obat'),
			'no_id' => $this->input->post('no_id')
		);
		$this->ItemResepModel->tambahResep($data);
		echo json_encode(array('status' => true));
	}

	public function viewResep($id_resep){
		$where = array('tb_item_resep.id_resep' => $id_resep, );
		$data = $this->ItemResepModel->viewResep($where);
		echo json_encode($data);
	}

	public function hapusResep(){
		$item_id = $this->input->post('item_id');
		$where = array('item_id' => $item_id);
		$this->ItemResepModel->hapusResep($where);
		echo json_encode(array('status' => true));
	}

	public function updateResep(){
		$item_id = $this->input->post('item_id');
		$where = array('item_id' => $item_id, );
		$data = array(
			'kuantitas' => $this->input->post('kuantitas'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->ItemResepModel->updateResep($where,$data);
		echo json_encode(array('status' => true));
	}

	public function simpanObservation(){
		$tanggal = date("d-m-Y");
		$kode = date("dmy");
		$waktu = date("H:i:s");
		$tipe = $this->input->post('tipe');
		$user_id = $this->session->userdata('user_id');
		// if($tipe == "Tekanan Darah" || $tipe == "Nadi" || $tipe == "Pernapasan" || $tipe == "Suhu" || $tipe == "Tinggi Badan" || $tipe == "Berat Badan")
		// {
		// 	$kategori = "Vital Sign";
		// }

		if($tipe == "Tekanan Darah"){
			$unit = "mmHg";
			$kategori = "Vital Sign";
		}elseif ($tipe == "Nadi") {
			$unit = "x/menit";
			$kategori = "Vital Sign";
		}elseif ($tipe == "Pernapasan") {
			$unit = "x/menit";
			$kategori = "Vital Sign";
		}elseif ($tipe == "Suhu") {
			$unit = "Celcius";
			$kategori = "Vital Sign";
		}elseif ($tipe == "Tinggi Badan") {
			$unit = "cm";
			$kategori = "Vital Sign";
		}elseif ($tipe == "Berat Badan") {
			$unit = "kg";
			$kategori = "Vital Sign";
		}

		$data = array(
			'id' => 'OB'.$kode.uniqid(),
			'status' => 'final',
			'kategori' => $kategori,
			'tipe_pemeriksaan' => $tipe,
			'no_pasien' => $this->input->post('no_pasien'),
			'no_rawat_jalan' => $this->input->post('no_rawat_jalan'),
			'tanggal' => $tanggal,
			'jam' => $waktu,
			'hasil' => $this->input->post('hasil'),
			'unit' => $unit,
			'no_id_praktisi' => $user_id,
		);
		$this->ObservationModel->tambahObservation($data);
		echo json_encode(array('status' => true));
	}

	public function simpanRiwayatPenyakit(){
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");
		$data = array(
			'no_pasien' => $this->input->post('no_pasien'),
			'no_rawat_jalan' => $this->input->post('no_rawat_jalan'),
			'tanggal_input' => $tanggal,
			'jam_input' => $waktu,
			'kode_icd10' => $this->input->post('kode_icd10'),
			'diagnosa' => $this->input->post('diagnosa'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->RiwayatPenyakitModel->tambahRiwayat($data);
		echo json_encode(array('status' => true));
	}

	public function simpan(){
		$jenis = $this->input->post('jenis');
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");
		$kode = date("dmy");
		$user_id = $this->session->userdata('user_id');
		if($jenis == 'Alergi'){
			$data = array(
				'no_pasien' => $this->input->post('no_pasien'),
				'no_rawat_jalan' => $this->input->post('no_rawat_jalan'),
				'tanggal_input' => $tanggal,
				'jam_input' => $waktu,
				'organ_sasaran' => $this->input->post('organ_sasaran'),
				'gejala' => $this->input->post('gejala'),
				'bahan_kimia' => $this->input->post('bahan_kimia'),
				'keterangan' => $this->input->post('keterangan'),
			);
			$this->RiwayatAlergiModel->tambahRiwayat($data);
			echo json_encode(array('status' => true));
		}elseif ($jenis == "Keluhan") {
			$data = array(
				'jenis_keluhan' => $this->input->post('jenis_keluhan'),
				'no_rawat_jalan' => $this->input->post('no_rawat_jalan'),
				'jam_input' => $waktu,
				'keluhan' => $this->input->post('keluhan'),
				'keterangan' => $this->input->post('keterangan'),
			);
			$this->KeluhanModel->tambah($data);
			echo json_encode(array('status' => true));
		}elseif ($jenis == "Pemeriksaan") {
			$data = array(
				'no_rawat_jalan' => $this->input->post('no_rawat_jalan'),
				'jam_periksa' => $waktu,
				'periksa' => $this->input->post('periksa'),
				'keterangan' => $this->input->post('keterangan'),
			);
			$this->PemeriksaanModel->tambah($data);
			echo json_encode(array('status' => true));
		}elseif ($jenis == "Diagnosis") {
			$data = array(
				'id' => 'CO'.$kode.uniqid(),
				'no_rawat_jalan' => $this->input->post('id_rawat'),
				'status_klinis' => 'active',
				'kode_diagnosis' => $this->input->post('kode_icd10'),
				'diagnosis' => $this->input->post('diagnosis'),
				'keterangan' => $this->input->post('keterangan'),
				'no_pasien' => $this->input->post('no_pasien'),
				'tanggal' => $tanggal,
				'jam' => $waktu,
				'no_id_praktisi' => $user_id,
			);
			$this->DiagnosisModel->tambah($data);
			echo json_encode(array('status' => true));
		}elseif ($jenis == "Rencana") {
			$data = array(
				'no_rawat_jalan' => $this->input->post('no_rawat_jalan'),
				'rencana' => $this->input->post('rencana'),
				'keterangan' => $this->input->post('keterangan'),
			);
			$this->PenatalaksanaanModel->tambah($data);
			echo json_encode(array('status' => true));
		}
	}

	public function viewObservation(){
		$id_rawat = $this->input->post('id_rawat');
		$data = $this->ObservationModel->viewObservation($id_rawat);
		echo json_encode($data);
	}

	public function viewRiwayatPenyakit(){
		$no_pasien = $this->input->post('no_pasien');
		$data = $this->RiwayatPenyakitModel->viewRiwayatPenyakit($no_pasien);
		echo json_encode($data);
	}

	public function viewRiwayatAlergi(){
		$no_pasien = $this->input->post('no_pasien');
		$data = $this->RiwayatAlergiModel->viewRiwayat($no_pasien);
		echo json_encode($data);
	}

	public function viewKeluhan(){
		$no_rawat_jalan = $this->input->post('no_rawat_jalan');
		$jenis_keluhan = $this->input->post('jenis_keluhan');
		$where = array(
			'no_rawat_jalan' => $no_rawat_jalan,
			'jenis_keluhan' => $jenis_keluhan,
		);
		$data = $this->KeluhanModel->view($where);
		echo json_encode($data);
	}

	public function viewPemeriksaan(){
		$no_rawat_jalan = $this->input->post('no_rawat_jalan');
		$data = $this->PemeriksaanModel->view($no_rawat_jalan);
		echo json_encode($data);
	}

	public function viewDiagnosis(){
		$id_rawat = $this->input->post('id_rawat');
		//$id_periksa = '180';
		$data = $this->DiagnosisModel->view($id_rawat);
		echo json_encode($data);
	}

	public function viewRencana(){
		$no_rawat_jalan = $this->input->post('no_rawat_jalan');
		$where = array('no_rawat_jalan' => $no_rawat_jalan, );
		$data = $this->PenatalaksanaanModel->view($where);
		echo json_encode($data);
	}

	public function hapusRM(){
		$jenis = $this->input->post('jenis');
		$item_id = $this->input->post('item_id');
		
		if($jenis == '1'){
			$where = array(
				'id' => $item_id, 
			);
			$this->ObservationModel->hapusObservation($where);
			echo json_encode(array('status' => true));
		}
		elseif ($jenis == '2') {
			$where = array(
				'id_alergi' => $item_id, 
			);
			$this->RiwayatAlergiModel->hapusRiwayatPenyakit($where);
			echo json_encode(array('status' => true));
		}elseif ($jenis == '3') {
			$where = array(
				'id_keluhan' => $item_id, 
			);
			$this->KeluhanModel->hapus($where);
			echo json_encode(array('status' => true));
		}elseif ($jenis == '4') {
			$where = array(
				'id_pemeriksaan' => $item_id, 
			);
			$this->PemeriksaanModel->hapus($where);
			echo json_encode(array('status' => true));
		}elseif ($jenis == '5') {
			$where = array(
				'id' => $item_id, 
			);
			$this->DiagnosisModel->hapus($where);
			echo json_encode(array('status' => true));
		}elseif ($jenis == '6') {
			$where = array(
				'id_penatalaksanaan' => $item_id, 
			);
			$this->PenatalaksanaanModel->hapus($where);
			echo json_encode(array('status' => true));
		}elseif ($jenis == '7') {
			$where = array(
				'id_tindakan' => $item_id, 
			);
			$this->TindakanModel->hapus($where);
			echo json_encode(array('status' => true));
		}elseif ($jenis == '8') {
			$where = array(
				'id_riwayat' => $item_id, 
			);
			$this->RiwayatPenyakitModel->hapusRiwayatPenyakit($where);
			echo json_encode(array('status' => true));
		}

	}

	public function selesai($id_rawat){
		#update Status rawat jalan pasien
		$no_pasien = $this->input->post('no_pasien');
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");
		$data = array(
			'status' => 'Selesai', 
		);
		$id_transaksi = '';
		$biaya_daftar = '';
		$id_periksa = '';
		$this->RawatModel->updateStatus($id_rawat, $data);

		#menambahkan item ke transaksi
	    $where_trx = array(
	    	'id_rawat' => $id_rawat, 
	    );
	    $transaksi = $this->TransaksiModel->viewTrx($where_trx);
	    foreach ($transaksi as $trx) {
	    	$id_transaksi = $trx->id_transaksi;
    	}

    	$where_poli = array(
			'nama_poli' => 'Umum', 
		);
		$poli = $this->PoliklinikModel->viewPoliWhere($where_poli);
		foreach ($poli as $p) {
			$nama_poli = $p->nama_poli;
			$biaya_daftar = $p->biaya_pendaftaran;
		}

		$transaksi_item = array(
			'id_transaksi' => $trx->id_transaksi,
			'jenis_transaksi' => 'Pemeriksaan',
			'nama_transaksi' => $p->nama_poli,
			'jumlah' => '1',
			'harga' => '20000', 
		);
		$this->ItemTransaksiModel->tambahItem($transaksi_item);

		#menambahkan resep obat ke Transaksi
		$where_umum = array(
			'id_rawat' => $id_rawat, 
		);
		$periksa = $this->PeriksaModel->viewWhere($where_umum); //get id_periksa
		foreach ($periksa as $prks) {
			$id_periksa = $prks->id_periksa;
		}

		$waktuKeluar = array(
			'tanggal_keluar' => $tanggal, 
			'jam_keluar' => $waktu, 
		);
		$this->PeriksaModel->updateKeluar($id_periksa,$waktuKeluar);
		$resep_obat = $this->ResepModel->viewResep('tb_resep.id_periksa',$id_periksa);
		foreach ($resep_obat as $ro) {
			$data_item_trx = array(
				'id_transaksi' =>  $trx->id_transaksi,
				'jenis_transaksi' => 'Pembelian Obat',
				'nama_transaksi' => $ro->nama_obat,
				'jumlah' => $ro->kuantitas,
				'harga' => $ro->harga,
			);
			$this->ItemTransaksiModel->tambahItem($data_item_trx);
		}

		#menambahkan diagnosa ke tabel riwayat penyakit
		//1. Get semua data yang ada di tb diagnosa
		$dataDiagnosa = $this->DiagnosaModel->view($id_periksa);
		//2. Insert ke tabel Riwayat Penyakit
		foreach ($dataDiagnosa as $dd) {
			$tanggal = date("d-m-Y");
			$waktu = date("H:i:s");
			$dataDiagnosa = array(
				'no_pasien' => $no_pasien,
				'id_rawat' => $id_rawat,
				'tanggal_input' => $dd->tanggal_cek,
				'jam_input' => $dd->jam_cek,
				'kode_icd10' => $dd->kode_icd10,
				'diagnosa' => $dd->diagnosa,
				'keterangan' => $dd->keterangan,
			);
			$this->RiwayatPenyakitModel->tambahRiwayat($dataDiagnosa);
		}
		echo json_encode(array('status' => true));
	}

	public function test(){
		$this->load->view('test');
	}

}
