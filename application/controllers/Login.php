<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/login');
	}

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect(base_url("home")); //Jika user sudah Login, maka saat visit Login page, akan dialihkan ke halaman welcome
		}		
		// $this->load->model('LoginModel');
	}
}