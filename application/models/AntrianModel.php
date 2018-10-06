<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AntrianModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

    public function view(){
    	return $this->db->get('tb_antrian')->result_array();
    }

    public function count($where){
		$this->db->where($where);
		$this->db->from("tb_antrian");
		return $this->db->count_all_results();
	}

	public function poli($kode,$user_id){
		date_default_timezone_set("Asia/Jakarta");
		$nomor_pasien = $_GET['nomor_pasien'];
		$tanggal = date("d-m-Y");
        $jam = date("H:i:s");
        $poliklinik = $this->input->post('input_poliklinik');
        $dokter = $this->input->post('input_dokter');
        $status = "Menunggu";
		$data = array(
			"id" => $kode,
			"no_pasien" => $nomor_pasien,
			"tanggal" => $tanggal,
			"jam" => $jam,
			"poliklinik" => $poliklinik,
			"status" => $status,
			"praktisi" => $user_id,
			"dokter" => $dokter
		);
		$this->db->insert('tb_antrian', $data);
	}

	public function viewWhere($where, $where_parameter){
		$this->db->select('*'); //memeilih semua field
	    $this->db->from('tb_antrian');
	    $this->db->where($where,$where_parameter);
	    return $this->db->get()->result();
	}

	public function cekPasien(){
		$nomor_pasien = $_GET['nomor_pasien'];
		$query = "SELECT * FROM `tb_antrian` WHERE no_pasien = {$nomor_pasien} AND (status = 'Menunggu' OR status = 'Dalam Pemeriksaan')";
		return $this->db->query($query);
	}

	public function tampilkanAntrian($user_id){
		$querry = "SELECT * FROM `tb_antrian` JOIN `pasien` ON `tb_antrian`.`no_pasien` = `pasien`.`no_pasien` WHERE tb_antrian.poliklinik = 'Umum' AND (`tb_antrian`.`status` = 'Menunggu' OR `tb_antrian`.`status` = 'Dalam Pemeriksaan') AND `dokter` = '".$user_id."'"; 
		return $this->db->query($querry)->result();
	}

	public function updateStatus($where,$data){
		$this->db->where($where);
		$this->db->update("tb_antrian",$data);
	}

	// public function poli($timestamp,$user_id){
	// 	date_default_timezone_set("Asia/Jakarta");
	// 	$nomor_pasien = $_GET['nomor_pasien'];
	// 	$tanggal = date("d-m-Y");
 //        $waktu = date("H:i:s");
 //        $biaya = $this->input->post('input_biaya');
 //        $poliklinik = $this->input->post('input_poliklinik');
 //        $dokter = $this->input->post('input_dokter');
 //        $status = "Menunggu";
	// 	$data = array(
	// 		"no_pasien" => $nomor_pasien,
	// 		"timestamp" => $timestamp,
	// 		"tanggal" => $tanggal,
	// 		"waktu" => $waktu,
	// 		"biaya" => $biaya,
	// 		"poliklinik" => $poliklinik,
	// 		"status" => $status,
	// 		"pendaftar" => $user_id,
	// 		"dokter" => $dokter

	// 	);
	// 	$this->db->insert('rawat_jalan', $data);
	// }

	// public function cekPasien(){
	// 	$nomor_pasien = $_GET['nomor_pasien'];
	// 	$query = "SELECT * FROM `rawat_jalan` WHERE no_pasien = {$nomor_pasien} AND (status = 'Menunggu' OR status = 'Dalam Pemeriksaan')";
		
	// 	return $this->db->query($query);
	// }

	// public function viewWhere($where, $where_parameter){
	// 	$this->db->select('*'); //memeilih semua field
	//     $this->db->from('rawat_jalan');
	//     $this->db->where($where,$where_parameter);
	//     return $this->db->get()->result();
	// }

	// public function statusRawat($table,$where,$where_parameter){
	// 	$this->db->select('*'); //memeilih semua field
	//     $this->db->from($table);
	//     $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	//     $this->db->where($where,$where_parameter);
	//     return $this->db->get()->result();
	// }

	// public function cariStatus($table,$where,$where_parameter){
	// 	//$poliklinik = $this->input->post('input_poliklinik');
	// 	// $where = array(
	// 	// 	'no_pasien' => $poliklinik
	// 	// );

	// 	$this->db->select('*'); //memeilih semua field
	//     $this->db->from($table); //memeilih tabel
	//     $this->db->join('rawat_jalan', 'tb_periksa.id_rawat = rawat_jalan.id_rawat');
	//     $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	//     $this->db->where($where,$where_parameter);
	//     return $this->db->get()->result();
	// }

	// public function tampilkanRawat($user_id){
	// //		$this->db->select('*'); //memeilih semua field
	// //    	$this->db->from($table); //memeilih tabel
	// //    	$this->db->join('pasien', ''.$table.'.no_pasien = pasien.no_pasien');
	// //    	$this->db->or_where($where);
	// //    	return $this->db->get()->result();
		
	// 	$querry = "SELECT * FROM `rawat_jalan` JOIN `pasien` ON `rawat_jalan`.`no_pasien` = `pasien`.`no_pasien` WHERE rawat_jalan.poliklinik = 'Umum' AND (`rawat_jalan`.`status` = 'Menunggu' OR `rawat_jalan`.`status` = 'Dalam Pemeriksaan') AND `dokter` = '".$user_id."'"; 
	// 	return $this->db->query($querry)->result();
	// }

	// public function tampilkanSelesai($where){
	// 	$this->db->select('*'); //memeilih semua field
	//     $this->db->from('rawat_jalan'); //memeilih tabel
	//     $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	//      $this->db->where('status','Selesai');
	//     return $this->db->get()->result();
	// 	//return $this->db->get_where('');
	// }

	// public function simpan($data){
	// 	$this->db->insert('tb_diagnosa_umum', $data);
	// }

	// public function hapusDiagnosa($where){
	// 	$this->db->delete('tb_diagnosa_umum',$where);
	// }

	// public function viewDiagnosa($id_poli_umum){
	// 	$where = array('id_poli_umum' => $id_poli_umum );
	// 	return $this->db->get_where("tb_diagnosa_umum",$where)->result();
	// }

	// public function updateStatus($where,$data){
	// 	$this->db->where("id_rawat",$where);
	// 	$this->db->update("rawat_jalan",$data);
	// }

	// // public function count($id_rawat){
	// // 	return $this->db->get('tb_diagnosa_umum')->num_rows();
	// // 	// $this->db->select('');
	// // 	// $this->db->from('tb_diagnosa_umum');
	// // 	// $this->db->where('id_rawat',$id_rawat);
	// // 	// $query = "";
	// // 	// return $this->db->query()->result();
	// // }

	// public function viewStatus($where){
	// 	return $this->db->get_where('rawat_jalan',$where)->result();
	// }

	// public function hariIni(){
	// 	$tanggal = date("d-m-Y");
	// 	$this->db->where('tanggal',$tanggal);
	// 	$this->db->from("rawat_jalan");
	// 	return $this->db->count_all_results();
	// }

	// public function antrian(){
	// 	$tanggal = date("d-m-Y");
	// 	$this->db->where('status','Menunggu');
	// 	$this->db->where('tanggal',$tanggal);
	// 	$this->db->from("rawat_jalan");
	// 	return $this->db->count_all_results();
	// }

	// public function selesai(){
	// 	$tanggal = date("d-m-Y");
	// 	$this->db->where('status','Selesai');
	// 	$this->db->where('tanggal',$tanggal);
	// 	$this->db->from("rawat_jalan");
	// 	return $this->db->count_all_results();
	// }

	// public function count($where){
	// 	$this->db->where($where);
	// 	$this->db->from("rawat_jalan");
	// 	return $this->db->count_all_results();
	// }

	// public function hari($where){
	// 	$this->db->where($where);
	// 	$this->db->from("tb_jadwal");
	// 	return $this->db->get()->result();
	// }
}