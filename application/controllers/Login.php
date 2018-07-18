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
			'password' => $password
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
			if($tipe_admin[0]['tipe_admin'] == 'Resepsionis'){
				$this->session->set_userdata($data_session);
				redirect(base_url('resepsionis/home'));
			}
			elseif($tipe_admin[0]['tipe_admin'] == 'Admin'){
				$this->session->set_userdata($data_session);
				redirect(base_url('admin/user'));
			}
			elseif($tipe_admin[0]['tipe_admin'] == 'Dokter'){
				$this->session->set_userdata($data_session);
				redirect(base_url('p_umum/check_up/pasien_terdaftar'));
			}
		}else{
			$this->load->view('login');
			echo "<head>";
			echo '<link href='.base_url().'/assets/css/bootstrap.min.css" rel="stylesheet">';
			echo "</head>";
			echo '<body>';
			echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
			echo '<script type="text/javascript" >';
			echo 'swal({';
			echo '  title: "Username atau Password Salah.!!!",';
			echo '  text: "Data yang dimasukan untuk Login salah. Silahkan Login menggunakan data yang benar.!",';
			echo '	icon: "warning",';
			echo '  buttons: {';
					//echo '    cancel: "Run away!",';
			echo '    catch: {';
			echo '      text: "Oke",';
			echo '      value: "oke",';
			echo '    },';
					//echo '    defeat: true,';
			echo '  },';
			echo '})';
			echo '.then((value) => {';
			echo '  switch (value) {';				 
			echo '    case "oke":';
			echo '      window.location = "'.base_url().'login/";';
			echo '      break;';				 
			echo '    default:';
			echo '      window.location = "'.base_url().'login/";';
			echo '  }';
			echo '});';
			echo '</script>';
			echo  '</body>';
		}
	}
}