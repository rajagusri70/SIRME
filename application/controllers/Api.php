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
      $this->load->model('PasienModel');
      $this->load->model('UserModel');
      $this->load->model('RawatModel');
      $this->load->model('ObservationModel');
      $this->load->model('DiagnosisModel');
  }

  

  public function patient_get($id = NULL){
      // If the id parameter doesn't exist return all the users
    //$cek = $this->PasienModel->cek_login("user",$where)->num_rows();

    if ($id == NULL){
      $this->response([
              'status' => FALSE,
              'message' => 'Incomplete method'
          ], REST_Controller::HTTP_BAD_REQUEST);
    }else{
      $patients = $this->PasienModel->viewPasien('no_pasien',$id);
      foreach ($patients as $p) {
        $pid = $p->pid;
        $no_ktp = $p->no_ktp;
        $no_kk = $p->no_kk;
        $no_pasien = $p->no_pasien;
        $nama = $p->nama;
        $no_telpon = $p->no_telpon;
        $email = $p->email;
        $jenis_kelamin = $p->jenis_kelamin;

        if ($jenis_kelamin == 'Laki-laki'){
          $gender = 'male';
        }else{
          $gender = 'female';
        }
        $tanggal_lahir = $p->tanggal_lahir;
        $date = substr($tanggal_lahir, 0, 2);
        if (strstr($tanggal_lahir, "Januari")) {
          $mounth = '01';
        }elseif (strstr($tanggal_lahir, "Februari")) {
          $mounth = '02';
        }elseif (strstr($tanggal_lahir, "Maret")) {
          $mounth = '03';
        }elseif (strstr($tanggal_lahir, "April")) {
          $mounth = '04';
        }elseif (strstr($tanggal_lahir, "Mei")) {
          $mounth = '05';
        }elseif (strstr($tanggal_lahir, "Juni")) {
          $mounth = '06';
        }elseif (strstr($tanggal_lahir, "Juli")) {
          $mounth = '07';
        }elseif (strstr($tanggal_lahir, "Agustus")) {
          $mounth = '08';
        }elseif (strstr($tanggal_lahir, "September")) {
          $mounth = '09';
        }elseif (strstr($tanggal_lahir, "Oktober")) {
          $mounth = '10';
        }elseif (strstr($tanggal_lahir, "November")) {
          $mounth = '11';
        }elseif (strstr($tanggal_lahir, "Desember")) {
          $mounth = '12';
        }
        $year = substr($tanggal_lahir, -4);
        $tanggal_lahirs = $date.'-'.$mounth.'-'.$year;
        $alamat = $p->alamat;
        $kecamatan = $p->kecamatan;
        $kota = $p->kota;
        $provinsi = $p->provinsi;
        $status_kawin = $p->status_pernikahan;
        $foto = 'http://localhost/SIRME/images/pasien/'.$p->foto;
        $status_kawin = $p->status_pernikahan;
        $nama_orangtua = $p->nama_orangtua;
        $no_telpon_orangtua = $p->no_telpon_orangtua;
        $nama_kerabat = $p->nama_kerabat;
        $no_telpon_kerabat = $p->no_telpon_kerabat;
        $hubungan = $p->hubungan;
        $no_id_praktisi = 'Practitioner/'.$p->user_id;
      }
      //echo $uuid;
      $users = [
          'resourceType' => 'Patient',
          'id' => $no_pasien,
          'identifier' => [
            [
              'type' => [
                'text' => 'KTP',
              ],
              'value' => $no_ktp
            ],
            [
              'type' => [
                'text' => 'KK',
              ],
              'value' => $no_kk
            ]
          ],
          'name' => [
            [
              'text'=>$nama
            ]
          ],
          'telecom'=> [
            [
              'system' => 'phone',
              'value' => $no_telpon
            ],
            [
              'system' => 'email',
              'value' => $email
            ]
          ],
          'gender' => $gender,
          'birthDate' => $tanggal_lahirs,
          'address' => [
            [
              'line' => [
                $alamat
              ],
              'city' => $kecamatan,
              'district' => $kota,
              'state' => $provinsi
            ]
          ],
          'maritalStatus' => [
              'text' => $status_kawin
          ],
          'photo' => [
            [
              'url' => $foto
            ]
          ],
          'contact' => [
            [
              'relationship' => [
                [
                  'text' => 'orangtua'
                ]
              ],
              'name' => [
                [
                  'text' => $nama_orangtua
                ]
              ],
              "telecom"=> [
                [
                  'system'=> 'phone',
                  'value'=> $no_telpon_orangtua
                ]
              ]
            ],
            [
              'relationship' => [
                [
                  'text' => $hubungan
                ]
              ],
              'name' => [
                [
                  'text' => $nama_kerabat
                ]
              ],
              "telecom"=> [
                [
                  'system'=> 'phone',
                  'value'=> $no_telpon_kerabat
                ]
              ]
            ]
          ],
          'generalPractitioner' => [
            'reference' => $no_id_praktisi
          ]
        ];
        
      if ($users){
          // Set the response and exit
          // $this->response([
          //     'status' => FALSE,
          //     'message' => 'No id provided'
          // ], REST_Controller::HTTP_NOT_FOUND);
        $this->response($users, REST_Controller::HTTP_OK);
           // OK (200) being the HTTP response code
      }
      else{
          
      }
    }
  }

  public function practitioner_get($user_id = NULL){
      // If the id parameter doesn't exist return all the users
    //$cek = $this->UserModel->cek_login("user",$where)->num_rows();

    if ($user_id == NULL){
      $this->response([
              'status' => FALSE,
              'message' => 'Incomplete method'
          ], REST_Controller::HTTP_BAD_REQUEST);
    }else{
      $data = $this->UserModel->selectWhere($user_id);
      foreach ($data as $data) {
        if ($data->jenis_kelamin == "Laki-laki") {
          $gender='male';
        }else{
          $gender='female';
        }
        $practitioner = [
          'resourceType' => 'Practitioner', 
          'id' => $data->user_id,
          'identifier' => [
            'type' => [
              'text' => 'no_sip',
            ],
            'value' => $data->no_sip
          ],
          'name' => [
            'text' => $data->nama
          ],
          'telecom'=> [
            [
              'system' => 'phone',
              'value' => $data->no_hp
            ],
            [
              'system' => 'email',
              'value' => $data->email
            ]
          ],
          'address' => [
            [
              'line' => [
                $data->alamat
              ],
              'district' => $data->kota
            ]
          ],
          'gender' => $gender,
          'photo' => [
            [
              'url' => 'http://localhost/SIRME/images/admin/'.$data->foto
            ]
          ]
        ];
      }
      if ($practitioner){
        $this->response($practitioner, REST_Controller::HTTP_OK);
      }
      else{
          
      }
    }
  }

  public function encounter_get($id_rawat = NULL){
    if ($id_rawat == NULL){
      $this->response([
              'status' => FALSE,
              'message' => 'Incomplete method'
          ], REST_Controller::HTTP_BAD_REQUEST);
    }else{
      $data = $this->RawatModel->viewWhere(array('id_rawat' => $id_rawat));
      foreach ($data as $data) {
        $patient = 'Patient/'.$data->no_pasien;
        $practitioner = 'Practitioner/'.$data->dokter;
        $start = $data->tanggal.'T'.$data->waktu;
        $end = $data->tanggal.'T'.$data->jam_keluar;
        $encounter = [
          'resourceType' => 'Encounter', 
          'id' => $data->id_rawat,
          'status' => $data->status,
          'class' => [
            'system' => $data->classSystem,
            'code' => $data->classCode,
            'display' => $data->classDisplay,
          ],
          'type' => [
            [
              'text' => 'outpatient'
            ]
          ],
          'subject' => [
            'reference' => $patient
          ],
          'participant' => [
            [
              'individual' => [
                'reference' => $practitioner
              ]
            ]
          ],
          'period' => [
            [
              'start' => $start,
              'end' => $end
            ]
          ]
        ];
      }
      if ($encounter){
        $this->response($encounter, REST_Controller::HTTP_OK);
      }
      else{
          
      }
    }
  }

  public function observation_get($id = NULL){
      // If the id parameter doesn't exist return all the users
    if ($id == NULL){
      $no_pasien = $_GET['pasien'];
      if($no_pasien == NULL){
        $this->response([
              'status' => FALSE,
              'message' => 'User could not be found'
          ], REST_Controller::HTTP_BAD_REQUEST);
      }else{
        $data = $this->ObservationModel->search(array('no_pasien' => $no_pasien))->result_array();
        // foreach ($data as $data) {
        //   // $entry = [
        //   //   'resourceType' => 'Observation',
        //   //   'id' => $data->id,
        //   //   'category' => [
        //   //     [
        //   //       'coding' => [
        //   //         [
        //   //           'code' => 'vital-sign',
        //   //           'display' => 'Vital Sign'
        //   //         ]
        //   //       ]
        //   //     ]
        //   //   ],
        //   //   'code' => [
        //   //     'text' => $data->tipe_pemeriksaan
        //   //   ],
        //   //   'subject' => [
        //   //     'reference' => 'Patient/'.$data->no_pasien
        //   //   ],
        //   //   'context' => [
        //   //     'reference' => 'Encounter/'.$data->no_rawat_jalan
        //   //   ],
        //   //   'effectiveDateTime' => $data->tanggal.'T'.$data->jam,
        //   //   'performer' => [
        //   //     [
        //   //       'reference' => 'Practitioner/'.$data->no_id_praktisi
        //   //     ]
        //   //   ],
        //   //   'valueQuantity' => [
        //   //     'value' => $data->hasil,
        //   //     'unit' => $data->unit
        //   //   ]
        //   // ]
        // }
        
        $bundle = [
          'resourceType' => 'Bundle',
          'id' => uniqid(),
          'type' => 'searchset',
          'entry' => 
            $data
          
        ];

        $this->response($bundle, REST_Controller::HTTP_OK);
        //echo "ID Provied Well educated";
      }
    }else{
      $data = $this->ObservationModel->viewObservation(array('id' => $id));
      foreach ($data as $data) {
        $observation = [
          'resourceType' => 'Observation',
          'id' => $data->id,
          'category' => [
            [
              'coding' => [
                [
                  'code' => 'vital-sign',
                  'display' => 'Vital Sign'
                ]
              ]
            ]
          ],
          'code' => [
            'text' => $data->tipe_pemeriksaan
          ],
          'subject' => [
            'reference' => 'Patient/'.$data->no_pasien
          ],
          'context' => [
            'reference' => 'Encounter/'.$data->no_rawat_jalan
          ],
          'effectiveDateTime' => $data->tanggal.'T'.$data->jam,
          'performer' => [
            [
              'reference' => 'Practitioner/'.$data->no_id_praktisi
            ]
          ],
          'valueQuantity' => [
            'value' => $data->hasil,
            'unit' => $data->unit
          ]
        ];
      }
      
      if ($observation){
        $this->response($observation, REST_Controller::HTTP_OK);
      }
      else{
          
      }
    }
  }

  public function condition_get($id = NULL){
      // If the id parameter doesn't exist return all the users
    if ($id == NULL){
      $this->response([
              'status' => FALSE,
              'message' => 'User could not be found'
          ], REST_Controller::HTTP_BAD_REQUEST);
    }else{
      $data = $this->DiagnosisModel->view(array('id' => $id));
      foreach ($data as $data) {
        $condition = [
          'resourceType' => 'Condition',
          'id' => $data->id,
          'clinicalStatus' => $data->status_klinis,
          'category' => [
            [
              'coding' => [
                [
                  'system' => ' http://hl7.org/fhir/ValueSet/condition-category',
                  'code' => 'encounter-diagnosis',
                  'display' => 'Encounter Diagnosis'
                ]
              ],
              'text' => 'Diagnosis Rawat Jalan'
            ]
          ],
          'code' => [
            'coding' => [
              [
                'system' => 'http://apps.who.int/classifications/icd10/',
                'code' => $data->kode_diagnosis,
                'display' => $data->diagnosis
              ]
            ],
            'text' => $data->diagnosis.' | '.$data->keterangan
          ],
          'subject' => [
            'reference' => 'Patient/'.$data->no_pasien
          ],
          'context' => [
            'reference' => 'Encounter/'.$data->no_rawat_jalan
          ],
          'assertedDate' => $data->tanggal.'T'.$data->jam,
          'asserter' => [
            'reference' => 'Practitioner/'.$data->no_id_praktisi
          ]
        ];
      }
      
      if ($condition){
        $this->response($condition, REST_Controller::HTTP_OK);
      }
      else{
          
      }
    }
  }
}
