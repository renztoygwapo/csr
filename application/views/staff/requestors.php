<?php if($this->session->userdata('type')=="staff"){
    $this->load->view('staff/staffnavbar'); 
}else{
    $this->load->view('inc/adminHead'); 
}?>
<!-- Optional header components (ex: slider) -->

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
                    <li><a href="#">Requestors</a></li>
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
                            <li class="active"><a href="#tab-1" data-toggle="tab"  onclick="changeTab(1)">Requestors</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
                            
                                <div class="col-md-3 pull-right" style="padding: 2px;">
                                    <select class="form-control" id="view_year" onchange="view_requestors()">
                                        <?php
                                        for ($i = date('Y'); $i > 1935; $i--) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3 pull-right" style="padding: 2px;">
                                    <select class="form-control" id="view_month" onchange="view_requestors()">
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
                                    <input class="form-control" placeholder="Search..." onkeyup="view_requestors()" id="view_search" >
                                </div>
                            </div>
                                
                        </div>

                            <div class="tab-pane fade in active" id="tab-1">
                                <center><img class='img-responsive' src='<?=base_url('assets/sou/images/load4.gif')?>'></center>
                                <!-- <div class="tab-body" >
                                    <h3 class="title title-lg">January - December 2015</h3>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="bg-orange">Name</th>
                                                <th class="bg-orange">Address</th>
                                                <th class="bg-orange">Contact Number</th>
                                                <th class="bg-orange">No. of Requests</th>
                                                <th class="bg-orange">Total Amount</th>
                                                <th class="bg-orange">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="temp_result">
                                            <tr>
                                                <td>Lou R. Pinton</td>
                                                <td>Southern Davovao, Panabo City</td>
                                                <td>09484388157</td>
                                                <td class="info"><center>23</center></td>
                                                <td class="warning"><center>P30,000</center></td>
                                                
                                                <td>
                                                    <a class="text-base" href="#confirm-Disapprove" title="Delete" onclick="delete_request('25','24')">
                                                    <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            
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
    view_requestors();
    function view_requestors() {
        var h1=document.getElementById('tab-1');
        h1.innerHTML="<center><img class='img-responsive' src='<?=base_url('assets/sou/images/load4.gif')?>'></center>";
        var view_year=document.getElementById('view_year').value;
        var view_month=document.getElementById('view_month').value;
        var view_search=document.getElementById('view_search').value;
        var temp_year="";
        var temp_search="";
        var and="";
        if(view_search!=""){
            temp_search=" (requestor_First_name rlike('"+view_search+"') or requestor_Last_name rlike('"+view_search+"') or requestor_address rlike('"+view_search+"') or requestor_contact rlike('"+view_search+"'))";
            and=" and ";
        }
        temp_year=and+"  date_received rlike('"+view_year+"')";
        if(view_month!="all"){
            temp_year=and+"  date_received rlike('"+view_year+"-"+view_month+"') ";
        }
        var sql="select * from requestor_locator inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join date_requested on requestor_locator.request_id=date_requested.request_id inner join request_remarks on requestor_locator.request_id=request_remarks.request_id where  "+temp_search+" "+temp_year;
                                 $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('home/view_requestors') ?>",
                                      data: {
                                        sql:sql,
                                        month:view_month,
                                        year:view_year
                                      },
                                      success: function(data) {

                                        var h1=document.getElementById('tab-1');
                                        h1.innerHTML=data;
                                     } 
                                    });
    }
</script>


<?php $this->load->view('headfoot/footer_in'); ?>