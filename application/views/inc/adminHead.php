<?php $this->load->view('headfoot/header'); ?>
<body>
    <!-- MODALS -->
    <?php
    $sm1 = "value='off'";
    $sm2 = "value='off'";
    $sm3 = "value='off'";
    $sm4 = "value='off'";
    $sm5 = "value='off'";
    $acc1 = "";
    $acc2 = "";
    $acc3 = "";
    $acc4 = "";
    $acc5 = "";
    $from="home";
    foreach ($users as $key => $value) {
        if ($value->account == "facebook") {
            $sm1 = "value='on' checked ";
            $acc1 = $value->youraccount;
        } else if ($value->account == "twitter") {
            $sm2 = "value='on' checked ";
            $acc2 = $value->youraccount;
        } else if ($value->account == "youtube") {
            $sm3 = " value='on' checked ";
            $acc3 = $value->youraccount;
        } else if ($value->account == "instagram") {
            $sm4 = "value='on' checked ";
            $acc4 = $value->youraccount;
        } else if ($value->account == "gmail") {
            $sm5 = "value='on' checked ";
            $acc5 = $value->youraccount;
        }
    }
    $email;
    $ln;
    $fn;
    $city;
    $phone;
    $address;
    foreach ($users as $key => $value) {
        $email = $value->email;
        $ln = $value->ln;
        $fn = $value->fn;
        $city = $value->city;
        $phone = $value->phone;
        $address = $value->address;
    }
    $desbursment=$this->Query->get_total_desbursment(date('Y'));
    $anual_budget=$this->Query->get_annual_budget();

     function visualize_moneyCash($cash) {

        $val = $cash."";
        $numbers = "1234567890.";
        $text = "";
        $num_val=strlen($val);
        $num_num=strlen($numbers);

        for ($i = 0;$i < $num_val;$i++) {
            for ($y = 0;$y < $num_num;$y++) {
                $l_1=$numbers[$y];
                $l_2=$val[$i];
                if ("".$l_1 == $l_2."") {
                    $text = $text."".$val[$i];
                    break;
                }
            }
        }

        $val = $text;
        $ctr = 0;
        $text = "";
        $cen = "";
        $f = false;
        for ($i = 0;
                $i < strlen($val);
                $i++) {
            if ($val[$i] . "" == ".") {
                $f = true;
            }
            if ($f==true) {
                $cen = $cen."".$val[$i];
            } else {
                $text =$text."".$val[$i];
            }
        }
        $val = $text;
        $text = "";
        for ($i = strlen($val) - 1;
                $i >= 0;
                $i--) {
            if ($ctr == 3) {
                $text = "," . $text;
                $ctr = 0;
            }
            $text = $val[$i] ."". $text;
            $ctr++;
        }
        $val = $text;
        $val = $val."".$cen;
        return $val;
    }
    ?>
     <div class="modal fade" id="anual_budget_modal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post"  class="sky-form" action="<?= site_url("admin/change_anual_budget") ?>">  
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Anual Budget</h4>
                    </div>
                    <div class="modal-body">           
                            <section>
                                <div class="milestone-counter">
                                <div class="c-base text-center" style="font-size:55px;font-family:&quot;Roboto&quot;,sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center">
                                    P <?=visualize_moneyCash($anual_budget)?>
                                </div>
                                <h4 class="milestone-info c-base">Budget For The Year</h4>
                            </div>
                             </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="input">
                                            <input type="text" id='cashfield' class="form-control" placeholder="Enter new budget for the year" name="new_budget" onkeyup="moneyCash()" required style="  font-size: 39px;height: 100px;text-align: center;">
                                        </label>
                                    </div>
                                </div>



                            </section>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-base" >Change Now </button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        <script type="text/javascript">
         function moneyCash() {

        var val = document.getElementById('cashfield').value;
        var dapar="";
        for (var i = 0;
                i < 15;
                i++) {
            if((""+val.charAt(i))!="."){
                dapar+=val.charAt(i);
            }else{
                break;
            }
        }
        val=dapar;
        var numbers = "1234567890.";
        var text = "";
        for (var i = 0;
                i < val.length;
                i++) {
            for (var y = 0;
                    y < numbers.length;
                    y++) {
                if (numbers.charAt(y) === val.charAt(i)) {
                    text += val.charAt(i);
                    break;
                }
            }
        }

        val = text;
        var ctr = 0;
        text = "";
        var cen = "";
        var f = false;
        for (var i = 0;
                i < val.length;
                i++) {
            if (val.charAt(i) + "" === ".") {
                f = true;
            }
            if (f) {
                cen += val.charAt(i);
            } else {
                text += val.charAt(i);
            }
        }
        val = text;
        text = "";
        for (var i = val.length - 1;
                i >= 0;
                i--) {
            if (ctr === 3) {
                text = "," + text;
                ctr = 0;
            }
            text = val.charAt(i) + text;
            ctr++;
        }
        val = text;
        val += cen;
         document.getElementById('cashfield').value = "" + val;
            
        
    }
        </script>
    </div>
    <div class="modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post"  id="addSocialMedia" class="sky-form" action="<?= site_url("admin/add_socialmedia/$from") ?>">  
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Social Media Accounts</h4>
                    </div>
                    <div class="modal-body">                                  
                        <fieldset class="no-padding"> 
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="checkbox">
                                            <input onclick="socialSelected(2)" type="checkbox" name="subscription" id="subscription" <?= $sm1; ?>>
                                            <i></i> Facebook
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-2">
                                            <div class="social-media">
                                                <i class="fa fa-facebook facebook"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <span><input value="<?= $acc1; ?>" type="text" name="soc1" class="form-control hidden" placeholder="Enter your account"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="checkbox">
                                            <input type="checkbox" onclick="socialSelected(4)" name="subscription" id="subscription" <?= $sm2; ?>>
                                            <i></i> Twitter
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-2">
                                            <div class="social-media">
                                                <i class="fa fa-twitter twitter"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <span><input value="<?= $acc2; ?>" type="text" name="soc2" class="form-control hidden" placeholder="Enter your account"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label class="checkbox">
                                            <input type="checkbox" onclick="socialSelected(6)" name="subscription" id="subscription" <?= $sm3; ?>>
                                            <i></i> Youtube
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-2">
                                            <div class="social-media">
                                                <i class="fa fa-youtube google"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <span><input value="<?= $acc3; ?>" type="text" name="soc3" class="form-control hidden" placeholder="Enter your account"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="checkbox">
                                            <input type="checkbox" onclick="socialSelected(8)" name="subscription" id="subscription" <?= $sm4; ?>>
                                            <i></i> Instagram
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-2">
                                            <div class="social-media">
                                                <i class="fa fa-linkedin linkedin"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <span><input value="<?= $acc4; ?>" type="text" name="soc4" class="form-control hidden" placeholder="Enter your account"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="checkbox">
                                            <input type="checkbox" onclick="socialSelected(10)" name="subscription" id="subscription" <?= $sm5; ?>>
                                            <i></i> Google Mail
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-2">
                                            <div class="social-media">
                                                <i class="fa fa-google google"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10"><span><input type="text" name="soc5" value="<?= $acc5; ?>" class="form-control hidden" placeholder="Enter your account"></span>
                                        </div>
                                    </div>

                                </div>



                            </section>
                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-base" onclick="updateSocial()">Update</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="personalInfoModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post"  id="personalInfoForm" class="sky-form" action="<?= site_url("admin/add_socialmedia/") ?>">  
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Personal Information</h4>
                    </div>
                    <div class="modal-body">                                  
                        <fieldset class="no-padding">           
                            <section class="no-margin">
                                <div class="row">

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="input">
                                                    <i class="icon-append fa fa-envelope-o"></i>
                                                    <input type="email" value="<?= $email; ?>" class="form-control" name="email" placeholder="Email Address" disabled="disabled" required>
                                                    <b class="tooltip tooltip-bottom-right">Enter your Email Address</b>
                                                    <label class="checkbox">
                                                        <input name="b1" type="checkbox" value="off" onclick="update_info_selectEdit(3)">
                                                        <i></i> Select to edit
                                                    </label>
                                                </label>
                                            </div>  
                                        </div>               
                                    </div>
                                </div>  


                                <div class="row">
                                    <section class="col-xs-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="text" name="fname" value="<?= $fn; ?>" placeholder="First name" class="form-control" disabled="disabled" required>
                                            <label class="checkbox">
                                                <input type="checkbox" value="off" name="b2" onclick="update_info_selectEdit(5)">
                                                <i></i> Select to edit
                                            </label></label>
                                    </section>
                                    <section class="col-xs-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="text" name="lname" value="<?= $ln; ?>" placeholder="Last name" class="form-control" disabled="disabled" required>
                                            <label class="checkbox">
                                                <input type="checkbox" value="off" name="b3" onclick="update_info_selectEdit(7)">
                                                <i></i> Select to edit
                                            </label></label>
                                    </section>
                                </div> 
                                <div class="row">
                                    <section class="col-xs-6">
                                        <label class="input">
                                            <input type="text" name="city" value="<?= $city; ?>" placeholder="City" class="form-control" disabled="disabled" required>
                                            <label class="checkbox">
                                                <input type="checkbox" value="off" name="b4" onclick="update_info_selectEdit(9)">
                                                <i></i> Select to edit
                                            </label></label>
                                    </section>
                                    <section class="col-xs-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-phone"></i>
                                            <input type="tel" name="phone" placeholder="Phone" value="<?= $phone; ?>" onkeyup="lou_validatePhone()"  class="form-control" disabled="disabled" required>
                                            <label class="checkbox">
                                                <input type="checkbox" value="off" name="b5" onclick="update_info_selectEdit(11)">
                                                <i></i> Select to edit
                                            </label></label>
                                    </section>
                                </div>
                            </section>
                            <section>
                                <label for="file" class="input">
                                    <input type="text" name="address" placeholder="Address" value="<?= $address ?>" class="form-control" disabled="disabled" required>
                                    <label class="checkbox">
                                        <input type="checkbox" onclick="update_info_selectEdit(13)" name="b6" value="off">
                                        <i></i> Select to edit
                                    </label> </label>
                            </section>
                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-base hidden" id="update-info" onclick="update_info()">Update</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- MOBILE MENU - Option 2 -->


    <!-- SLIDEBAR -->
    <section id="asideMenu" class="aside-menu right" >
        <form class="form-horizontal form-search">
            <div class="input-group">
                <span class="input-group-btn ">
                    <button id="btnHideAsideMenu" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>

                </span>
            </div>
        </form>
        <div class="row">
            <br>
            <h4 class="text-center" style="color:white;"><?php
                foreach ($users as $key => $value) {
                    echo "$value->fn $value->ln";
                    break;
                }
                ?></h4>
     
            
            <div class="center-block row wp-section animate-hover-slide  container">
                <div class="col-md-3">
                    <div class="wp-block inverse">
                        <div class="figure">

                            <img alt="" src="<?= base_url('assets/sou/images/defult image.png') ?>" class="img-responsive">
                            <div class="figcaption-btn">
                                <a href="<?= base_url('assets/sou/images/defult image.png') ?>" class="btn btn-xs btn-white theater"><i class="fa fa-search"></i> View</a>
                                <a href="#" class="btn btn-xs btn-white"><i class="fa fa-pencil"></i> Change</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <h5 class="side-section-title">Social media</h5>
        <div class="social-media">
            <?php
            if ($sm1 != "value='off'") {
                ?><a href="#"><i class="fa fa-facebook facebook"></i></a><?php
            }if ($sm2 != "value='off'") {
                ?><a href="#"><i class="fa fa-twitter twitter"></i></a><?php
                }if ($sm3 != "value='off'") {
                    ?><a href="#"><i class="fa fa-youtube google"></i></a><?php
                }if ($sm4 != "value='off'") {
                    ?><a href="#"><i class="fa fa-linkedin linkedin"></i></a><?php
                }if ($sm5 != "value='off'") {
                    ?><a href="#"><i class="fa fa-google google"></i></a><?php
                }
                ?>
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a>

        </div>
        <h5 class="side-section-title">Options</h5>
        <div class="nav">
            <ul>
                <li>
                    <a data-toggle="modal" data-target="#personalInfoModal">Personal Information</a>
                </li>
                <hr>
                <li>
                    <a href="<?= site_url('home/logout') ?>">Log out</a>
                </li>
                <li>
                    <a href="<?= site_url('admin/settings') ?>">Settings</a>
                </li>

            </ul>
        </div>



        <h5 class="side-section-title">Contact information</h5>
        <div class="contact-info">
            <h5>Address</h5>
            <p><?= $address ?></p>

            <h5>Email</h5>
            <p><?= $email ?></p>

            <h5>Phone</h5>
            <p><?= $phone ?></p>
        </div>
    </section>

    <!-- MAIN WRAPPER -->
    <div class="body-wrap" style="min-height: 151px;">
        <!-- This section is only for demonstration purpose only. Check out the docs for more informations" -->
        <!-- HEADER -->
        <div id="divHeaderWrapper">
            <header class="header-standard-2">     
                <!-- MAIN NAV -->
                <div class="navbar navbar-fixed navbar-wp navbar-arrow navbar-shadow mega-nav affix navbar-fixed-top   animated" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                                <i class="fa fa-outdent icon-custom"></i>
                            </button>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars icon-custom"></i>
                            </button>

                            <a class="navbar-brand" href="<?=base_url()?>" title="Boomerang | One template. Infinite solutions">
                                <img src="<?= base_url('assets/sou/images/csr-logo.png') ?>" alt="CSR">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="hidden-md hidden-lg">
                                    <div class="bg-light-gray">
                                        <form class="form-horizontal form-light p-15" role="form">
                                            <div class="input-group input-group-lg">
                                                <input type="text" class="form-control" placeholder="I want to find ...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-white" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?=  site_url("home")?>">Home</a>

                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Requests</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=  site_url("admin/adminRequests")?>">Show All Requests</a></li>
                                        <li><a href="<?=  site_url("admin/pendingRequests")?>">Pending Request<span class="text-danger pull-right text-shadow" style="font-weight: bold;"><?=count($pendingRequests)?></span></a></li>
                                        <li><a href="<?= site_url('staff/requestors') ?>">Show All Requestor</a></li>
                                       
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Staff</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=base_url('admin/staffs_viewer/')?>">Registered Staff</a></li>
                                        <li><a href="<?=  site_url("admin/pendingStaff")?>">Pending Staff<span class="text-danger pull-right text-shadow" style="font-weight: bold;"><?=count($pendingStaff)?></span></a></li>
                                        <li >
                                            <a  href="<?=base_url('admin/staffs')?>">Request Encoded Per Staff</a>
                                            
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown-aux">
                                    <a href="#" id="cmdAsideMenu" class="dropdown-toggle dropdown-form-toggle" title="Open slidebar">
                                        <i class="fa fa-outdent"></i>
                                    </a>
                                </li>
                                <li class="dropdown dropdown-aux animate-click" data-animate-in="animated bounceInUp" data-animate-out="animated fadeOutDown" style="z-index:500;">
                                   <a class=" text-base" data-toggle="modal" href="#anual_budget_modal" title="Total Disbursement"><b>P <?=visualize_moneyCash($desbursment)?></b></a>
                                </li>
                            </ul>

                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </header>        
        </div>
