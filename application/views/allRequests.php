<?php if($this->session->userdata('type')=="staff"){
    $this->load->view('staff/staffnavbar'); 
}else{
    $this->load->view('inc/adminHead'); 
}?>
<!-- Optional header components (ex: slider) -->

<!-- MAIN CONTENT -->
<div class="modal" id="dateRange"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog animated bounceIn">
        <div class="modal-content">
            <form method="post" id="disForm" class="sky-form">    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                <br>
            </div>
            <div class="modal-body">                     
                    <fieldset class="no-padding">           
                        <section class="">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>From</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="date">
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-6">
                                       <div class="form-group">
                                        <label>Upto</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="date">
                                        </label>
                                    </div>             
                                </div>
                            </div>  
                        </section>
                        <p>
                            Date range to generate report
                        </p>
                    </fieldset>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-base" ><i class="fa fa-print"></i> Print</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="pg-opt">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h2><?= $this->session->userdata('username') ?></h2>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Requests</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="tabs-framed">
                        <ul class="tabs clearfix">
                            <li class="active"><a href="#tab-1" data-toggle="tab"  onclick="changeTab(1)">All Request</a></li>
                            <li><a href="#tab-2" data-toggle="tab" onclick="changeTab(2)">Jan</a></li>
                            <li><a href="#tab-3" data-toggle="tab" onclick="changeTab(3)">Feb</a></li>
                            <li><a href="#tab-4" data-toggle="tab" onclick="changeTab(4)">Mar</a></li>
                            <li><a href="#tab-5" data-toggle="tab" onclick="changeTab(5)">Apr</a></li>
                            <li><a href="#tab-6" data-toggle="tab" onclick="changeTab(6)">May</a></li>
                            <li><a href="#tab-7" data-toggle="tab" onclick="changeTab(7)">Jun</a></li>
                            <li><a href="#tab-8" data-toggle="tab" onclick="changeTab(8)">Jul</a></li>
                            <li><a href="#tab-9" data-toggle="tab" onclick="changeTab(9)">Aug</a></li>
                            <li><a href="#tab-10" data-toggle="tab" onclick="changeTab(10)">Sep</a></li>
                            <li><a href="#tab-11" data-toggle="tab" onclick="changeTab(11)">Oct</a></li>
                            <li><a href="#tab-12" data-toggle="tab" onclick="changeTab(12)">Nov</a></li>
                            <li><a href="#tab-13" data-toggle="tab" onclick="changeTab(13)">Dec</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-4">
                                <form action="#" id="frmLogin" class="sky-form" style="padding-left:20px;">                                    
                                        <fieldset>                  
                                            <section>
                                                <div class="row">
                                                    
                                                        <div class="col-md-6">
                                                            <label class="checkbox">
                                                                <input type="checkbox" onclick="approved_click()" name="remember" checked=""><i></i>Approved
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="remember" onclick="disapproved_click()" checked=""><i></i>Disapproved
                                                            </label>
                                                        </div>

                                                    </div>

                                                
                                            </section>
                                        </fieldset>  
                                    </form>
                            </div>
                                <div class="col-md-8">
                            <div class="col-md-3 pull-right" style="padding: 2px;">
                                <select class="form-control" id="view_program" onchange="call_requests()">
                                    <option value="all">Show All</option>
                                    <option value="csr1">Educational Program</option>
                                    <option value="csr2">Medical Program</option>
                                    <option value="csr3">Charitable Contribution</option>
                                    <option value="csr4">Community Development</option>
                                    <option value="csr5">Environment Development</option>
                                    <option value="csr6">Social Program</option>

                                </select>
                            </div>
                            <div class="col-md-3 pull-right" style="padding: 2px;">
                                <select class="form-control" id="view_year" onchange="call_requests()">
                                    <?php
                                    for ($i = date('Y'); $i > 1935; $i--) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3 pull-right" style="padding: 2px;">
                                <input class="form-control" placeholder="Search..." onkeyup="call_requests()" id="view_search" >
                            </div>
                            <div class=" pull-right" style="padding: 2px;">
                                <a id="printButton" type="button" class="btn btn-b-dark filter" href="" onclick="printNow()" title="Genrate this Report"><i class="fa fa-print"></i></a>
                            </div>
                            <div class="pull-right" style="padding: 2px;">
                                <a data-toggle="modal" href="#dateRange"  type="button" class="btn btn-b-base filter" title="Generate Report Given Specified Date Range"><i class="fa fa-calendar"></i></a>
                        
                            </div>
                            </div>
                                
                        </div>
                            <div class="tab-pane fade in active" id="tab-1">
                                <!-- <div class="tab-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="title title-lg">January - December <?=date('Y')?></h3>
                                        </div>
                                        
                                    </div>
                                    <div class="table-responsive">

                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="bg-orange">Date Receive</th>
                                                    <th class="bg-orange">Date Process</th>
                                                    <th class="bg-orange">Name of Payee</th>
                                                    <th class="bg-orange">Requesting Party</th>
                                                    <th class="bg-orange">Description</th>
                                                    <th class="bg-orange">Nature of Expense</th>
                                                    <th  class="bg-orange">Assistance Extended</th>
                                                    <th class="bg-orange">Amount</th>
                                                    <th class="bg-orange">Assistance Extended</th>
                                                    <th class="bg-orange">Amount</th>
                                                    <th class="bg-orange">Status</th>
                                                    <th class="bg-orange">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody id="temp_result">
                                                
<?php foreach ($requests as $key => $value) { ?>
                                                    <tr>
                                                        <td ><?=$value->date_received?></td>
                                                        <td><?=$value->date_process?></td>
                                                        <td><?=$value->requestor_First_name?> <?php $mi=$value->requestor_Middle_name; echo $mi[0]."."; ?> <?=$value->requestor_Last_name?></td>
                                                        <td><?=$value->request_party?></td>
                                                        <td><?=$value->request_description?></td>
                                                        <td class="info"><?=$value->nature_of_expense?></td>
                                                        <td class="warning"><?php if("".($value->request_kind)=="cash" || "cash-inkind"==($value->request_kind).""){ echo "Cash Assistance"; } ?></td>
                                                        <td class="light-gray">
                                                            <?php
                                                             if("".($value->request_kind)=="cash" || "cash-inkind"==($value->request_kind).""){
                                                                $this->load->model('Query');
                                                                $sql = "select * from request_amount_cash where request_id=".$value->request_id;
                                                                $cash=$this->Query->login($sql);
                                                                foreach ($cash as $keys => $cashes) {
                                                                   echo $cashes->request_cash_amount;
                                                                   break;
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="warning"><?php if("".($value->request_kind)=="inkind" || "cash-inkind"==($value->request_kind).""){echo "Inkind Assistance" ; } ?></td>
                                                        <td class="light-gray">
                                                             <?php
                                                             if("".($value->request_kind)=="inkind" || "cash-inkind"==($value->request_kind).""){
                                                                $this->load->model('Query');
                                                                $sql = "select sum(request_total_item_price) from request_items_inkind where request_id=".$value->request_id;
                                                                $cash=$this->Query->login($sql);
                                                                foreach ($cash as $keys => $cashes) {
                                                                    $getme="sum(request_total_item_price)";
                                                                   echo $cashes->$getme;
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?php if("".($value->request_remarks)=="approved"){echo ' <center><i class="fa fa-thumbs-up"></i></center>';}else{ echo '<center><i class="fa fa-thumbs-down"></i></center>';} ?></td>
                                                        <td><a class="text-base"   href="#confirm-Disapprove" title="Update">
                                                                <i class="fa fa-pencil"></i>
                                                            </a> | <a class="text-danger"   href="#confirm-Disapprove" title="Delete" onclick="delete_request('<?=$value->request_id?>','<?=$value->requestor_id?>')">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                            </div>

                            <div class="tab-pane fade" id="tab-2">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-4">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-5">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-6">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-7">
                               
                            </div>
                            <div class="tab-pane fade" id="tab-8">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-9">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-10">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-11">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-12">
                                
                            </div>
                            <div class="tab-pane fade" id="tab-13">
                               
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

</div>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>


<script type="text/javascript">
                               
                                <?php if($this->session->userdata('program_display')!=""){
                                    ?>
                                    document.getElementById('view_program').value="<?=$this->session->userdata('program_display')?>";

                                    <?php
                                    $this->session->set_userdata('program_display','');
                                }else{ ?>
                                    document.getElementById('view_program').value="all";
                                    
                                    <?php

                                } ?> 
                                var disapproved="on";
                                var approved="on";
                                var page=1;
                                function disapproved_click() {
                                    if(disapproved=="on"){
                                        disapproved="off";
                                    }else{
                                        disapproved="on";
                                    }
                                    call_requests();
                                }

                                function approved_click() {
                                   if(approved=="on"){
                                        approved="off";
                                    }else{
                                        approved="on";
                                    }
                                    call_requests();
                                }
                                call_requests();
                                function call_requests() {
                                    
                                    var search=document.getElementById('view_search').value;
                                    var view_year=document.getElementById('view_year').value;
                                    var view_program=document.getElementById('view_program').value;
                                    var sql="";
                                    var temp_dis="";
                                    var temp_app="";
                                    var temp_search="";
                                    var temp_page="";
                                    var temp_year="";
                                    var tt_page="";
                                    var temp_program="";
                                    if(page==2){
                                        tt_page="01";
                                    }else if(page==3){
                                        tt_page="02";
                                    }else if(page==4){
                                        tt_page="03";
                                    }else if(page==5){
                                        tt_page="04";
                                    }else if(page==6){
                                        tt_page="05";
                                    }else if(page==7){
                                        tt_page="06";
                                    }else if(page==8){
                                        tt_page="07";
                                    }else if(page==9){
                                        tt_page="08";
                                    }else if(page==10){
                                        tt_page="09";
                                    }else if(page==11){
                                        tt_page="10";
                                    }else if(page==12){
                                        tt_page="11";
                                    }else if(page==13){
                                        tt_page="12";
                                    }
                                    if(disapproved=="on"){
                                        temp_dis=" or request_remarks='desapproved'";
                                    }else{
                                        temp_dis=" and request_remarks!='desapproved'";
                                    }
                                   if (disapproved=="off"){
                                        temp_app=" and request_remarks='approved'";
                                    }else if(approved=="on"){
                                        temp_app=" or request_remarks='approved'";
                                    } else{
                                        temp_app=" and request_remarks!='approved'";
                                    }
                                    if(search!=""){
                                        temp_search=" and (requestor_Last_name rlike('"+search+"') or requestor_First_name rlike('"+search+"') or request_party rlike('"+search+"'))";
                                    }
                                    if(page!="1"){
                                        temp_page=" and date_received rlike('"+view_year+"-"+tt_page+"')";
                                    }else{
                                        temp_page=" and date_received rlike('"+view_year+"')";
                                    }
                                    if(view_program!="all"){
                                        temp_program=" and program_code='"+view_program+"'";
                                    }

                                    var sql="select * from request_info inner join date_requested on request_info.request_id=date_requested.request_id inner join requestor_locator on request_info.request_id = requestor_locator.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join request_remarks on request_info.request_id=request_remarks.request_id inner join nature_of_expense on program_code=code where ((request_remarks.request_remarks!='waiting' "+temp_dis+")"+temp_app+")"+temp_search+""+temp_page+""+temp_program+" limit 30";
                                    var sql_cash="select sum(request_cash_amount) from requestor_locator inner join request_remarks on requestor_locator.request_id=request_remarks.request_id inner join request_amount_cash on requestor_locator.request_id=request_amount_cash.request_id inner join date_requested on requestor_locator.request_id=date_requested.request_id inner join request_info on requestor_locator.request_id=request_info.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id where request_remarks='approved' "+temp_search+""+temp_page+""+temp_program;
                                    var sql_inkind="select sum(request_total_item_price) from requestor_locator inner join request_remarks on requestor_locator.request_id=request_remarks.request_id inner join request_items_inkind on requestor_locator.request_id=request_items_inkind.request_id inner join date_requested on requestor_locator.request_id=date_requested.request_id inner join request_info on requestor_locator.request_id=request_info.request_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id where request_remarks='approved' "+temp_search+""+temp_page+""+temp_program;
                                    document.getElementById('tab-'+page).innerHTML="<center><img class='img-responsive' src='<?=base_url('assets/sou/images/load4.gif')?>'></center>";
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('home/call_requests') ?>",
                                      data: {
                                        sql:sql,
                                        sql_cash:sql_cash,
                                        sql_inkind:sql_inkind,
                                        des_approved:disapproved,
                                        ap_approved:approved,
                                        program:view_program,
                                        page:page,
                                        year:view_year
                                      },
                                      success: function(data) {
                                        document.getElementById('tab-'+page).innerHTML=data;
                                     } 
                                    });
                                }

                                var tab = 1;
                                function changeTab(num) {
                                    tab = num;
                                    page=num;
                                    call_requests();
                                }
                                var number_promp=1;
                                var current_number=1;
                                function delete_request(request_id,requestor_id) {
                                   if(confirm("Are you sure you want to delete this request?")==true){ 
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('home/delete_request') ?>",
                                      data: {
                                        request_id:request_id,
                                        requestor_id:requestor_id,
                                        number_promp:number_promp,
                                        current_number:current_number
                                      },
                                      success: function(data) {
                                        call_requests();
                                        var h1=document.getElementById('float_promp');
                                        
                                        h1.innerHTML=h1.innerHTML + data;
                                        number_promp++;
                                        current_number++;
                                        
                                     } 
                                    });
                                    }
                                }

                                function printNow() {
                                    var val = document.getElementById("tab-" + tab).innerHTML;
//                                    document.getElementById('printButton').removeAttribute('href');
//                                    var h1=document.getElementById('printButton');
//                                    var att=document.createAttribute('href');
//                                    att.value="<?= site_url('staff/reports') ?>"+"/"+val;
//                                    h1.setAttributeNode(att);
                                    window.open("<?= site_url('staff/pdfAllReports') ?>", "Report");
                                }
                            
</script>

<?php $this->load->view('headfoot/footer_in'); ?>