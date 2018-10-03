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
class APIS extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['patient_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['patient_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['patients_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('PasienModel');
    }

    public function test_get(){
      $id ;
      $patients = $this->PasienModel->viewPasien('uuid',$id);
        foreach ($patients as $p) {
          $uuid = $p->uuid;
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
        $patients = $this->PasienModel->viewPasiens('uuid',$id)->result_array();
        
        //echo $uuid;
        $users = $patients;
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
