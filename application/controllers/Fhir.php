<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fhir extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('UrlModel');
		$this->load->model('ImagingModel');
		$this->load->model('ObservationModel');
		$this->load->model('DiagnosisModel');


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

		if ($resc == 'ImagingStudy') {
			
			$url = $urlAPI.'/'.$resc.'?'.$param.'='.$value;
			$content = @file_get_contents($url); 

			if ($content === FALSE) {
				echo "Server not Respond. <br> It might be the server is turned of or under maintenance. <br>Try Again or contact the Administrator <br>for further information<br><br><br>@isErrorCatcher";
			}else{
				$json = json_decode($content);
				$data['result'] = $json->entry;
				$data['url'] = $urlAPI.'/'.$resc.'/';
				$data['no_pasien'] = $no_pasien;
				$data['server'] = $server;
				$data['resource'] = $resc;
				$this->load->view('fhir/fhir-retrieve',$data);
			}
		}elseif ($resc == 'Observation') {

			$url = $urlAPI.'/'.$resc.'?'.$param.'='.$value;
			$content = @file_get_contents($url); 
			if ($content === FALSE) {
				echo "Server not Respond. <br> It might be the server is turned of or under maintenance. <br>Try Again or contact the Administrator <br>for further information<br><br><br>@isErrorCatcher";
			}else{
				$json = json_decode($content);
				$data['result'] = $json->entry;
				$data['url'] = $urlAPI.'/'.$resc.'/';
				$data['no_pasien'] = $no_pasien;
				$data['server'] = $server;
				$data['resource'] = $resc;
				$this->load->view('fhir/fhir-retrieve',$data);
			}
		}elseif ($resc == 'Condition') {

			$url = $urlAPI.'/'.$resc.'?'.$param.'='.$value;
			$content = @file_get_contents($url); 
			if ($content === FALSE) {
				echo "Server not Respond. <br> It might be the server is turned of or under maintenance. <br>Try Again or contact the Administrator <br>for further information<br><br><br>@isErrorCatcher";
			}else{
				$json = json_decode($content);
				$data['result'] = $json->entry;
				$data['url'] = $urlAPI.'/'.$resc.'/';
				$data['no_pasien'] = $no_pasien;
				$data['server'] = $server;
				$data['resource'] = $resc;
				$this->load->view('fhir/fhir-retrieve',$data);
			}
		}
	}

	public function getData(){
		$id = $this->input->post('id');
		$resourceType = $this->input->post('resourceType');
		$no_pasien = $this->input->post('no_pasien');
		$server = $this->input->post('url');
		$serv = $this->input->post('server');

		if ($resourceType == 'ImagingStudy') {
			$url = $server.$id;
			$content = file_get_contents($url); 
			$json = json_decode($content);

			#assign PK for each
			$pk_study = 'st'.date("dmy").uniqid();
			#memasukan data ke study
			$endpoint = substr($json->endpoint->reference, 9);
			$data = array(
				'pk' => $pk_study,
				'study_iuid' => $json->uid,
				'no_pasien' => $no_pasien,
				'waktu' => $json->started,
				'deskripsi' => $json->description,
				'endpoint' => $endpoint,
				'server' => $serv
			);
			$this->ImagingModel->insertStudy($data);

			#memasukan data ke series
			$seriesContent = $json->series;
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
						'instance_iuid' => $ic->uid,
						'sop_class' => $sc->modality,
					);
					$this->ImagingModel->insertInstance($instanceData);
				}
			}
			echo json_encode(array('status' => true));
		}elseif ($resourceType == "Observation") {
			$url = $server.$id;
			$content = file_get_contents($url); 
			$json = json_decode($content);

			$id_observation = 'ob'.date("dmy").uniqid();
			$no_rawat_jalan = substr($json->context->reference, 10);
			$time = $json->effectiveDateTime;
			list($tanggal, $jam) = explode('T', $time);
			$data = array(
				'id' => $id_observation,
				'status' => $json->status,
				'kategori' => $json->category[0]->coding[0]->display,
				'tipe_pemeriksaan' => $json->code->text,
				'no_pasien' => $no_pasien,
				'tanggal' => $tanggal,
				'jam' => $jam,
				'hasil' => $json->valueQuantity->value,
				'unit' => $json->valueQuantity->unit,
			);
			$this->ObservationModel->tambahObservation($data);
			echo json_encode(array('status' => true));
		}elseif ($resourceType == "Condition") {
			$url = $server.$id;
			$content = file_get_contents($url); 
			$json = json_decode($content);

			$id_condition = 'co'.date("dmy").uniqid();
			$no_rawat_jalan = substr($json->context->reference, 10);
			$time = $json->assertedDate;
			list($tanggal, $jam) = explode('T', $time);
			$data = array(
				'id' => $id_condition,
				'kode_diagnosis' => $json->code->coding[0]->code,
				'diagnosis' => $json->code->coding[0]->display,
				'no_pasien' => $no_pasien,
				'tanggal' => $tanggal,
				'jam' => $jam,
			);
			$this->DiagnosisModel->tambah($data);
			echo json_encode(array('status' => true));
		}
	}
}
