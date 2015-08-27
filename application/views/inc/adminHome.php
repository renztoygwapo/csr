<?php $this->load->view('inc/adminHead'); 
    $date=date('Y');
    $desbursment=$this->Query->get_total_desbursment($date);
    $anual_budget=$this->Query->get_annual_budget();

?>
        <!-- Optional header components (ex: slider) -->

        <!-- MAIN CONTENT -->
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
        


        <!-- Optional header components (ex: slider) -->
         
    
    <!-- MAIN CONTENT -->
        <section class="slice bg-white  ">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Carousel -->
                        

                        <!-- Articles -->
                          <div class="row">
                        <div class="col-md-6">
                            <div class="milestone-counter">
                                <div class="c-base"style='font-size:55px;font-family:"Roboto",sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center'>
                                    P <?=visualize_moneyCash($desbursment)?>
                                </div>
                                <h4 class="milestone-info c-base">Disbursement</h4>
                            </div>
                        </div>
                        <div class="col-md-6" style="border-left: #258233 1px solid;">
                            <div class="milestone-counter">
                                <div class="c-base text-center"style='font-size:55px;font-family:"Roboto",sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center'>
                                    P <?=visualize_moneyCash($anual_budget-$desbursment)?>
                                </div>
                                <h4 class="milestone-info c-base">Remaining Budget</h4>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Style 1 -->
                                <div class="section-title-wr">
                                    <h3 class="section-title left"><span>Nature of Expense</span></h3>
                                   
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block article list">
                                            <div class="article-image">
                                                <img src="<?=base_url('assets/sou/images/prv/magazine/magazine-small-1.jpg')?>" alt="">
                                            </div>
                                            <div class="wp-block-body">
                                                <h4 class="article-label text-caps base-alt">Educational Program</h4>
                                                <h3 class="title">
                                                    <a href="<?=base_url('admin/adminRequests/csr1')?>" hidefocus="true">Educational Program is a program that helps other individuals who needs assistance in the field of education.</a>
                                                </h3>
                                                <p>
                                                This program focuses on the needs of the education of the less fortunate. <small><a href="#" title="Continue reading">...</a></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block article list">
                                            <div class="article-image">
                                                <img src="<?=base_url('assets/sou/images/prv/magazine/magazine-small-2.jpg')?>" alt="">
                                            </div>
                                            <div class="wp-block-body">
                                                <h4 class="article-label text-caps red">Medical Program</h4>
                                                <h3 class="title">
                                                    <a href="<?=base_url('admin/adminRequests/csr2')?>" hidefocus="true">Medical Program is a program that helps other individuals who needs assistance in the field of health and care of the people.</a>
                                                </h3>
                                                <p>
                                                This program focuses on the needs of the medical assistance of the people that needs medication. <small><a href="#" title="Continue reading">...</a></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block article list">
                                            <div class="article-image">
                                                <img src="<?=base_url('assets/sou/images/prv/magazine/magazine-small-3.jpg')?>" alt="">
                                            </div>
                                            <div class="wp-block-body">
                                                <h4 class="article-label text-caps yellow">Charitable Contribution</h4>
                                                <h3 class="title">
                                                    <a href="<?=base_url('admin/adminRequests/csr3')?>" hidefocus="true">Charitable Contribution is a program that helps individual/groups who needs assistance.</a>
                                                </h3>
                                                <p>
                                                This program focuses on the needs of the foundation i the society. <small><a href="#" title="Continue reading">[...]</a></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block article list">
                                            <div class="article-image">
                                                <img src="<?=base_url('assets/sou/images/prv/magazine/magazine-small-4.jpg')?>" alt="">
                                            </div>
                                            <div class="wp-block-body">
                                                <h4 class="article-label text-caps orange">Community Development</h4>
                                                <h3 class="title">
                                                    <a href="<?=base_url('admin/adminRequests/csr4')?>" hidefocus="true">Community Development is a program that helps a community to be progressive.</a>
                                                </h3>
                                                <p>
                                                 This program focuses on the needs of the community to help to them to be united.<small><a href="#" title="Continue reading">...</a></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block article list">
                                            <div class="article-image">
                                                <img src="<?=base_url('assets/sou/images/prv/magazine/magazine-small-5.jpg')?>" alt="">
                                            </div>
                                            <div class="wp-block-body">
                                                <h4 class="article-label text-caps base">Environmental Development</h4>
                                                <h3 class="title">
                                                    <a href="<?=base_url('admin/adminRequests/csr5')?>" hidefocus="true">Environmental Development is a program that helps and care about the environment.</a>
                                                </h3>
                                                <p>
                                               This program focuses on the needs of the environment to preserve its scenery. <small><a href="#" title="Continue reading">...</a></small>
                                                </p>
                                                <div class="row">
                                   
                                    </div>
                                </div>
                            
                             
                            </div>

                   

                            </div>
                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block article list">
                                            <div class="article-image">
                                                <img src="<?=base_url('assets/sou/images/prv/magazine/magazine-small-5.jpg')?>" alt="">
                                            </div>
                                            <div class="wp-block-body">
                                                <h4 class="article-label text-caps blue">Social Program</h4>
                                                <h3 class="title">
                                                    <a href="<?=base_url('admin/adminRequests/csr6')?>" hidefocus="true">Social Program is a program that helps and care about the cause of a person.</a>
                                                </h3>
                                                <p>
                                                This program helps the society to be united with each other.<small><a href="#" title="Continue reading">...</a></small>
                                                </p>
                                                <div class="row">
                                   
                                    </div>
                                </div>
                            
                             
                            </div>

                   

                            </div>
                        </div>
                    </div>
                            
                 <div class="col-md-4" style="border-right: #666666;">
                    <?php
                        $this->load->view('inc/monthly_ex')
                    ?>
                </div>
        </div>
    </section>


    
        
    </section>

    <!-- CLIENTS -->
   
    
</div>
        
        
        
        
        
        
        
        
        
        
        
<div class="container" style="">
</div>
   
    <a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>



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
                                                        att.value = "btn btn-alt";
                                                        h1.setAttributeNode(att);
                                                    } else {

                                                        document.getElementById("update-info").removeAttribute("class");
                                                        var h1 = document.getElementById("update-info");
                                                        var att = document.createAttribute("class");
                                                        att.value = "btn btn-alt hidden";
                                                        h1.setAttributeNode(att);
                                                    }
                                                }
</script>
<?php $this->load->view('headfoot/footer_in'); ?>