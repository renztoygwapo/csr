 <?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $remark = $this->session->userdata('remark');
//        $this->session->sess_destroy();
        if ("$remark" == 'out' || "$remark" == "") {
            $this->load->model('Query');
            $users = $this->Query->getUsers();
            $this->load->view('inc/login', ['users' => $users]);
            $this->session->set_userdata('remark', 'out');
        } else {
            $this->login();
        }
    }

    public function login() {
        $this->load->model('Query');
        if ($this->session->userdata('remark') == 'login') {
            if ($this->session->userdata('type') == 'staff') {
                redirect('staff');
            } else {

                redirect('admin');
            }
        } else {
            $uname = $this->input->post('logUname');
            $pass = $this->input->post('logPass');
            $res = $this->Query->login("select * from users where uname='$uname' && pass='$pass' && type='admin'");
            if (count($res) > 0) {

                foreach ($res as $key => $value) {
                    $id = $value->id;
                } $mwa = array(
                    "id" => $id,
                    "username" => $uname,
                    "password" => $pass,
                    "remark" => 'login',
                    "type" => "admin"
                );
                $this->session->set_userdata($mwa);
                $this->login();
            } else {
                $res = $this->Query->login("select * from users where uname='$uname' && pass='$pass' && type='staff' && remark='approved'");
                foreach ($res as $key => $value) {
                    $id = $value->id;
                }
                if (count($res) > 0) {
                    $mwa = array(
                        "id" => $id,
                        "username" => $uname,
                        "password" => $pass,
                        "remark" => 'login',
                        "type" => "staff"
                    );
                    $this->session->set_userdata($mwa);

                    redirect('staff');
                }if ($uname == null && $pass == null) {
                    redirect('Home');
                } else {
                    $this->promp_404("Congratulations $uname", 'fa fa-thumbs-up', 'You are now registered but you connot access until the management or the admin will accept your request.', "OD", "G");
                }
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->load->model('Query');
        $this->Query->setQuery("update users set status='offline' where type='admin'");
        $this->index();
    }

    public function signup() {
        $ses = array(
            'remark' => 'signup'
        );
        $this->load->model('Query');
        $users = $this->Query->getUsers();
        $this->load->view('inc/signup', ['users' => $users]);
    }

    public function signin($submit = null) {
        if ($submit == null) {
            $this->index();
        } else {
            if ($this->input->post('fname') != "") {
                $res = 1;
                $id = 0;
                while ($res != 0) {
                    $id = mt_rand(0, 100000);
                    $this->db->like('id', $id);
                    $this->db->from('staffdetail');
                    $res = $this->db->count_all_results();
                }
                $staff_data = array(
                    'id' => $id,
                    'fn' => $this->input->post('fname'),
                    'ln' => $this->input->post('lname'),
                    'email' => $this->input->post('email'),
                    'city' => $this->input->post('city'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'pic_folder' => date('Y-d-m-h-i-s').'_staff',
                    'pic_path' => 'assets/sou/images/defult image.png'
                );
                $users_data = array(
                    'id' => $id,
                    'uname' => $this->input->post('uname'),
                    'pass' => $this->input->post('pass'),
                    'type' => 'staff',
                    'remark' => 'unapprove',
                    'status' => 'offline'
                );
                $fn = $this->input->post('fname');
                $ln = $this->input->post('lname');
                $em = $this->input->post('email');
                $ad = $this->input->post('address');

                $val = "First Name: $fn Last Name: $ln Email: $em Address:   $ad";
                $sql = "insert into logs set id=$id, trans='Add Staff', date_time=now(), value='$val'";
                $this->load->model('Query');
                $this->Query->adduser($staff_data, $users_data, $sql);
                $this->promp_404('You Are Now Registered', 'fa fa-thumbs-up', 'You are now registered but you connot access until the management or the admin will accept your request.', "OD", "G");
            } else {
                redirect("Home/signup");
            }
        }
    }

    public function promp_404($title, $icon, $message, $right, $left) {
        $array = array(
            'title' => $title,
            'icon' => $icon,
            'message' => $message,
            'left' => $left,
            'right' => $right
        );
        $this->load->view('inc/promp_staff_in', ['users' => $array]);
    }

    public function tcpdf() {
        
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('TCPDF Example 053');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 053', PDF_HEADER_STRING);
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        $pdf->SetFont('times', '', 14);

        $pdf->AddPage();

        $text = 'This is an example of <strong>JavaScript</strong> usage on PDF documents.<br /> <br />For more information check the source code of this example, the source code documentation for the <i>IncludeJS() </i> method and the <i>JavaScript for Acrobat API Reference</i> guide.<br /><br /><a href="http://www.tcpdf.org">www.tcpdf.org</a>';
        $pdf->writeHTML($text, true, 0, true, 0);

        $js = <<<EOD
        app.alert('JavaScript Popup Example', 3, 0, 'Welcome');
var cResponse = app.response({ cQuestion: 'How are you today?', cTitle: 'Your Health Status', cDefault: 'Fine', cLabel: 'Response:' });
if (cResponse == null) { app.alert('Thanks for trying anyway.', 3, 0, 'Result');
} else { app.alert('You responded, "'+cResponse+'", to the health question.', 3, 0, 'Result');
}
EOD;
        $js .= 'print(true);';

        $pdf->IncludeJS($js);

        $pdf->Output('example_053.pdf', 'D');

//   $pdf=new TCPDF();
//        $pdf->Addpge('P','A4');
//        $html='<html>
//                <head></head>
//                <body><table border="1">
//                <tr><th>name</th>
//                <th>company</th></tr>
//                <tr>
//                <td>helllo</td>
//                <td>xx technologies</td>
//                </tr>
//                </table>
//                </body>
//                </html>';
//        
//        $pdf->writeHTML($html, true,
//                false, true, false, '');
//        $pdf->Output();
//        
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
     public function call_requests()
     {
         $title="";
         $page=$this->input->post('page');
         $year=$this->input->post('year');
         if($page=="01"){
            $title="January - December ".$year;
         }else if($page=="02"){
            $title="January ".$year;
         }else if($page=="03"){
            $title="February ".$year;
         }else if($page=="04"){
            $title="March ".$year;
         }else if($page=="05"){
            $title="April ".$year;
         }else if($page=="06"){
            $title="May ".$year;
         }else if($page=="07"){
            $title="June ".$year;
         }else if($page=="08"){
            $title="July ".$year;
         }else if($page=="09"){
            $title="August ".$year;
         }else if($page=="10"){
            $title="September ".$year;
         }else if($page=="11"){
            $title="October ".$year;
         }else if($page=="12"){
            $title="November ".$year;
         }else if($page=="13"){
            $title="December".$year;
         }
         $amount_cash_calulated=0;
         $amount_inkind_calulated=0;

         $sql=$this->input->post('sql');

         $this->load->model('Query');
         $data=$this->Query->login($sql);
         $sql=$this->input->post('sql_cash');
         $amount_cash_array=$this->Query->login($sql);
         $sql=$this->input->post('sql_inkind');
         $amount_inkind_array=$this->Query->login($sql);
         foreach ($amount_cash_array as $key => $value) {
            $getme="sum(request_cash_amount)";
             $amount_cash_calulated=$value->$getme;
         }
         foreach ($amount_inkind_array as $key => $value) {
            $getme="sum(request_total_item_price)";
             $amount_inkind_calulated=$value->$getme;
         }
         $total_amount=$amount_cash_calulated+$amount_inkind_calulated;
         $total_amount_human=$this->visualize_moneyCash($total_amount);
         $dis_approved=$this->input->post('des_approved');
         $ap_approved=$this->input->post('ap_approved');

         if($dis_approved=="on" && $ap_approved=="off"){
            $total_amount_human=0;
         }
         $to_eco='<div class="tab-body">';
         $to_eco=$to_eco.'<div class="row"><div class="col-md-6"><h3 class="title title-lg">'.$title.'</h3></div><div class="col-md-6"><h3 class="title title-lg pull-right" title="Totle Disbursment">P'.$total_amount_human.'</h3></div></div>';
         $to_eco=$to_eco.'<div class="table-responsive">';
         if(count($data)>0){
         $to_eco=$to_eco.'<table class="table table-striped table-bordered table-hover">';
         $to_eco=$to_eco.'<thead>';
         $to_eco=$to_eco.'<tr>';
         $to_eco=$to_eco.'<th class="bg-orange">Date Receive</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Date Process</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Name of Payee</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Requesting Party</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Description</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Nature of Expense</th>';
         $to_eco=$to_eco.'<th  class="bg-orange">Assistance Extended</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Amount</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Assistance Extended</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Amount</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Status</th>';
         $to_eco=$to_eco.'<th class="bg-orange">Action</th>';
         $to_eco=$to_eco.'</tr>';
         $to_eco=$to_eco.'</thead>';
         $to_eco=$to_eco.'<tbody id="temp_result">';
         foreach ($data as $key => $value) {
            $to_eco=$to_eco.'<tr>';
            $to_eco=$to_eco.'<td >'.$value->date_received.'</td>';
            $to_eco=$to_eco.'<td >'.$value->date_process.'</td>';
            $mi=$value->requestor_Middle_name;
            $to_eco=$to_eco.'<td >'.$value->requestor_First_name." ".$mi[0].". ".$value->requestor_Last_name.'</td>';
            $to_eco=$to_eco.'<td >'.$value->request_party.'</td>';
            $to_eco=$to_eco.'<td >'.$value->request_description.'</td>';
            $to_eco=$to_eco.'<td class="info">'.$value->nature_of_expense.'</td>';
            $kind="";
            if("".($value->request_kind)=="cash" || "cash-inkind"==($value->request_kind).""){
             $kind ="Cash Assistance"; 
            } 
            $to_eco=$to_eco.'<td class="warning">'.$kind.'</td>';
            $amount="";
            if("".($value->request_kind)=="cash" || "cash-inkind"==($value->request_kind).""){
                $this->load->model('Query');
                $sql = "select * from request_amount_cash where request_id=".$value->request_id;
                $cash=$this->Query->login($sql);
                foreach ($cash as $keys => $cashes) {
                $amount= $cashes->request_cash_amount;
                  break;
                }
             }
            $to_eco=$to_eco.'<td class="light-gray">'.$amount.'</td>';
            $kind="";
            if("".($value->request_kind)=="inkind" || "cash-inkind"==($value->request_kind).""){
             $kind ="Inkind Assistance"; 
            }
            $to_eco=$to_eco.'<td class="warning">'.$kind.'</td>';
            $amount="";
            if("".($value->request_kind)=="inkind" || "cash-inkind"==($value->request_kind).""){
                $this->load->model('Query');
                $sql = "select sum(request_total_item_price) from request_items_inkind where request_id=".$value->request_id;
                $cash=$this->Query->login($sql);
                foreach ($cash as $keys => $cashes) {
                $getme="sum(request_total_item_price)";
                    $amount= $cashes->$getme;
                }
            }
            $to_eco=$to_eco.'<td class="light-gray">'.$amount.'</td>';
            if("".($value->request_remarks)=="approved"){$stat= ' <center><i class="fa fa-thumbs-up"></i></center>';}else{ $stat= '<center><i class="fa fa-thumbs-down"></i></center>';}
            $to_eco=$to_eco.'<td >'.$stat.'</td>';
            $to_eco=$to_eco.'<td ><a class="text-base"   href="'.base_url('home/request_details/update/'.$value->request_id.'/'.$value->requestor_id).'" title="Update">';
            $to_eco=$to_eco.'<i class="fa fa-pencil"></i>';
            $to_eco=$to_eco.'</a> | <a class="text-danger"   href="#confirm-Disapprove" title="Delete" onclick="delete_request(\''.$value->request_id.'\',\''.$value->requestor_id.'\')">';
            $to_eco=$to_eco.'<i class="fa fa-trash"></i>';
            $to_eco=$to_eco.'</a>';
            $to_eco=$to_eco.'</td></tr>';

         }

         $to_eco=$to_eco.'</tbody>';
         $to_eco=$to_eco.'</table>';
     }else{
        $to_eco=$to_eco.'No Requests';
     }
         $to_eco=$to_eco.'</div>';
         $to_eco=$to_eco.'</div>';

         echo $to_eco;
     }

     public function delete_request()
     {
        $request_id=$this->input->post('request_id');
        $requestor_id=$this->input->post('requestor_id');
        $number_promp=$this->input->post('number_promp');
        $current_number=$this->input->post('current_number');
         // $sql="delete from requestor_locator where request_id=".$request_id;
         $this->load->model('Query');
        // $this->Query->setQuery($sql);
        $sql="delete from request_items_inkind where request_id=".$request_id;
        $this->Query->setQuery($sql);
        $sql="delete from request_amount_cash where request_id=".$request_id;
        $this->Query->setQuery($sql);
        $sql="delete from program where request_id=".$request_id;
       $this->Query->setQuery($sql);
        $sql="delete from request_remarks where request_id=".$request_id;
        $this->Query->setQuery($sql);
        $sql="delete from scanned_documents where request_id=".$request_id;
        $this->Query->setQuery($sql);
        $sql="delete from date_requested where request_id=".$request_id;
        $this->Query->setQuery($sql);

        $sql="select * from request_info where request_id=".$request_id;
        $data=$this->Query->login($sql);
        foreach ($data as $key => $value) {
            $request_party=$value->request_party;

        }
        $data_to_logs=array(
            'trans'=>'Delete Request',
            'date_time'=>date('Y-m-d h-i-s'),
            'value'=>'Request Party: '.$request_party
            );
         $this->Query->add_info('logs',$data_to_logs);
        $sql="delete from request_info where request_id=".$request_id;
        $this->Query->setQuery($sql);
        
        $bottom=0;
        for ($i=1; $i <= $current_number; $i++) { 
            $bottom+=90;
        }
        $bottom+=10;
        $to_eco="";
        $to_eco=$to_eco.='<div class="row"><div id="promt_delete'.$number_promp.'" style="display: inline;" class="alert alert-success fade in figure fadeIn  animated col-md-3 pull-right ">';
        $to_eco=$to_eco.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="x_promp('.$number_promp.')">×</button>';
        $to_eco=$to_eco.'<strong><i class="fa fa-trash fa-2x"></i> Deleted! </strong> <br>'.$request_party;
        $to_eco=$to_eco.'</div>';
        $to_eco=$to_eco.'<style type="text/css">';
        $to_eco=$to_eco.'#promt_delete'.$number_promp.' {';
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
     public function view_requestors()
     {
         $sql=$this->input->post('sql');
         $this->load->model('Query');
        $data=$this->Query->login($sql);
         
        $to_eco="";
        $to_eco=$to_eco.'';
        $title="";
        $month=$this->input->post('month');
        $year=$this->input->post('year');

        if($month=="all"){
            $title="January - December " . $year;
        }else if($month=="1"){
            $title="January " . $year;
        }else if($month=="2"){
            $title="February " . $year;
        }else if($month=="3"){
            $title="March " . $year;
        }else if($month=="4"){
            $title="April " . $year;
        }else if($month=="5"){
            $title="May " . $year;
        }else if($month=="6"){
            $title="June " . $year;
        }else if($month=="7"){
            $title="July " . $year;
        }else if($month=="8"){
            $title="August " . $year;
        }else if($month=="9"){
            $title="September " . $year;
        }else if($month=="10"){
            $title="October " . $year;
        }else if($month=="11"){
            $title="November " . $year;
        }else if($month=="12"){
            $title="December " . $year;
        }
        $to_eco=$to_eco.'<div class="tab-body" >';
            $to_eco=$to_eco.'<h3 class="title title-lg">'.$title.'</h3>';
            $to_eco=$to_eco.'<div class="table-responsive">';
            $to_eco=$to_eco.'<table class="table table-striped table-bordered table-hover">';
            $to_eco=$to_eco.'<thead>';
            $to_eco=$to_eco.'<tr>';
            $to_eco=$to_eco.'<th class="bg-orange">Name</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Address</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Contact Number</th>';
            $to_eco=$to_eco.'<th class="bg-orange">No. of Requests</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Total Amount</th>';
            $to_eco=$to_eco.'<th class="bg-orange">Action</th>';
            $to_eco=$to_eco.'</tr>';
            $to_eco=$to_eco.'</thead>';
            $to_eco=$to_eco.'<tbody id="temp_result">';
            $array=array("");$ctr=0;
        foreach ($data as $key => $value) {
            $naa="";
            for($i=0;$i<$ctr;$i++){
                if($array[$i]==($value->requestor_id).""){
                    $naa="naa";
                    break;
                }
            }
            if($naa==""){
            $to_eco=$to_eco.'<tr>';
            $to_eco=$to_eco.'<td>'.$value->requestor_First_name.' '.$value->requestor_Last_name.'</td>';
            $to_eco=$to_eco.'<td>'.$value->requestor_address.'</td>';
            $to_eco=$to_eco.'<td>'.$value->requestor_contact.'</td>';
            $sql="select count(request_id) from requestor_locator where requestor_id=".$value->requestor_id;
            $counter=$this->Query->login($sql);
            foreach ($counter as $keys => $counts) {
                $getme="count(request_id)";
                $to_eco=$to_eco.'<td class="info"><center>'.$counts->$getme.'</center></td>';
                break;
            }
            $sql="select sum(request_cash_amount) from requestor_locator inner join request_amount_cash on requestor_locator.request_id=request_amount_cash.request_id inner join request_remarks on requestor_locator.request_id=request_remarks.request_id where request_remarks!='waiting' && request_remarks!='disapproved' and requestor_id=".$value->requestor_id;
            $cash_amount=0;
            $amounts=$counter=$this->Query->login($sql);
            foreach ($amounts as $keys => $money) {
                $getme="sum(request_cash_amount)";
                $cash_amount=$money->$getme;
                break;
            }
            $sql="select sum(request_total_item_price) from requestor_locator inner join request_items_inkind on requestor_locator.request_id=request_items_inkind.request_id inner join request_remarks on requestor_locator.request_id=request_remarks.request_id where request_remarks!='waiting' && request_remarks!='disapproved' and requestor_id=".$value->requestor_id;
            $inkind_amount=0;
            $amounts=$counter=$this->Query->login($sql);
            foreach ($amounts as $keys => $money) {
                $getme="sum(request_total_item_price)";
                $inkind_amount=$money->$getme;
                break;
            }

            $total_amount=$cash_amount+$inkind_amount;
            $to_eco=$to_eco.'<td class="warning"><center>'.$total_amount.'</center></td>';
            $to_eco=$to_eco.'<td>';
            $to_eco=$to_eco.'<a class="text-base" href="'.base_url('home/requestor_info/'.$value->requestor_id).'" title="View" >';
            $to_eco=$to_eco.'<i class="fa fa-eye"></i>';
            $to_eco=$to_eco.'</a>';
            $to_eco=$to_eco.' </td>';
            $to_eco=$to_eco.'</tr>';
            $array[$ctr]=$value->requestor_id;
            $ctr++;
        }
        }

            $to_eco=$to_eco.'</tbody>';
            $to_eco=$to_eco.'</table>';
            $to_eco=$to_eco.'</div>';
            $to_eco=$to_eco.'</div>';
        echo $to_eco;
     }

     public function requestor_info($requestor_id='')
     {
         if($this->session->userdata('type')=='staff' || $this->session->userdata('type')=='admin' ){
            $this->load->model('Query');
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
            $sql="select * from requestor_info where requestor_id=".$requestor_id;
            $data['requestor_info']=$this->Query->login($sql);
            $sql="select * from requestor_locator inner join request_info on requestor_locator.request_id=request_info.request_id inner join request_remarks on requestor_locator.request_id=request_remarks.request_id inner join date_requested on requestor_locator.request_id=date_requested.request_id inner join request_affilation on requestor_locator.request_affiliation_id=request_affilation.request_affiliation_id inner join nature_of_expense on request_info.program_code=nature_of_expense.code where requestor_locator.requestor_id=".$requestor_id;
            $data['requests_info']=$this->Query->login($sql);
            $sql="select count(request_id) from requestor_locator where requestor_id=".$requestor_id;
            $counter=$this->Query->login($sql);
            foreach ($counter as $keys => $counts) {
                $getme="count(request_id)";
                $data['count_request']=$counts->$getme;
                break;
            }
            $sql="select sum(request_cash_amount) from requestor_locator inner join request_amount_cash on requestor_locator.request_id=request_amount_cash.request_id inner join request_remarks on requestor_locator.request_id=request_remarks.request_id where request_remarks!='waiting' && request_remarks!='disapproved' and requestor_id=".$requestor_id;
            $cash_amount=0;
            $amounts=$counter=$this->Query->login($sql);
            foreach ($amounts as $keys => $money) {
                $getme="sum(request_cash_amount)";
                $cash_amount=$money->$getme;
                break;
            }
            $sql="select sum(request_total_item_price) from requestor_locator inner join request_items_inkind on requestor_locator.request_id=request_items_inkind.request_id inner join request_remarks on requestor_locator.request_id=request_remarks.request_id where request_remarks!='waiting' && request_remarks!='disapproved' and requestor_id=".$requestor_id;
            $inkind_amount=0;
            $amounts=$counter=$this->Query->login($sql);
            foreach ($amounts as $keys => $money) {
                $getme="sum(request_total_item_price)";
                $inkind_amount=$money->$getme;
                break;
            }

            $data['total_amount']=$cash_amount+$inkind_amount;
            $this->load->view('staff/staffRequestors',$data);
         }else{
            redirect();
         }
     }
     public function edit_requestor($id)
     {
        if($this->session->userdata('type')=='staff' || $this->session->userdata('type')=='admin' ){
             $this->load->model('Query');
             $data = array(
                'requestor_First_name' => $this->input->post('fn'), 
                'requestor_Last_name' => $this->input->post('ln'), 
                'requestor_address' => $this->input->post('add'), 
                'requestor_Middle_name' => $this->input->post('mn'),
                'requestor_contact' => $this->input->post('con')
                );
             $where = array('requestor_id' => $id );
             $this->Query->update_info('requestor_info',$data,$where);
             $data=array('requestor_updated'=>"yes");
             $this->session->set_userdata($data);
             redirect('home/requestor_info/'.$id);
        }else{
            redirect();
         }
     }
     public function request_details($viewer="",$request_id="",$requestor_id="")
    {
        if($this->session->userdata('type')=='staff' || $this->session->userdata('type')=='admin' ){
           $this->load->model('Query');
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
            $sql="select * from requestor_locator inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join request_info on requestor_locator.request_id=request_info.request_id inner join request_affilation on requestor_locator.request_affiliation_id=request_affilation.request_affiliation_id inner join nature_of_expense on request_info.program_code=nature_of_expense.code inner join date_requested on requestor_locator.request_id=date_requested.request_id where requestor_locator.request_id=".$request_id." and requestor_locator.requestor_id=".$requestor_id;
            $data['request_info']=$this->Query->login($sql);
            $sql="select * from program inner join reference on program.reference_id=reference.reference_id where request_id=".$request_id;
            $data['reference']=$this->Query->login($sql);
            $sql="select * from request_amount_cash where request_id=".$request_id;
            $data['request_amount_cash']=$this->Query->login($sql);
            $sql="select * from request_items_inkind where request_id=".$request_id;
            $data['request_items_inkind']=$this->Query->login($sql);
            $data['viewer']=$viewer;
            $this->load->view('view_request_info',$data);
         }else{
            redirect();
         }
    }
    public function do_update_request($quantity="",$kind="",$program="",$request_id="",$requestor_id="",$request_affiliation_id="")
    {
      var_dump($this->input->post());
      $data = array(
        'requestor_affilation' => $this->input->post('payee_affiliation')
        );
      $where = array(
        'request_affiliation_id' => $request_affiliation_id
        );
       $this->load->model('Query');
      $this->Query->update_info('request_affilation',$data,$where);
      for ($i=1; $i < 32 ; $i++) { 
        var_dump("<br>Sub-nature-".$i.": ".$this->input->post('sub_nature_'.$i)."<br>");
      }
      $data = array(
        'request_party' => $this->input->post(''),
        'request_description' => $this->input->post(''),
        'request_kind' => ""

         );
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
    public function update_request_now($numItems,$kind,$program,$request_id,$requestor_id,$request_affiliation_id)
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
            $data = array('date_marked' => date('Y-m-d h:i:s') );
            $this->Query->update_info('date_requested',$data,$where);
            $this->session->set_flashdata('promp','updated');
            redirect('home/request_details/update/'.$request_id."/".$requestor_id);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

