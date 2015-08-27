<?php $this->load->view('inc/adminHead'); 
$theme=$this->Query->get_theme();
$events=$this->Query->login('select * from landing_events');
foreach ($theme as $key => $value) {
    $path=$value->path;
    $c_num=$value->color;
}
    ?>



<div class="modal fade" id="edit_event"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- <form method="post" action="<?=base_url('admin/add_event')?>" class="sky-form" enctype="multipart/form-data">     -->
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Event</h4>
            </div>
                                            
                                  
            <div class="modal-body">                             
                  <?php $att = array('id' => 'edit_event_form', 'class' => 'sky-form'); ?>
                                    <?= form_open_multipart('admin/edit_event', $att) ?>  
                                 <fieldset>
                                        <section>
                                            <div class = "row">
                                                <div class = "row">
                                                    <div class = "col-md-12 form-group">
                                                        <center>
                                                            <img id = "edit_eventPic" src = "" class = "img-rounded img-responsive" alt = "Event Picture">
                                                        </center>
                                                    </div>
                                                    
                                                </div>
                                                <div class = "col-md-12">
                                                    <center>
                                                        <span class = "btn btn-b-dark fileinput-button mr-xs">
                                                        <i class = "glyphicon glyphicon-plus"></i>
                                                        <span>Set Event Picture</span>
                                                        <input type = "file" onchange = "previewFile_edit()" name = "userfile"  id="edit_event_pic">
                                                    </span>
                                                    </center>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label>Event Title</label>
                                                        <input type="text" id="edit_event_title" placeholder="Event Title" name="event_title" required class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Event Happend</label>
                                                        <input type="date" id="edit_event_date" placeholder="Event Date Happend" name="event_date" required class="form-control">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label>Event Details</label>
                                                        <label class="textarea"> <textarea rows="5" id="edit_event_story" name="enent_story" placeholder="Type event story here..." required=""></textarea> </label>
                                                    </div>               
                                                </div>
                                            </div>
                                        </section>
                                    </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-base"><i class="fa fa-pencil"></i> Update Now</button>
            </div>
        </form>
            <!-- </form> -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="add_event"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- <form method="post" action="<?=base_url('admin/add_event')?>" class="sky-form" enctype="multipart/form-data">     -->
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Event</h4>
            </div>
                                            
                                  
            <div class="modal-body">                             
                  <?php $att = array('id' => 'RequestForm', 'class' => 'sky-form'); ?>
                                    <?= form_open_multipart('admin/add_event', $att) ?>  
                                 <fieldset>
                                        <section>
                                            <div class = "row">
                                                <div class = "row">
                                                    <div class = "col-md-12 form-group">
                                                        <center>
                                                            <img id = "eventPic" src = "" class = "img-rounded img-responsive" alt = "Event Picture">
                                                        </center>
                                                    </div>
                                                    
                                                </div>
                                                <div class = "col-md-12">
                                                    <center>
                                                        <span class = "btn btn-b-dark fileinput-button mr-xs">
                                                        <i class = "glyphicon glyphicon-plus"></i>
                                                        <span>Set Event Picture</span>
                                                        <input type = "file" onchange = "previewFile()" name = "userfile" required id="add_event_pic">
                                                    </span>
                                                    </center>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label>Event Title</label>
                                                        <input type="text" placeholder="Event Title" name="event_title" required class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Event Happend</label>
                                                        <input type="date" placeholder="Event Date Happend" name="event_date" required class="form-control">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label>Event Details</label>
                                                        <label class="textarea"> <textarea rows="5" name="enent_story" placeholder="Type event story here..." required=""></textarea> </label>
                                                    </div>               
                                                </div>
                                            </div>
                                        </section>
                                    </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-base"><i class="fa fa-plus"></i> Add Now</button>
            </div>
        </form>
            <!-- </form> -->
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
                            <li><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
      </div>
      <br>

      <section class="slice bg-white  ">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 color-red">
                        <label>Theme Color</label><br>
                        <span class="color-switch">
                            <a href="<?=base_url('admin/set_theme_color/global-style-red/1')?>" id="cmdSchemeRed" class="color-red <?php if($c_num==1){ echo "active";} ?>" title="Red" style="width:50px;height:50px;">Red</a>
                            <a href="<?=base_url('admin/set_theme_color/global-style-violet/2')?>" id="cmdSchemeViolet" class="color-violet <?php if($c_num==2){ echo "active";} ?> " title="Violet" style="width:50px;height:50px;">Violet</a>
                            <a href="<?=base_url('admin/set_theme_color/global-style/3')?>" id="cmdSchemeGreen" title="Green" class="<?php if($c_num==3){ echo "active";} ?>"style="width:50px;height:50px;background-color:#258233" >Green</a>
                            <a href="<?=base_url('admin/set_theme_color/global-style-yellow/4')?>" id="cmdSchemeYellow" class="color-yellow <?php if($c_num==4){ echo "active";} ?>" title="Yellow" style="width:50px;height:50px;">Yellow</a>
                            <a href="<?=base_url('admin/set_theme_color/global-style-orange/5')?>" id="cmdSchemeOrange" class="color-orange <?php if($c_num==5){ echo "active";} ?>" title="Orange" style="width:50px;height:50px;">Orange</a>
                        </span> 
                    </div>
                    

      </div>
  </div>
</div>
</section>

    <section class="slice bg-white  ">
        <div class="wp-section">
            <div class="container">
                <hr>
                <label>Events <br><a data-toggle="modal" href="#add_event" type="button" class="btn btn-b-base filter" title="Add Event"><i class="fa fa-plus"></i></a></label><br>
               
                    <?php
                        foreach ($events as $key => $value) {
                            ?>
                            <div class="col-md-3" style="margin-top:10px;">
                                <div class="wp-block inverse">
                                    <div class="figure">
                                        <img alt="" src="<?=base_url('uploads/'.$value->event_path)?>" class="img-responsive">
                                        <div class="figcaption">                                    
                                            <ul class="social-icons text-right">
                                                <li class="base"><a id='delete_event_b<?=$value->event_id?>' title="Delete" onclick="delete_event('<?=$value->event_id?>')"><i class="fa fa-trash"></i></a></li>
                                                <li class="base"><a data-toggle="modal" href="#edit_event" title="Edit" onclick="edit_event_click('<?=$value->event_id?>')"><i class="fa fa-pencil"></i></a></li>
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
    </section>
   <script type="text/javascript">
        function edit_event_click(event_id) {
            var form=document.getElementById('edit_event_form');
            form.removeAttribute('action');
            var att=document.createAttribute('action');
            att.value="<?=base_url('admin/edit_event')?>/"+event_id;
            form.setAttributeNode(att);
            var ed_img=document.getElementById('edit_eventPic');
            <?php
            foreach ($events as $key => $value) {
               ?>
               if(""+event_id==="<?=$value->event_id?>"){
                    document.getElementById('edit_event_title').value="<?=$value->event_title?>";
                    document.getElementById('edit_event_date').value="<?=$value->event_date?>";
                    document.getElementById('edit_event_story').innerHTML="<?=$value->event_disc?>";
                    att=document.createAttribute('src');
                    att.value='<?=base_url("uploads/".$value->event_path)?>';
                    ed_img.setAttributeNode(att);
               }
               <?php
            }


             ?>
        }
        function delete_event (event_id) {
            if(confirm('Are you sure you want to delete this event?')==true){

           document.getElementById('delete_event_b'+event_id).removeAttribute('href');
            var att=document.createAttribute('href');
            att.value="<?=base_url('admin/delete_event')?>/"+event_id;
            document.getElementById('delete_event_b'+event_id).setAttributeNode(att);
        }
        }
        function previewFile() {
        var preview = document.getElementById('eventPic'); //selects the query named img
        var file = document.getElementById('add_event_pic').files[0]; //sames as here
        var reader = new FileReader();
        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {

            document.getElementById('eventPic').src = "<?= base_url('assets/sou/images/load4.gif') ?>";
            setTimeout(function() {
                reader.readAsDataURL(file)
            }, 1000);
            //reads the data as a URL
        } else {
            preview.src = preview.src;
        }
    }
    function previewFile_edit() {
        var preview = document.getElementById('edit_eventPic'); //selects the query named img
        var file = document.getElementById('edit_event_pic').files[0]; //sames as here
        var reader = new FileReader();
        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {

            document.getElementById('edit_eventPic').src = "<?= base_url('assets/sou/images/load4.gif') ?>";
            setTimeout(function() {
                reader.readAsDataURL(file)
            }, 1000);
            //reads the data as a URL
        } else {
            preview.src = preview.src;
        }
    }
function upload_error(){
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Upload_error/error10/error/fa-code/danger/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_deleteerror10');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-danger fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }

function updated_event(){
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/updated_event/error10/error/fa-pencil/info/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_deleteerror10');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-danger fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }
                                function event_deleted(){
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/event_deleted/error10/error/fa-trash/info/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_deleteerror10');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-info fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }

function upload_error(){
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Upload_error/error10/error/fa-code/danger/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_deleteerror10');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-danger fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }
                                
    <?php 
        if($this->session->flashdata('upload_error')==true){
            ?>
                upload_error();
            <?php
        }
         if($this->session->flashdata('updated_event')==true){
            ?>
                updated_event();
            <?php
        }
        if($this->session->flashdata('event_deleted')==true){
            ?>
                event_deleted();
            <?php
        }
    ?>

   </script>
<?php $this->load->view('headfoot/footer_in'); ?>