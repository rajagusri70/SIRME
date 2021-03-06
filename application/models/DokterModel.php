<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DokterModel extends CI_Model{


	function __construct() {
        parent::__construct(); 
        date_default_timezone_set("Asia/Jakarta");   
        
    }



	public function view(){
		return $this->db->get("pasien")->result();
	}


	public function viewPasien($where, $no_pasien){
		$this->db->where($where,$no_pasien);
		return $this->db->get("pasien")->result();
	}

	public function cekID($no_ktp,$nama){
		$this->db->where('no_ktp', $no_ktp);
		$this->db->or_where('nama', $nama);		
		// $this->db->where('no_ktp', $no_ktp);
    	// $this->db->or_like('nama', $nama);
    	return $this->db->get('pasien');
	}

	public function input($upload){
		$tanggal_lahir = $this->input->post('input_tanggal_lahir');
		$tanggal = date("d-m-Y");
		$tahun = date("Y");
		$tahun_lahir = substr($tanggal_lahir, -4);
		$umur = $tahun - $tahun_lahir;
		$data = array(
			"no_ktp" => $this->input->post('input_no_ktp'),
			"no_kk" => $this->input->post('input_no_kk'),
			"nama" => $this->input->post('input_nama'),
			"jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
			"tanggal_lahir" => $tanggal_lahir,
			"tempat_lahir" => $this->input->post('input_tempat_lahir'),
			"umur" => $umur,
			"alamat" => $this->input->post('input_alamat'),
			"pekerjaan" => $this->input->post('input_pekerjaan'),
			"pendidikan" => $this->input->post('input_pendidikan'),
			"golongan_darah" => $this->input->post('input_golongan_darah'),
			"status_pernikahan" => $this->input->post('input_status_pernikahan'),
			"nama_orangtua" => $this->input->post('input_nama_orangtua'),
			"pekerjaan_orangtua" => $this->input->post('input_pekerjaan_orangtua'),
			"nama_suamistri" => $this->input->post('input_nama_suamistri'),
			"agama" => $this->input->post('input_agama'),
			"no_telpon" => $this->input->post('input_no_telpon'),
			"tanggal_daftar" => $tanggal,
			"foto" => $upload['file']['file_name']
		);
		$this->db->insert('pasien', $data);
	}

	public function cariPasienLama($parameter_cari){
		$cari_input = $this->input->post('cari_input');
		// if($parameter_cari == 'id_pasien'){
		// 	$where = array(
		// 	'no_pasien' => $cari_input);
		// 	return $this->db->get_where("pasien",$where)->result();
		// }elseif ($parameter_cari == 'nama_pasien') {
		// 	$where = $cari_input; 
		// 	$this->db->like("nama",$where);
		// 	return $this->db->get("pasien")->result();
		// }elseif($parameter_cari == 'no_ktp'){
		// 	$where = array(
		// 	'no_ktp' => $cari_input);
		// 	return $this->db->get_where("pasien",$where)->result();
		// }elseif ($parameter_cari == 'no_kk') {
		// 	$where = array(
		// 	'no_kk' => $cari_input);
		// 	return $this->db->get_where("pasien",$where)->result();
		// }
		$this->db->like('no_pasien', $cari_input);
		$this->db->or_like('no_ktp', $cari_input);
    	$this->db->or_like('nama', $cari_input);
    	$this->db->or_like('no_kk', $cari_input);
		return $this->db->get("pasien")->result();
		//return $this->db->get()->result();
	}

	public function cari(){
		$cari_input = $this->input->post('cari_input');

		$this->db->like('no_pasien', $cari_input);
    	$this->db->or_like('nama', $cari_input);
		return $this->db->get('pasien')->result();
		// $this->db->select('*'); //memeilih semua field
	//    $this->db->from($table); //memeilih tabel
	//    $this->db->join('rawat_jalan', 'rawat_jalan.no_pasien = pasien.no_pasien');
	//    $this->db->like($where,$where_parameter);
	//    $this->db->or_like($where2,$where_parameter2);
	//    return $this->db->get()->result();

	}

	// ================Rawat Jalan

	// public function poli(){
	// 	date_default_timezone_set("Asia/Jakarta");
	// 	$nomor_pasien = $_GET['nomor_pasien'];
	// 	$tanggal = date("d-m-Y");
 //        $waktu = date("H:i:s");
 //        $biaya = $this->input->post('input_biaya');
 //        $poliklinik = $this->input->post('input_poliklinik');
 //        $status = "Dalam Pemeriksaan";
	// 	$data = array(
	// 		"no_pasien" => $nomor_pasien,
	// 		"tanggal" => $tanggal,
	// 		"waktu" => $waktu,
	// 		"biaya" => $biaya,
	// 		"poliklinik" => $poliklinik,
	// 		"status" => $status
	// 	);
	// 	$this->db->insert('rawat_jalan', $data);
	// }

	// public function cariStatus($table,$where,$where_parameter){
	// 	//$poliklinik = $this->input->post('input_poliklinik');
	// 	// $where = array(
	// 	// 	'no_pasien' => $poliklinik
	// 	// );

	// 	$this->db->select('*'); //memeilih semua field
	//     $this->db->from($table); //memeilih tabel
	//     $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	//     $this->db->where($where,$where_parameter);
	//     return $this->db->get()->result();
	// }

	public function update($where,$data){
		$this->db->where("no_pasien",$where);
		$this->db->update("pasien",$data);
	}

	public function pasienBaruHariIni(){
		$tanggal = date("d-m-Y");
		$this->db->where('tanggal_daftar',$tanggal);
		$this->db->from("pasien");
		return $this->db->count_all_results();
	}

	public function test(){
		return $this->db->get("poli_umum")->result();
	}

	public function pasienRawatJalan($id_rawat){
		$this->db->select('*'); //memeilih semua field
	    $this->db->from('pasien'); //memeilih tabel
	    $this->db->join('rawat_jalan', 'rawat_jalan.no_pasien = pasien.no_pasien');
	    $this->db->where('rawat_jalan.id_rawat', $id_rawat);
	    return $this->db->get()->result();
	}
}