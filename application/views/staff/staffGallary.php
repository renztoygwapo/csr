<?php $this->load->view('staff/staffnavbar'); ?>
<!-- Optional header components (ex: slider) -->

<!-- MAIN CONTENT -->


<div class="pg-opt">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h2><?= $this->session->userdata('username') ?></h2>
            </div>
            <div class="col-xs-6">
                <ol class="breadcrumb">
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Gallery</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">
            <section class="slice bg-white animate-hover-slide">
                <div class="wp-section work">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="sort-list-btn hidden-xs">
                                    <button type="button" class="btn btn-base filter active" data-filter="all"><i class="fa fa-th-large"></i> Show all</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_1 category_2 category_3">Brand Creation</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_3 category_5 category_6 category_7 category_8">Interface Design</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_6 category_7 category_8">Web Development</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_6 category_7 category_8 category_3">Online Marketing</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_1 category_2 category_6 category_7 category_8 category_3">Cute</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_1 category_2 category_12">Akoa</button>
                                    <button type="button" class="btn btn-white filter" data-filter="category_3">Xcul</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="btn-group pull-right hidden-md hidden-lg">
                                    <button type="button" class="btn btn-three">Filter projects</button>
                                    <button type="button" class="btn btn-three dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu" id="ulFilterMenu">
                                        <li class="filter active" data-filter="all"><a>Show All</a></li>
                                        <li class="filter" data-filter="category_1 category_2 category_3"><a>Brand Creation</a></li>
                                        <li class="filter" data-filter="category_3 category_5 category_6 category_7 category_8"><a>Interface Design</a></li>
                                        <li class="filter" data-filter="category_6 category_7 category_8"><a>Web Development</a></li>
                                        <li class="filter" data-filter="category_6 category_7 category_8 category_3"><a>Online Marketing</a></li>
                                        <li class="filter" data-filter="category_1 category_2 category_6 category_7 category_8 category_3"><a>Cute</a></li>
                                        <li class="filter" data-filter="category_1 category_2 category_12"><a>Akoa</a></li>
                                        <li class="filter" data-filter="category_3"><a>Xcul</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">          
                            <div id="ulSorList">
                                <div class="mix category_1 col-lg-3 col-md-3 col-sm-6" data-cat="1">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-1.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-1.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap template</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_2 col-lg-3 col-md-3 col-sm-6" data-cat="2">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-2.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-2.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Complete features</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_3 col-lg-3 col-md-3 col-sm-6" data-cat="3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-3.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-3.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Shop template included</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_4 col-lg-3 col-md-3 col-sm-6" data-cat="4">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-4.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-4.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>600+ fonts from Google</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_5 col-lg-3 col-md-3 col-sm-6" data-cat="5">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-5.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-5.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>300+ icons</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_6 col-lg-3 col-md-3 col-sm-6" data-cat="6">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-6.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-6.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Business ready</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_7 col-lg-3 col-md-3 col-sm-6" data-cat="7">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-7.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-7.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Easy customization</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_8 col-lg-3 col-md-3 col-sm-6" data-cat="8">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-8.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-8.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Full support included</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_9 col-lg-3 col-md-3 col-sm-6" data-cat="9">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-1.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-1.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Made for you</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_10 col-lg-3 col-md-3 col-sm-6" data-cat="10">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-3.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-3.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Bootstrap based</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_11 col-lg-3 col-md-3 col-sm-6" data-cat="11">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-5.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-5.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>Music, videos and more</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category_12 col-lg-3 col-md-3 col-sm-6" data-cat="12">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="CSR" src="<?=base_url('assets/sou/images/prv/wk-img-7.jpg')?>" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="<?=base_url('assets/sou/images/prv/wk-img-7.jpg')?>" class="btn btn-lg btn-b-white theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                                <a href="#" class="btn btn-lg btn-b-white"><i class="fa fa-link"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <h2>New shopping experience</h2>
                                                <small>Brand creation</small>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="like-button">
                                                    <span class="button">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                    <span class="count"><small>123</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap"></div>
                            </div>                                   
                        </div>
                    </div>    	
                </div>
            </section>

        </div>
    </div>
</section>

</div>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>



<?php $this->load->view('headfoot/footer_in'); ?>