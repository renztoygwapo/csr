 <?php $this->load->view('headfoot/header'); ?>
<body>
    <!-- Optional header components (ex: slider) -->
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
        <div id="divHeaderWrapper base-base">
            <header class="header-standard-2">     
                <!-- MAIN NAV -->
                <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
                    <div class="container">
                        <div class="navbar-header">


                            <a class="navbar-brand" href="index-2.html" title="Boomerang | One template. Infinite solutions">
                                <img src="<?php echo base_url('assets/sou/images/csr-logo.png') ?>" alt="CSR">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right ">
                                <li>
                                    <a href="<?= site_url('') ?>" href="<?= site_url('') ?> data-toggle="dropdown">Home</a>
                                </li>
                                <li class="dropdown dropdown-meganav mega-dropdown-fluid">
                                    <a class="dropdown-toggle" data-toggle="dropdown">About</a>
                                    <ul class="dropdown-menu">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3 mega-nav-section-wr">
                                                    <div class="mega-nav-section">
                                                        <img src="<?php echo base_url('assets/sou/images/prv/wk-big-img-9.jpg') ?>" class="img-responsive img-thumbnail hidden-xs hidden-sm" alt="">
                                                        <h3 class="mega-nav-section-title">Business &amp; Other</h3>
                                                        <ul class="mega-nav-ul">
                                                            <li><a href="homepage-business-1.html">Homepage: Business 1</a></li>
                                                            <li><a href="homepage-business-2.html">Homepage: Business 2</a></li>
                                                            <li><a href="homepage-cover.html">Homepage: Cover</a></li>
                                                            <li><a href="homepage-shop-1.html">Homepage: Teambreza Shop</a></li>
                                                            <li><a href="homepage-fashion-1.html">Homepage: Teambreza Shop</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mega-nav-section-wr">
                                                    <div class="mega-nav-section"> 
                                                        <img src="<?php echo base_url('assets/sou/images/prv/wk-big-img-10.jpg') ?>" class="img-responsive img-thumbnail hidden-xs hidden-sm hidden-xs hidden-sm" alt="CSR">
                                                        <h3 class="mega-nav-section-title">Agencies &amp; Creatives</h3>
                                                        <ul class="mega-nav-ul">
                                                            <li><a href="homepage-agency-1.html">Homepage: Agency</a></li>
                                                            <li><a href="homepage-estate-1.html">Homepage: Real Estate</a></li>
                                                            <li><a href="homepage-jobs-1.html">Homepage: Jobs</a></li>
                                                            <li><a href="homepage-models-1.html">Homepage: Models</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mega-nav-section-wr">
                                                    <div class="mega-nav-section">
                                                        <img src="<?php echo base_url('assets/sou/images/prv/wk-big-img-11.jpg') ?>" class="img-responsive img-thumbnail hidden-xs hidden-sm" alt="CSR">
                                                        <h3 class="mega-nav-section-title">News &amp; Media</h3>
                                                        <ul class="mega-nav-ul">
                                                            <li><a href="homepage-magazine-1.html">Homepage: Magazine</a></li>
                                                            <li><a href="homepage-newspaper-1.html">Homepage: Newspaper</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mega-nav-section">
                                                        <img src="<?php echo base_url('assets/sou/images/prv/wk-big-img-12.jpg') ?>" class="img-responsive img-thumbnail hidden-xs hidden-sm" alt="CSR">
                                                        <h3 class="mega-nav-section-title">Institutions</h3>
                                                        <ul class="mega-nav-ul">
                                                            <li><a href="homepage-school-1.html">Homepage: School</a></li>
                                                            <li><a href="homepage-medical-1.html">Homepage: Medical</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
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
                                                    <button type="submit"  onclick="lou_validateLogin()" class=" btn btn-block btn-lg btn-alt btn-icon fa-check"><span>Log in</span></button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= site_url('home/signup') ?>" href="<?= site_url('home/signup') ?>  data-toggle="dropdown">
                                       Sign up
                                </a>
                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>        </div>
    <!-- MAIN CONTENT -->

    <section class="slice bg-base" style="padding:90px 0;">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2><?php echo $users['title']; ?></h2>
                            <h1 class="font-xl">
                                <?php echo $users['left']; ?><i class="<?php echo $users['icon']; ?>"></i><?php echo $users['right']; ?>
                            </h1>
                            <p>
                                <?php echo $users['message']; ?>
                            </p>
                            <span class="clearfix"></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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