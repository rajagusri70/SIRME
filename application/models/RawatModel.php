<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RawatModel extends CI_Model{

	function __construct() {
        parent::__construct();    
        
    }

	public function poli(){
		date_default_timezone_set("Asia/Jakarta");
		$nomor_pasien = $_GET['nomor_pasien'];
		$tanggal = date("d-m-Y");
        $waktu = date("H:i:s");
        $biaya = $this->input->post('input_biaya');
        $poliklinik = $this->input->post('input_poliklinik');
        $status = "Dalam Pemeriksaan";
		$data = array(
			"no_pasien" => $nomor_pasien,
			"tanggal" => $tanggal,
			"waktu" => $waktu,
			"biaya" => $biaya,
			"poliklinik" => $poliklinik,
			"status" => $status
		);
		$this->db->insert('rawat_jalan', $data);
	}

	public function cariStatus($table,$where,$where_parameter){
		//$poliklinik = $this->input->post('input_poliklinik');
		// $where = array(
		// 	'no_pasien' => $poliklinik
		// );

		$this->db->select('*'); //memeilih semua field
	    $this->db->from($table); //memeilih tabel
	    $this->db->join('pasien', 'rawat_jalan.no_pasien = pasien.no_pasien');
	    $this->db->where($where,$where_parameter);
	    return $this->db->get()->result();
	}

	public function tampilkanRawat(){
		// $this->db->select('*'); //memeilih semua field
	 //    $this->db->from($table); //memeilih tabel
	 //    $this->db->join('pasien', ''.$table.'.no_pasien = pasien.no_pasien');
	 //    $this->db->or_where($where);
	 //    return $this->db->get()->result();
		$querry = "SELECT * FROM `rawat_jalan` JOIN `pasien` ON `rawat_jalan`.`no_pasien` = `pasien`.`no_pasien` WHERE `rawat_jalan`.`status` = 'Menunggu' OR `rawat_jalan`.`status` = 'Dalam Pemeriksaan'";
		return $this->db->query($querry)->result();
	}

	public function simpan($data){
		$this->db->insert('tb_diagnosa_umum', $data);
	}

	public function hapusDiagnosa($where){
		$this->db->delete('tb_diagnosa_umum',$where);
	}

	public function viewDiagnosa($id_rawat){
		$where = array('id_rawat' => $id_rawat, );
		return $this->db->get_where("tb_diagnosa_umum",$where)->result();
	}
}