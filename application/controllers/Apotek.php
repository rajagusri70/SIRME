<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apotek extends CI_Controller {
	

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('status') == "login"){
		// 	$this->load->view('welcome_message');
		// }
				
		$this->load->model('AdminModel');
		$this->load->model('PoliklinikModel');
		$this->load->model('ObatModel');
 
	}

	public function index(){
		
	}

	public function obat(){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['data_obat'] = $this->ObatModel->viewObat();
		$this->load->view('apotek/obat',$data);
	}
}
