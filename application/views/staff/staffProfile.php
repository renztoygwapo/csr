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
                    <li><a href="#">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="user-profile-img ">
                        <img src="<?= base_url('assets/sou/images/prv/team/team-agency-2.jpg') ?>" alt="CSR">
                    </div>
                </div>
                <div class="col-md-9">                     
                    <div class="tabs-framed">
                        <ul class="tabs clearfix">
                            <li class="active"><a href="#tab-1" data-toggle="tab">About me</a></li>
                            <li><a href="#tab-2" data-toggle="tab">Order history</a></li>
                            <li><a href="#tab-3" data-toggle="tab">Whishlist</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <div class="tab-body">
                                    <dl class="dl-horizontal style-2">
                                        <h3 class="title title-lg">Personal information</h3>
                                        <p class="mb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                                        <dt>First name</dt>
                                        <dd>
                                            <span class="pull-left">Alexander Smith</span>
                                            <a href="#" class="pull-right" title="Edit"><span class="fa fa-pencil"></span></a>
                                        </dd>
                                        <hr>
                                        <dt>Last name</dt>
                                        <dd>
                                            <span class="pull-left">name@example.com</span>
                                            <a href="#" class="pull-right" title="Edit"><span class="fa fa-pencil"></span></a>
                                        </dd>
                                        <hr>
                                        <dt>Username</dt>
                                        <dd>
                                            <span class="pull-left">+40-722.123.456</span>
                                            <a href="#" class="pull-right" title="Edit"><span class="fa fa-pencil"></span></a>
                                        </dd>
                                        <hr>
                                        <dt>Address</dt>
                                        <dd>
                                            <span class="pull-left">Bucharest, Romania</span>
                                            <a href="#" class="pull-right" title="Edit"><span class="fa fa-pencil"></span></a>
                                        </dd>
                                        <hr>
                                        <dt>Company</dt>
                                        <dd>
                                            <span class="pull-left">Web Pixels</span>
                                            <a href="#" class="pull-right" title="Edit"><span class="fa fa-pencil"></span></a>
                                        </dd>

                                    </dl>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-2">
                                <div class="tab-body" style="padding-bottom: 0;">
                                    <h3 class="title title-lg">My orders</h3>
                                    <p class="mb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                                    <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                                        <tbody>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Tracking</th>
                                            </tr>

                                            <tr>
                                                <td><a href="#">230320</a></td>
                                                <td>23-08-2014</td>
                                                <td>RON 2000.99</td>
                                                <td><i class="fa fa-check"></i> Shipped out</td>
                                                <td>
                                                    230320-x
                                                    <br>
                                                    <strong>via Fan Curier - Romania</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">230320</a></td>
                                                <td>23-08-2014</td>
                                                <td>RON 2000.99</td>
                                                <td><i class="fa fa-check"></i> Shipped out</td>
                                                <td>
                                                    230320-x
                                                    <br>
                                                    <strong>via Fan Curier - Romania</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">230320</a></td>
                                                <td>23-08-2014</td>
                                                <td>RON 2000.99</td>
                                                <td><i class="fa fa-check"></i> Shipped out</td>
                                                <td>
                                                    230320-x
                                                    <br>
                                                    <strong>via Fan Curier - Romania</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">230320</a></td>
                                                <td>23-08-2014</td>
                                                <td>RON 2000.99</td>
                                                <td><i class="fa fa-check"></i> Shipped out</td>
                                                <td>
                                                    230320-x
                                                    <br>
                                                    <strong>via Fan Curier - Romania</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">230320</a></td>
                                                <td>23-08-2014</td>
                                                <td>RON 2000.99</td>
                                                <td><i class="fa fa-check"></i> Shipped out</td>
                                                <td>
                                                    230320-x
                                                    <br>
                                                    <strong>via Fan Curier - Romania</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-3">
                                <div class="tab-body">
                                    <h3 class="title title-lg">My wishlist</h3>
                                    <p class="mb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                                    <div class="row">
                                        <!-- Product list -->
                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-1.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Nikon Coolpix L320</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-2.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Samsung Galaxy S4</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-3.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Asus Ultra Notebook</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Product list -->
                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-1.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Nikon Coolpix L320</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-2.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Samsung Galaxy S4</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-3.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Asus Ultra Notebook</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Product list -->
                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-1.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Nikon Coolpix L320</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-2.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Samsung Galaxy S4</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="wp-block product">
                                                <figure>
                                                    <img alt="CSR" src="images/prv/product-3.jpg" class="img-responsive img-center">
                                                </figure>
                                                <h2 class="product-title"><a href="#">Asus Ultra Notebook</a></h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisg elitm Ut tincidunt purus iaculis
                                                </p>
                                                <div class="wp-block-footer">
                                                    <span class="price pull-left">RON 233.33</span>
                                                    <a href="#" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>



<?php $this->load->view('headfoot/footer_in'); ?>