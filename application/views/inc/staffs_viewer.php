<?php $this->load->view('inc/adminHead');
    ?>
   
<!-- MODALS -->
<div class="modal fade" id="editStaff_modal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="edit_form" class="sky-form">    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Staff Details</h4>
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
                                            <input type="text" id="staff_uname1" readOnly='true'>
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-envelope-o"></i>
                                                <input type="email" id="staff_email" name="email" required>
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
                                        <input type="text" id="staff_fname" name="fname" required>
                                    </label>
                                </section>
                                <section class="col-xs-6">
                                    <label>Last Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text" id="staff_lname" name="lname" required>
                                    </label>
                                </section>
                            </div> 
                            <div class="row">
                                <section class="col-xs-6">
                                    <label>City</label>
                                    <label class="input">
                                        <input type="text" id="staff_city" name="city" required>
                                    </label>
                                </section>
                                <section class="col-xs-6">
                                    <label>Phone</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-phone"></i>
                                        <input type="tel" id="staff_phone" name="phone" required>
                                    </label>
                                </section>
                            </div>
                        </section>
                        <section>
                            <label>Address</label>
                            <label for="file" class="input">
                                <input type="text" name="address" id="staff_address" required>
                            </label>
                        </section>
                        <section>
                            <label>Change Username</label>
                            <label for="text" class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" id="staff_uname2" name="uname" required>
                            </label>
                        </section>

                        <section>
                            <label>Change Password</label>
                            <label for="text" class="input">
                                <i class="icon-append fa fa-key"></i>
                                <input type="password" id="staff_password" name="password" required>
                            </label>
                        </section>
                    </fieldset>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-base" ><i class="fa fa-pencil"></i> Update Now</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- MOBILE MENU - Option 2 -->

    <div class="pg-opt">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h2>Tosiran4TE</h2>
                    </div>
                    <div class="col-xs-6">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
      </div>
      <br>
    <section class="slice light-gray bb animate-hover-slide-2">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                   <h3 class="section-title left"><span>Our Staffs</span></h3>
                </div>
                <div class="row">
                    <?php 
                        foreach ($registered_staff as $key => $value) {
                            ?>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="<?=base_url($value->pic_path)?>" class="img-responsive">
                                            <div class="figcaption">
                                                <h2><?=$value->fn?> <?=$value->ln?></h2>
                                                
                                                <ul class="social-icons text-center">
                                                    <li class="facebook"><a id="block_<?=$value->id?>" title="Block" onclick="block_click('<?=$value->id?>')"><i class="fa fa-ban"></i></a></li>
                                                    <li class="linkedin"><a href="#editStaff_modal" onclick="edit_click('<?=$value->id?>','<?=$value->uname?>','<?=$value->email?>','<?=$value->fn?>','<?=$value->ln?>','<?=$value->city?>','<?=$value->phone?>','<?=$value->address?>','<?=$value->pass?>')" data-toggle="modal" title="Edit"><i class="fa fa-pencil"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section> 

<script type="text/javascript">
    function block_click (id) {
        if(confirm('Are you sure you want to block this Staff?.\n\n if you block this staff you can unblock this to pending staff and approved it again to be activated.')==true){
        
            var h1=document.getElementById('block_'+id);
            h1.removeAttribute('href');
            var att=document.createAttribute('href');
            att.value="<?=base_url('admin/block_staff')?>/"+id+"/";
            h1.setAttributeNode(att);
        }
    }
    function edit_click(id,uname,email,fname,lname,city,phone,address,password) {
        document.getElementById('staff_uname1').value=uname;
        document.getElementById('staff_email').value=email;
        document.getElementById('staff_fname').value=fname;
        document.getElementById('staff_lname').value=lname;
        document.getElementById('staff_city').value=city;
        document.getElementById('staff_phone').value=phone;
        document.getElementById('staff_address').value=address;
        document.getElementById('staff_uname2').value=uname;
        document.getElementById('staff_password').value=password;
        var form=document.getElementById('edit_form');
        form.removeAttribute('action');
        var att=document.createAttribute('action');
        att.value="<?=base_url('admin/edit_staff')?>/"+id;
        form.setAttributeNode(att);
    }
</script>

<?php $this->load->view('headfoot/footer_in'); ?>