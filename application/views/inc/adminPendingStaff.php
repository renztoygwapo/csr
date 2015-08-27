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
                <h2>Tosiran4TE</h2>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb">
                    <li><a href="#">Staff / Pending Staff</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice animate-hover-slide bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="section-title-wr">
                <h3 class="section-title left"><span>Pending Staff</span></h3>
            </div>

            <?php
            $ctr = 0;
            $ctr4 = 0;
            $naa = "";
            foreach ($pendingStaff as $key => $value) {
                if ($ctr4 == 0) {
                    echo '<div class="row">';
                    $naa = "naa";
                }$id = $value->id;
                $img = base_url($value->pic_path);
                $applink=  site_url("admin/approved/$id");
                ?>
                <div class="col-md-3 ">
                <div class="wp-block article grid">
                <div class="article-image figure bounceIn  animated">
                <img src='<?=$img?>' alt='CSR' class='img-responsive'>
                <div class="figcaption-btn">
                <a class='btn btn-danger'  onclick='disapproved(<?=$id?>)' data-toggle='modal'  href='#confirm-Disapprove'><i class='fa fa-times-circle'></i> Disapprove</a>
                <a href='<?=$applink?>' class='btn btn-base'><i class='fa fa-check-circle'></i> Approve</a>
                </div>
                <h4 class="image-title base">
                <a title='Details' alt='Details' data-toggle='collapse' data-parent='#accordion' href='#pendingStaff<?=$ctr?>' class='collapsed' aria-expanded='false'>
                <i class='fa fa-arrow-circle-down'></i> <?=$value->uname?>
                </a></h4>
                </div>
                <span class='article-category'><?=$value->date_time?></span>
                <h3 class="title">
                <?=$value->fn?> <?=$value->ln?>
                </h3>
                <div id='pendingStaff<?=$ctr?>' class='panel-collapse collapse' style='height: 0px;' aria-expanded='false'>
               <p>
                                <span class='text-normal'> First Name: </span><?=$value->fn?>
                            </p><p>
                            
                                <span class='text-normal'> Last Name: </span><?=$value->ln?>
                            </p><p>
                                <span class='text-normal'> Username: </span><?=$value->uname?>
                            </p><p>
                                <span class='text-normal'> Email: </span><a><?=$value->email?></a>
                            </p><p>
                                <span class='text-normal'> Contact Number: </span><?=$value->phone?>
                            </p><p>
                                <span class='text-normal'> City: </span><?=$value->city?>
                            </p><p>
                                <span class='text-normal'> Address: </span><?=$value->address?>
                            </p>
                 </div>
                </div>
                </div>
                <?php
                $ctr+=1;
                $ctr4+=1;
                if ($ctr4 == 4) {
                    $ctr4 = 0;
                }
                if ($ctr4 == 0) {
                    echo '</div>';
                    $naa = "wala";
                }
            }if ($naa == "naa") {
                echo '</div>';
            }
            ?>
        </div>
    </div>

</section>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover" ></span></a>
</body>



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

                    function disapproved(id,link) {
<?php
foreach ($pendingStaff as $key => $value) :
    $id = $value->id;
    ?>  if (<?= $id ?> === id) {
    <?php
    $email = $value->email;
    $ln = $value->ln;
    $fn = $value->fn;
    $phone = $value->phone;
    $city = $value->city;
    $address = $value->address;
    $uname = $value->uname;
    $link= base_url("admin/disapproved/$id");
    ?>
                                document.getElementById("disForm").elements[2].value = "<?= $uname ?>";
                                document.getElementById("disForm").elements[3].value = "<?= $email ?>";
                                document.getElementById("disForm").elements[4].value = "<?= $fn ?>";
                                document.getElementById("disForm").elements[5].value = "<?= $ln ?>";
                                document.getElementById("disForm").elements[6].value = "<?= $city ?>";
                                document.getElementById("disForm").elements[7].value = "<?= $phone ?>";
                                document.getElementById("disForm").elements[8].value = "<?= $address ?>";
                                document.getElementById("disForm").removeAttribute("action");
                                var h1=document.getElementById("disForm");
                                var att=document.createAttribute("action");
                                att.value="<?=$link?>";
                                h1.setAttributeNode(att);
                                
                            }
    <?php
endforeach;
?>
                    }
</script>

<?php $this->load->view('headfoot/footer_in'); ?>