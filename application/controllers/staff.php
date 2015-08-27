<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staff extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    } 

    public function index() {
        if ($this->session->userdata('type') == 'staff') {
              $this->load->model('Query');
            $page = array('Frompage' => "staff/staffhome");
            $this->session->set_userdata($page);
            $this->load->view('staff/staffhome');
        } else {
            redirect('home');
        }
    }

    function pdfAllReports() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $this->load->view('staff/pdfreport');
    }

    function pdfMRIS() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $this->load->view('staff/pdfMRIS');
    }

    public function addrequests() {
        if ($this->session->userdata('type') == 'staff') {

            $page = array('Frompage' => "staff/staffaddrequest");
            $this->session->set_userdata($page);
            $this->load->model('Query');
            $sql = "select * from requestor_info";
            $res = $this->Query->login($sql);
            $this->load->view('staff/staffaddrequest', ['requestors' => $res]);
        } else {
            redirect('home');
        }
    }

    public function gallary() {
        if ($this->session->userdata('type') == 'staff') {
            $page = array('Frompage' => "staff/staffGallary");
            $this->session->set_userdata($page);
            $this->load->view('staff/staffGallary');
        } else {
            redirect('home');
        }
    }

    public function forums() {
        if ($this->session->userdata('type') == 'staff') {
            $page = array('Frompage' => "staff/stafffurums");
            $this->session->set_userdata($page);
            $this->load->view('staff/stafffurums');
        } else {
            redirect('home');
        }
    }

    public function profile() {
        if ($this->session->userdata('type') == 'staff') {
            $page = array('Frompage' => "staff/staffprofile");
            $this->session->set_userdata($page);
            $this->load->view('staff/staffprofile');
        } else {
            redirect('home');
        }
    }

    public function requests() {
        if ($this->session->userdata('type') == 'staff') {
            $page = array('Frompage' => "staff/staffRequests");
            $this->session->set_userdata($page);
            $this->load->model('Query');
            $sql = "select * from request_info inner join date_requested on request_info.request_id=date_requested.request_id inner join requestor_locator on request_info.request_id = requestor_locator.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join request_remarks on request_info.request_id=request_remarks.request_id inner join nature_of_expense on program_code=code where request_remarks.request_remarks!='waiting' and date_received rlike('".date('Y')."') limit 30";
            $data['requests']=$this->Query->login($sql);
            $data['viewer']="staff";
            $this->load->view('allRequests',$data);
        } else {
            redirect('home');
        }
    }
    public function requestprompadded() {
        if ($this->session->userdata('type') == 'staff') {
            $this->load->model('Query');
            $page = array('Frompage' => "staff/requestpromadded");
            $this->session->set_userdata($page);
            $this->load->view('staff/requestpromadded');
        } else {
            redirect('home');
        }
    }

    public function mris() {
        if ($this->session->userdata('type') == 'staff') {
            ?><script>
                var win = window.open("<?= site_url('staff/newWindowMRIS') ?>", "MRIS");

            </script>
            <?php
            $this->load->view($this->session->userdata('Frompage'));
        } else {
            redirect('home');
        }
    }

    public function newWindowMRIS() {
        if ($this->session->userdata('type') == 'staff') {
            $this->load->view('staff/staffMRIS');
            ?><script>print();</script>
            <?php
        } else {
            redirect('home');
        }
    }

    public function newWindowREPORT() {
        if ($this->session->userdata('type') == 'staff') {
            $this->load->view('staff/staffReports');
            ?><script>print();</script>
            <?php
        } else {
            redirect('home');
        }
    }
    public function get_cash($money)
    {
       $money=$money."";
       $cash="";
       $valids="1234567890.";
       for ($i=0; $i < strlen($money); $i++) { 
          for ($y=0; $y < strlen($valids); $y++) { 
             if($money[$i]==$valids[$y]){
                $cash=$cash."".$money[$i];
                break;
             }
          }
       }
       return $cash;
    }

    public function do_addRequest($numItems, $kind, $program) {
        if ($this->session->userdata('type') == 'staff') {
            $this->load->model('Query');
            $dateProcess = $this->input->post('dateProcess');
            // $datePrepare = $this->input->post('datePrepare');
            $firstname = $this->input->post('firstname');
            $middlename = $this->input->post('middlename');
            $lastname = $this->input->post('lastname');
            $requestparty = $this->input->post('requestparty');
            $description = $this->input->post('description');
            $amountofcash = $this->get_cash($this->input->post('amountofcash'));
            $contact = $this->input->post('contact');
            $payee_address = $this->input->post('payee_address');
            $afill = $this->input->post('payee_affiliation');
            $cash_desc = $this->input->post('cash_disc');

            $quantityofitemrequest = $this->input->post('quantityofitemrequest');
            
            // $sql = "insert into request_info(request_id,request_party,description,request_kind) values('$id','$requestparty','$description','$kind')";
            // $this->Query->setQuery($sql);
            $data = array( 
                'request_party' => $requestparty, 
                'request_description' => $description, 
                'request_kind' => $kind,
                'program_code'=>$program
                );
            $this->Query->add_info('request_info',$data);
            $request_id = $this->Query->getid("select request_id from request_info order by request_id desc limit 1",'request_id') ;
            

            // $sql = "insert into requestor_info(request_id,First_name,Middle_name,Last_name,contact,address,affiliation) values('$id','$firstname','$middlename','$lastname','$contact','$payee_address','$afill')";
            // $this->Query->setQuery($sql);
            $data = array(
                'requestor_First_name' => $firstname, 
                'requestor_Middle_name' => $middlename, 
                'requestor_Last_name' => $lastname, 
                'requestor_contact' => $contact, 
                'requestor_address' => $payee_address
                );
            $this->Query->add_info('requestor_info',$data);
            $requestor_id = $this->Query->getid("select requestor_id from requestor_info  order by requestor_id desc limit 1",'requestor_id') ;
            $data = array(
                'requestor_id' => $requestor_id, 
                'requestor_affilation' => $afill, 
                );
             
            $this->Query->add_info('request_affilation',$data);
            $request_affiliation_id = $this->Query->getid("select request_affiliation_id from request_affilation   order by request_affiliation_id desc limit 1",'request_affiliation_id') ;
            
            $data = array('request_id' => $request_id,'requestor_id'=>$requestor_id,'request_affiliation_id'=>$request_affiliation_id );
            $this->Query->add_info('requestor_locator',$data);
            // $sql = "insert into request_remarks(request_id,remarks) values('$id','waiting')";
            // $this->Query->setQuery($sql);

            $data = array(
                'request_id' => $request_id, 
                'request_remarks'=>'waiting'
                );
             $this->Query->add_info('request_remarks',$data);

            for ($i = 1; $i <= 31; $i++) {
                echo $this->input->post("sub_nature_$i");
                if ($this->input->post("sub_nature_$i") != "") {
                    // $sql = "insert into program (reference_id,request_id,code)values ('$i','$id','$program')";
                    // $this->Query->setQuery($sql);
                    $data = array(
                        'reference_id' => $i, 
                        'request_id'=>$request_id,
                        'code'=>$program,
                        );
                    $this->Query->add_info('program',$data);
                }
            }
            if ($kind == "cash" || $kind == "cash-inkind") {
                
                // $sql = "insert into request_amount_cash(request_id,amount,description)values('$id','$amountofcash','$cash_desc')";
                // $this->Query->setQuery($sql);
                $data = array(
                    'request_id' => $request_id,
                    'request_cash_amount' => $amountofcash,
                    'request_cash_description' => $cash_desc,
                     );
                $this->Query->add_info('request_amount_cash',$data);
            }
            $staff_id = $this->session->userdata('id');

            // $sql = "insert into assigned_staff_request(request_id,staff_id)values('$id','$staff_id')";
            // $this->Query->setQuery($sql);
            $data = array(
                'request_id' => $request_id,
                 'staff_id' =>$staff_id
                );
            $this->Query->add_info('assigned_staff_request',$data);

            
            $data = array(
                'request_id' => $request_id,
                'date_received'=> date('Y-m-d'),
                'date_process'=>$dateProcess,
                'date_deadline'=>$this->input->post('dateDealines')
                );
            $this->Query->add_info('date_requested',$data);


            for ($i = 0; $i < $numItems; $i++) {
                $h = $i + 1;
                if ($this->input->post("itemname$h") != "") {
                    $itemname = $this->input->post("itemname$h");
                    $itemquantity = $this->input->post("itemquan$h");

                    $description = $this->input->post("description$h");
                    $price = $this->input->post("price$h");

                    // $sql = "insert into request_items_inkind(request_id,item_name,item_quantity,item_description,item_price) values('$id','$itemname','$itemquantity','$description','$price')";
                    // $this->Query->setQuery($sql);request_total_item_price
                    $data = array(
                        'request_id' => $request_id, 
                        'request_item_name'=>$itemname,
                        'request_item_quantity'=>$itemquantity,
                        'request_item_description'=>$description,
                        'request_item_price'=>$price,
                        'request_total_item_price'=>$price*$itemquantity
                        );
                    $this->Query->add_info('request_items_inkind',$data);
                }
            }

//------------------------------------->>>>>>>>>>>>addingTOdatabase
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            redirect('staff/requestprompadded');
        } else {
            redirect('home');
        }
    }

    public function pracAJAX($data) {
        $this->load->model('Query');
        $sql = "select * from requestor_info where requestor_First_name rlike('$data') or requestor_Last_name rlike('$data')";
        $res=$this->Query->login($sql);
        $results="";
        foreach ($res as $key => $value) {
           $results=$results.'<li><a href="#">'.$value->requestor_First_name.' '.$value->requestor_Last_name.'</a></li>';
        }
        echo ''.$results;
    }
    public function requestors() {
         if ($this->session->userdata('type') == 'staff' || $this->session->userdata('type') == 'admin') {
            $this->load->model('Query');
            $data['pendingStaff']="";
            if($this->session->userdata('type') == 'admin'){
                $uname = $this->session->userdata('username');
                $pass = $this->session->userdata('password');

                $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
                $id;
                foreach ($arr as $key => $value) {
                    $id = $value->id;
                }
                $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
                $data['users']=$res;
                $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
                $data['pendingStaff']=$pending;
                $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
                
                 $anual_budget=$this->Query->login('select * from anual_budget');
                    foreach ($anual_budget as $key => $value) {
                      $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                    }
            }
            $this->load->view('staff/requestors',$data);

        }else{
            redirect();
        }
    }
    
    public function visualize_moneyCash($cash) {

        $val = $cash."";
        $numbers = "1234567890.";
        $text = "";
        $num_val=strlen($val);
        $num_num=strlen($numbers);

        for ($i = 0;$i < $num_val;$i++) {
            for ($y = 0;$y < $num_num;$y++) {
                $l_1=$numbers[$y];
                $l_2=$val[$i];
                if ("".$l_1 == $l_2."") {
                    $text = $text."".$val[$i];
                    break;
                }
            }
        }

        $val = $text;
        $ctr = 0;
        $text = "";
        $cen = "";
        $f = false;
        for ($i = 0;
                $i < strlen($val);
                $i++) {
            if ($val[$i] . "" == ".") {
                $f = true;
            }
            if ($f==true) {
                $cen = $cen."".$val[$i];
            } else {
                $text =$text."".$val[$i];
            }
        }
        $val = $text;
        $text = "";
        for ($i = strlen($val) - 1;
                $i >= 0;
                $i--) {
            if ($ctr == 3) {
                $text = "," . $text;
                $ctr = 0;
            }
            $text = $val[$i] ."". $text;
            $ctr++;
        }
        $val = $text;
        $val = $val."".$cen;
        return $val;
    }
    public function addRequest_old($requestor_id)
    {
        if ($this->session->userdata('type') == 'staff') {
           $data['requestor_id']=$requestor_id;
           $this->load->model('Query');
            $sql="select * from requestor_info where requestor_id=".$requestor_id;
            $data['requestor_info']=$this->Query->login($sql);
            $this->load->view('staff/addRequest_old',$data);
        }else{
            redirect();
        }
    }
    public function do_addRequest_old($requestor_id,$numItems, $kind, $program,$request_affiliation_id)
    {
       if ($this->session->userdata('type') == 'staff') {
            $this->load->model('Query');
            $dateProcess = $this->input->post('dateProcess');
            // $datePrepare = $this->input->post('datePrepare');
            $firstname = $this->input->post('firstname');
            $middlename = $this->input->post('middlename');
            $lastname = $this->input->post('lastname');
            $requestparty = $this->input->post('requestparty');
            $description = $this->input->post('description');
            $amountofcash = $this->get_cash($this->input->post('amountofcash'));
            $contact = $this->input->post('contact');
            $payee_address = $this->input->post('payee_address');
            $afill = $this->input->post('payee_affiliation');
            $cash_desc = $this->input->post('cash_disc');

            $quantityofitemrequest = $this->input->post('quantityofitemrequest');
            
            // $sql = "insert into request_info(request_id,request_party,description,request_kind) values('$id','$requestparty','$description','$kind')";
            // $this->Query->setQuery($sql);
            $data = array( 
                'request_party' => $requestparty, 
                'request_description' => $description, 
                'request_kind' => $kind,
                'program_code'=>$program
                );
            $this->Query->add_info('request_info',$data);
            $request_id = $this->Query->getid("select request_id from request_info order by request_id desc limit 1",'request_id') ;
            

            // $sql = "insert into requestor_info(request_id,First_name,Middle_name,Last_name,contact,address,affiliation) values('$id','$firstname','$middlename','$lastname','$contact','$payee_address','$afill')";
            // $this->Query->setQuery($sql);
            if($request_affiliation_id=="none"){ 
                $data = array(
                'requestor_id' => $requestor_id, 
                'requestor_affilation' => $afill, 
                );
             
                $this->Query->add_info('request_affilation',$data);
                $request_affiliation_id = $this->Query->getid("select request_affiliation_id from request_affilation   order by request_affiliation_id desc limit 1",'request_affiliation_id') ;
            }
            $data = array('request_id' => $request_id,'requestor_id'=>$requestor_id,'request_affiliation_id'=>$request_affiliation_id );
            $this->Query->add_info('requestor_locator',$data);
            // $sql = "insert into request_remarks(request_id,remarks) values('$id','waiting')";
            // $this->Query->setQuery($sql);

            $data = array(
                'request_id' => $request_id, 
                'request_remarks'=>'waiting'
                );
             $this->Query->add_info('request_remarks',$data);

            for ($i = 1; $i <= 31; $i++) {
                echo $this->input->post("sub_nature_$i");
                if ($this->input->post("sub_nature_$i") != "") {
                    // $sql = "insert into program (reference_id,request_id,code)values ('$i','$id','$program')";
                    // $this->Query->setQuery($sql);
                    $data = array(
                        'reference_id' => $i, 
                        'request_id'=>$request_id,
                        'code'=>$program,
                        );
                    $this->Query->add_info('program',$data);
                }
            }
            if ($kind == "cash" || $kind == "cash-inkind") {
                
                // $sql = "insert into request_amount_cash(request_id,amount,description)values('$id','$amountofcash','$cash_desc')";
                // $this->Query->setQuery($sql);
                $data = array(
                    'request_id' => $request_id,
                    'request_cash_amount' => $amountofcash,
                    'request_cash_description' => $cash_desc,
                     );
                $this->Query->add_info('request_amount_cash',$data);
            }
            $staff_id = $this->session->userdata('id');

            // $sql = "insert into assigned_staff_request(request_id,staff_id)values('$id','$staff_id')";
            // $this->Query->setQuery($sql);
            $data = array(
                'request_id' => $request_id,
                 'staff_id' =>$staff_id
                );
            $this->Query->add_info('assigned_staff_request',$data);

            
            $data = array(
                'request_id' => $request_id,
                'date_received'=> date('Y-m-d'),
                'date_process'=>$dateProcess,
                'date_deadline'=>$this->input->post('dateDealines')
                );
            $this->Query->add_info('date_requested',$data);


            for ($i = 0; $i < $numItems; $i++) {
                $h = $i + 1;
                if ($this->input->post("itemname$h") != "") {
                    $itemname = $this->input->post("itemname$h");
                    $itemquantity = $this->input->post("itemquan$h");

                    $description = $this->input->post("description$h");
                    $price = $this->input->post("price$h");

                    // $sql = "insert into request_items_inkind(request_id,item_name,item_quantity,item_description,item_price) values('$id','$itemname','$itemquantity','$description','$price')";
                    // $this->Query->setQuery($sql);request_total_item_price
                    $data = array(
                        'request_id' => $request_id, 
                        'request_item_name'=>$itemname,
                        'request_item_quantity'=>$itemquantity,
                        'request_item_description'=>$description,
                        'request_item_price'=>$price,
                        'request_total_item_price'=>$price*$itemquantity
                        );
                    $this->Query->add_info('request_items_inkind',$data);
                }
            }

//------------------------------------->>>>>>>>>>>>addingTOdatabase
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            redirect('staff/requestprompadded');
        } else {
            redirect();
        }
    }
    public function get_sub_affiliation($requestor_id)
    {
        if ($this->session->userdata('type') == 'staff') {
            $this->load->model('Query');
            $sql="select * from requestor_locator inner join request_affilation on requestor_locator.request_affiliation_id=request_affilation.request_affiliation_id inner join date_requested on requestor_locator.request_id=date_requested.request_id where requestor_locator.requestor_id=".$requestor_id." and date_received rlike('".date('Y')."') and requestor_affilation rlike('".$this->input->post('search_affiliation')."')";
            $data=$this->Query->login($sql);
            $to_echo="";
            foreach ($data as $key => $value) {
                $to_echo=$to_echo. '<li><a tabindex="-1" style="cursor:pointer;" onclick="affiliation_select(\''.$value->request_affiliation_id.'\',\''.$value->requestor_affilation.'\')">'.$value->requestor_affilation.'</a></li>';
            }
            echo $to_echo;
        }else{
            redirect();
        }
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */