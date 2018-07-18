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
				
		$this->load->model('AdminModel');
		$this->load->model('PoliklinikModel');
 
	}

	public function user(){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['poliklinik'] = $this->PoliklinikModel->viewPoli();
		$data['data_admin'] = $this->AdminModel->selectNot();
		$data['jabatan'] = $this->AdminModel->getJabatan();
		$this->load->view('admin/user',$data);
		if($this->input->post('submit_dokter')){ // Jika user mengklik tombol submit yang ada di form
			$upload = $this->AdminModel->upload();
			if($upload['result'] == "success"){
					$this->AdminModel->input($upload);// Panggil fungsi input() yang ada di PasienModel.php
					// $this->load->view('pasien/pasien_baru');
						//$this->load->view('admin/user',$data);
						
						echo '<body>';
						echo '<script src="'.base_url().'assets/js/sweetalert.min.js"></script>';
						echo '<script type="text/javascript" >';
						echo 'swal({';
						echo '  title: "Data Berhasil Ditambahkan.!!!",';
						echo '  text: "Data user yang baru telah berhasil ditambahkan",';
						echo '	icon: "success",';
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
						echo '      window.location = "'.base_url().'admin/user";';
						echo '      break;';				 
						echo '    default:';
						echo '      window.location = "'.base_url().'admin/user";';
						echo '  }';
						echo '});';
						echo '</script>';
						echo  '</body>';
					
					//$this->load->view('pasien/pasien_baru');
				}else{
					//$data['message'] = $upload['error'];
					$this->AdminModel->input($upload,'Dokter');// Panggil fungsi input() yang ada di PasienModel.php
					redirect('admin/user');
				}
		}
	}

	public function dokter(){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['poliklinik'] = $this->PoliklinikModel->viewPoli();
		$data['data_admin'] = $this->AdminModel->selectAll();
		$data['jabatan'] = $this->AdminModel->getJabatan();
		$this->load->view('admin/user',$data);
	}

	public function hapus(){
		$jenis = $this->input->post('jenis');
		$item_id = $this->input->post('item_id');
		
		if($jenis == '1'){
			$where = array(
				'user_id' => $item_id, 
			);
			$this->AdminModel->hapus($where);
			echo json_encode(array('status' => true));
		}
	}

	public function cek_id(){
		$username = $this->input->post('username');
		$where = array(
			'username' => $username
			);
		$cek = $this->AdminModel->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			echo json_encode(array('status' => true));
		}else{

		}
	}

	public function profile($user_id){
		$data['users'] = $this->AdminModel->tampilkan();
		$data['admin'] = $this->AdminModel->selectWhere($user_id);

		$data_admin = $this->AdminModel->selectWhere($user_id);
		foreach ($data_admin as $da) {
			$tipe_admin = $da->tipe_admin;
		}
		$data['tipe_admin'] = $tipe_admin;
		$data['poliklinik'] = $this->PoliklinikModel->viewPoli();
		$data['jabatan'] = $this->AdminModel->getJabatan();
		$this->load->view('admin/profile',$data);
		if($this->input->post('tombol_submit1')){
			$data = array(
				'nama' => $this->input->post('input_nama'),
				'jenis_kelamin' => $this->input->post('input_jenis_kelamin'),
				'alamat' => $this->input->post('input_alamat'),
				'kota' => $this->input->post('input_kota'),
				'no_hp' => $this->input->post('input_no_hp'),
				'email' => $this->input->post('input_email')
			);
			$this->AdminModel->update($user_id,$data);
			//redirect(base_url('admin/profile/'.$user_id));
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
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '      break;';				 
						echo '    default:';
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '  }';
						echo '});';
						echo '</script>';
						echo  '</body>';
		}elseif ($this->input->post('tombol_submit2')){
			$data = array(
				'username' => $this->input->post('input_username'),
				'password' => $this->input->post('input_password')
			);
			$this->AdminModel->update($user_id,$data);
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
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '      break;';				 
						echo '    default:';
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '  }';
						echo '});';
						echo '</script>';
						echo  '</body>';
		}elseif($this->input->post('tombol_submit_jabatan')){
			if($tipe_admin == 'Dokter'){
				$data = array(
					'spesialis' => $this->input->post('input_spesialis'),
				);
				$this->AdminModel->update($user_id,$data);
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
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '      break;';				 
						echo '    default:';
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '  }';
						echo '});';
						echo '</script>';
						echo  '</body>';
			}else{
				$data = array(
					'tipe_admin' => $this->input->post('input_jabatan'),
				);
				$this->AdminModel->update($user_id,$data);
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
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '      break;';				 
						echo '    default:';
						echo '      window.location = "'.base_url().'admin/profile/'.$user_id.'";';
						echo '  }';
						echo '});';
						echo '</script>';
						echo  '</body>';
			}
			
		}
	}

	public function update($user_id){
		$data = array(
				'nama' => $this->input->post('input_nama'),
				'jenis_kelamin' => $this->input->post('input_jenis_kelamin'),
				'alamat' => $this->input->post('input_alamat'),
				'kota' => $this->input->post('input_kota'),
				'no_hp' => $this->input->post('input_no_hp'),
				'email' => $this->input->post('input_email')
			);
		$this->AdminModel->update($user_id,$data);
		// echo "<script>window.close();</script>";
		// redirect('pasien/profile_pasien/'.$no_pasien);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
