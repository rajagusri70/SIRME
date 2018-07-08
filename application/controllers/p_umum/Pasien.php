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
		$this->load->model('PoliklinikModel');
		$this->load->model('TransaksiModel');
		$this->load->model('ItemTransaksiModel');

		date_default_timezone_set("Asia/Jakarta");
	}
	
	public function index(){
		redirect('p_umum/pasien/cari');
		
	}
	
	public function cari(){
		$cari_input = $this->input->post('cari_input');
		$data['users'] = $this->AdminModel->tampilkan();
		if(!empty($cari_input)){
			$parameter = $this->input->post('parameter_input');
			$data['pasien'] = $this->PasienModel->cari('pasien','pasien.no_pasien',$cari_input,'pasien.nama',$cari_input);
			$this->load->view('poli_umum/cari_pasien',$data);
		}else{
			$this->load->view('poli_umum/cari_pasien',$data);
		}
	}

	public function profile_pasien($no_pasien){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['pasien'] = $this->PasienModel->viewPasien('no_pasien',$no_pasien);
		$this->load->view('resepsionis/profile_pasien',$data);
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
