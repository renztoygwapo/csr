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
                            <li><a href="#">Request</a></li>
                            <li><a href="#">Add Request</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
        body{
            background: #258233!important;
        }
        </style>
        <section class="slice slice-lg" >
            <div class="wp-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                            <div class="wp-block default user-form user-form-alpha no-margin c-base">
                                <div class="form-header">
                                    <form class="sky-form">     
                                        <div class="row">
                                            <div class="col-md-6"><h2>Adding A new Request</h2></div>

                                        </div>
                                    </form>
                                </div>
                                <div class="form-body">

                                    <?php $att = array('id' => 'RequestForm', 'class' => 'sky-form'); ?>
                                    <?= form_open_multipart('staff/do_addRequest/1', $att) ?>                                   
                                    <fieldset class="no-padding">           
                                        <section>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label class="label">Date Receive</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-calendar"></i>
                                                            <!--<input type="text" name="dateProcess" placeholder="yyyy-mm-dd" onkeyup="dateClick(1)" required>-->
                                                            <input type="date" name="dateReceive" disabled value="<?=date('Y-m-d')?>" required>

                                                        </label>
                                                    </div>  

                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label class="label">Date to be Process</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-calendar"></i>
                                                            <!--<input type="text" name="datePrepare" placeholder="yyyy-mm-dd" onkeyup="dateClick(2)" required>-->
                                                            <input type="date" name="dateProcess" >
                                                        </label>
                                                    </div>  

                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label class="label">Date of Deadline</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-calendar"></i>
                                                            <!--<input type="text" name="datePrepare" placeholder="yyyy-mm-dd" onkeyup="dateClick(2)" required>-->
                                                            <input type="date" name="dateDealines" required>
                                                        </label>
                                                    </div>  

                                                </div>

                                            </div> 


                                            <hr>
                                            <div class='row'><div class="col-md-12">
                                                    <p class="text-capitalize text-info bold pull-right">Payee's Informations</p>
                                                </div></div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="label">First Name</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="firstname" placeholder="" required>
                                                            <b class="tooltip tooltip-bottom-right">First name of the payee</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="label">Middle Name</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="middlename" placeholder="" required>
                                                            <b class="tooltip tooltip-bottom-right">Middle name of the payee.</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="label">Last Name</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="lastname" placeholder="" required>
                                                            <b class="tooltip tooltip-bottom-right">Last name of the payee.</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Contact</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-phone"></i>
                                                            <input type="text" name="contact" placeholder="" required>
                                                            <b class="tooltip tooltip-bottom-right">Contact</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Address</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-home"></i>
                                                            <input type="text" name="payee_address" placeholder="" required>
                                                            <b class="tooltip tooltip-bottom-right">Address</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label">Affiliation</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-home"></i>
                                                            <input type="text" name="payee_affiliation" placeholder="" required>
                                                            <b class="tooltip tooltip-bottom-right">Affiliation</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                            </div>   
                                        </section>
                                        <hr>

                                        <p class="text-capitalize text-info bold pull-right">Requests details</p>
                                        <section>
                                            <div class="row">
                                                <section class="col-xs-12">
                                                    <label class="label">Request Party</label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-location-arrow" required></i>
                                                        <input type="text" name="requestparty" placeholder="">
                                                    </label>
                                                </section>
                                                <section class="col-xs-12">
                                                    <label class="label">Description</label>
                                                    <label class="textarea">
                                                        <textarea rows="3" name="description" placeholder="Description" required></textarea>
                                                    </label>
                                                </section>
                                            </div> 
                                            <hr>
                                            <div class="row">
                                                <section class="col-xs-12">
                                                    <p class="text-capitalize text-info bold pull-right">Nature Of Expense</p>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="font-size: 18px;
                                                     ">
                                                    <span data-toggle='collapse'  href='#charitables' onclick="checkboxClick('charitableBox', 'charitableText', '')"> 
                                                        <a class='fa fa-square-o 'id="charitableBox" value='off'></a><a id="charitableText"  style="color:#232323;"> Educational Program</a>   
                                                    </span>
                                                </div>
                                                <div class = "col-md-12">
                                                    <div id = 'charitables' class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                        <div class = "row">
                                                            <div class = "col-md-2"></div>
                                                            <div class = "col-md-6">
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_1" value="" onclick="subClick('1', 'Don AOF Excellence Award')" id = "sub-1">
                                                                    <i></i> Don AOF Excellence Award
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_2" value=""  onclick="subClick('2', 'Balik Aral Program-Alternative Learning System(ALS)')" id = "sub-2">
                                                                    <i></i> Balik Aral Program-Alternative Learning System(ALS)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_3"  value="" onclick="subClick('3', 'Pilipino Banana Growers and Exporters Association (PBGEA Pre-qualifying exam)')" id = "sub-3">
                                                                    <i></i> Pilipino Banana Growers and Exporters Association (PBGEA Pre-qualifying Exam)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_4" value=""  onclick="subClick('4', 'Technical Skills Training')" id = "sub-4">
                                                                    <i></i> Technical Skills Training
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_5" value="" onclick="subClick('5', 'School Supplies Donation ')" id = "sub-5">
                                                                    <i></i>School Supplies Donation
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_6" value="" onclick="subClick('6', 'Sports Program ')" id = "sub-6">
                                                                    <i></i>Sports Program 
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_7" value="" onclick="subClick('7', 'Brigada Eskwela')" id = "sub-7">
                                                                    <i></i>Brigada Eskwela
                                                                </label>
                                                            </div>
                                                            <div class = "col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-12" style = "font-size: 18px;">
                                                    <span data-toggle = 'collapse' href = '#environmentals' onclick = "checkboxClick('environmentalBox', 'environmentalText', '')">
                                                        <a class = 'fa fa-square-o 'id = "environmentalBox" value = 'off'></a><a id = "environmentalText" style = "color:#232323;"> Medical Program</a>
                                                    </span>

                                                </div>
                                                <div class = "col-md-12">
                                                    <div id = 'environmentals' class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                        <div class = "row">
                                                            <div class = "col-md-2"></div>
                                                            <div class = "col-md-6">
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_8" value="" onclick="subClick('8', 'Garantisadong Pambata Activity')"  id = "sub-68">
                                                                    <i></i> Garantisadong Pambata Activity
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_9" value="" onclick="subClick('9', 'Prostate Cancer Screening')"  id = "sub-9">
                                                                    <i></i> Prostate Cancer Screening
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_10" value=""  onclick="subClick('10', 'Filariasis')" id = "sub-10">
                                                                    <i></i>Filariasis
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_11" value="" onclick="subClick('11', 'Sputum Testing')"  id = "sub-11">
                                                                    <i></i> Sputum Testing
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_12" value="" onclick="subClick('12', 'Goodbye Lamok')"  id = "sub-102">
                                                                    <i></i> Goodbye Lamok
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_13" value="" onclick="subClick('13', 'Medical Mission')"  id = "sub-13">
                                                                    <i></i> Medical Mission
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_14" value="" onclick="subClick('14', 'Operation Tuli')"  id = "sub-14">
                                                                    <i></i> Operation Tuli
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_15" value="" onclick="subClick('15', 'Feeding Program')"  id = "sub-15">
                                                                    <i></i> Feeding Program
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_16" value="" onclick="subClick('16', 'Dental Flouride')"  id = "sub-16">
                                                                    <i></i> Dental Flouride
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_17" value="" onclick="subClick('17', 'Urine Analysis')"  id = "sub-17">
                                                                    <i></i> Urine Analysis
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_18" value="" onclick="subClick('18', 'Mobile Blood Donation')"  id = "sub-18">
                                                                    <i></i> Mobile Blood Donation
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_19" value="" onclick="subClick('19', 'Health Advocacy and Information Drives on AIDS,STD,Tuberculosis and others')"  id = "sub-19">
                                                                    <i></i> Health Advocacy and Information Drives on AIDS,STD,Tuberculosis and Others
                                                                </label>

                                                            </div>
                                                            <div class = "col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-12" style = "font-size: 18px;">
                                                    <span data-toggle = 'collapse' href = '#sports' onclick = "checkboxClick('sportsBox', 'sportsText', '')">
                                                        <a class = 'fa fa-square-o 'id = "sportsBox" value = 'off'></a><a id = "sportsText" style = "color:#232323;"> Charitable Contribution</a>
                                                    </span>
                                                </div>
                                                <div class = "col-md-12">
                                                    <div id = 'sports' class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                        <div class = "row">
                                                            <div class = "col-md-2"></div>
                                                            <div class = "col-md-6">
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_20" value="" onclick="subClick('20', 'Donation/Solicitations')"   id = "sub-20">
                                                                    <i></i> Donation/Solicitations
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_21" value="" onclick="subClick('21', 'Wake and Burial Assistance')"   id = "sub-21">
                                                                    <i></i> Wake and Burial Assistance
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_22" value="" onclick="subClick('22', 'Cash Assistance')"   id = "sub-22">
                                                                    <i></i> Cash Assistance
                                                                </label>

                                                            </div>
                                                            <div class = "col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-12" style = "font-size: 18px;">
                                                    <span data-toggle = 'collapse' href = '#medicals' onclick = "checkboxClick('medicalBox', 'medicalText', '')">
                                                        <a class = 'fa fa-square-o 'id = "medicalBox" value = 'off'></a><a id = "medicalText" style = "color:#232323;"> Community Development</a>
                                                    </span>
                                                </div>
                                                <div class = "col-md-12">
                                                    <div id = 'medicals' class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                        <div class = "row">
                                                            <div class = "col-md-2"></div>
                                                            <div class = "col-md-6">
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_23" value="" onclick="subClick('23', 'Peace Cooperation Program (TADECO, INC. and Anflo Banana Corporation)')"    id = "sub-23">
                                                                    <i></i> Peace Cooperation Program (TADECO, INC. and Anflo Banana Corporation)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_24" value="" onclick="subClick('24', 'Pamaskong Handog Program')"    id = "sub-24">
                                                                    <i></i>Pamaskong Handog Program
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_25" value="" onclick="subClick('25', 'Kabuhayang Agri Tayo(livelihoodProjects)')"    id = "sub-25">
                                                                    <i></i> Kabuhayang Agri Tayo(livelihoodProjects)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_26" value="" onclick="subClick('26', 'Summer Job Program')"    id = "sub-26">
                                                                    <i></i> Summer Job Program
                                                                </label>

                                                            </div>
                                                            <div class = "col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-12" style = "font-size: 18px;">
                                                    <span data-toggle = 'collapse' href = '#educationals' onclick = "checkboxClick('educationalBox', 'educationalText', '')">
                                                        <a class = 'fa fa-square-o 'id = "educationalBox" value = 'off'></a><a id = "educationalText" style = "color:#232323;"> Environment Development</a>
                                                    </span>
                                                </div>
                                                <div class = "col-md-12">
                                                    <div id = 'educationals' class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                        <div class = "row">
                                                            <div class = "col-md-2"></div>
                                                            <div class = "col-md-6">
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_27" value="" onclick="subClick('27', 'Tree Growing')"   id = "sub-27">
                                                                    <i></i> Tree Growing
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_28" value="" onclick="subClick('28', 'Coastal Care')"   id = "sub-28">
                                                                    <i></i> Coastal Care
                                                                </label>

                                                            </div>
                                                            <div class = "col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-12" style = "font-size: 18px;">
                                                    <span data-toggle = 'collapse' href = '#socials' onclick = "checkboxClick('socialBox', 'socialText', '')">
                                                        <a class = 'fa fa-square-o 'id = "socialBox" value = 'off'></a><a id = "socialText" style = "color:#232323;"> Social Program</a>
                                                    </span>
                                                </div>
                                                <div class = "col-md-12">
                                                    <div id = 'socials' class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                        <div class = "row">
                                                            <div class = "col-md-2"></div>
                                                            <div class = "col-md-6">
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_29" value="" onclick="subClick('29', 'Relief Operations')"    id = "sub-29">
                                                                    <i></i> Relief Operations
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_30" value="" onclick="subClick('30', 'Kasalan ng bayan')"    id = "sub-30">
                                                                    <i></i>Kasalan ng bayan
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_31" value="" onclick="subClick('31', 'Responsible Parenthood Movement')"    id = "sub-31">
                                                                    <i></i> Responsible Parenthood Movement
                                                                </label>


                                                            </div>
                                                            <div class = "col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </section>
                                    </fieldset>
                                    <hr>
                                    <p class = "text-capitalize text-info bold pull-right">Kind of Expenses</p>
                                    <fieldset>

                                        <section>
                                            <div class = "row">
                                                <div class = "col-md-3"></div>
                                                <div class = "col-md-6">
                                                    <div class="row">
                                                        <div class = "col-md-6">
                                                            <span data-toggle = 'collapse' href = '#cash' onclick = "checkboxClick('cashBox', 'cashText', 'fa-2x')">
                                                                <a class = 'fa fa-square-o fa-2x'id = "cashBox" value = 'off'></a><a id = "cashText" class = 'fa-2x' style = "color:#232323;"> CASH</a>
                                                            </span>
                                                        </div>
                                                        <div class = "col-md-6">
                                                            <span data-toggle = 'collapse' href = '#inkind' onclick = "checkboxClick('inkindBox', 'inkindText', 'fa-2x')">
                                                                <a class = 'fa fa-square-o fa-2x' id = "inkindBox" value = 'off'></a><a id = "inkindText" class = 'fa-2x'style = "color:#232323;"> IN KIND</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-3"></div>
                                            </div>
                                            <div id = "cash" class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                <p> Amount of Cash</p>
                                                <div class="col-md-6">

                                                    <label class = "input">
                                                        <i class = "icon-append fa fa-rub"></i>
                                                        <input type = "text"id = 'cashfield' name = "amountofcash" placeholder = "Amount of cash" onkeyup = "moneyCash()">
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="textarea">
                                                        <textarea rows="2" name="cash_disc" placeholder="Cash Description" ></textarea>
                                                    </label>
                                                </div>

                                            </div>


                                            <div id = "inkind" class = 'panel-collapse collapse' style = 'height: 0px;' aria-expanded = 'false'>
                                                <div class = "row">
                                                    <section class = "col-xs-5 pull-right">
                                                        Quantity of item request
                                                        <label class = "input">
                                                            <input id = "numitem" type = "text" name = "quantityofitemrequest" placeholder = "Quantity" onkeyup = "quantityRe()">
                                                        </label>
                                                    </section>
                                                </div>

                                                <section>
                                                    <div class = 'col-md-3' >
                                                        <label for = 'file' class = 'input'>
                                                            <span class = "text-info">Item Names</span>
                                                        </label>
                                                    </div>
                                                    <div class = 'col-md-3' >
                                                        <label for = 'file' class = 'input'>
                                                            <span class = "text-info">Items Quantity</span>
                                                        </label>
                                                    </div>
                                                    <div class = 'col-md-3' >
                                                        <label for = 'file' class = 'input'>
                                                            <span class = "text-info">Items Description</span>
                                                        </label>
                                                    </div>
                                                    <div class = 'col-md-3' >
                                                        <label for = 'file' class = 'input'>
                                                            <span class = "text-info">Items Price</span>
                                                        </label>
                                                    </div>
                                                    <div id = "items">
                                                        <section class = 'row form-group'>
                                                            <div class = 'col-md-3' >
                                                                <label for = 'file' class = 'input'>
                                                                    <i class = 'icon-append fa fa-gift'></i>
                                                                    <input type = 'text' name = 'itemname1' placeholder = 'Item Name 1'>
                                                                </label>
                                                            </div>
                                                            <div class = 'col-md-3'>
                                                                <label for = 'file' class = 'input' >
                                                                    <i class = 'icon-append fa fa-archive'></i>
                                                                    <input type = 'text' name = 'itemquan1' placeholder = 'Quantity of the item 1'>
                                                                </label>
                                                            </div>
                                                            <div class = 'col-md-3'>
                                                                <label class="textarea">
                                                                    <textarea rows="1" name="description1" placeholder="Description" ></textarea>
                                                                </label>
                                                            </div>
                                                            <div class = 'col-md-3'>
                                                                <label for = 'file' class = 'input' >
                                                                    <i class = 'icon-append fa fa-archive'></i>
                                                                    <input type = 'text' name = 'price1' placeholder = 'Price of the item 1'>
                                                                </label>
                                                            </div>
                                                        </section>
                                                    </div>

                                            </div>

                                            <br><br><br><br>
                                            <div class = "row">
                                                <div class = "row">
                                                    <div class = "col-md-2"></div>
                                                    <div class = "col-md-8 form-group">
                                                        <center>
                                                            <img id = "userProfileUpload" src = "" class = "img-rounded img-responsive" alt = "Request">
                                                        </center>
                                                    </div>
                                                    <div class = "col-md-8"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section>
                                            <div class = "row">
                                                <div class = "col-md-8">
                                                    <span class = "btn btn-b-dark fileinput-button mr-xs">
                                                        <i class = "glyphicon glyphicon-plus"></i>
                                                        <span>Add Picture</span>
                                                        <input type = "file" onchange = "previewFile()" name = "userfile" >
                                                    </span>
                                                </div>
                                                <div class = "col-md-4">
                                                    <button class = "btn btn-base btn-icon btn-icon-right btn-icon-go pull-right" type = "submit" onclick="addnow()">
                                                        <span>Add Now</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </section>
                                    </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span></a></body>
<script>
                                                            function addsearchproduct() {  // this is JavaScript  function  
                                                                var search = document.getElementById('searchRequestor').elements[0].value;
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "<?= site_url('staff/pracAJAX') ?>" + "/" + search,
                                                                    // call php function , phpFunction=function Name , x= parameter  
                                                                    data: {},
                                                                    success: function(data1) {
                                                                        document.getElementById('searchRequestorResult').innerHTML = "" + data1;
                                                                    }
                                                                });
                                                            }
</script>

<script>
    var kinds = "";
    function number(quan) {
        var number = quan;
        var numbers = "1234567890";
        var found = true, f = false;
        if (quan.length !== 0) {
            for (var i = 0; i < number.length && found; i++) {
                for (var y = 0; y < numbers.length; y++) {
                    if (numbers.charAt(y) === number.charAt(i)) {
                        f = true;
                    }
                }
                if (!f) {
                    found = false;
                    break;
                } else {
                    f = false;
                }
            }
        } else {
            found = false;
        }
        return found;
    }
    function quantityRe() {

        var quan = document.getElementById('numitem').value;
        var text = "";
        var found = false, f = false;
        for (var i = 0; i < quan.length; i++) {
            var j = quan.charAt(i) + "";
            if (j === "0") {
                if (!found) {
                    f = true;
                } else {
                    f = false;
                }
            } else {
                found = true;
                f = false;
            }
            if (!f) {
                text += quan.charAt(i);
            }

        }
        quan = text;
        if (number(quan)) {
            var ctr = 0;
            while (true) {
                var com = ctr + "";
                if (com === quan) {
                    break;
                }
                ctr++;
            }
            var html = "";
            for (var i = 1; i <= ctr; i++) {
                html += "<section class='row form-group'>" +
                        "<div class='col-md-3' >" +
                        "<label for='file' class='input'>" +
                        "<i class='icon-append fa fa-gift'></i>" +
                        "<input type='text' name='itemname" + i + "' placeholder='Item Name " + i + "'>" +
                        "</label>" +
                        "</div>" +
                        "<div class='col-md-3'>" +
                        "<label for='file' class='input' >" +
                        "<i class='icon-append fa fa-archive'></i>" +
                        "<input type='text' name='itemquan" + i + "' placeholder='Quantity of the item " + i + "'>" +
                        "</label>" +
                        "</div>" +
                        "<div class='col-md-3'>" +
                        " <label class = 'textarea' >" +
                        " <textarea rows ='1' name ='description" + i + "' placeholder='Description " + i + "'> </textarea>" +
                        " </label>" +
                        "</div>" +
                        "<div class='col-md-3'>" +
                        "<label for='file' class='input' >" +
                        "<i class='icon-append fa fa-archive'></i>" +
                        "<input type='text' name='price" + i + "' placeholder='Price of the item " + i + "'>" +
                        "</label>" +
                        "</div>" +
                        "</section>";
            }

            document.getElementById('items').innerHTML = html;
            document.getElementById("RequestForm").removeAttribute('action');
            var att = document.createAttribute('action');
            att.value = "<?= site_url("staff/do_addRequest") ?>" + "/" + ctr;
            document.getElementById("RequestForm").setAttributeNode(att);
            quantity = ctr;
        }
    }
    var quantity = 0;
    var nature = "";
    function  checkboxClick(id, text, fa) {

        var h1 = document.getElementById(id);
        var val = h1.getAttribute('value');
        h1.removeAttribute('class');
        var att;
        document.getElementById(text).removeAttribute('style');
        if (val === "off") {

            att = document.createAttribute('class');
            att.value = 'fa fa-check-square-o ' + fa;
            h1.setAttributeNode(att);
            h1.removeAttribute('value');
            att = document.createAttribute('value');
            att.value = 'on';
            h1.setAttributeNode(att);
        } else {
            att = document.createAttribute('class');
            att.value = 'fa fa-square-o ' + fa;
            h1.setAttributeNode(att);
            h1.removeAttribute('value');
            att = document.createAttribute('value');
            att.value = 'off';
            h1.setAttributeNode(att);
            att = document.createAttribute('style');
            att.value = 'color:#232323';
            document.getElementById(text).setAttributeNode(att);
        }
        var val1 = document.getElementById('cashBox').getAttribute('value');
        var val2 = document.getElementById('inkindBox').getAttribute('value');
        if (val1 === "on" && val2 === "off") {
            kinds = "/cash";
        } else if ((val1 === "on" && val2 === "on")) {
            kinds = "/cash-inkind";
        } else if (val1 === "off" && val2 === "on") {
            kinds = "/inkind";
        } else {
            kinds = "/wala";
        }
        if (id !== "cashBox" && id !== "inkindBox") {
            nature = "/wala";
            if (id !== "charitableBox") {
                h1 = document.getElementById("charitableBox");
                att = document.createAttribute('class');
                att.value = 'fa fa-square-o ' + fa;
                h1.setAttributeNode(att);
                h1.removeAttribute('value');
                att = document.createAttribute('value');
                att.value = 'off';
                h1.setAttributeNode(att);
                att = document.createAttribute('style');
                att.value = 'color:#232323';
                document.getElementById(text).setAttributeNode(att);
                att = document.createAttribute('class');
                att.value = 'panel-collapse collapse ';
                document.getElementById("charitables").setAttributeNode(att);
                att = document.createAttribute('aria-expanded');
                att.value = 'false';
                document.getElementById("charitables").setAttributeNode(att);
            } else {
                nature = "csr1";
            }
            if (id !== "medicalBox") {
                h1 = document.getElementById("medicalBox");
                att = document.createAttribute('class');
                att.value = 'fa fa-square-o ' + fa;
                h1.setAttributeNode(att);
                h1.removeAttribute('value');
                att = document.createAttribute('value');
                att.value = 'off';
                h1.setAttributeNode(att);
                att = document.createAttribute('style');
                att.value = 'color:#232323';
                document.getElementById(text).setAttributeNode(att);
                att = document.createAttribute('class');
                att.value = 'panel-collapse collapse ';
                document.getElementById("medicals").setAttributeNode(att);
                att = document.createAttribute('aria-expanded');
                att.value = 'false';
                document.getElementById("medicals").setAttributeNode(att);
            } else {
                nature = "csr4";
            }
            if (id !== "sportsBox") {
                h1 = document.getElementById("sportsBox");
                att = document.createAttribute('class');
                att.value = 'fa fa-square-o ' + fa;
                h1.setAttributeNode(att);
                h1.removeAttribute('value');
                att = document.createAttribute('value');
                att.value = 'off';
                h1.setAttributeNode(att);
                att = document.createAttribute('style');
                att.value = 'color:#232323';
                document.getElementById(text).setAttributeNode(att);
                att = document.createAttribute('class');
                att.value = 'panel-collapse collapse ';
                document.getElementById("sports").setAttributeNode(att);
                att = document.createAttribute('aria-expanded');
                att.value = 'false';
                document.getElementById("sports").setAttributeNode(att);
            } else {
                nature = "csr3";
            }
            if (id !== "environmentalBox") {
                h1 = document.getElementById("environmentalBox");
                att = document.createAttribute('class');
                att.value = 'fa fa-square-o ' + fa;
                h1.setAttributeNode(att);
                h1.removeAttribute('value');
                att = document.createAttribute('value');
                att.value = 'off';
                h1.setAttributeNode(att);
                att = document.createAttribute('style');
                att.value = 'color:#232323';
                document.getElementById(text).setAttributeNode(att);
                att = document.createAttribute('class');
                att.value = 'panel-collapse collapse ';
                document.getElementById("environmentals").setAttributeNode(att);
                att = document.createAttribute('aria-expanded');
                att.value = 'false';
                document.getElementById("environmentals").setAttributeNode(att);
            } else {
                nature = "csr2";
            }
            if (id !== "educationalBox") {
                h1 = document.getElementById("educationalBox");
                att = document.createAttribute('class');
                att.value = 'fa fa-square-o ' + fa;
                h1.setAttributeNode(att);
                h1.removeAttribute('value');
                att = document.createAttribute('value');
                att.value = 'off';
                h1.setAttributeNode(att);
                att = document.createAttribute('style');
                att.value = 'color:#232323';
                document.getElementById(text).setAttributeNode(att);
                att = document.createAttribute('class');
                att.value = 'panel-collapse collapse ';
                document.getElementById("educationals").setAttributeNode(att);
                att = document.createAttribute('aria-expanded');
                att.value = 'false';
                document.getElementById("educationals").setAttributeNode(att);
            } else {
                nature = "csr5";
            }
            if (id !== "socialBox") {
                h1 = document.getElementById("socialBox");
                att = document.createAttribute('class');
                att.value = 'fa fa-square-o ' + fa;
                h1.setAttributeNode(att);
                h1.removeAttribute('value');
                att = document.createAttribute('value');
                att.value = 'off';
                h1.setAttributeNode(att);
                att = document.createAttribute('style');
                att.value = 'color:#232323';
                document.getElementById(text).setAttributeNode(att);
                att = document.createAttribute('class');
                att.value = 'panel-collapse collapse ';
                document.getElementById("socials").setAttributeNode(att);
                att = document.createAttribute('aria-expanded');
                att.value = 'false';
                document.getElementById("socials4").setAttributeNode(att);
            } else {
                nature = "csr6";
            }
        }
    }
    function moneyCash() {

        var val = document.getElementById('cashfield').value;
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
        for (var i = 1;
                i < 50;
                i++) {
            if (document.getElementById("RequestForm").elements[i].value === document.getElementById('cashfield').value) {
                var att = document.createAttribute('value');
                att.value = val;
                document.getElementById('cashfield').setAttributeNode(att);
                document.getElementById("RequestForm").elements[i].value = "Php " + val;
            }
        }
    }
    function dateClick(element) {
        var val = document.getElementById('RequestForm').elements[element].value;
        if (val.charAt(val.length - 1) !== '-') {
            var numbers = "+1234567890";
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
            var year = "";
            var month = "";
            var day = "";
            for (var i = 0;
                    i < 4 && i < val.length;
                    i++) {
                year += val.charAt(i);
                text = "";
                for (var j = i + 1;
                        j < val.length;
                        j++) {
                    text += val.charAt(j);
                }
            }
            val = text;
            text = "";
            for (var i = 0;
                    i < 2 && i < val.length;
                    i++) {
                month += val.charAt(i);
                text = "";
                for (var j = i + 1;
                        j < val.length;
                        j++) {
                    text += val.charAt(j);
                }
            }
            val = text;
            text = "";
            for (var i = 0;
                    i < 2 && i < val.length;
                    i++) {
                day += val.charAt(i);
                text = "";
                for (var j = i + 1;
                        j < val.length;
                        j++) {
                    text += val.charAt(j);
                }
            }
            if (year !== "") {
                val = year;
            }
            if (month !== "") {
                val = year + " - " + month;
            }
            if (day !== "") {
                val = year + " - " + month + " - " + day;
            }
            document.getElementById('RequestForm').elements[element].value = val;
        }
    }
</script>  

<script>
    function previewFile() {
        var preview = document.getElementById('userProfileUpload'); //selects the query named img
        var file = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader = new FileReader();
        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {

            document.getElementById('userProfileUpload').src = "<?= base_url('assets/sou/images/load4.gif') ?>";
            setTimeout(function() {
                reader.readAsDataURL(file)
            }, 1000);
            //reads the data as a URL
        } else {
            preview.src = preview.src;
        }
    }

    function subClick(id, value) {
        var val = document.getElementById("sub-" + id).value;
        if (val === "off" || val + "" === "") {
            document.getElementById("sub-" + id).value = value;
        } else {
            document.getElementById("sub-" + id).value = "off";
        }
    }
    function addnow() {


        document.getElementById("RequestForm").removeAttribute('action');
        if (kinds !== "/wala" && nature !== "/wala") {
            var att = document.createAttribute('action');
            att.value = "<?= site_url('staff/do_addRequest/') ?>" + "/" + quantity + kinds + "/" + nature;
            document.getElementById("RequestForm").setAttributeNode(att);
        }
    }
</script>

<?php $this->load->view('headfoot/footer_in'); ?>