<?php if($this->session->userdata('type')=="staff"){
    $this->load->view('staff/staffnavbar'); 
}else{
    $this->load->view('inc/adminHead'); 
}
foreach ($request_info as $key => $value) {
    $date_received=$value->date_received;
    $date_process=$value->date_process;
    $date_deadline=$value->date_deadline;
    $nature_of_expense=$value->nature_of_expense;
    $program_code=$value->program_code;
    $requestor_First_name=$value->requestor_First_name;
    $requestor_Middle_name=$value->requestor_Middle_name;
    $requestor_Last_name=$value->requestor_Last_name;
    $requestor_contact=$value->requestor_contact;
    $requestor_address=$value->requestor_address;
    $requestor_id=$value->requestor_id;
    $request_affiliation_id=$value->request_affiliation_id;
    $requestor_affilation=$value->requestor_affilation;
    $request_party=$value->request_party;
    $request_description=$value->request_description;
    $request_kind=$value->request_kind;
    $request_id=$value->request_id;
}

?>

<div class="modal fade" id="sms_modal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="disForm" class="sky-form" action="<?=base_url('sms/sendSMS/'.$viewer.'/'.$request_id.'/'.$requestor_id)?>">    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Send SMS</h4>
            </div>
            <div class="modal-body">                             
                    <fieldset class="no-padding">           
                        <section class="">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Contact number</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-phone"></i>
                                            <input type="text" name="phone_number" value="<?=$requestor_contact?>" readOnly="true">
                                        </label>
                                    </div>               
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <label class="textarea"> <textarea rows="5" name="message" placeholder="Type your message here..." required=""></textarea> </label>
                                    </div>               
                                </div>
                            </div>   

                        </section>

                        
                        
                    </fieldset>
                
                                                
                <p>
                    This will be sent to <?=$requestor_First_name?> <?=$requestor_Last_name?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-base">Send</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="recomendation_modal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="disForm" class="sky-form">    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Recomendation</h4>
            </div>
            <div class="modal-body">                             
                    <fieldset class="no-padding">           
                        <section class="">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <label class="textarea"> <textarea rows="5" name="message" placeholder="Type your message here..." required=""></textarea> </label>
                                    </div>               
                                </div>
                            </div>   

                        </section>

                        
                        
                    </fieldset>
                
                                                
                <p>
                    This recomendation if for <?=$requestor_First_name?> <?=$requestor_Last_name?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button data-dismiss="modal" class="btn btn-base">Print</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
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
        <section class="slice slice-lg" >
            <div class="wp-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                            <div class="wp-block default user-form user-form-alpha no-margin c-base">
                                <div class="form-header">
                                    <form class="sky-form">     
                                        <div class="row">
                                            <div class="col-md-6"><h2>Request's Information</h2></div>

                                        </div>
                                    </form>
                                </div>
                                <div class="form-body">

                                    <form id='RequestForm2' class="sky-form" method="post" action="">
                                    <fieldset class="no-padding">           
                                        <section>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label class="label">Date Receive</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-calendar"></i>
                                                            <!--<input type="text" name="dateProcess" placeholder="yyyy-mm-dd" onkeyup="dateClick(1)" required>-->
                                                            <input type="date" name="dateReceive" disabled value="<?=$date_received?>" required>

                                                        </label>
                                                    </div>  

                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label class="label">Date to be Process</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-calendar"></i>
                                                            <!--<input type="text" name="datePrepare" placeholder="yyyy-mm-dd" onkeyup="dateClick(2)" required>-->
                                                            <input type="date" name="dateProcess" value="<?=$date_process?>" >
                                                        </label>
                                                    </div>  

                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="form-group">
                                                        <label class="label">Date of Deadline</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-calendar"></i>
                                                            <!--<input type="text" name="datePrepare" placeholder="yyyy-mm-dd" onkeyup="dateClick(2)" required>-->
                                                            <input type="date" name="dateDealines" required value="<?=$date_deadline?>">
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
                                                            <input type="text" name="firstname" placeholder="" required value="<?=$requestor_First_name?>"> 
                                                            <b class="tooltip tooltip-bottom-right">First name of the payee</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="label">Middle Name</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="middlename" placeholder="" required value="<?=$requestor_Middle_name?>">
                                                            <b class="tooltip tooltip-bottom-right">Middle name of the payee.</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="label">Last Name</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="lastname" placeholder="" required value="<?=$requestor_Last_name?>">
                                                            <b class="tooltip tooltip-bottom-right">Last name of the payee.</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Contact</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-phone"></i>
                                                            <input type="text" name="contact" placeholder="" required value="<?=$requestor_contact?>">
                                                            <b class="tooltip tooltip-bottom-right">Contact</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Address</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-home"></i>
                                                            <input type="text" name="payee_address" placeholder="" required value="<?=$requestor_address?>">
                                                            <b class="tooltip tooltip-bottom-right">Address</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label">Affiliation</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-home"></i>
                                                            <input type="text" name="payee_affiliation" placeholder="" required value="<?=$requestor_affilation?>">
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
                                                        <input type="text" name="requestparty" placeholder="" value="<?=$request_party?>">
                                                    </label>
                                                </section>
                                                <section class="col-xs-12">
                                                    <label class="label">Description</label>
                                                    <label class="textarea">
                                                        <textarea rows="3" name="description" placeholder="Description" required ><?=$request_description?></textarea>
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
                                                                    <input type = "checkbox" name = "sub_nature_1" value="" onclick="subClick('1', 'Don AOF Excellence Award')" id = "sub-1" >
                                                                    <i id = "i-sub-1"></i> Don AOF Excellence Award
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_2" value=""  onclick="subClick('2', 'Balik Aral Program-Alternative Learning System(ALS)')" id = "sub-2">
                                                                    <i id = "i-sub-2"></i> Balik Aral Program-Alternative Learning System(ALS)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_3"  value="" onclick="subClick('3', 'Pilipino Banana Growers and Exporters Association (PBGEA Pre-qualifying exam)')" id = "sub-3">
                                                                    <i id = "i-sub-3"></i> Pilipino Banana Growers and Exporters Association (PBGEA Pre-qualifying Exam)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_4" value=""  onclick="subClick('4', 'Technical Skills Training')" id = "sub-4">
                                                                    <i id = "i-sub-4"></i> Technical Skills Training
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_5" value="" onclick="subClick('5', 'School Supplies Donation ')" id = "sub-5">
                                                                    <i id = "i-sub-5"></i>School Supplies Donation
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_6" value="" onclick="subClick('6', 'Sports Program ')" id = "sub-6">
                                                                    <i id = "i-sub-6"></i>Sports Program 
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_7" value="" onclick="subClick('7', 'Brigada Eskwela')" id = "sub-7">
                                                                    <i id = "i-sub-7"></i>Brigada Eskwela
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
                                                                    <input type = "checkbox" name = "sub_nature_8" value="" onclick="subClick('8', 'Garantisadong Pambata Activity')"  id = "sub-8">
                                                                    <i id = "i-sub-8"></i> Garantisadong Pambata Activity
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_9" value="" onclick="subClick('9', 'Prostate Cancer Screening')"  id = "sub-9">
                                                                    <i id = "i-sub-9"></i> Prostate Cancer Screening
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_10" value=""  onclick="subClick('10', 'Filariasis')" id = "sub-10">
                                                                    <i id = "i-sub-10"></i>Filariasis
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_11" value="" onclick="subClick('11', 'Sputum Testing')"  id = "sub-11">
                                                                    <i id = "i-sub-11"></i> Sputum Testing
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_12" value="" onclick="subClick('12', 'Goodbye Lamok')"  id = "sub-12">
                                                                    <i id = "i-sub-12"></i> Goodbye Lamok
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_13" value="" onclick="subClick('13', 'Medical Mission')"  id = "sub-13">
                                                                    <i id = "i-sub-13"></i> Medical Mission
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_14" value="" onclick="subClick('14', 'Operation Tuli')"  id = "sub-14">
                                                                    <i id = "i-sub-14"></i> Operation Tuli
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_15" value="" onclick="subClick('15', 'Feeding Program')"  id = "sub-15">
                                                                    <i id = "i-sub-15"></i> Feeding Program
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_16" value="" onclick="subClick('16', 'Dental Flouride')"  id = "sub-16">
                                                                    <i id = "i-sub-16"></i> Dental Flouride
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_17" value="" onclick="subClick('17', 'Urine Analysis')"  id = "sub-17">
                                                                    <i id = "i-sub-17"></i> Urine Analysis
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_18" value="" onclick="subClick('18', 'Mobile Blood Donation')"  id = "sub-18">
                                                                    <i id = "i-sub-18"></i> Mobile Blood Donation
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_19" value="" onclick="subClick('19', 'Health Advocacy and Information Drives on AIDS,STD,Tuberculosis and others')"  id = "sub-19">
                                                                    <i id = "i-sub-19"></i> Health Advocacy and Information Drives on AIDS,STD,Tuberculosis and Others
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
                                                                    <i id = "i-sub-20"></i> Donation/Solicitations
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_21" value="" onclick="subClick('21', 'Wake and Burial Assistance')"   id = "sub-21">
                                                                    <i id = "i-sub-21"></i> Wake and Burial Assistance
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_22" value="" onclick="subClick('22', 'Cash Assistance')"   id = "sub-22">
                                                                    <i id = "i-sub-22"></i> Cash Assistance
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
                                                                    <i id = "i-sub-23"></i> Peace Cooperation Program (TADECO, INC. and Anflo Banana Corporation)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_24" value="" onclick="subClick('24', 'Pamaskong Handog Program')"    id = "sub-24">
                                                                    <i id = "i-sub-24"></i>Pamaskong Handog Program
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_25" value="" onclick="subClick('25', 'Kabuhayang Agri Tayo(livelihoodProjects)')"    id = "sub-25">
                                                                    <i id = "i-sub-25"></i> Kabuhayang Agri Tayo(livelihoodProjects)
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_26" value="" onclick="subClick('26', 'Summer Job Program')"    id = "sub-26">
                                                                    <i id = "i-sub-26"></i> Summer Job Program
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
                                                                    <i id = "i-sub-27"></i> Tree Growing
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_28" value="" onclick="subClick('28', 'Coastal Care')"   id = "sub-28">
                                                                    <i id = "i-sub-28"></i> Coastal Care
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
                                                                    <i id = "i-sub-29"></i> Relief Operations
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_30" value="" onclick="subClick('30', 'Kasalan ng bayan')"    id = "sub-30">
                                                                    <i id = "i-sub-30"></i>Kasalan ng bayan
                                                                </label>
                                                                <label class = "checkbox">
                                                                    <input type = "checkbox" name = "sub_nature_31" value="" onclick="subClick('31', 'Responsible Parenthood Movement')"    id = "sub-31">
                                                                    <i id = "i-sub-31"></i> Responsible Parenthood Movement
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
                                            <?php
                                            $cash_value="";
                                            $cash_desciption="";
                                            if(count($request_amount_cash)>0){
                                                $colaps="panel-collapse collapse in";
                                                $expanded="true";
                                                foreach ($request_amount_cash as $keys => $cashes) {
                                                    $cash_value=$cashes->request_cash_amount;
                                                    $cash_desciption=$cashes->request_cash_description;
                                                }
                                            }else{
                                                $colaps="panel-collapse collapse";
                                                $expanded="false";
                                            }
                                             ?>
                                            <div id = "cash" class = '<?=$colaps?>'  aria-expanded = '<?=$expanded?>'>
                                                <p> Amount of Cash</p>
                                                <div class="col-md-6">

                                                    <label class = "input">
                                                        <i class = "icon-append fa fa-rub"></i>
                                                        <input type = "text" id='cashfield1' name = "amountofcash" placeholder = "Amount of cash" value="<?=$cash_value?>" onkeyup = "moneyCash()">
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="textarea">
                                                        <textarea rows="1" name="cash_disc" placeholder="Cash Description" ><?=$cash_desciption?></textarea>
                                                    </label>
                                                </div>

                                            </div>

                                            <?php
                                            $inkind_value="";
                                            $inkind_desciption="";
                                            if(count($request_items_inkind)>0){
                                                $colaps="panel-collapse collapse in";
                                                $expanded="true";
                                                
                                            }else{
                                                $colaps="panel-collapse collapse";
                                                $expanded="false";
                                            }
                                             ?>
                                            <div id = "inkind" class = '<?=$colaps?>'  aria-expanded = '<?=$expanded?>'>
                                                <div class = "row">
                                                    <p style="margin-top: 59px;margin-left: 13px;">Item Requested</p>
                                                    <section class = "col-xs-5 pull-right">
                                                        Quantity of item request
                                                        <label class = "input">
                                                            <input id = "numitem" type = "text" name = "quantityofitemrequest" placeholder = "Quantity" onkeyup = "quantityRe()" value="<?=count($request_items_inkind)?>">
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
                                                        <?php
                                                            foreach ($request_items_inkind as $keys => $inkinds) {
                                                                ?>
                                                                <section class="row form-group">
                                                                    <div class="col-md-3">
                                                                        <label for="file" class="input">
                                                                            <input type="text" name="itemname1" placeholder="Item Name 1" value="<?=$inkinds->request_item_name?>" required>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="file" class="input">
                                                                            <input type="text" name="itemquan1" placeholder="Quantity of the item 1" value="<?=$inkinds->request_item_quantity?>" required>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3"> 
                                                                        <label class="textarea"> 
                                                                            <textarea rows="1" name="description1" placeholder="Description 1" required><?=$inkinds->request_item_description?></textarea> 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="file" class="input">
                                                                            <input type="text" name="price1" placeholder="Price of the item 1" value="<?=$inkinds->request_item_price?>" required>
                                                                        </label>
                                                                    </div>
                                                                </section>
                                                                <?php
                                                            }
                                                         ?>
                                                    </div>
                                                </section>
                                            </div>

                                        </section>
                                       
                                    </fieldset>
                                     <section>
                                             
                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <hr>
                                                    <p class="text-capitalize text-info bold ">Scanned Documents
                                                    </p>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class = "row">
                                                    <div class = "col-md-2"></div>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-12">

                                                    <a  class="btn btn-b-dark   pull-right" style="margin-bottom:10px;" title="Print MRIS" ><i class="fa fa-print "></i></a>
                                                    <a data-toggle="modal" href="#recomendation_modal" class="btn btn-b-dark   pull-right" style="margin-bottom:10px;margin-right:10px;" title="Print Recomendation" ><i class="fa fa-print"></i></a>
                                                     <a data-toggle="modal" href="#sms_modal" class="btn btn-b-base   pull-right"  style="margin-bottom:10px;margin-right:10px;" title="Send SMS" ><i class="fa fa-envelope"></i></a>
                                                </div>
                                            </div>
                                            <?php 
                                            if($viewer=='deside'){
                                            ?>
                                            <div class = "row">
                                                <div class="col-md-12">
                                                     <button type="submit" class="btn btn-base btn-icon fa-thumbs-up pull-right" onclick="approved_now()" ><span>Approve Now</span></button>
                                                    <button type="submit" class="btn btn-danger btn-icon fa-thumbs-down pull-right" onclick="disapproved_now()"  style="margin-right:10px;"><span>Disapprove</span></button>
                                                </div>
                                            </div>
                                            <?php }else{
                                                ?>
                                            <div class = "row">
                                                <div class="col-md-12">
                                                     <button type="submit" class="btn btn-base btn-icon fa-pencil pull-right" onclick="update_now()" ><span>Update Now</span></button>
                                                </div>
                                            </div>

                                                <?php
                                            } 
                                             ?>

                                        </section>
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
                    function approved_now() {
                        if(confirm('Are you sure you want to approve this request?')==true){ 
                            var form=document.getElementById('RequestForm2');
                            form.removeAttribute('action');
                            var att=document.createAttribute('action');
                            att.value = "<?= site_url('admin/approve_request_now/') ?>" + "/" + quantity + kinds + "/" + nature+"/<?=$request_id?>/<?=$requestor_id?>/<?=$request_affiliation_id?>";
                            form.setAttributeNode(att);
                      }
                    }function update_now() {
                        if(confirm('Are you sure you want to update this request?')==true){ 
                            var form=document.getElementById('RequestForm2');
                            form.removeAttribute('action');
                            var att=document.createAttribute('action');
                            att.value = "<?= site_url('home/update_request_now/') ?>" + "/" + quantity + kinds + "/" + nature+"/<?=$request_id?>/<?=$requestor_id?>/<?=$request_affiliation_id?>";
                            form.setAttributeNode(att);
                      }
                    }
                    function disapproved_now () {
                        if(confirm('Are you sure you want to disapprove this request?')==true){ 
                            var form=document.getElementById('RequestForm2');
                            form.removeAttribute('action');
                            var att=document.createAttribute('action');
                            att.value="<?=base_url('admin/disapprove_request_now/'.$request_id.'/'.$requestor_id)?>";
                            form.setAttributeNode(att);
                      }
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
                        "<input type='text' name='itemname" + i + "' placeholder='Item Name " + i + "' required>" +
                        "</label>" +
                        "</div>" +
                        "<div class='col-md-3'>" +
                        "<label for='file' class='input' >" +
                        "<input type='text' name='itemquan" + i + "' placeholder='Quantity of the item " + i + "' required>" +
                        "</label>" +
                        "</div>" +
                        "<div class='col-md-3'>" +
                        " <label class = 'textarea' >" +
                        " <textarea rows ='1' name ='description" + i + "' placeholder='Description " + i + "' required> </textarea>" +
                        " </label>" +
                        "</div>" +
                        "<div class='col-md-3'>" +
                        "<label for='file' class='input' >" +
                        "<input type='text' name='price" + i + "' placeholder='Price of the item " + i + "' required>" +
                        "</label>" +
                        "</div>" +
                        "</section>";
            }

            document.getElementById('items').innerHTML = html;
            document.getElementById("RequestForm2").removeAttribute('action');
            var att = document.createAttribute('action');
            att.value = "<?= site_url("staff/do_addRequest") ?>" + "/" + ctr;
            document.getElementById("RequestForm2").setAttributeNode(att);
            quantity = ctr;
        }
    }
    var quantity = <?=count($request_items_inkind)?>;
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
                document.getElementById("socials").setAttributeNode(att);
            } else {
                nature = "csr6";
            }
        }
    }
    function moneyCash() {

        var val = document.getElementById('cashfield1').value;
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
        document.getElementById('cashfield1').value="Php "+val;
    }
    function dateClick(element) {
        var val = document.getElementById('RequestForm2').elements[element].value;
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
            document.getElementById('RequestForm2').elements[element].value = val;
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
        if(val!=="off" && val!==value){
            document.getElementById("sub-" + id).value = value;
        }else{
            if (val === "off" || val + "" === "") {
                document.getElementById("sub-" + id).value = value;
            } else {
                document.getElementById("sub-" + id).value = "off";
            }
        }
    }
    function addnow() {


        document.getElementById("RequestForm2").removeAttribute('action');
        if (kinds !== "/wala" && nature !== "/wala") {
            alert("kinds:"+kinds+"\nnature:"+nature);
            var att = document.createAttribute('action');
            att.value = "<?= site_url('home/do_update_request/') ?>" + "/" + quantity + kinds + "/" + nature+"/<?=$request_id?>/<?=$requestor_id?>/<?=$request_affiliation_id?>";
            var h1=document.getElementById("RequestForm2");
            h1.setAttributeNode(att);
        }
    }

    
var program_code="<?=$program_code?>";
<?php 
    ?>
    
    if(program_code==="csr1"){
        checkboxClick('charitableBox', 'charitableText', '');
        var h1_doc=document.getElementById('charitables');
        h1_doc.removeAttribute('class');
        var att=document.createAttribute('class');
        att.value="panel-collapse collapse in";
        h1_doc.setAttributeNode(att);
    }if(program_code==="csr2"){
        checkboxClick('environmentalBox', 'environmentalText', '');
        var h1_doc=document.getElementById('environmentals');
        h1_doc.removeAttribute('class');
        var att=document.createAttribute('class');
        att.value="panel-collapse collapse in";
        h1_doc.setAttributeNode(att);
    }if(program_code==="csr3"){
        checkboxClick('sportsBox', 'sportsText', '');
        var h1_doc=document.getElementById('sports');
        h1_doc.removeAttribute('class');
        var att=document.createAttribute('class');
        att.value="panel-collapse collapse in";
        h1_doc.setAttributeNode(att);
    } if(program_code==="csr4"){
        checkboxClick('medicalBox', 'medicalText', '');
        var h1_doc=document.getElementById('medicals');
        h1_doc.removeAttribute('class');
        var att=document.createAttribute('class');
        att.value="panel-collapse collapse in";
        h1_doc.setAttributeNode(att);
    } if(program_code==="csr5"){
        checkboxClick('educationalBox', 'educationalText', '');
        var h1_doc=document.getElementById('educationals');
        h1_doc.removeAttribute('class');
        var att=document.createAttribute('class');
        att.value="panel-collapse collapse in";
        h1_doc.setAttributeNode(att);
       
    } if(program_code==="csr6"){
        checkboxClick('socialBox', 'socialText', '');
        var h1_doc=document.getElementById('socials');
        h1_doc.removeAttribute('class');
        var att=document.createAttribute('class');
        att.value="panel-collapse collapse in";
        h1_doc.setAttributeNode(att);
    }
    var counter_cash=<?=count($request_amount_cash)?>;
     if(counter_cash>0){
        checkboxClick('cashBox', 'cashText', 'fa-2x');
        kinds="/cash";
    }
    var counter_inkind=<?=count($request_items_inkind)?>;
    if(counter_inkind>0){
        checkboxClick('inkindBox', 'inkindText', 'fa-2x');
        kinds="/inkind";
    }
    if(counter_inkind>0 && counter_cash>0){
        kinds="/cash-inkind";
    }
    nature=program_code;
     <?php
        foreach ($reference as $key => $value) {
            $reference_id=$value->reference_id;
            $reference_name=$value->reference_name;
            ?>
            document.getElementById('sub-<?=$reference_id?>').checked=true;

            <?php
        }

        ?>
<?php

    for ($i=1; $i < 32; $i++) { 
        ?>
        document.getElementById('sub-<?=$i?>').value="off";
        <?php
    }
     ?>
     <?php
        foreach ($reference as $key => $value) {
            $reference_id=$value->reference_id;
            ?>
            document.getElementById('sub-<?=$reference_id?>').value="gfg";
            
            <?php
        }

        ?>

    <?php 
        if($this->session->flashdata('promp')=="approved"){
            echo "request_prompt_approved();";
        }else if($this->session->flashdata('promp')=="disapproved"){
            echo "request_prompt_disapproved();";
        }else if($this->session->flashdata('promp')=="updated"){
            echo "request_prompt_updated();";
        }else if($this->session->flashdata('promp')=="Send"){
            echo "request_prompt_send();";
        }else if($this->session->flashdata('promp')=="Failed"){
            echo "request_prompt_failed();";
        }
    ?>
    function request_prompt_send() {
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Send/'.$request_id.'/Send/fa-check/success/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_delete<?=$request_id?>');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-success fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }

    function request_prompt_failed() {
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Failed/'.$request_id.'/Failed/fa-exclamation-triangle/danger/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_delete<?=$request_id?>');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-danger fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }
    function request_prompt_updated() {
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Updated/'.$request_id.'/updated/fa-pencil/success/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_delete<?=$request_id?>');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-success fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }
    function request_prompt_disapproved() {
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Disapproved/'.$request_id.'/disapproved/fa-thumbs-down/danger/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_delete<?=$request_id?>');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-success fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }
    function request_prompt_approved() {
                                    
                                    $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/set_prompts/Approved/'.$request_id.'/approve/fa-thumbs-up/success/') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('promt_delete<?=$request_id?>');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-success fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                        },3000);
                                     } 
                                    });
                                    
                                }
</script>

<?php $this->load->view('headfoot/footer_in'); ?>