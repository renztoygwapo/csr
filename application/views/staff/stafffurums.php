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
                    <li><a href="#">Forum</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <div class="wp-block article post">
                        <div class="figure">
                            <!-- Article title -->
                            <h2 class="article-title">Guys paki basa</h2>
                            <div class="inline-tags mb-20">
                                <span class="label base"></span>
                                <span class="label base">Libog Much</span>
                            </div>  
                            <!-- Article image -->
                            
                            <div>
                                <!-- Article content -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.
                                    Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...
                                </p>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                                </p>
                                <p>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                                <p class="highlight">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.
                                    Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. 
                                </p>
                                <p>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                                <blockquote class="blockquote-1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </blockquote>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.
                                    Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...
                                </p>
                            </div>
                            <!-- Meta info -->
                            <div class="meta-info">
                                <span>
                                    <strong>Written by:</strong> Alexander Smith
                                </span>
                                <span>
                                    <strong>Date:</strong>
                                    <a href="#">August 23th, 2014</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User comments section -->
            <div class="comment-list clearfix" id="comments">
                <h2 class="comment-count">4 Readers Commented</h2>

                <ol>
                    <li class="comment">
                        <div class="comment-body boxed">
                            <div class="comment-avatar">
                                <div class="avatar"><img src="<?=base_url('assets/sou/images/temp/avatar1.png')?>" alt="CSR"></div>
                            </div>
                            <div class="comment-text">
                                <div class="comment-author clearfix">
                                    <a href="#" class="link-author" hidefocus="true">Brad Pit</a>
                                    <span class="comment-meta"><span class="comment-date">June 26, 2013</span></span>
                                </div>
                                <div class="comment-entry">
                                    William Bradley "Brad" Pitt is an American actor and film producer. Pitt has received four Academy Award nominations and five Golden Globe.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="comment">
                        <div class="comment-body boxed">
                            <div class="comment-avatar">
                                <div class="avatar"><img src="<?=base_url('assets/sou/images/temp/avatar2.png')?>" alt="CSR"></div>
                            </div>
                            <div class="comment-text">
                                <div class="comment-author clearfix">
                                    <a href="#" class="link-author" hidefocus="true">Ari Gold</a>
                                    <span class="comment-meta"><span class="comment-date">June 25, 2013</span> </span>
                                </div>
                                <div class="comment-entry">
                                    Ari Gold is Vincent Chase's neurotic movie agent. He was an undergrad at Harvard University before earning his J.D./M.B.A. at the University of Michigan. In addition to reprising the role for the upcoming prequels of
                                </div>
                            </div>
                        </div>
                        <!--/ comment reply -->
                    </li>

                    <li class="comment">
                        <div class="comment-body boxed">
                            <div class="comment-avatar">
                                <div class="avatar"><img src="<?=base_url('assets/sou/images/temp/avatar4.png')?>" alt="CSR"></div>
                            </div>
                            <div class="comment-text">
                                <div class="comment-author clearfix">
                                    <a href="#" class="link-author" hidefocus="true">Superman</a>
                                    <span class="comment-meta"><span class="comment-date">June 23, 2013</span></span>
                                </div>
                                <div class="comment-entry">
                                    Superman is a fictional character, a comic book superhero who appears in comic books published by DC Comics.
                                </div>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
            <hr>
            <form class="form-light" role="form">
                <div class="col-md-11">
                    <textarea class="form-control" rows="2" placeholder="Type you comment"></textarea>
                </div>

                <div class="col-md-1">
                    <div class="col-md-6 col-md-offset-6">
                        <button class="btn btn-lg btn-base btn-icon btn-icon-right pull-right" hidefocus="true">
                            <i class="fa fa-send"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</section>

</div>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>



<?php $this->load->view('headfoot/footer_in'); ?>