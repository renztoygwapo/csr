<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SMS extends CI_Controller {
    function __construct() {
        parent::__construct();

    } 

    public function index() {
        redirect('home');
       
    }
    public function sendSMS($viewer="",$request_id="",$requestor_id="")
    {
         $this->load->library('smsconfig');
        if($this->session->userdata('type')=='admin'){
            $phonenum=$this->input->post('phone_number');

            $message=$this->input->post('message');
            
            $debug = true;

            $res=$this->smsconfig->ozekiSend($phonenum,$message,$debug);
            if($res=="S"){
                $this->session->set_flashdata('promp','Send');
            }else{
                $this->session->set_flashdata('promp','Failed');
            }
            redirect('home/request_details/'.$viewer.'/'.$request_id.'/'.$requestor_id);
          }else{
            redirect('home');
          }   
    }


########################################################
# Login information for the SMS Gateway
########################################################

}

      