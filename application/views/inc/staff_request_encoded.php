<?php $this->load->view('inc/adminHead'); ?>
<!-- Optional header components (ex: slider) -->
<?php
$from = "admin/pendingStaff"; 
$staffAct="active"
?>
<!-- MAIN CONTENT -->

<div class="modal fade" id="confirm-Disapprove"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="disForm" class="sky-form">    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirm</h4>
            </div>
            <div class="modal-body">  
                   <p><b>Are you sure you want to disapprove this request?</b></p>                             
                    <fieldset class="no-padding">           
                        <section class="">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Date Received</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="text" disabled="disabled">
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Date Deadline</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="text" disabled="disabled">
                                        </label>
                                    </div>               
                                </div>
                            </div>   

                        </section>

                        <section class="no-margin">
                            <div class="row">
                                <section class="col-xs-12">
                                    <label>Request Party</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text"disabled="disabled">
                                    </label>
                                </section>
                            </div> 
                            <div class="row">
                                <section class="col-xs-12">
                                     <label class="label">Description</label>
                                    <label class="textarea">
                                        <textarea rows="3" name="description" placeholder="Description" disabled></textarea>
                                    </label>
                                </section>
                                
                            </div>
                        </section>
                        <section>
                            <label>Name of Payee</label>
                            <label for="file" class="input">
                                <input type="text"disabled="disabled">
                            </label>
                        </section>
                    </fieldset>
                
                                                
                <p>
                    The details of this staff will be deleted in the database.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button data-dismiss="modal" class="btn btn-danger" id="disapproved_yes">Yes</button>
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
                <h2>Tosiran4TE</h2>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb">
                    <li><a href="#">Staff </a></li>
                    <li clas="active">Pending Request</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice animate-hover-slide bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="section-title-wr">
                <h3 class="section-title left"><span></span></h3>
            </div>
        <div id="" class="row" >
            <div class="row">

                <div class="col-md-12">
                    <div class="tabs-framed">
                        <ul class="tabs clearfix">
                            <li class="active"><a href="#tab-1" data-toggle="tab"  onclick="changeTab(1)">Request Encoded</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-3">
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

</div>

<a href="#" id="toTop" style="display: none;"><span id="toTopHover" ></span></a></body>



<script type="text/javascript" src="<?= base_url('assets/sou/js/lou_login_Query.js') ?>"></script>
<script>
                function add_socialMedia() {

                    }
                    function socialSelected(i) {
                        var val = document.getElementById('addSocialMedia').elements[i].value;
                        if (val === "on") {
                            document.getElementById('addSocialMedia').elements[i].value = "off";
                            document.getElementById('addSocialMedia').elements[i + 1].removeAttribute('class');
                            var h1 = document.getElementById('addSocialMedia').elements[i + 1];
                            var att = document.createAttribute('class');
                            att.value = "form-control hidden";
                            h1.setAttributeNode(att);
                        } else {
                            document.getElementById('addSocialMedia').elements[i].value = "on";
                            document.getElementById('addSocialMedia').elements[i + 1].removeAttribute('class');
                            var h1 = document.getElementById('addSocialMedia').elements[i + 1];
                            var att = document.createAttribute('class');
                            att.value = "form-control";
                            h1.setAttributeNode(att);
                        }
                    }
                    function updateSocial() {
                        for (var i = 2; i < 12; i += 2) {
                            if (document.getElementById('addSocialMedia').elements[i].value === "off") {
                                document.getElementById('addSocialMedia').elements[i + 1].value = "";
                            }
                        }
                    }
                    function update_info() {
                        var h1 = document.getElementById("personalInfoForm");
                        var att = document.createAttribute("action");
                        att.value = "<?= site_url("admin/update_info_admin") ?>";
                        h1.setAttributeNode(att);
                    }

                    function update_info_selectEdit(i) {
                        var val = document.getElementById("personalInfoForm").elements[i].value;
                        if (val === "off") {
                            document.getElementById("personalInfoForm").elements[i].value = "on";
                            document.getElementById("personalInfoForm").elements[i - 1].removeAttribute("disabled");
                        } else {
                            document.getElementById("personalInfoForm").elements[i].value = "off";
                            var h1 = document.getElementById("personalInfoForm").elements[i - 1];
                            var att = document.createAttribute("disabled");
                            att.value = "disabled";
                            h1.setAttributeNode(att);
                        }
                        var found = false;
                        for (var y = 3; y <= 13; y++) {
                            if (document.getElementById("personalInfoForm").elements[y].value === "on") {
                                found = true;
                                break;
                            }
                        }
                        if (found) {
                            document.getElementById("update-info").removeAttribute("class");
                            var h1 = document.getElementById("update-info");
                            var att = document.createAttribute("class");
                            att.value = "btn btn-base";
                            h1.setAttributeNode(att);
                        } else {

                            document.getElementById("update-info").removeAttribute("class");
                            var h1 = document.getElementById("update-info");
                            var att = document.createAttribute("class");
                            att.value = "btn btn-base hidden";
                            h1.setAttributeNode(att);
                        }
                    }
                    function disapproved_now(request_id) {
                        
                      $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/request_disapproved') ?>/"+request_id,
                                      data: {
                                      },
                                      success: function(data) {
                                        get_pendings();
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML=data;

                                     } 
                                    });
                    }
                    get_pendings();
                    function get_pendings () {
                        var search=document.getElementById('view_search').value;
                        var year=document.getElementById('view_year').value;
                        var month=document.getElementById('view_month').value;
                        var sql_search="";
                        var rlike="";
                        if(search!==""){
                            sql_search=" and (requestor_First_name rlike('"+search+"') or requestor_Last_name rlike('"+search+"') or request_party rlike('"+search+"'))";
                        }if(month==="all"){
                            rlike=year;
                        }else{
                            rlike=year+"-"+month
                        }
                        var sql="select * from request_remarks inner join request_info on request_remarks.request_id=request_info.request_id inner join requestor_locator on request_remarks.request_id=requestor_locator.request_id inner join request_affilation on requestor_locator.request_affiliation_id=request_affilation.request_affiliation_id inner join requestor_info on requestor_locator.requestor_id=requestor_info.requestor_id inner join date_requested on request_remarks.request_id=date_requested.request_id inner join assigned_staff_request on assigned_staff_request.request_id=request_remarks.request_id inner join staffdetail on staffdetail.id=assigned_staff_request.staff_id   where assigned_staff_request.staff_id=<?=$staff_id?> and date_received rlike('"+rlike+"')"+sql_search;
                        var h1= document.getElementById('pendings_results');
                        h1.innerHTML="<center><img class='img-responsive' src='<?=base_url('assets/sou/images/load4.gif')?>'></center>";
                       $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/get_request_encoded') ?>",
                                      data: {
                                        sql:sql

                                      },
                                      success: function(data) {

                                        var h1=document.getElementById('pendings_results');
                                        h1.innerHTML=data;
                                     } 
                                    });
                    }
                    function disapproved(request_id,date_received,date_deadline,request_party,request_description,requestor_payee) {

                                document.getElementById("disForm").elements[2].value = date_received;
                                document.getElementById("disForm").elements[3].value = date_deadline;
                                document.getElementById("disForm").elements[4].value = request_party;
                                document.getElementById("disForm").elements[5].value = request_description;
                                document.getElementById("disForm").elements[6].value = requestor_payee;
                                document.getElementById("disapproved_yes").removeAttribute("onclick");
                                var h1=document.getElementById("disapproved_yes");
                                var att=document.createAttribute("onclick");
                                att.value="disapproved_now('"+request_id+"')";
                                h1.setAttributeNode(att);
                                
                            
  
                    }        
</script>

<?php $this->load->view('headfoot/footer_in'); ?>