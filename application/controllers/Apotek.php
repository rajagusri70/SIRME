<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apotek extends CI_Controller {
	

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('status') == "login"){
		// 	$this->load->view('welcome_message');
		// }
				
		$this->load->model('UserModel');
		$this->load->model('PoliklinikModel');
		$this->load->model('ObatModel');
		$this->load->model('ResepModel');
		$this->load->model('ItemResepModel');
		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index(){
		
	}

	public function obat(){
		$data['users'] = $this->UserModel->tampilkan();
		$data['data_obat'] = $this->ObatModel->viewObat();
		$this->load->view('apotek/obat',$data);
		if($this->input->post('submit_obat')){
			$data = array(
				'nama_obat' => $this->input->post('input_nama_obat'), 
				'jenis' => $this->input->post('input_satuan'), 
				'kategori' => $this->input->post('input_kategori'), 
				'harga' => $this->input->post('input_harga'), 
				'stok' => $this->input->post('input_stok'), 
				'deskripsi' => $this->input->post('input_deskripsi'), 
			);
			$this->ObatModel->tambahObat($data);
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
			echo '      window.location = "'.base_url().'apotek/obat";';
			echo '      break;';				 
			echo '    default:';
			echo '      window.location = "'.base_url().'apotek/obat";';
			echo '  }';
			echo '});';
			echo '</script>';
			echo  '</body>';
		}
	}

	public function detail($no_obat){
		$where = array('no_obat' => $no_obat, );
		$data['data_obat'] = $this->ObatModel->viewWhere($where);
		$this->load->view('apotek/detail',$data);
		if($this->input->post('tombol_submit_obat')){
			$data = array(
				'nama_obat' => $this->input->post('input_nama_obat'),
				'jenis' => $this->input->post('input_satuan'),
				'kategori' => $this->input->post('input_kategori'), 
				'harga' => $this->input->post('input_harga'),
				'stok' => $this->input->post('input_stok'),
				'deskripsi' => $this->input->post('input_deskripsi'),
			);
			$where = array('no_obat' => $no_obat, );
			$this->ObatModel->update($where,$data);
			redirect(base_url('apotek/detail/'.$no_obat));
		}
	}

	public function hapus(){
		$jenis = $this->input->post('jenis');
		$item_id = $this->input->post('item_id');
		
		if($jenis == '1'){
			$where = array(
				'no_obat' => $item_id, 
			);
			$this->ObatModel->hapus($where);
			echo json_encode(array('status' => true));
		}
	}

	public function resep_diterima(){
		$tanggal = date("d-m-Y");
		$data['users'] = $this->UserModel->tampilkan();
		$where = array('tb_resep.tanggal' => $tanggal, );
		$data['resep_diterima'] = $this->ResepModel->viewAllWhere($where);
		$this->load->view('apotek/resep_diterima',$data);
	}



	public function resep($id_resep){
		$where = array('no_id' => $id_resep, );
		$data['daftar_resep'] = $this->ItemResepModel->viewResep($where);
		$where_all = array('tb_resep.no_id' => $id_resep, );
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
			$tanggal_masuk = $ud->tanggal_masuk;
			$nama_dokter = $ud->nama_dokter;
			$nip = $ud->no_sip;

			$data['nama'] = $nama;
			$data['umur'] = $umur;
			$data['alamat'] = $alamat;
			$data['nama_dokter'] = $nama_dokter;
			$data['nip'] = $nip;
			$data['tanggal_masuk'] = $tanggal_masuk;

		}
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");

		#menambahkan nama dokter pemeriksa
		
		
		$this->load->view('apotek/resep',$data);
	}

	public function atur_resep($id_resep){
		$where = array('no_id' => $id_resep, );
		$data['daftar_resep'] = $this->ItemResepModel->viewResep($where);
		$where_all = array('tb_resep.no_id' => $id_resep, );
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
			$tanggal_masuk = $ud->tanggal_masuk;
			$nama_dokter = $ud->nama_dokter;
			$nip = $ud->no_sip;

			$data['nama'] = $nama;
			$data['id_resep'] = $id_resep;
			$data['umur'] = $umur;
			$data['alamat'] = $alamat;
			$data['nama_dokter'] = $nama_dokter;
			$data['nip'] = $nip;
			$data['tanggal_masuk'] = $tanggal_masuk;

		}
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");
		$this->load->view('apotek/atur_resep',$data);
	}

	public function copy_resep($id_resep){
		$where = array('no_id' => $id_resep, );
		$data['daftar_resep'] = $this->ItemResepModel->viewResep($where);
		$where_all = array('tb_resep.no_id' => $id_resep, );
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
			$tanggal_masuk = $ud->tanggal_masuk;
			$nama_dokter = $ud->nama_dokter;
			$nip = $ud->no_sip;
			$data['id_resep'] = $id_resep;
			$data['nama'] = $nama;
			$data['umur'] = $umur;
			$data['alamat'] = $alamat;
			$data['nama_dokter'] = $nama_dokter;
			$data['nip'] = $nip;
			$data['tanggal_masuk'] = $tanggal_masuk;
			$tanggal = date("d-m-Y");
			$data['tanggal'] = $tanggal;
		}
		$tanggal = date("d-m-Y");
		$waktu = date("H:i:s");

		#menambahkan nama dokter pemeriksa
		
		
		$this->load->view('apotek/copy_resep',$data);
	}

	public function update_status(){
		$where = array(
			'item_id' => $this->input->post('item_id') 
		);
		$data = array('status_resep' =>  'det');
		$this->ItemResepModel->updateResep($where,$data);
		echo json_encode(array('status' => true));
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

	public function test(){
		echo $hari = date ("l");
	}
}
