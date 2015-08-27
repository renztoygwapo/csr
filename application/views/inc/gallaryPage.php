<?php $this->load->view('inc/adminHead'); ?>
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

<div class="row">
    <div class="col-md-8">
        <div id="homepageCarousel" class="carousel carousel-1 slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="item item-dark active left">
                    <img src="<?= base_url('assets/sou/images/prv/magazine/magazine-4.jpg') ?>" alt="CSR">
                    <!-- Carousel caption -->
                    <div class="caption-bottom">
                        <span class="title c-white">The new Boomerang 2 MultiPuropose Website Template</span>
                        <span class="subtitle">A complete website template which can be perfectly adapted if you're a school, college or another public institution.</span>
                    </div>
                </div> 

                <div class="item item-light next left">
                    <img src="<?= base_url('assets/sou/images/prv/magazine/magazine-2.jpg') ?>" alt="CSR" class="img-responsive">
                    <!-- Carousel caption -->
                    <div class="caption-bottom">
                        <span class="title c-white">The new Boomerang 2 MultiPuropose Website Template</span>
                        <span class="subtitle c-white">A complete website template which can be perfectly adapted if you're a school, college or another public institution.</span>
                    </div>
                </div>       
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#homepageCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#homepageCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>     
        </div>
    </div>
    <div class="col-md-4">
        <div class="wp-block property grid">
                                    <div class="ribbon base"><span>Limited Offer</span></div>
                                    
                                    <div class="wp-block-body">
                                        <div class="wp-block-img">
                                            <a href="#">
                                                <img src="<?= base_url('assets/sou/images/prv/estate/item-2.jpg')?>" alt="CSR">
                                            </a>
                                        </div>
                                        <div class="wp-block-content clearfix">
                                        
                                        </div>
                                    </div>
                                    
                                </div><div id="basicCarousel" class="carousel carousel-4 slide color-two-l" data-ride="carousel"><a href="#">
						                            <!-- Indicators -->
						                            <ol class="carousel-indicators">
						                                <li data-target="#basicCarousel" data-slide-to="0" class=""></li>
						                                <li data-target="#basicCarousel" data-slide-to="1" class="active"></li>
						                            </ol>
						                            
						                            <div class="carousel-inner">
						                                <div class="item item-dark">
						                                    <img src="<?= base_url('assets/sou/images/prv/blog/blog-img-4_1280x800.jpg')?>" alt="CSR" class="img-responsive">
						                                </div>
						                                <div class="item item-dark active">
						                                    <img src="<?= base_url('assets/sou/images/prv/blog/blog-img-5_1280x800.jpg')?>" alt="CSR" class="img-responsive">
						                                </div>
						                            </div>
						                            
						                            <!-- Controls -->
						                            </a><a class="left carousel-control" href="#basicCarousel" data-slide="prev">
						                                <i class="fa fa-angle-left"></i>
						                            </a>
						                            <a class="right carousel-control" href="#basicCarousel" data-slide="next">
						                                <i class="fa fa-angle-right"></i>
						                            </a>     
						                        </div>

        </div>
    </div>
</div>

</div>



<!-- Mirrored from preview.webpixels.ro/boomerang-v2.0.1/wp-carousels.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jan 2015 15:39:12 GMT -->
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
</script>

<?php $this->load->view('headfoot/footer_in'); ?>