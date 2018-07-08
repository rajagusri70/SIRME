<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect(base_url("home")); //Jika user sudah Login, maka saat visit Login page, akan dialihkan ke halaman welcome
		}
		$this->load->model('AdminModel');		
		// $this->load->model('LoginModel');
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->AdminModel->cek_login("admin",$where)->num_rows();
		$cek_tipe = $this->AdminModel->cek_login("admin",$where);
		$tipe_admin = $cek_tipe->result_array();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'tipe_admin' => $tipe_admin[0]['tipe_admin']
				);
			if($tipe_admin[0]['tipe_admin'] == 'resepsionis'){
				$this->session->set_userdata($data_session);
				redirect(base_url('resepsionis/home'));
			}else{
				$this->session->set_userdata($data_session);
				redirect(base_url('p_umum/check_up/pasien_terdaftar'));
			}
		}else{
			echo '<body>';
			echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
			echo '<script type="text/javascript" >';
			echo 'swal({';
			echo '  title: "Password Salah",';
			echo '  text: "Data yang dimasukan untuk Login salah. Silahkan Login menggunakan data yang benar.!",';
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
			echo '      window.location = "'.base_url().'login/";';
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