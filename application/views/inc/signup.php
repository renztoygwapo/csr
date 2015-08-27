<?php $this->load->view('headfoot/header'); ?>
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
        <div id="divHeaderWrapper base">
            <header class="header-standard-2">     
                <!-- MAIN NAV -->
                <div class="navbar navbar-wp navbar-arrow mega-nav  bounceInDown animated navbar-shadow" role="navigation">
                    <div class="container">
                        <div class="navbar-header">


                            <a class="navbar-brand" href="index-2.html" title="Boomerang | One template. Infinite solutions">
                                <img src="<?php echo base_url('assets/sou/images/csr-logo.png') ?>" alt="CSR">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right ">
                                <li >
                                    <a  href="<?= site_url('home') ?>">Home</a>
                                </li>
                                <li class="dropdown " data-animate-in="animated bounceInUp" data-animate-out="animated fadeOutDown" style="z-index:500;">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown">Log in</a>
                                    <ul class="dropdown-menu dropdown-menu-user animate-wr">
                                        <li id="dropdownForm">
                                            <div class="dropdown-form">
                                                <form class="form-horizontal form-light p-15" method="post"  role="form" id="lou-login-form">
                                                    <div class="input-group  input-group-lg">

                                                        <span class="input-group-btn input-group-lg">
                                                            <input type="text" class="form-control" name="logUname" placeholder="Username"  required/>

                                                        </span>

                                                    </div><div class="input-group  input-group-lg">

                                                        <span class="input-group-btn  input-group-lg">
                                                            <input type="password" class="form-control" name="logPass" placeholder="Password" required/>

                                                        </span>

                                                    </div>

                                                    <p id="lou-error" style="color: red;">

                                                    </p>
                                                    <button type="submit"  onclick="lou_validateLogin()" class="  btn btn-block btn-lg btn-base btn-icon fa-check"><span>Log in</span></button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="<?= site_url('home/signup') ?>" href="<?= site_url('home/signup') ?>"  data-toggle="dropdown">
                                       Sign up
                                </a>
                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>      
    </div>
    <section class="slice slice-lg bg-image" style="background-image:url(<?php echo base_url('assets/sou/images/backgrounds/full-bg-7.jpg') ?>)">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                        <div class="wp-block default user-form user-form-alpha no-margin">
                            <div class="form-header">
                                <h2>Create your own account</h2>
                            </div>
                            <div class="form-body">
                                <form method="post"  id="RegisterForm" class="sky-form" onchange="repassType()">                                    
                                    <fieldset class="no-padding">           
                                        <section class="">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="uname" placeholder="Username" onkeyup="unameType()" required>
                                                            <b class="tooltip tooltip-bottom-right">Enter your desired username</b>
                                                            <label id="unameEx" class="text-danger"></label>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="email" name="email" placeholder="E-mail" required/>
                                                                <b class="tooltip tooltip-bottom-right">Enter your Email Address</b>
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password" name="pass" placeholder="Password" onkeyup="passType()" required>
                                                            <b class="tooltip tooltip-bottom-right">Enter your desired password</b>
                                                        </label>

                                                    </div>
                                                    <div id="passStat" class="hidden">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password"  name="repass" placeholder="Password" onkeyup="repassType()" required>
                                                            <b class="tooltip tooltip-bottom-right">Needed to verify your password</b>
                                                        </label>
                                                    </div>  
                                                    <div id="passStat1" class="hidden">
                                                        <label class="text-standard">
                                                            Password Not Match
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>   
                                        </section>

                                        <section class="no-margin">
                                            <div class="row">
                                                <section class="col-xs-6">
                                                    <label class="input">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <input type="text" name="fname" placeholder="First name" required>
                                                    </label>
                                                </section>
                                                <section class="col-xs-6">
                                                    <label class="input">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <input type="text" name="lname" placeholder="Last name" required>
                                                    </label>
                                                </section>
                                            </div> 
                                            <div class="row">
                                                <section class="col-xs-6">
                                                    <label class="input">
                                                        <input type="text" name="city" placeholder="City" required>
                                                    </label>
                                                </section>
                                                <section class="col-xs-6">
                                                    <label class="input">
                                                        <i class="icon-append fa fa-phone"></i>
                                                        <input type="tel" name="phone" placeholder="Phone" onkeyup="lou_validatePhone()" required>
                                                    </label>
                                                </section>
                                            </div>
                                        </section>
                                        <section>
                                            <label for="file" class="input">
                                                <input type="text" name="address" placeholder="Address" required>
                                            </label>
                                        </section>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-base btn-icon btn-icon-right btn-icon-go pull-right" type="submit" onclick="regNowVal(), tanggap()">
                                                        <span>Register now</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </section>
                                    </fieldset>
                                </form>  
                            </div>
                            <div class="form-footer">
                                <p>Already have an account? <a href="<?=base_url()?>">Click here to sign in.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="<?php echo base_url('assets/sou/js/lou_signup.js') ?>"></script>
    <script type="text/javascript" >
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
                                                        function tanggap() {
                                                            var h = repassType();
                                                            var w = passType();
                                                            var i = regNowVal();
                                                            if (h && w && i && unameType()) {
                                                                document.getElementById('RegisterForm').removeAttribute('action');
                                                                var h1 = document.getElementById('RegisterForm');
                                                                var att = document.createAttribute('action');
                                                                att.value = "<?= site_url('home/signin/submit') ?>";
                                                                h1.setAttributeNode(att);
                                                            } else {

                                                            }
                                                        }
                                                        function lou_validatePhone() {
                                                            var number = document.getElementById('RegisterForm').elements[8].value;
                                                            var numbers = "+1234567890";var text="";
                                                            for(var i=0;i<number.length;i++){
                                                               for(var y=0;y<numbers.length;y++){
                                                                if(numbers.charAt(y)===number.charAt(i)){
                                                                    text+=number.charAt(i);
                                                                    break;
                                                                }
                                                            } 
                                                            }
                                                            document.getElementById('RegisterForm').elements[8].value = text;
                                                        }

                                                        function unameType() {
                                                            var un = document.getElementById("RegisterForm").elements[1].value;
                                                            var text = "";
                                                            for (var i = 0; i < un.length; i++) {

                                                                if (un.charAt(i) !== " ") {
                                                                    text += un.charAt(i);
                                                                }
                                                            }
                                                            document.getElementById('unameEx').innerHTML = "";
                                                            document.getElementById("RegisterForm").elements[1].value = text;
<?php foreach ($users as $_key => $_value): ?>
                                                                if (text === '<?php echo $_value->uname; ?>') {
                                                                    document.getElementById('unameEx').innerHTML = "Username already exist";
                                                                    return false;
                                                                }

<?php endforeach; ?>
                                                            return true;

                                                        }


    </script>
    <?php $this->load->view('headfoot/footer'); ?>