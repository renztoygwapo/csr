<?php $this->load->view('headfoot/header'); ?>
<body>



    <!-- MAIN WRAPPER -->
    <div class="body-wrap" style="min-height: 151px;">
        <!-- This section is only for demonstration purpose only. Check out the docs for more informations" -->
        <!-- HEADER -->
        <div id="divHeaderWrapper">
            <header class="header-standard-2">     
                <!-- MAIN NAV -->
                <div class="navbar navbar-fixed navbar-wp navbar-arrow navbar-shadow mega-nav affix navbar-fixed-top bounceIn animated" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                                <i class="fa fa-outdent icon-custom"></i>
                            </button>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars icon-custom"></i>
                            </button>

                            <a class="navbar-brand" href="index-2.html" title="Boomerang | One template. Infinite solutions">
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
                                    <a href="<?= site_url("home") ?>">Home</a>

                                </li>
                                <!-- <li class="dropdown">
                                    <a href="<?= site_url("staff/gallary") ?>">Gallery</a>

                                </li>
                                <li class="dropdown">
                                    <a href="<?= site_url("staff/forums") ?>">Forums</a>

                                </li> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Requests</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= site_url('staff/addrequests') ?>">Add New Request</a></li>
                                        <li><a href="<?= site_url('staff/requests') ?>">View All Request</a></li>
                                        <li><a href="<?= site_url('staff/requestors') ?>">Show All Requestor</a></li>
                                        <li>
                                            <a tabindex="-1" href="<?= site_url('staff/mris/') ?>" >MRIS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-aux animate-click " data-animate-in="animated bounceInRight" data-animate-out="animated fadeOutDown" style="z-index:500;">
                                    <a href="#" class="dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-user animate-wr">
                                        <li id="dropdownForm">
                                        </li>
                                        <li><a tabindex="-1" href="<?= site_url('staff/profile') ?>"><span class="fa fa-user"></span> Profile</a></li>
                                        <li><a tabindex="-1" href="shop-checkout-shipping.html"><span class="fa fa-envelope"></span> Messages</a></li>
                                        <li><a href="<?= site_url('home/logout') ?>" tabindex="-1" href="shop-checkout-order.html"><span class="fa fa-sign-out"></span> Logout</a></li>

                                    </ul>
                                </li>
                                
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </header>        
        </div>
