<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('PasienModel');
		$this->load->model('UserModel');
		$this->load->model('AntrianModel');
		$this->load->model('RawatModel');
		$this->load->model('PoliklinikModel');
		$this->load->model('TransaksiModel');
		$this->load->model('ItemTransaksiModel');

		date_default_timezone_set("Asia/Jakarta");
	}
	
	public function index(){
		redirect('resepsionis/pasien/cari');
		// $tipe_admin = $this->session->userdata("tipe_admin");
		// if($tipe_admin == "resepsionis"){
		// 	$users['users'] = $this->UserModel->tampilkan();
		// 	$this->load->view('resepsionis/cari_pasien',$users);
		// }elseif($tipe_admin == "dokter"){
		// 	$data['users'] = $this->UserModel->tampilkan();
		// 	$data['rawat_jalan'] = $this->PasienModel->tampilkanRawat('rawat_jalan');
		// 	$this->load->view('poli_umum/pasien_terdaftar',$data);	
		// }
	}
	
	public function daftar(){
		$users['users'] = $this->UserModel->tampilkan();
		$data = array();
		$this->load->view('resepsionis/pasien_baru',$users);
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			$no_ktp = $this->input->post('input_no_ktp');
			$nama_pasien = $this->input->post('input_nama');
				$upload = $this->PasienModel->upload();
				if($upload['result'] == "success"){
					//$upload_ktp = $this->PasienModel->upload_ktp();
					$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
					// $this->load->view('pasien/pasien_baru');
					$no_ktp = $this->input->post('input_no_ktp');
					$viewpasien = $this->PasienModel->viewPasien('no_ktp',$no_ktp);
					foreach ($viewpasien as $vp) {
						echo '<body>';
						echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
						echo '<script type="text/javascript" >';
						echo 'swal({';
						echo '  title: "Pendaftaran Berhasil.!!! Nomor Pasien : ['.$vp->no_pasien.']",';
						echo '  text: "Pasien telah berhasil didaftarkan. Nomor pasien : '.$vp->no_pasien.'",';
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
						echo '     ';
						echo '      break;';				 
						echo '    default:';
						echo '      swal("Got away safely!");';
						echo '  }';
						echo '});';
						echo '</script>';
						echo  '</body>';
					}
					//$this->load->view('pasien/pasien_baru');
				}else{
					//$data['message'] = $upload['error'];
					echo "galat";
					$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
					redirect('pasien/resepsionis/daftar');
				}

			// $cek = $this->PasienModel->cek_pasien($no_ktp,$nama_pasien)->num_rows();
			// if($cek > 0){
			// 	echo '<body>';
			// 	echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
			// 	echo '<script type="text/javascript" >';
			// 	echo 'swal({';
			// 	echo '  title: "Pasien Telah Terdaftar",';
			// 	echo '  text: "Data Pasien yang dimasukkan telah terdaftar.Silahkan coba cari data pasien menggunakan fitur Cari",';
			// 	echo '	icon: "warning",';
			// 	echo '  buttons: {';
			// 			//echo '    cancel: "Run away!",';
			// 	echo '    catch: {';
			// 	echo '      text: "Pergi ke Cari",';
			// 	echo '      value: "catch",';
			// 	echo '    },';
			// 			//echo '    defeat: true,';
			// 	echo '  },';
			// 	echo '})';
			// 	echo '.then((value) => {';
			// 	echo '  switch (value) {';				 
			// 	echo '    case "defeat":';
			// 	echo '      swal("Pikachu fainted! You gained 500 XP!");';
			// 	echo '      break;';				 
			// 	echo '    case "catch":';
			// 	echo '      window.location = "'.base_url().'resepsionis/pasien/cari";';
			// 	echo '      break;';				 

			// 	echo '  }';
			// 	echo '});';
			// 	echo '</script>';
			// 	echo  '</body>';
				
			// }else{
			// }
			
		}
	}

	public function cek_nama(){
		$nama = $this->input->post('nama');
		$cek = $this->PasienModel->cek_data('nama',$nama)->num_rows();
		if($cek > 0){
			echo json_encode(array('status' => true));
		}else{

		}
	}

	public function cek_id(){
		$nama = $this->input->post('nama');
		//$nama = 'John Doe';
		$no_ktp = $this->input->post('no_ktp');
		$jenis_cek = $this->input->post('jenis_cek');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		//$jenis_cek = 'nama';

		if($jenis_cek == 'nama'){
			$cek = $this->PasienModel->cek_tgl($nama,$tanggal_lahir)->num_rows();
			
		}elseif ( $jenis_cek == 'no_ktp') {
			$cek = $this->PasienModel->cek_data('no_ktp',$no_ktp)->num_rows();
		}
		
		if($cek > 0){
			echo json_encode(array('status' => true));
		}else{

		}
	}

	public function cari(){
		$cari_input = $this->input->post('cari_input');
		$data['users'] = $this->UserModel->tampilkan();
		if(!empty($cari_input)){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->PasienModel->cari('pasien','pasien.no_pasien',$cari_input,'pasien.nama',$cari_input);
			$this->load->view('resepsionis/cari_pasien',$data);
		}else{
			$this->load->view('resepsionis/cari_pasien',$data);
		}
	}

	public function pasien_lama(){
		$data['users'] = $this->UserModel->tampilkan();
		$admin = $this->UserModel->tampilkan();
		foreach ($admin as $adm) {
			$user_id = $adm->user_id;
		}
		$poliklinik = $this->input->post('input_poliklinik');
		$biaya = $this->input->post('input_biaya');
		//$no_pasien = $_GET['nomor_pasien'];
		$tanggal = date("d-m-Y");
		$jam = date("H:i:s");
		$kode = 'AN'.date("dmy").uniqid();
		$this->load->view('resepsionis/pasien_lama',$data);

		if($this->input->post('daftar_poli')){
			$where = array('nama_poli' => $poliklinik );
			$data_poli = $this->PoliklinikModel->viewPoliWhere($where);
			foreach ($data_poli as $dp) {
				$poli = $dp->maksimum_pasien;
			}
			$where_count = array(
				'tanggal' => $tanggal , 
				'poliklinik' => $poliklinik , 
			);
			$jumlah_rawat = $this->AntrianModel->count($where_count);
			if($jumlah_rawat < $poli){
				$cek = $this->AntrianModel->cekPasien()->num_rows(); 
				if($cek > 0){
					echo '<body>';
					echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
					echo '<script type="text/javascript" >';
					echo 'swal({';
					echo '  title: "Pendaftaran Gagal.!",';
					echo '  text: "Pasien sedang melakukan rawat jalan.!",';
					echo '	icon: "warning",';
					echo '  buttons: {';
					
					echo '    catch: {';
					echo '      text: "Oke",';
					echo '      value: "catch",';
					echo '    },';
					
					echo '  },';
					echo '})';
					echo '.then((value) => {';
					echo '  switch (value) {';				 
					echo '    case "defeat":';
					echo '      swal("Pikachu fainted! You gained 500 XP!");';
					echo '      break;';				 
					echo '    case "catch":';
					echo '      window.location = "'.base_url().'resepsionis/pasien/pasien_lama";';
					echo '      break;';				 
					echo '    default:';
					echo '      swal("Got away safely!");';
					echo '  }';
					echo '});';
					echo '</script>';
					echo  '</body>';
				}else{
					$this->AntrianModel->poli($kode, $user_id);
					$antrian = $this->AntrianModel->viewWhere('id',$kode);
					#menambahkan pendaftaran ke transaksi
					$datatrx = array(
						'id_transaksi' => $kode, 
						'tanggal_transaksi' => $tanggal, 
						'jam_transaksi' => $jam, 
						'status' => 'Belum Lunas', 
					);
					$this->TransaksiModel->tambahTrx($datatrx);
	
					$dataTrxItem = array(
						'id_transaksi' => $kode, 
						'jenis_transaksi' => 'Pendaftaran', 
						'nama_transaksi' => $poliklinik, 
						'jumlah' => '1', 
						'harga' => $biaya, 
					);
					$this->ItemTransaksiModel->tambahItem($dataTrxItem);
					// redirect ("resepsionis/pasien/pasien_lama");
					echo '<body>';
					echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
					echo '<script type="text/javascript" >';
					echo 'swal({';
					echo '  title: "Pendaftaran Berhasil.!",';
					echo '  text: "Pasien telah berhasil didaftarkan Pada Poliklinik.",';
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
					echo '      window.location = "'.base_url().'resepsionis/pasien/pasien_lama";';
					echo '      break;';				 
					echo '    default:';
					echo '      swal("Got away safely!");';
					echo '  }';
					echo '});';
					echo '</script>';
					echo  '</body>';
				}
			}else{
				echo '<body>';
				echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
				echo '<script type="text/javascript" >';
				echo 'swal({';
				echo '  title: "Poliklinik Telah Ditutup",';
				echo '  text: "Pendaftaran ke poliklinik tujuan telah ditutup",';
				echo '	icon: "warning",';
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
				echo '      window.location = "'.base_url().'resepsionis/pasien/pasien_lama";';
				echo '      break;';				 
				echo '    default:';
				echo '      swal("Got away safely!");';
				echo '  }';
				echo '});';
				echo '</script>';
				echo  '</body>';
			}
		}
	}

	public function daftar_pasien_lama(){
		
		if($this->input->post('search')){
			$day = date ("D");
			if ($day == 'Sun') {
				$hari = 'Minggu';
			}elseif ($day == 'Mon') {
				$hari = 'Senin';
			}elseif ($day == 'Tue') {
				$hari = 'Selasa';
			}elseif ($day == 'Wed') {
				$hari = 'Rabu';
			}elseif ($day == 'Thu') {
				$hari = 'Kamis';
			}elseif ($day == 'Fri') {
				$hari = "Jum'at";
			}elseif ($day == 'Sat') {
				$hari = 'Sabtu';
			}
			$parameter = $this->input->post('parameter_input');
			$data['users'] = $this->UserModel->tampilkan();
			$data['poliklinik'] = $this->PoliklinikModel->viewPoli();
			// if($parameter == 'id_pasien'){
			$where_umum = array('spesialis' => 'Umum', );
			$like_umum = array('jadwal_praktek' => $hari, );
			$data['dokter_umum'] = $this->UserModel->dokter($where_umum,$like_umum);
			$data['pasien'] = $this->PasienModel->cariPasienLama('id_pasien');
			$this->load->view('resepsionis/pasien_lama',$data);
		}else{
			redirect ("resepsionis/pasien/pasien_lama");
		}


		
		// }elseif ($parameter == 'nama_pasien') {
		// 	$data['pasien'] = $this->PasienModel->cariPasienLama('nama_pasien');
		// 	$this->load->view('resepsionis/pasien_lama',$data);
		// // }elseif ($parameter == 'no_ktp'){
		// 	$data['pasien'] = $this->PasienModel->cariPasienLama('no_ktp');
		// 	$this->load->view('resepsionis/pasien_lama',$data);
		// // }elseif ($parameter == 'no_kk') {
		// 	$data['pasien'] = $this->PasienModel->cariPasienLama('no_kk');
		// 	$this->load->view('resepsionis/pasien_lama',$data);
		// }else{
		// 	$this->load->view('resepsionis/pasien_lama',$data);
		// }
	}

	public function getDokter(){
		$day = date ("D");
		if ($day == 'Sun') {
			$hari = 'Minggu';
		}elseif ($day == 'Mon') {
			$hari = 'Senin';
		}elseif ($day == 'Tue') {
			$hari = 'Selasa';
		}elseif ($day == 'Wed') {
			$hari = 'Rabu';
		}elseif ($day == 'Thu') {
			$hari = 'Kamis';
		}elseif ($day == 'Fri') {
			$hari = "Jum'at";
		}elseif ($day == 'Sat') {
			$hari = 'Sabtu';
		}
		$poli = $this->input->post('poli');
		if($poli == 'Umum'){
			$where_umum = array('spesialis' => 'Umum', );
			$like_umum = array('jadwal_praktek' => $hari, );
			$data = $this->UserModel->dokter($where_umum,$like_umum);
			echo json_encode($data);
		}elseif ($poli == 'Mata') {
			$where_umum = array('spesialis' => 'Mata', );
			$like_umum = array('jadwal_praktek' => $hari, );
			$data = $this->UserModel->dokter($where_umum,$like_umum);
			echo json_encode($data);
		}elseif ($poli == 'none') {
			echo "- tidak ada data -";
		}
		
	}

	// public function pasien_baru(){
	// 	$users['users'] = $this->UserModel->tampilkan();
	// 	$this->load->view('pasien/pasien_baru',$users);
	// }

	// public function status(){
	// 	$users['users'] = $this->UserModel->tampilkan();
	// 	$this->load->view('resepsionis/status_rawat',$users);
	// }

	// public function status_rawat(){
	// 	$data['users'] = $this->UserModel->tampilkan();
	// 	$poliklinik = $this->input->post('input_poliklinik');
	// 	$where = array(
	// 		'rawat_jalan.poliklinik' => $poliklinik, 
	// 	);
	// 	if($poliklinik == "Poli Umum"){
	// 		$parameter = $this->input->post('parameter_input');
	// 		$data['pasien'] = $this->RawatModel->statusRawat('rawat_jalan','rawat_jalan.poliklinik',$poliklinik);
	//   		$this->load->view('resepsionis/status_rawat',$data);
	// 	}else if($poliklinik == "Poli Mata"){
	// 		$parameter = $this->input->post('parameter_input');
	// 		$data['pasien'] = $this->PasienModel->statusRawat('rawat_jalan','rawat_jalan.poliklinik',$poliklinik);
	//   		$this->load->view('resepsionis/status_rawat',$data);
	// 	}

	// 	else{
	// 		$this->load->view('resepsionis/status_rawat',$data);
	// 	}
	//  	// if($this->input->post('input_poli')){
	//  	// 	if($poliklinik == "Poli Umum"){
	//  	// 		$data['pasien'] = $this->PasienModel->cariStatus();
	//  	// 		$this->load->view('pasien/status_rawat',$data);
	//  	// 	}
	//  	// }
	// }

	public function profile_pasien($no_pasien){
		$data['users'] = $this->UserModel->tampilkan();
		$data['pasien'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		$this->load->view('resepsionis/profile_pasien',$data);
		// if($this->input->post('ubah_pasien')){
		// 	$data = array(
		// 		'no_ktp' => $this->input->post('input_no_ktp'),
		// 		'no_kk' => $this->input->post('input_no_kk'),
		// 		'nama' => $this->input->post('input_nama'),
		// 		'jenis_kelamin' => $this->input->post('input_jenis_kelamin'),
		// 		'tanggal_lahir' => $this->input->post('input_tanggal_lahir'),
		// 		'tempat_lahir' => $this->input->post('input_tempat_lahir'),
		// 		'umur' => $this->input->post('input_umur'),
		// 		'alamat' => $this->input->post('input_alamat'),
		// 		'pekerjaan' => $this->input->post('input_pekerjaan'),
		// 		'pendidikan' => $this->input->post('input_pendidikan'),
		// 		'golongan_darah' => $this->input->post('input_golongan_darah'),
		// 		'status_pernikahan' => $this->input->post('input_status_pernikahan'),
		// 		'nama_orangtua' => $this->input->post('input_nama_orangtua'),
		// 		'pekerjaan_orangtua' => $this->input->post('input_pekerjaan_orangtua'),
		// 		'nama_suamistri' => $this->input->post('input_nama_suamistri'),
		// 		'agama' => $this->input->post('input_agama'),
		// 		'no_telpon' => $this->input->post('input_no_telpon')
		// 	);
		// 	$this->PasienModel->update($no_pasien,$data);
		// }
	}

	public function update($no_pasien){
		$data = array(
				'no_ktp' => $this->input->post('input_no_ktp'),
				'no_kk' => $this->input->post('input_no_kk'),
				'nama' => $this->input->post('input_nama'),
				'jenis_kelamin' => $this->input->post('input_jenis_kelamin'),
				'tanggal_lahir' => $this->input->post('input_tanggal_lahir'),
				'tempat_lahir' => $this->input->post('input_tempat_lahir'),
				'umur' => $this->input->post('input_umur'),
				'alamat' => $this->input->post('input_alamat'),
				'pekerjaan' => $this->input->post('input_pekerjaan'),
				'pendidikan' => $this->input->post('input_pendidikan'),
				'golongan_darah' => $this->input->post('input_golongan_darah'),
				'status_pernikahan' => $this->input->post('input_status_pernikahan'),
				'nama_orangtua' => $this->input->post('input_nama_orangtua'),
				'pekerjaan_orangtua' => $this->input->post('input_pekerjaan_orangtua'),
				'nama_suamistri' => $this->input->post('input_nama_suamistri'),
				'agama' => $this->input->post('input_agama'),
				'no_telpon' => $this->input->post('input_no_telpon')
			);
		$this->PasienModel->update($no_pasien,$data);
		echo "<script>window.close();</script>";
		// redirect('pasien/profile_pasien/'.$no_pasien);
	}

	public function test(){
		$data = $this->PasienModel->test();
		echo $data;
	}

	
}
