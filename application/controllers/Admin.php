<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		// $this->load->view('admin/login');
	}

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('status') == "login"){
		// 	$this->load->view('welcome_message');
		// }		
		$this->load->model('LoginModel');
 
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->LoginModel->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url('home'));
		}else{
			echo "Username dan password salah !";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
