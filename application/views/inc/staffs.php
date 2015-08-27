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
                <h4 class="modal-title" id="myModalLabel">Are you sure you want to disapprove this staff?</h4>
            </div>
            <div class="modal-body">  
                                                
                    <fieldset class="no-padding">           
                        <section class="">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="text" disabled="disabled">
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-envelope-o"></i>
                                                <input type="email" disabled="disabled">
                                            </label>
                                        </div>  
                                    </div>               
                                </div>
                            </div>   

                        </section>

                        <section class="no-margin">
                            <div class="row">
                                <section class="col-xs-6">
                                    <label>First Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text"disabled="disabled">
                                    </label>
                                </section>
                                <section class="col-xs-6">
                                    <label>Last Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text"disabled="disabled">
                                    </label>
                                </section>
                            </div> 
                            <div class="row">
                                <section class="col-xs-6">
                                    <label>City</label>
                                    <label class="input">
                                        <input type="text"disabled="disabled">
                                    </label>
                                </section>
                                <section class="col-xs-6">
                                    <label>Phone</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-phone"></i>
                                        <input type="tel" disabled="disabled">
                                    </label>
                                </section>
                            </div>
                        </section>
                        <section>
                            <label>Address</label>
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
                <button type="submit" class="btn btn-danger" >Yes</button>
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
                    <li><a href="#">Requestor</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
            <div class="section-title-wr">
                <h3 class="section-title left"><span></span></h3>
            </div>
        <div id="" class="row">
            <div class="row">

                <div class="col-md-12">
                    
                     <div class="col-md-12">
                    <div class="tabs-framed">
                        <ul class="tabs clearfix">
                            <li class="active"><a href="#tab-1" data-toggle="tab"  onclick="changeTab(1)">Staffs</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
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
                                            <th class="bg-orange">Name</th>
                                            <th class="bg-orange">Email</th>
                                            <th class="bg-orange">Cell No.</th>
                                            <th class="bg-orange">Address</th>
                                            <th class="bg-orange">City</th>
                                            <th class="bg-orange"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody id="temp_result">
                                        <?php
                                        $ctr=0;
                                            foreach ($staff_info as $keys => $det) {
                                                $ctr++;
                                                ?>
                                                <tr>
                                            <td><?=$ctr?>.</td>
                                            <td><?=$det->ln?>, <?=$det->fn?></td>
                                            <td><?=$det->email?></td>
                                            <td><?=$det->phone?></td>
                                            <td><?=$det->address?></td>
                                            <td><?=$det->city?></td>
                                            <td>
                                                <center>
                                                    <a href="<?=base_url('admin/staff_request_encoded')?>/<?=$det->id?>" title="View"><i class="fa fa-eye"></i></a>
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



<a href="#" id="toTop" style="display: none;"><span id="toTopHover" ></span></a>
</body>



<script type="text/javascript" src="<?= base_url('assets/sou/js/lou_login_Query.js') ?>"></script>
<script>
                    function get_pendings () {
                        var search=document.getElementById('view_search').value;
                        var sql_search="";
                        var rlike="";
                        if(search!==""){
                            sql_search=" and (fn rlike('"+search+"') or ln rlike('"+search+"') or address rlike('"+search+"') or email rlike('"+search+"') or phone rlike('"+search+"') )";
                        }
                        var sql="select * from staffdetail inner join users on users.id=staffdetail.id where users.remark='approved' "+sql_search;
                        var h1= document.getElementById('pendings_results');
                        h1.innerHTML="<center><img class='img-responsive' src='<?=base_url('assets/sou/images/load4.gif')?>'></center>";
                       $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/get_staffs') ?>",
                                      data: {
                                        sql:sql

                                      },
                                      success: function(data) {

                                        var h1=document.getElementById('pendings_results');
                                        h1.innerHTML=data;
                                     } 
                                    });
                    }     
</script>

<?php $this->load->view('headfoot/footer_in'); ?>