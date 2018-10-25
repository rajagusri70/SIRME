<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fhir extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('UrlModel');
		$this->load->model('ImagingModel');

		date_default_timezone_set("Asia/Jakarta");
 
	}

	public function index($server,$param,$value){
		//$this->load->view('fhir/fhir-retrieve');
	}

	public function result($server,$resc,$param,$value){
		$no_pasien = $_GET['no_pasien'];
		$urlGet = $this->UrlModel->selectWhere(array('pk' => $server, ))->result_array();
		foreach ($urlGet as $u) {
			$urlAPI = $u['url'];
		}
		$url = $urlAPI.'/'.$resc.'?'.$param.'='.$value;
		$json = file_get_contents($url); 
		$content = json_decode($json);
		$data['result'] = $content->entry;
		$data['url'] = $urlAPI.'/'.$resc.'/';
		$data['no_pasien'] = $no_pasien;
		$this->load->view('fhir/fhir-retrieve',$data);
	}

	public function getData(){
		$id = $this->input->post('id');
		$resourceType = $this->input->post('resourceType');
		$no_pasien = $this->input->post('no_pasien');
		$server = $this->input->post('server');

		$url = $server.$id;
		$json = file_get_contents($url); 
		$content = json_decode($json);

		#assing PK for each
		$pk_study = 'st'.date("dmy").uniqid();
		//$pk_series = 'sr'.date("dmy").uniqid();
		
		#memasukan data ake study
		$data = array(
			'pk' => $pk_study,
			'study_iuid' => $content->uid,
			'no_pasien' => $no_pasien,
			'waktu' => $content->started,
			'deskripsi' => $content->description,  
		);
		$this->ImagingModel->insertStudy($data);

		#memasukan data ke series
		$seriesContent = $content->series;
		foreach ($seriesContent as $sc) {
			$pk_series = 'sr'.date("dmy").uniqid();
			$seriesData = array(
				'pk' => $pk_series,
				'fk_study' => $pk_study,
				'series_iuid' => $sc->uid,
				'modality' => $sc->modality,
				'started' => $sc->started,  
			);
			$this->ImagingModel->insertSeries($seriesData);

			#memasukan data ke instance
			$instanceContent = $sc->instance;
			foreach ($instanceContent as $ic) {
				$pk_instance = 'in'.date("dmy").uniqid(); 
				$instanceData = array(
					'pk' => $pk_instance,
					'fk_series' => $pk_series,
					'instance_iuid' => $sc->uid,
					'sop_class' => $sc->modality,
				);
				$this->ImagingModel->insertInstance($instanceData);
			}
		}

		echo json_encode(array('status' => true));
	}
}
