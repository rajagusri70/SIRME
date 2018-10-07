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
        $this->methods['observation_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['patient_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['patients_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('PasienModel');
    }

    public function test_get(){
      $id = '5ad0cbb0-a162-11e8-922c-4ccc6a6a5b3f';
      $patients = $this->PasienModel->viewPasien('uuid',$id);
        foreach ($patients as $p) {
          $pid = $p->pid;
        }
        //echo $uuid;
    }

    public function patient_get($id = NULL){
        // If the id parameter doesn't exist return all the users
      if ($id == NULL){
        $this->response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_BAD_REQUEST);
      }else{
        $patients = $this->PasienModel->viewPasien('pid',$id);
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
          $foto = 'http://localhost/SIRME/images/pasien/'.$p->foto;;
          $status_kawin = $p->status_pernikahan;
        }
        //echo $uuid;
        $users = [
            'resourceType' => 'Patient',
            'id' => $pid,
            'identifier' => [
              [
                'type' => [
                  'text' => 'nomor_pasien',
                ],
                'value' => $no_pasien
              ],
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
                  'alamat Jl. Nya'
                ],
                'city' => 'Kecamatan',
                'district' => 'Kota',
                'state' => 'Provinsi',
                'country' => 'Negara'
              ]
            ],
            'maritalStatus' => [
                'text' => 'Sudah Kawin/Ngentoad'
            ],
            'photo' => 'http://photo.com/memekue.jpg',
            'contact' => [
              [
                'relationship' => [
                  [
                    'text' => 'orangtua'
                  ]
                ],
                'name' => [
                  [
                    'text' => 'namaOrtunya'
                  ]
                ],
                "telecom"=> [
                  [
                    'system'=> 'phone',
                    'value'=> '<no_hp>'
                  ]
                ]
              ],
              [
                'relationship' => [
                  [
                    'text' => 'pasangan'
                  ]
                ],
                'name' => [
                  [
                    'text' => 'namaSuami/Istri'
                  ]
                ],
                "telecom"=> [
                  [
                    'system'=> 'phone',
                    'value'=> '<no_hp>'
                  ]
                ]
              ],
              [
                'relationship' => [
                  [
                    'text' => 'saudara'
                  ]
                ],
                'name' => [
                  [
                    'text' => 'namaSaudaranya'
                  ]
                ],
                "telecom"=> [
                  [
                    'system'=> 'phone',
                    'value'=> '<no_hp>'
                  ]
                ]
              ]
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

        // Find and return a single record for a particular user.

        $id = (int) $id;

        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // Get the user from the array, using the id as key for retrieval.
        // Usually a model is to be used for this.

        $user = NULL;

        if (!empty($users))
        {
            foreach ($users as $key => $value)
            {
                if (isset($value['id']) && $value['id'] === $id)
                {
                    $user = $value;
                }
            }
        }

        if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function observation_get($id = NULL){
        // If the id parameter doesn't exist return all the users
      if ($id == NULL){
        $this->response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_BAD_REQUEST);
      }else{
        $patients = $this->PasienModel->viewPasien('pid',$id);
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
        }
        //echo $uuid;
        $users = [
          'resourceType' => 'Patient',
          'id' => $pid,
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
            ],
            [
              'type' => [
                'coding' => [
                  [
                    'system' => 'https://www.hl7.org/fhir/valueset-identifier-type.html',
                    'code' => 'MR'
                  ]
                ]
              ],
              'value' => $no_pasien
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
          'birthDate' => '08881996',
          'address' => [
            [
              'line' => [
                'alamat Jl. Nya'
              ],
              'city' => 'Kecamatan',
              'district' => 'Kota',
              'state' => 'Provinsi',
              'country' => 'Negara'
            ]
          ],
          'maritalStatus' => [
              'text' => 'Sudah Kawin/Ngentoad'
          ],
          'photo' => 'http://photo.com/memekue.jpg',
          'contact' => [
            [
              'relationship' => [
                [
                  'text' => 'orangtua'
                ]
              ],
              'name' => [
                [
                  'text' => 'namaOrtunya'
                ]
              ],
              "telecom"=> [
                [
                  'system'=> 'phone',
                  'value'=> '<no_hp>'
                ]
              ]
            ],
            [
              'relationship' => [
                [
                  'text' => 'pasangan'
                ]
              ],
              'name' => [
                [
                  'text' => 'namaSuami/Istri'
                ]
              ],
              "telecom"=> [
                [
                  'system'=> 'phone',
                  'value'=> '<no_hp>'
                ]
              ]
            ],
            [
              'relationship' => [
                [
                  'text' => 'saudara'
                ]
              ],
              'name' => [
                [
                  'text' => 'namaSaudaranya'
                ]
              ],
              "telecom"=> [
                [
                  'system'=> 'phone',
                  'value'=> '<no_hp>'
                ]
              ]
            ]
          ],
          'communication'=>[
            [
              "language"=>[
                "text"=>"Bahasa Indonesia dan Jawa"
              ]
            ]
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

        // Find and return a single record for a particular user.

        $id = (int) $id;

        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // Get the user from the array, using the id as key for retrieval.
        // Usually a model is to be used for this.

        $user = NULL;

        if (!empty($users))
        {
            foreach ($users as $key => $value)
            {
                if (isset($value['id']) && $value['id'] === $id)
                {
                    $user = $value;
                }
            }
        }

        if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }
}
