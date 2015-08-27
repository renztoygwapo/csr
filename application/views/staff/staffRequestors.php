<?php if($this->session->userdata('type')=="staff"){
    $this->load->view('staff/staffnavbar'); 
}else{
    $this->load->view('inc/adminHead'); 
}?><!-- Optional header components (ex: slider) -->

<!-- MAIN CONTENT -->


<div class="pg-opt">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h2><?= $this->session->userdata('username') ?></h2>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Requestor</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                        <div class="col-md-6">
                            <div class="milestone-counter">
                                <div class="c-base"style='font-size:55px;font-family:"Roboto",sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center'>
                                    P 1,999,787.00
                                </div>
                                <h4 class="milestone-info c-base">Disbursement</h4>
                            </div>
                        </div>
                        <div class="col-md-6" style="border-left: #258233 1px solid;">
                            <div class="milestone-counter">
                                <div class="c-base text-center"style='font-size:55px;font-family:"Roboto",sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center'>
                                    P 5,878,669.00
                                </div>
                                <h4 class="milestone-info c-base">Remaining Budget</h4>
                            </div>
                        </div>
                    </div>
                    <br>
            <div class="row">
                 <div class="col-md-3" style="border-right: #666666;">
                    <div class="section-title-wr ">
                        <h4 class="section-title left"><span>Monthly Expenditures</span></h4>
                    </div>
                    <label class="">January</label><i class="c-base pull-right"  ><span title="Disbursment">P500,000</span> /<span title="Remaining Budget"> P0</span></i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%">

                        </div>
                    </div>
                    <label class="">February</label><i class="c-base pull-right"  >P50,000 / P450,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%">
                        </div>
                    </div>
                    <label class="">March</label><i class="c-base pull-right" >P300,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">

                        </div>
                    </div>
                    <label class="">April</label><i class="c-base pull-right"  >P559,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%">     
                        </div>
                    </div>
                    <label class="">May</label><i class="c-base pull-right"  >P220,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                        </div>
                    </div>
                    <label class="">June</label><i class="c-base pull-right"  >P199,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                        </div>
                    </div>
                    <label class="">July</label><i class="c-base pull-right"  >P600,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        </div>
                    </div>
                    <label class="">August</label><i class="c-base pull-right"  >P110,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                        </div>
                    </div>
                    <label class="">September</label><i class="c-base pull-right"  >P23,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%">
                        </div>
                    </div>
                    <label class="">October</label><i class="c-base pull-right"  >P398,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 64%">
                        </div>
                    </div>
                    <label class="">November</label><i class="c-base pull-right"  >P50,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        </div>
                    </div>
                    <label class="">December</label><i class="c-base pull-right"  >P30,000</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    
                    <section class="slice base p-15">
                        <div class="cta-wr">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>
                                            <?php $this->load->model('Query');
                                                foreach ($requestor_info as $key => $value) {
                                                    $mn=$value->requestor_Middle_name;
                                                    $firstname=$value->requestor_First_name;
                                                    $lastname=$value->requestor_Last_name;
                                                    $address=$value->requestor_address;
                                                    $contact=$value->requestor_contact;
                                                    $requestor_id=$value->requestor_id;


                                                    echo $value->requestor_First_name." ".$mn[0].". ".$value->requestor_Last_name;
                                                }
                                             ?>
                                        </h1>
                                    </div>
                                    <div class="col-md-3">
                                        <h1>
                                            <?=$count_request?> Request
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="slice bg-white bb">
                        <div class="wp-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="section-title-wr">
                                            <h3 class="section-title left"><span>Your details <?=$firstname?> </span></h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="short-feature">
                                                    <div class="feature-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="feature-txt">
                                                        <h3><?=$firstname?></h3>
                                                        <p>First Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="short-feature">
                                                    <div class="feature-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="feature-txt">
                                                        <h3><?=$mn?></h3>
                                                        <p>Middle Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="short-feature">
                                                    <div class="feature-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="feature-txt">
                                                        <h3><?=$lastname?></h3>
                                                        <p>Last Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="short-feature">
                                                    <div class="feature-icon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <div class="feature-txt">
                                                        <h3><?=$contact?></h3>
                                                        <p>Contact</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="short-feature">
                                                    <div class="feature-icon">
                                                        <i class="fa fa-location-arrow"></i>
                                                    </div>
                                                    <div class="feature-txt">
                                                        <h3><?=$address?></h3>
                                                        <p>Address</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="short-feature">
                                                    <a  data-toggle="modal" href="#edit_details"> 
                                                        <div class="feature-icon">
                                                            <i class="fa fa-pencil"></i>
                                                        </div>
                                                        <div class="feature-txt">
                                                            
                                                                <h3>Update</h3>
                                                                <p>Click to edit details</p>
                                                            
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <div class="row">
                        
                        <div class="col-md-12">
                    <div class="tabs-framed">
                        <ul class="tabs clearfix">
                            <li class="active"><a href="#tab-1" data-toggle="tab"  onclick="changeTab(1)">Requests</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-title-wr" style="margin-top:10px;">
                                     <?php if($this->session->userdata('type')=='staff'){
                                        ?>   <a href="<?=base_url('staff/addRequest_old/'.$requestor_id)?>" class="btn btn-xs btn-base" style="margin-left:14px"><i clas="fa fa-plus"></i>Add New</a>
                                     <?php } ?>
                                     </div>
                                </div>
                                <div class="col-md-9">
                            
                                <div class="col-md-3 pull-right" style="padding: 2px;">
                                    <select class="form-control" id="view_year" onchange="get_pendings()">
                                        <?php
                                        for ($i = date('Y'); $i > 1935; $i--) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3 pull-right" style="padding: 2px;">
                                    <select class="form-control" id="view_month" onchange="get_pendings()">
                                        <option value="all">Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-3  pull-right" style="padding: 2px;">
                                    <input class="form-control" placeholder="Search..." onkeyup="get_pendings()" id="view_search" >
                                </div>
                            </div>
                                
                        </div>

                            <div class="tab-pane fade in active" id="tab-1">
                                <br>
                                <div class="row">
                                    <div class="col-md-12" id="pendings_results">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="bg-orange">No.</th>
                                            <th class="bg-orange">Date Receive</th>
                                            <th class="bg-orange">Date Approved</th>
                                            <th class="bg-orange">Request Party</th>
                                            <th class="bg-orange">Remark</th>
                                            <th class="bg-orange"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody id="temp_result">
                                        <?php
                                        $ctr=0;
                                            foreach ($requests_info as $keys => $det) {
                                                $ctr++;
                                                ?>
                                                <tr>
                                            <td><?=$ctr?>.</td>
                                            <td><?=$det->date_received?></td>
                                            <td><?=$det->date_marked?></td>
                                            <td><?=$det->request_party?></td>
                                            <td><?=$det->request_remarks?></td>
                                            <td>
                                                <center>
                                                    <a href="<?=base_url('home/request_details/update')?>/<?=$det->request_id?>/<?=$det->requestor_id?>" title="View or Edit"><i class="fa fa-pencil"></i></a>
                                                </center>
                                            </td>
                                        </tr>
                                                <?php
                                            }
                                        ?>

                                        </tbody>

                                </table>
                            </div>
                            </div>
                            </div>

                            
                        </div>
                    </div>


                </div>
                        
                    </div>
                </div>
               
            </div>

        </div>
    </div>
</section>

<div class="modal fade" id="edit_details"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?=base_url('home/edit_requestor/'.$requestor_id)?>" class="sky-form">    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">                               
                    <fieldset class="no-padding">           
                        <section class="">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input name="fn" value="<?=$firstname?>" type="text" required>
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input name="ln" value="<?=$lastname?>" type="text" required >
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input name="mn" value="<?=$mn?>" type="text" required>
                                        </label>
                                    </div>               
                                </div>
                            </div>   

                        </section>

                        <section class="no-margin">
                            <div class="row">
                                <section class="col-xs-12">
                                    <label>Address</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input name="add" value="<?=$address?>" type="text" required>
                                    </label>
                                    </section>
                                </div> 
                            </section>
                        <section>
                            <label>Contact</label>
                            <label for="file" class="input">
                                <input name="con" value="<?=$contact?>" type="text" required>
                            </label>
                        </section>
                    </fieldset>
                
                                                
                <p>
                    Fill in all the field above.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" >Yes</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

</div>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>

<script type="text/javascript">
    set_promps();
    function get_pendings () {
                        var search=document.getElementById('view_search').value;
                        var year=document.getElementById('view_year').value;
                        var month=document.getElementById('view_month').value;
                        var sql_search="";
                        var rlike="";
                        if(search!==""){
                            sql_search=" and (request_party rlike('"+search+"') or date_received rlike('"+search+"') )";
                        }if(month==="all"){
                            rlike=year;
                        }else{
                            rlike=year+"-"+month
                        }
                        var sql="select * from request_remarks inner join request_info on request_remarks.request_id=request_info.request_id inner join requestor_locator on request_remarks.request_id=requestor_locator.request_id inner join request_affilation on requestor_locator.request_affiliation_id=request_affilation.request_affiliation_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join date_requested on request_remarks.request_id=date_requested.request_id inner join assigned_staff_request on assigned_staff_request.request_id=request_remarks.request_id  where (requestor_First_name='<?=$firstname?>' and requestor_Last_name='<?=$lastname?>') and date_received rlike('"+rlike+"')"+sql_search+" order by date_received asc";
                        var h1= document.getElementById('pendings_results');
                        h1.innerHTML="<center><img class='img-responsive' src='<?=base_url('assets/sou/images/load4.gif')?>'></center>";
                       $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/get_requestors_request') ?>",
                                      data: {
                                        sql:sql

                                      },
                                      success: function(data) {

                                        var h1=document.getElementById('pendings_results');
                                        h1.innerHTML=data;
                                     } 
                                    });
                    }
    function set_promps () {
        if("<?=$this->session->userdata('requestor_updated')?>"=="yes"){ 
                        
                      $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts') ?>/"+"Requestor"+"/<?=$requestor_id?>/wala/fa-pencil/success",
                                      data: {
                                        message:'Details of <?=$firstname?> is now updated.'
                                      },
                                      success: function(data) {
                                       
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML=data;
                                        <?php $data=array('requestor_updated'=>"");$this->session->set_userdata($data); ?>
                                     } 
                                    });
    }
}
</script>

<?php $this->load->view('headfoot/footer_in'); ?>