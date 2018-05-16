<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		// $this->load->view('admin/login');
	}

	function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
 
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
