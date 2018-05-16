<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('PasienModel');
		$this->load->model('AdminModel');
		$this->load->model('RawatModel');
	}
	
	public function index(){
		$tipe_admin = $this->session->userdata("tipe_admin");
		if($tipe_admin == "resepsionis"){
			$users['users'] = $this->AdminModel->tampilkan();
			$this->load->view('resepsionis/cari_pasien',$users);
		}elseif($tipe_admin == "dokter"){
			$data['users'] = $this->AdminModel->tampilkan();
			$data['rawat_jalan'] = $this->PasienModel->tampilkanRawat('rawat_jalan');
			$this->load->view('poli_umum/pasien_terdaftar',$data);	
		}
	}
	
	public function daftar(){
		$users['users'] = $this->AdminModel->tampilkan();
		$data = array();
		$this->load->view('resepsionis/pasien_baru',$users);
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			$upload = $this->PasienModel->upload();
			if($upload['result'] == "success"){
				$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
				// $this->load->view('pasien/pasien_baru');
				echo '<body>';
				echo '<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.core.js"></script>';
				echo '<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.buttons.js"></script>';
				echo '<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/notify/pnotify.nonblock.js"></script>';
				echo "<script>";
				echo "new PNotify({";
				echo "title: 'Sukses',";
                echo "text: 'Sticky success... I\'m not even gonna make a joke.',";
                echo "type: 'success',";
                echo "hide: false";
                echo "});";
                echo "</script>";
                echo "</body>";
				//$this->load->view('pasien/pasien_baru');
			}else{
				//$data['message'] = $upload['error'];
				echo "galat";
				$this->PasienModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
				redirect('pasien/daftar');
			}
		}
	}

	public function cari(){
		$cari_input = $this->input->post('cari_input');
		$data['users'] = $this->AdminModel->tampilkan();
		if(!empty($cari_input)){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->PasienModel->cari('pasien','pasien.no_pasien',$cari_input,'pasien.nama',$cari_input);
			$this->load->view('resepsionis/cari_pasien',$data);
		}else{
			$this->load->view('resepsionis/cari_pasien',$data);
		}
	}

	public function pasien_lama(){
		$users['users'] = $this->AdminModel->tampilkan();
		$this->load->view('resepsionis/pasien_lama',$users);
		if($this->input->post('daftar_poli')){
			$this->RawatModel->poli();
			redirect ("resepsionis/pasien/pasien_lama");
		}
	}

	public function daftar_pasien_lama(){
		$parameter = $this->input->post('parameter_input');
		$data['users'] = $this->AdminModel->tampilkan();
		if($parameter == 'id_pasien'){
			$data['pasien'] = $this->PasienModel->cariPasienLama('id_pasien');
			$this->load->view('resepsionis/pasien_lama',$data);
		}elseif ($parameter == 'nama_pasien') {
			$data['pasien'] = $this->PasienModel->cariPasienLama('nama_pasien');
			$this->load->view('resepsionis/pasien_lama',$data);
		}elseif ($parameter == 'no_ktp'){
			$data['pasien'] = $this->PasienModel->cariPasienLama('no_ktp');
			$this->load->view('resepsionis/pasien_lama',$data);
		}elseif ($parameter == 'no_kk') {
			$data['pasien'] = $this->PasienModel->cariPasienLama('no_kk');
			$this->load->view('resepsionis/pasien_lama',$data);
		}else{
			$this->load->view('resepsionis/pasien_lama',$data);
		}
	}

	// public function pasien_baru(){
	// 	$users['users'] = $this->AdminModel->tampilkan();
	// 	$this->load->view('pasien/pasien_baru',$users);
	// }

	public function status(){
		$users['users'] = $this->AdminModel->tampilkan();
		$this->load->view('resepsionis/status_rawat',$users);
	}

	public function status_rawat(){
		$data['users'] = $this->AdminModel->tampilkan();
		$poliklinik = $this->input->post('input_poliklinik');
		$where = array(
			'rawat_jalan.poliklinik' => $poliklinik, 
		);
		if($poliklinik == "Poli Umum"){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->RawatModel->cariStatus('rawat_jalan','rawat_jalan.poliklinik',$poliklinik);
	  		$this->load->view('resepsionis/status_rawat',$data);
		}else if($poliklinik == "Poli Mata"){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->PasienModel->cariStatus('rawat_jalan','rawat_jalan.poliklinik',$poliklinik);
	  		$this->load->view('resepsionis/status_rawat',$data);
		}

		else{
			$this->load->view('resepsionis/status_rawat',$data);
		}
	 	// if($this->input->post('input_poli')){
	 	// 	if($poliklinik == "Poli Umum"){
	 	// 		$data['pasien'] = $this->PasienModel->cariStatus();
	 	// 		$this->load->view('pasien/status_rawat',$data);
	 	// 	}
	 	// }
	}

	public function profile_pasien($no_pasien){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien'] = $this->PasienModel->viewPasien($no_pasien);
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
