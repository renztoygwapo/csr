<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
    } 

    public function index() {
            if($this->session->userdata('type')=='admin'){ 

                $this->load->model("Query");
                $uname = $this->session->userdata('username');
                $pass = $this->session->userdata('password');

                $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
                $id;
                foreach ($arr as $key => $value) {
                    $id = $value->id;
                }
                $this->Query->setQuery("update users set status='online' where id=$id");
                $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
                $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
                $data['users']=$res;
                $data['pendingStaff']=$pending;
                $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
                $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }

                
                
                $this->load->view('inc/adminHome',$data);
            }else{redirect('home');}
    }

    public function add_socialmedia($from) {
        $id = $this->session->userdata("id");
        $found = false;
        $this->load->model("Query");
        $this->Query->setQuery("delete from socialmedia where id=$id");
        for ($i = 1; $i <= 5; $i++) {
            if ($this->input->post("soc$i") != "") {
                $found = true;
                $acc = $this->input->post("soc$i");
                if ($i == 1) {
                    $this->Query->setQuery("insert into socialmedia set id=$id,account='facebook',youraccount='$acc' ");
                } else if ($i == 2) {
                    $this->Query->setQuery("insert into socialmedia set id=$id,account='twitter',youraccount='$acc' ");
                } else if ($i == 3) {
                    $this->Query->setQuery("insert into socialmedia set id=$id,account='youtube',youraccount='$acc' ");
                } else if ($i == 4) {
                    $this->Query->setQuery("insert into socialmedia set id=$id,account='instagram',youraccount='$acc' ");
                } else if ($i == 5) {
                    $this->Query->setQuery("insert into socialmedia set id=$id,account='gmail',youraccount='$acc' ");
                }
            }
        }
        if (!$found) {
            $this->Query->setQuery("insert into socialmedia set id=$id,account='face',youraccount='fgfg' ");
        }
        redirect("$from");
    }

    public function update_info_admin() {
        $sqlSumpay = "update staffdetail set ";
        $email = $this->input->post("email");
        $fn = $this->input->post("fname");
        $ln = $this->input->post("lname");
        $city = $this->input->post("city");
        $phone = $this->input->post("phone");
        $address = $this->input->post("address");

        $id = $this->session->userdata('id');
        $this->load->model("Query");
        if ($this->input->post("b1") == "on" && $email != "") {
            $this->Query->setQuery("$sqlSumpay email='$email' where id=$id");
        }if ($this->input->post("b2") == "on" && $fn != "") {
            $this->Query->setQuery("$sqlSumpay fn='$fn' where id=$id");
        }if ($this->input->post("b3") == "on" && $ln != "") {
            $this->Query->setQuery("$sqlSumpay ln='$ln' where id=$id");
        }if ($this->input->post("b4") == "on" && $city != "") {
            $this->Query->setQuery("$sqlSumpay city='$city' where id=$id");
        }if ($this->input->post("b5") == "on" && $phone != "") {
            $this->Query->setQuery("$sqlSumpay phone='$phone' where id=$id");
        }if ($this->input->post("b6") == "on" && $address != "") {
            $this->Query->setQuery("$sqlSumpay address='$address' where id=$id");
        }
        redirect("home");
    }

    public function pendingStaff() {

        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {

            $this->load->model('Query');
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select * from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
            $this->load->view("inc/adminPendingStaff",$data);
        }
    }

    public function disapproved($id) {
        $this->load->model('Query');
        $this->Query->setQuery("delete from users where id=$id");
        $this->Query->setQuery("delete from socialmedia where id=$id");
        $this->Query->setQuery("delete from staffdetail where id=$id");
        redirect("admin/pendingStaff");
    }

    public function approved($id) {
        $this->load->model('Query');
        $this->Query->setQuery("update users set remark='approved' where id=$id");
        redirect("admin/pendingStaff");
    }

    public function gallaryPage() {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {

            $this->load->model('Query');
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
            $this->load->view("inc/gallaryPage", $data);
        }
    }
    public function change_anual_budget()
    {
        if($this->session->userdata('type')=="admin"){
            $this->load->model('Query');
            $this->Query->setQuery("delete from anual_budget");
             $data = array( 
                'anual_amount' => $this->get_cash($this->input->post('new_budget'))
                );
            $this->Query->add_info('anual_budget',$data);
            redirect();
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
    public function forumPage() {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {

            $this->load->model('Query');
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
            $this->load->view("inc/forumPage", $data);
        }
    }

    public function adminRequests($program="all") {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $id = $this->session->userdata('id');
            $this->load->model('Query');
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $data['viewer']="admin";
            $sql = "select * from request_info inner join date_requested on request_info.request_id=date_requested.request_id inner join requestor_locator on request_info.request_id = requestor_locator.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join request_remarks on request_info.request_id=request_remarks.request_id inner join nature_of_expense on program_code=code where request_remarks.request_remarks!='waiting' and date_received rlike('".date('Y')."') limit 30";
           $data['requests']=$this->Query->login($sql);
           $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
                $this->session->set_userdata('program_display',$program);
            $this->load->view("allRequests", $data);
        }
    }public function inbox() {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $id = $this->session->userdata('id');
            $this->load->model('Query');
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            
            $this->load->view("inc/adminInbox",$data);
        }
    }
public function pendingRequests($request_id="",$notify="") {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $id = $this->session->userdata('id');
            $this->load->model('Query');
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks inner join request_info on request_remarks.request_id=request_info.request_id inner join requestor_locator on request_remarks.request_id=requestor_locator.request_id inner join request_affilation on requestor_locator.request_affiliation_id=request_affilation.request_affiliation_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join date_requested on request_remarks.request_id=date_requested.request_id inner join assigned_staff_request on assigned_staff_request.request_id=request_remarks.request_id inner join staffdetail on staffdetail.id=assigned_staff_request.staff_id  where request_remarks='waiting'");
            $data['alert']=$request_id;
            $data['notify']=$notify;
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
            $this->load->view("inc/adminPendingRequests", $data);
        }
    }
    public function approve_request_now($numItems,$kind,$program,$request_id,$requestor_id,$request_affiliation_id)
    {
         $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
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
            $where = array('request_id' => $request_id );
            $this->Query->update_info('request_info',$data,$where);
             $data = array(
                'requestor_First_name' => $firstname, 
                'requestor_Middle_name' => $middlename, 
                'requestor_Last_name' => $lastname, 
                'requestor_contact' => $contact, 
                'requestor_address' => $payee_address
                );
             $where = array('requestor_id' => $requestor_id);
            $this->Query->update_info('requestor_info',$data,$where);
            $data = array(
                'requestor_id' => $requestor_id, 
                'requestor_affilation' => $afill, 
                );
             $where = array('request_affiliation_id' => $request_affiliation_id );
            $this->Query->update_info('request_affilation',$data,$where);

            // $sql = "insert into request_remarks(request_id,remarks) values('$id','waiting')";
            // $this->Query->setQuery($sql);

            $data = array( 
                'request_remarks'=>'approved'
                );
            $where = array('request_id' => $request_id );
             $this->Query->update_info('request_remarks',$data,$where);
             $this->Query->setQuery("delete from program where request_id=".$request_id);
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
                $this->Query->setQuery("delete from request_amount_cash where request_id=".$request_id);
                $data = array(
                    'request_id' => $request_id,
                    'request_cash_amount' => $amountofcash,
                    'request_cash_description' => $cash_desc,
                     );
                $this->Query->add_info('request_amount_cash',$data);
            }

            $this->Query->setQuery("delete from request_items_inkind where request_id=".$request_id);
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
                    $where = array('request_id' => $request_id );
                    $this->Query->add_info('request_items_inkind',$data);
                }
            }
            $data = array('request_remarks' => 'approved' );
            $where = array('request_id' => $request_id );
            $this->Query->update_info('request_remarks',$data,$where);
            $data = array('date_marked' => date('Y-m-d h:i:s') );
            $this->Query->update_info('date_requested',$data,$where);
            $this->session->set_flashdata('promp','approved');
            redirect('home/request_details/update/'.$request_id."/".$requestor_id);
        }
    }
    public function disapprove_request_now($request_id,$requestor_id)
    {
       $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $data = array('request_remarks' => 'disapproved' );
            $where = array('request_id' => $request_id );
            $this->load->model('Query');
            $this->Query->update_info('request_remarks',$data,$where);
            $data = array('date_marked' => date('Y-m-d h:i:s') );
            $this->Query->update_info('date_requested',$data,$where);
            $sql="select * from request_info where request_id=".$request_id;
             $data = $this->Query->login($sql);
             foreach ($data as $key => $value) {
                 $message=$value->request_party;
             }

            $this->session->set_flashdata('promp','disapproved');
            redirect('home/request_details/update/'.$request_id."/".$requestor_id);
        }
    }
   
    public function get_pendings()
    {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $this->load->model('Query');
            
            $sql=$this->input->post('sql');
            $pendingRequests=$this->Query->login($sql);
            $to_eco='<table class="table table-striped table-bordered table-hover">';
            $to_eco=$to_eco.'<thead>';
            $to_eco=$to_eco.' <tr>';
            $to_eco=$to_eco.'<th class="bg-orange">No.</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Date Receive</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Date Deadline</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Request Party</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Request Description</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Name of Payee</th>';
            $to_eco=$to_eco.'<th class="bg-orange"><center>Action</center></th>';
            $to_eco=$to_eco.'</tr>';
            $to_eco=$to_eco.'</thead>';
            $to_eco=$to_eco.'<tbody id="temp_result">';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
             $ctr=0;
            foreach ($pendingRequests as $key => $det) { 
                  $ctr++;
                  $to_eco=$to_eco.'<tr>';
                  $to_eco=$to_eco.'<td>'.$ctr.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->date_received.'</td>';
                  $to_eco=$to_eco. '<td>'.$det->date_deadline.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_party.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_description.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->requestor_First_name.' '.$det->requestor_Last_name.'</td>';
                  $to_eco=$to_eco.'<td>';
                  $to_eco=$to_eco.'<center>';
                  $to_eco=$to_eco.'<a href="'.base_url('home/request_details/deside/'.$det->request_id.'/'.$det->requestor_id).'" title="View"><i class="fa fa-eye"></i></a>';
                  $to_eco=$to_eco.'</center>';
                  $to_eco=$to_eco.'</td>';
                  $to_eco=$to_eco.'</tr>';
            }
            $to_eco=$to_eco.'</tbody>';
            $to_eco=$to_eco.' </table> ';
              echo $to_eco;                        
    }
}
 public function get_request_encoded()
 {
     $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $this->load->model('Query');
            
            $sql=$this->input->post('sql');
            $pendingRequests=$this->Query->login($sql);
            if(count($pendingRequests)>0){
            $to_eco='<table class="table table-striped table-bordered table-hover">';
            $to_eco=$to_eco.'<thead>';
            $to_eco=$to_eco.' <tr>';
            $to_eco=$to_eco.'<th class="bg-orange">No.</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Date Receive</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Date Deadline</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Request Party</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Request Description</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Name of Payee</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Remark</th>';
            $to_eco=$to_eco.'<th class="bg-orange"><center>Action</center></th>';
            $to_eco=$to_eco.'</tr>';
            $to_eco=$to_eco.'</thead>';
            $to_eco=$to_eco.'<tbody id="temp_result">';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
             $ctr=0;
            foreach ($pendingRequests as $key => $det) { 
                  $ctr++;
                  $to_eco=$to_eco.'<tr>';
                  $to_eco=$to_eco.'<td>'.$ctr.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->date_received.'</td>';
                  $to_eco=$to_eco. '<td>'.$det->date_deadline.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_party.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_description.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->requestor_First_name.' '.$det->requestor_Last_name.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_remarks.'</td>';
                  $to_eco=$to_eco.'<td>';
                  $to_eco=$to_eco.'<center>';
                  if(($det->request_remarks)=='waiting'){
                    $to_eco=$to_eco.'<a href="'.base_url('home/request_details/deside/'.$det->request_id.'/'.$det->requestor_id).'" title="View"><i class="fa fa-eye"></i></a>';
                  
                  }else{
                    $to_eco=$to_eco.'<a href="'.base_url('home/request_details/update/'.$det->request_id.'/'.$det->requestor_id).'" title="View"><i class="fa fa-eye"></i></a>';
                  }
                  $to_eco=$to_eco.'</center>';
                  $to_eco=$to_eco.'</td>';
                  $to_eco=$to_eco.'</tr>';
            }
            $to_eco=$to_eco.'</tbody>';
            $to_eco=$to_eco.' </table> ';
              echo $to_eco; 
              }else{
                echo "<center><br><br>No Request Encoded</center><br><br><br><br>";
              }                       
    }
 }
 public function get_requestors_request()
    {
        $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $this->load->model('Query');
            
            $sql=$this->input->post('sql');
            $pendingRequests=$this->Query->login($sql);
            $to_eco='<table class="table table-striped table-bordered table-hover">';
            $to_eco=$to_eco.'<thead>';
            $to_eco=$to_eco.' <tr>';
            $to_eco=$to_eco.'<th class="bg-orange">No.</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Date Receive</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Date Approved</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Request Party</th>';
             $to_eco=$to_eco.'<th class="bg-orange">Remark</th>';
            $to_eco=$to_eco.'<th class="bg-orange"><center>Action</center></th>';
            $to_eco=$to_eco.'</tr>';
            $to_eco=$to_eco.'</thead>';
            $to_eco=$to_eco.'<tbody id="temp_result">';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
             $ctr=0;
            foreach ($pendingRequests as $key => $det) { 
                  $ctr++;
                  $to_eco=$to_eco.'<tr>';
                  $to_eco=$to_eco.'<td>'.$ctr.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->date_received.'</td>';
                  $to_eco=$to_eco. '<td>'.$det->date_marked.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_party.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->request_remarks.'</td>';
                  $to_eco=$to_eco.'<td>';
                  $to_eco=$to_eco.'<center>';
                  $to_eco=$to_eco.'<a href="'.base_url('home/request_details/update/'.$det->request_id.'/'.$det->requestor_id).'" title="View or Edit"><i class="fa fa-pencil"></i></a>';
                  $to_eco=$to_eco.'</center>';
                  $to_eco=$to_eco.'</td>';
                  $to_eco=$to_eco.'</tr>';
            }
            $to_eco=$to_eco.'</tbody>';
            $to_eco=$to_eco.' </table> ';
              echo $to_eco;                        
    }
}

    public function set_prompts($title,$id,$message,$icon,$alert)
     {
        
        $bottom=10;
        $to_eco="";
        if($message=='approve'){
            $message="This request has been approved.";
        }else if($message=='updated'){
            $message="This request has been updated.";
        }else if($message=='disapproved'){
            $message="This request has been disapproved.";
        }else if($title=='Upload_error'){
            $message='Error in uploading image.<br> Maybe image is too large.';
        }else if($title=='event_deleted'){
            $title="Event Deleted";
            $message="";
        }else if($title=='updated_event'){
            $title="Event Updated";
            $message="";
        }else if($title=='Send'){
            $title="Message Sent";
            $message="";
        }else if($title=='Failed'){
            $title="Message sending fail!";
            $message="";
        }
        if($message=="wala"){
            $message=$this->input->post('message');
        }
        $to_eco=$to_eco.='<div class="row"><div id="promt_delete'.$id.'" style="display: inline;" class="alert alert-'.$alert.' fade in figure fadeIn  animated col-md-3 pull-right ">';
        $to_eco=$to_eco.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        $to_eco=$to_eco.'<strong><i class="fa '.$icon.' fa-2x"></i> '.$title.' </strong> <br>'.$message;
        $to_eco=$to_eco.'</div>';
        $to_eco=$to_eco.'<style type="text/css">';
        $to_eco=$to_eco.'#promt_delete'.$id.' {';
        $to_eco=$to_eco.'display: none;';
        $to_eco=$to_eco.'text-decoration: none;';
        $to_eco=$to_eco.'position: fixed;';
        $to_eco=$to_eco.'bottom: '.$bottom.'px;';
        $to_eco=$to_eco.'right: 10px;';
        $to_eco=$to_eco.'overflow: hidden;';
        $to_eco=$to_eco.'width: 262px;';
        $to_eco=$to_eco.'border: 0;';
        $to_eco=$to_eco.'border-radius: 3px;';
        $to_eco=$to_eco.'}';
        $to_eco=$to_eco.'</style>;</div>';
        echo $to_eco;
     }
      public function staffs()
      {
         if($this->session->userdata('type')=='admin'){
            $this->load->model("Query");
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }

            $sql="select * from staffdetail inner join users on users.id=staffdetail.id where users.remark='approved'";
            $data['staff_info']=$this->Query->login($sql);

            $this->load->view('inc/staffs',$data);
         }else{
            redirect('home');
         }
      }
      public function get_staffs()
      {
         $remark = $this->session->userdata('remark');
        if ("$remark" == 'out' || "$remark" == "") {
            redirect('home');
        } else {
            $this->load->model('Query');
            
            $sql=$this->input->post('sql');
            $pendingRequests=$this->Query->login($sql);
            $to_eco='<table class="table table-striped table-bordered table-hover">';
            $to_eco=$to_eco.'<thead>';
            $to_eco=$to_eco.' <tr>';
            $to_eco=$to_eco.'<th class="bg-orange">No.</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Name</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Email</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Cell No.</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Address</th>';
            $to_eco=$to_eco.'<th class="bg-orange">City</th>';
            $to_eco=$to_eco.'<th class="bg-orange"><center>Action</center></th>';
            $to_eco=$to_eco.'</tr>';
            $to_eco=$to_eco.'</thead>';
            $to_eco=$to_eco.'<tbody id="temp_result">';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
            $to_eco=$to_eco.'';
             $ctr=0;
            foreach ($pendingRequests as $key => $det) { 
                  $ctr++;
                  $to_eco=$to_eco.'<tr>';
                  $to_eco=$to_eco.'<td>'.$ctr.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->ln.', '.$det->fn.'</td>';
                  $to_eco=$to_eco. '<td>'.$det->email.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->phone.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->address.'</td>';
                  $to_eco=$to_eco.'<td>'.$det->city.'</td>';
                  $to_eco=$to_eco.'<td>';
                  $to_eco=$to_eco.'<center>';
                  $to_eco=$to_eco.'<a href="'.base_url('admin/staff_request_encoded/'.$det->id.'/').'" title="View encoded requests"><i class="fa fa-eye"></i></a>';
                  $to_eco=$to_eco.'</center>';
                  $to_eco=$to_eco.'</td>';
                  $to_eco=$to_eco.'</tr>';
            }
            $to_eco=$to_eco.'</tbody>';
            $to_eco=$to_eco.' </table> ';
              echo $to_eco;                        
    }
      }
      public function staff_request_encoded($staff_id='')
      {
        $remark = $this->session->userdata('remark');
        if ($this->session->userdata('type')!='admin') {
            redirect('home');
        } else {
            $this->load->model("Query");
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }

            $sql="select * from request_info inner join date_requested on request_info.request_id=date_requested.request_id inner join requestor_locator on request_info.request_id = requestor_locator.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join request_remarks on request_info.request_id=request_remarks.request_id inner join nature_of_expense on program_code=code inner join assigned_staff_request on request_info.request_id=assigned_staff_request.request_id where assigned_staff_request.staff_id=$staff_id and  date_received rlike('".date('Y')."') limit 30";
            
            $data['requests']=$this->Query->login($sql);
            $data['staff_id']=$staff_id;

            $this->load->view('inc/staff_request_encoded',$data);
        } 
      }

      public function get_promp_admin($value='')
      {
           $bottom=20;
        $to_eco="";
         if(count($this->session->userdata('admin_need_promp'))<=0){
            $this->get_from_database_admin_promp();
         }
         $array=$this->session->userdata('admin_need_promp');

         if(count($array)>0){
            $i=0;
            $request_id=$array[$i][0];
            $requestor_id=$array[$i][1];
            $date_deadline=$array[$i][2];
            $request_party=$array[$i][3];
            $date_deadline=$array[$i][4];
            $ctr=0;
            $m=array();
            for ($i=1; $i < count($array); $i++) { 
                $m[$ctr][0]=$array[$i][0];
                $m[$ctr][1]=$array[$i][1];
                $m[$ctr][2]=$array[$i][2];
                $m[$ctr][3]=$array[$i][3];
                $m[$ctr][4]=$array[$i][4];

                $ctr++;
            }
            $this->session->set_userdata('admin_need_promp',$m);
        $to_eco=$to_eco.='<div class="row"><div id="admin_promp" style="display: inline;" class="alert alert-danger fade in figure fadeIn  animated col-md-3 pull-right ">';
        $to_eco=$to_eco.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        $to_eco=$to_eco.'<strong><i class="fa fa-calendar fa-2x"></i> Waiting <small>'.$date_deadline.'</small> </strong> <br>' . $request_party .' <br><small> <a href="'.base_url('home/request_details/deside/'.$request_id.'/'.$requestor_id).'">View Details</a></small>';
        $to_eco=$to_eco.'</div>';
        $to_eco=$to_eco.'<style type="text/css">';
        $to_eco=$to_eco.'#admin_promp {';
        $to_eco=$to_eco.'display: none;';
        $to_eco=$to_eco.'text-decoration: none;';
        $to_eco=$to_eco.'position: fixed;';
        $to_eco=$to_eco.'bottom: '.$bottom.'px;';
        $to_eco=$to_eco.'left: 10px;';
        $to_eco=$to_eco.'overflow: hidden;';
        $to_eco=$to_eco.'width: 262px;';
        $to_eco=$to_eco.'border: 0;';
        $to_eco=$to_eco.'border-radius: 3px;';
        $to_eco=$to_eco.'}';
        $to_eco=$to_eco.'</style>;</div>';
        echo $to_eco;
    }
      }

      public function get_from_database_admin_promp()
      {
        $this->load->model("Query");
        $date1=date('Y-m-d');
        $date2=date('Y-m')."-".(date('d')+1);
        $date3=date('Y-m')."-".(date('d')+2);
        $date4=date('Y-m')."-".(date('d')+3);
        $date5=date('Y-m')."-".(date('d')+4);
        $date6=date('Y-m')."-".(date('d')+5);

         $sql="select * from request_info inner join date_requested on request_info.request_id=date_requested.request_id inner join requestor_locator on request_info.request_id = requestor_locator.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join request_remarks on request_info.request_id=request_remarks.request_id inner join nature_of_expense on program_code=code where request_remarks='waiting' and (date_deadline rlike('$date1') or date_deadline rlike('$date2') or date_deadline rlike('$date3') or date_deadline rlike('$date4') or date_deadline rlike('$date5') or date_deadline rlike('$date6') )";
         
         $data=$this->Query->login($sql);
         $array = array();
         $ctr=0;
         foreach ($data as $key => $value) {
             $array[$ctr][0]=$value->request_id;
             $array[$ctr][1]=$value->requestor_id;
             $array[$ctr][2]=$value->date_deadline;
             $array[$ctr][3]=$value->request_party;
             $array[$ctr][4]=$value->date_deadline;
             $ctr++;
         }
         $this->session->set_userdata('admin_need_promp',$array);
      }
      public function settings()
      {
          $remark = $this->session->userdata('remark');
        if ($this->session->userdata('type')!='admin') {
            redirect('home');
        } else {
            $this->load->model("Query");
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select date_time,users.id,uname,fn,ln,email,city,phone,address from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
            $this->load->view('inc/settings',$data);
        }
      }
      public function set_theme_color($path='',$color='')
      {
        $this->load->model("Query");
         $this->Query->setQuery("delete from theme_color");
          $data=array('path'=>$path,'color'=>$color);
            $this->Query->add_info('theme_color',$data);
            redirect('admin/settings');
      }
      public function add_event()
      {
          if ($this->session->userdata('type') == 'admin') {
            $this->load->model('Query');
//------------------------------------->>>>>>>>>>>>addingTOdatabase
            $folder_name=date('Y-m-d_h_m_s');
            $file_name=$folder_name.'.jpg';
            $targetFolder = './uploads/'.$folder_name.'/'; // Relative to the root
        
            if (!is_dir($targetFolder)) {
                mkdir($targetFolder, 0755);
            }
            $config['upload_path'] = $targetFolder;
            $config['file_name'] = $file_name;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $this->load->library('upload', $config);
            
            
            if(!$this->upload->do_upload()){
                 
                $this->session->set_flashdata('upload_error',$this->upload->display_errors());

            }else{
                $data = array(
                'event_title' => $this->input->post('event_title'),
                'event_disc' => $this->input->post('enent_story'),
                'event_date' => $this->input->post('event_date'),
                'event_path' => $folder_name.'/'.$file_name,
                'event_folder' => $folder_name
                );
                $this->Query->add_info('landing_events',$data);
            }
            redirect('admin/settings');
        } else {
            redirect('home');
        }
      }
      public function edit_event($event_id='')
      {
          if ($this->session->userdata('type') == 'admin') {
            $this->load->model('Query');
//------------------------------------->>>>>>>>>>>>addingTOdatabase
            $folder_name=date('Y-m-d_h_m_s');
            $file_name=$folder_name.'.jpg';
            $targetFolder = './uploads/'.$folder_name.'/'; // Relative to the root
        
            if (!is_dir($targetFolder)) {
                mkdir($targetFolder, 0755);
            }
            $config['upload_path'] = $targetFolder;
            $config['file_name'] = $file_name;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $this->load->library('upload', $config);
            
           
            if(!$this->upload->do_upload()){
                 
                
                $data = array(
                'event_title' => $this->input->post('event_title'),
                'event_disc' => $this->input->post('enent_story'),
                'event_date' => $this->input->post('event_date')
                );

            $where = array('event_id' => $event_id );
            $this->Query->update_info('landing_events',$data,$where);
            }else{
                $event=$this->Query->login('select * from landing_events where event_id='.$event_id);
                if(count($event)>0){


                    foreach ($event as $key => $value) {
                        $path=$value->event_folder;
                    }
                    // $delete_path=base_url('uploads/'.$path);
                    // delete_file($delete_path,true);  



                    $data = array(
                    'event_title' => $this->input->post('event_title'),
                    'event_disc' => $this->input->post('enent_story'),
                    'event_date' => $this->input->post('event_date'),
                    'event_path' => $folder_name.'/'.$file_name,
                    'event_folder' => $folder_name
                    );
                    $where = array('event_id' => $event_id );
                    $this->Query->update_info('landing_events',$data,$where);
            }
           
        }
         $this->session->set_flashdata('updated_event',"naa");
         redirect('admin/settings');
    } else {
            redirect('home');
        }
      }



      public function delete_event($event_id='')
      {
         if ($this->session->userdata('type') == 'admin') {
            $this->load->model('Query');
            $event=$this->Query->login('select * from landing_events where event_id='.$event_id);
            if(count($event)>0){


            foreach ($event as $key => $value) {
                $path=$value->event_folder;
            }
            $this->load->helper('file');
            delete_files('./uploads/'.$path.'/');
            // $delete_path=base_url('uploads/'.$path);
            // delete_file($delete_path,true);

            $this->Query->setQuery("delete from landing_events where event_id=$event_id");
            
        }
        $this->session->set_flashdata('event_deleted','deleted');
        redirect('admin/settings');
        }else{
            redirect('home');
        }
      }
      public function staffs_viewer()
      {
          $remark = $this->session->userdata('remark');
        if ($this->session->userdata('type')!='admin') {
            redirect('home');
        } else {
            $this->load->model("Query");
            $uname = $this->session->userdata('username');
            $pass = $this->session->userdata('password');

            $arr = $this->Query->login("select id from users where uname='$uname' && pass='$pass' && type='admin'");
            $id;
            foreach ($arr as $key => $value) {
                $id = $value->id;
            }
            $res = $this->Query->login("select t2.id,ln,fn,email,city,phone,address,account,youraccount from staffdetail  inner join socialmedia as t2  on staffdetail.id=t2.id where staffdetail.id=$id");
            $pending = $this->Query->login("select * from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='unapprove' && type='staff'");
            $data['users']=$res;
            $data['pendingStaff']=$pending;
            $data['pendingRequests']=$this->Query->login("select * from request_remarks where request_remarks='waiting'");
            $anual_budget=$this->Query->login('select * from anual_budget');
                foreach ($anual_budget as $key => $value) {
                  $data['anual_budget']=$this->visualize_moneyCash($value->anual_amount);
                }
            $data['registered_staff'] = $this->Query->login("select * from users inner join staffdetail on staffdetail.id=users.id inner join logs on staffdetail.id=logs.id where remark='approved' && type='staff'");
            $this->load->view('inc/staffs_viewer',$data);
        }
      }
      public function block_staff($id='')
      {
          if($this->session->userdata('type')=='admin' && $id!=''){
             $this->load->model("Query");
            $data=array('remark'=>'unapprove');
            $where=array('id'=>$id);
            $this->Query->update_info('users',$data,$where);
            redirect('admin/staffs_viewer');
          }else{
            redirect('home');
          }
      }
      public function edit_staff($id='')
      {
         if($this->session->userdata('type')=='admin' && $id!=''){
        $this->load->model("Query");
          $data = array(
            'fn' => $this->input->post('fname'),
            'ln' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'city' =>$this->input->post('city') ,
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')

            );
          $where = array('id' => $id );
          $this->Query->update_info('staffdetail',$data,$where);
          $data = array('uname' => $this->input->post('uname'),'pass' => $this->input->post('password') );
          $this->Query->update_info('users',$data,$where);
          redirect('admin/staffs_viewer');
           }else{
            redirect('home');
          }
      }
      public function send_now()
      {
          if($this->session->userdata('type')=='admin'){
            $phone_number=$this->input->post('phone_number');
            $message=$this->input->post('phone_number');

          }else{
            redirect('home');
          }
      }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */