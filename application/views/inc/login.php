<?php $this->load->view('headfoot/header');

$events=$this->Query->login('select * from landing_events');
 ?>
<body>
    <!-- MODALS -->

    <!-- MOBILE MENU - Option 2 -->
    <section id="navMobile" class="aside-menu left">
        <form class="form-horizontal form-search">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button id="btnHideMobileNav" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
                </span>
            </div>
        </form>
        <div id="dl-menu" class="dl-menuwrapper">
            <ul class="dl-menu"></ul>
        </div>
    </section> 

    <!-- SLIDEBAR -->
    
    <!-- MAIN WRAPPER -->
    <div class="body-wrap">
        <!-- This section is only for demonstration purpose only. Check out the docs for more informations" -->

        <!-- HEADER -->
        <div id="divHeaderWrapper">
            <header class="header-standard-2">     
                <!-- MAIN NAV -->
                <div class="navbar navbar-wp navbar-arrow mega-nav  bounceInDown animated navbar-shadow" role="navigation">
                    <div class="container">
                        <div class="navbar-header">


                            <a class="navbar-brand" href="<?=site_url('home')?>" title="CSR">
                                <img src="<?php echo base_url('assets/sou/images/csr-logo.png') ?>" alt="CSR">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right ">
                                <li class="active">
                                    <a href="<?= site_url('') ?>" data-toggle="dropdown">Home</a>
                                </li>
                                <li class="dropdown " data-animate-in="animated bounceInUp" data-animate-out="animated fadeOutDown" style="z-index:500;">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown">Log in</a>
                                    <ul class="dropdown-menu dropdown-menu-user animate-wr">
                                        <li id="dropdownForm">
                                            <div class="dropdown-form">
                                                <form class="form-horizontal form-light p-15" method="post"  role="form" id="lou-login-form">
                                                    <div class="input-group  input-group-lg">

                                                        <span class="input-group-btn input-group-lg">
                                                            <input type="text" name="logUname" class="form-control" placeholder="Username" required/>

                                                        </span>

                                                    </div>
                                                    <div class="input-group  input-group-lg">

                                                        <span class="input-group-btn  input-group-lg">
                                                            <input type="password" name="logPass" class="form-control" placeholder="Password" required/>

                                                        </span>

                                                    </div>

                                                    <p id="lou-error" style="color: red;">

                                                    </p>
                                                    <button type="submit"  onclick="lou_validateLogin()" class=" btn btn-block btn-lg btn-base btn-icon fa-check"><span>Log in</span></button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= site_url('home/signup') ?>" >
                                       Sign up
                                </a>
                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>        </div>

<!-- Optional header components (ex: slider) -->
<!-- Importing slider content -->
<section id="slider-wrapper" class="layer-slider-wrapper layer-slider-dynamic">
    <div id="layerslider" style="width:100%;height:520px;"> 
        <!-- Slide 1 -->
        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
            <!-- slide background -->
            <img src="<?=base_url('assets/sou/images/backgrounds/full-bg-7.jpg')?>" class="ls-bg" alt="Slide background"/>
            
            <!-- Left Text -->
            <h3 class="ls-l title-lg c-white text-shadow text-uppercase text-center strong" style="width:100%; top:25%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                Welcome to Boomerang
            </h3>
           <h3 class="ls-l title c-white text-wrapped black text-uppercase text-center strong" style="top:50%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                Vision.Believe.Success
            </h3>
 
            <h3 class="ls-l title-xs c-white text-shadow text-uppercase text-center strong" style="width:100%; top:72%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                Start the tour
            </h3>
        </div>

        <!-- Slide 2 -->
        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
            <!-- slide background -->
            <img src="<?=base_url('assets/sou/images/backgrounds/full-bg-9.jpg')?>" class="ls-bg" style="width: 100%;" alt="Slide background"/>
            
            <!-- Left Text -->
            <h3 class="ls-l title-lg c-white text-shadow text-uppercase text-center strong" style="width:100%; top:25%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                Welcome to Boomerang
            </h3>
           <h3 class="ls-l title c-white text-wrapped black text-uppercase text-center strong" style="top:50%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                Vision.Believe.Success
            </h3>
 
            <h3 class="ls-l title-xs c-white text-shadow text-uppercase text-center strong" style="width:100%; top:72%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                Start the tour
            </h3>
        </div>
        
    </div>
</section>


<!-- MAIN CONTENT -->
<section class="slice base">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div id="carouselTestimonial" class="carousel carousel-testimonials slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselTestimonial" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselTestimonial" data-slide-to="1" class=""></li>
                                <li data-target="#carouselTestimonial" data-slide-to="2" class=""></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="text-center">
                                        <h2>Vision</h2>
                                        <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt, Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt.
                                        Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt.
                                        </p>
                                        <p>
                                            John Doe – Company Inc
                                        </p>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text-center">
                                        <h2>Mission</h2>
                                        <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt, Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt.
                                        Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt.
                                        </p>
                                        <p>
                                            John Doe – Company Inc
                                        </p>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text-center">
                                        <h2>Goal</h2>
                                        <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt, Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt.
                                        Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam consectetur adipisg elitm Ut tincidunt.
                                        </p>
                                        <p>
                                            John Doe – Company Inc
                                        </p>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wp-section " style="margin-top:20px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="text-center">
                            <h2>Latest Events</h2>
                            <p>
                                
                            </p>
                            <span class="clearfix"></span>
    
                        </div>
                    </div>
                           <?php
                           $flot="pull-left";
                           foreach ($events as $key => $value) {
                              ?>

                            <div class="col-md-6 <?=$flot?>">
                                <div class="wp-block image-holder">
                                    <img src="<?=base_url('uploads/'.$value->event_path)?>" class="img-responsive" alt="">
                                    <div class="wp-block-info over text-center">
                                        <h3 class="info-title text-uppercase"><?=$value->event_title?></h3>
                                        <a href="#"><?=$value->event_date?></a>
                                    </div>
                                </div>
                                <!-- Standard image post example -->
                                <div class="post-item style2 no-padding">
                                    <div class="post-content-wr">
                                        <div class="post-meta-top">
                                            <div class="post-image">
                                                <a href="#">
                                                    
                                                </a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="#"><?=$value->event_title?></a>
                                            </h2>
                                        </div>
                                        <div class="post-content clearfix">
                                            <div class="post-tags">Evenet happend: <?=$value->event_date?></div>
                                            <!-- <div class="post-comments"><strong>23</strong>comments</div> -->
                                            <div class="post-desc">
                                                <p><?=$value->event_disc?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <?php 
                              if($flot=='pull-left'){
                                $flot='pull-right';
                              }else{
                                $flot='pull-left';
                              }
                           }
                           ?>
                        </div>
        </div>
    </div>
    </div>

<script type="text/javascript" src="<?php echo base_url('assets/sou/js/lou_login_Query.js') ?>"></script>
<script>
                                                        function lou_validateLogin() {

                                                            var uname = document.getElementById('lou-login-form').elements[0].value;
                                                            var pass = document.getElementById('lou-login-form').elements[1].value;
                                                            var found = false;
<?php foreach ($users as $_key => $_value): ?>
                                                                if (uname === '<?php echo $_value->uname; ?>' && pass === '<?php echo $_value->pass; ?>') {

                                                                    var h1 = document.getElementById('lou-login-form');
                                                                    var att = document.createAttribute('action');
                                                                    att.value = "<?= site_url('home/login/submit') ?>";
                                                                    h1.setAttributeNode(att);
                                                                    found = true;
                                                                }

<?php endforeach; ?>

                                                            if (!found) {
                                                                document.getElementById('lou-error').innerHTML = "Invalid Username or Password";
                                                            }

                                                        }
</script>
<?php $this->load->view('headfoot/footer'); ?>