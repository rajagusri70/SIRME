<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Api extends REST_Controller {

  function __construct()
  {
      // Construct the parent class
      parent::__construct();

      // Configure limits on our controller methods
      // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
      $this->methods['patient_get']['limit'] = 500;
      $this->methods['practitioner_get']['limit'] = 500;
      $this->methods['observation_get']['limit'] = 500; // 500 requests per hour per user/key
      $this->load->model('ImagingModel');;
  }

  public function imagingstudy_get($id = NULL){
      // If the id parameter doesn't exist return all the users
    if ($id == NULL){
      if (isset($_GET['patient'])) {
        $no_pasien = $_GET['patient'];
        if($no_pasien == NULL){
          $this->response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
          $data = $this->ImagingModel->search(array('pat_id' => $no_pasien, ))->result_array();

          $items = array();
          
          foreach ($data as $datas ) {
            $url = 'http://192.168.87.129/api/index.php/api/ImagingStudy/'.$datas['pk']; 
            $json = file_get_contents($url); 
            $content = json_decode($json);
            $resource = [
              'resource' => $content
            ]; 
            $items[] = $resource;
          }
          
          $bundle = [
            'resourceType' => 'Bundle',
            'id' => uniqid(),
            'type' => 'searchset',
            'entry' => 
              $items
          ];
          $this->response($bundle, REST_Controller::HTTP_OK);
          //echo "ID Provied Well educated";
        }
      }elseif (isset($_GET['ktp'])) {
        $no_ktp = $_GET['ktp'];
        if($no_ktp == NULL){
          $this->response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
          $data = $this->ImagingModel->search(array('pat_ktp' => $no_ktp, ))->result_array();

          $items = array();
          
          foreach ($data as $datas ) {
            $url = 'http://192.168.87.129/api/index.php/api/ImagingStudy/'.$datas['pk']; 
            $json = file_get_contents($url); 
            $content = json_decode($json);
            $resource = [
              'resource' => $content
            ]; 
            $items[] = $resource;
          }
          
          $bundle = [
            'resourceType' => 'Bundle',
            'id' => uniqid(),
            'type' => 'searchset',
            'entry' => 
              $items
          ];
          $this->response($bundle, REST_Controller::HTTP_OK);
          //echo "ID Provied Well educated";
        }
      }
      
    }else{
      $data = $this->ImagingModel->selectStudy(array('study.pk' => $id));

      $seriesArray = array();
      $seriesData = $this->ImagingModel->selectSeries(array('study_fk' => $id, ));

      foreach ($seriesData as $sd) {
        //$series_pk = $sd->pk;
        $instanceArray = array();
        $series_availability = $sd->availability;
        if ($series_availability == 0){
          $se_a = 'ONLINE';
        }
        $instanceData = $this->ImagingModel->selectInstance(array('series_fk' => $sd->pk, ));
        foreach ($instanceData as $id) {
          $instanceJSON = [
            'uid' => $id->sop_iuid,
            'number' => $id->inst_no,
            'sopClass' => $id->sop_cuid
          ];
          $instanceArray[] = $instanceJSON; 
        }

        $seriesJSON = [
          'uid' => $sd->series_iuid,
          'modality' => $sd->modality,
          'numberOfInstances' => $sd->num_instances,
          'availability' => $se_a,
          'endpoint' => [
            'reference' => 'Endpoint/1'
          ],
          'started' => $sd->created_time,
          'instance' => $instanceArray
        ];
        $seriesArray[] = $seriesJSON; 

      }
      
      // foreach ($instanceData as $id) {
      //   $instance_pk = $id->pk
      // }

      foreach ($data as $data) {
        $study_availability = $data->availability;
        //$series_availability = $data->series_availability;
        if ($study_availability == 0) {
          $sa = 'ONLINE';
        }
        
        $imagingstudy = [
          'resourceType' => 'ImagingStudy',
          'id' => $data->study_pk,
          'uid' => $data->study_iuid,
          'availability' => $sa,
          'modalityList' => [
            [
              'system' => 'http://dicom.nema.org/resources/ontology/DCM',
              'code' => $data->mods_in_study
            ]
          ],
          'patient' => [
            'reference' => 'Patient/'.$data->pat_id
          ],
          'started' => $data->created_time,
          'endpoint' => [
            'reference' => 'Endpoint/1'
          ],
          'numberOfSeries' => $data->num_series,
          'numberOfInstances' => $data->num_instances,
          'description' => $data->study_desc,
          'series' => $seriesArray

          // [
          //   [
          //     'uid' => $data->series_iuid,
          //     'modality' => $data->modality,
          //     'numberOfInstances' => $data->num_instances,
          //     'availability' => $se_a,
          //     'endpoint' => [
          //       'reference' => 'Endpoint/2'
          //     ],
          //     'started' => $data->created_time,
          //     'instance' => [
          //       [
          //         'uid' => $data->sop_iuid,
          //         'number' => $data->inst_no,
          //         'sopClass' => $data->sop_cuid
          //       ]
          //     ]
          //   ]
          // ]
        ];
      }
      
      if ($imagingstudy){
        $this->response($imagingstudy, REST_Controller::HTTP_OK);
      }
      else{
          
      }
    }
  }

  public function endpoint_get($id = NULL){
    
    if ($id == NULL) {
      $this->response([
              'status' => FALSE,
              'message' => 'User could not be found'
          ], REST_Controller::HTTP_BAD_REQUEST);
    }else{
      $dataEndpoint = $this->ImagingModel->selectEndpoint(array('pk' => $id, ));
      foreach ($dataEndpoint as $de) {
        $endpoint = [
          'resourceType' => 'Endpoint',
          'id' => $de->pk,
          'status' => 'active',
          'connectionType' => [
            'system' => 'http://hl7.org/fhir/endpoint-connection-type',
            'code' => $de->connectionType_code
          ],
          'name' => $de->name,
          'paloadType' => [
            [
              'text' => $de->payloadType
            ]
          ],
          'address' => $de->address
        ];
      }
    }
    
    if ($endpoint){
      $this->response($endpoint, REST_Controller::HTTP_OK);
    }
    else{
        
    }
  }
}
