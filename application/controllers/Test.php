<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	
	function __construct(){
		parent::__construct();
	
		
	}
	
	public function index()
	{
		//$this->load->view('welcome_message');
	}

	public function pasien(){
		$myObj = new \stdClass();
		$myObj->name = "John ggg";
		$myObj->age = "30";
		$myObj->city = "New York";
		$myObj->cityww = "New York";
		$myObj->cityw = "New York";
		$myObj->citywww = "New York";
		$myJSON = json_encode($myObj);
		echo $myJSON;
		
		// $myJSON = '{
		// "resourceType": "Patient",
		//   "id": "2345867543",
		//   "identifier": [
		//     {
		//       "type": {
		//         "text": "KTP"
		//       },
		//       "value": "<no_ktp>"
		//     },
		//     {
		//       "type": {
		//         "text": "KK"
		//       },
		//       "value": "<no_kk>"
		//     }
		//   ],
		//   "name": [
		//     {
		//       "text": "<nama_lengkap>"
		//     }
		//   ],
		//   "telecom": [
		//     {
		//       "system": "phone",
		//       "value": "<no_hp>"
		//     },
		//     {
		//       "system": "email",
		//       "value": "<alamat_email>"
		//     }
		//   ],
		//   "gender": "<jenis_kelamin>",
		//   "birthDate": "<tanggal_lahir>",
		//   "address": [
		//     {
		//       "text": ""
		//     }
		//   ],
		//   "maritalStatus": [
		//     {
		//       "text": "<status_pernikahan>"
		//     }
		//   ],
		//   "photo": "<link_foto>",
		//   "contact": [
		//     {
		//       "relationship" : [
		//         {
		//           "text": "orangtua"
		//         }
		//       ],
		//       "name": {
		//         "text": "<nama_orangtua>"
		//       }
		//     },
		//     {
		//       "relationship" : [
		//         {
		//           "text": "suami/istri"
		//         }
		//       ],
		//       "name": {
		//         "text": "<nama_suamiistri>"
		//       }
		//     }
		//   ]
		// }
		// }';

		// echo $myJSON;
	}
}
