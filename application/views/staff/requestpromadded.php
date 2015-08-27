<?php $this->load->view('staff/staffnavbar'); ?>
    <!-- MAIN CONTENT -->

    <section class="slice" style="padding:70px 0;">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3>THE REQUEST HAS BEEN ADDED</h3>
                            <h1 class="font-xl">
                           <i class="fa fa-book"></i><h5>PLEASE WAIT FOR THE APPROVAL</h5>
                            </h1>
                            <h5></h5>
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
    
<?php $this->load->view('headfoot/footer_in'); ?>