<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}else{
			
		}
		$this->load->model('AdminModel');
		$this->load->model('PoliklinikModel');
		$this->load->model('RawatModel');
		
		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index(){
		$tanggal = date("d-m-Y");
		$data['users'] = $this->AdminModel->tampilkan();
		$antrian = array(
			'poliklinik' => 'Poli Umum',
			'status' => 'Menunggu', 
			'tanggal' => $tanggal, 
		);
		$total = array(
			'status' => 'Selesai',
			'poliklinik' => 'Poli Umum', 
		);
		$maksimum_array = array(
			'nama_poli' => 'Umum',
		);
		$maksimum_data = $this->PoliklinikModel->viewPoliWhere($maksimum_array);
		foreach ($maksimum_data as $ma) {
			$maksimum = $ma->maksimum_pasien;
			$buka = $ma->buka;
			$tutup = $ma->tutup;
			$deskripsi = $ma->deskripsi;
		}
		$selesai = array(
			'status' => 'Selesai',
			'poliklinik' => 'Poli Umum',
			'tanggal' => $tanggal, 
		);
		$jadwal = array('id_poli' => 1, );
		$data['antrian'] = $this->RawatModel->count($antrian);
		$data['maksimum'] = $maksimum;
		$data['deskripsi'] = $deskripsi;
		$data['total'] = $this->RawatModel->count($total);
		$data['selesai'] = $this->RawatModel->count($selesai);
		$data['buka'] = $buka; $data['tutup'] = $tutup;
		$data['hari'] = $this->RawatModel->hari($jadwal);
		$this->load->view('poli_umum/home',$data );

		if($this->input->post('submit_maksimum')){
			$where = array(
				'id_poli' => '1', );
			$data = array(
				'maksimum_pasien' => $this->input->post('input_maksimum'),
			);
			$this->PoliklinikModel->update($where,$data);
			echo '<body>';
			echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
			echo '<script type="text/javascript" >';
			echo 'swal({';
			echo '  title: "Data berhasil diganti.!!!",';
			echo '  text: "Data User telah berhasil diganti dengan yang baru",';
			echo '	icon: "success",';
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
			echo '      window.location = "'.base_url().'p_umum/home/";';
			echo '      break;';				 
			echo '    default:';
			echo '      window.location = "'.base_url().'p_umum/home/";';
			echo '  }';
			echo '});';
			echo '</script>';
			echo  '</body>';
		}
	}
}
