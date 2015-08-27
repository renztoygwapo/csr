<?php $this->load->view('staff/staffnavbar'); ?>
<!-- Optional header components (ex: slider) -->

<!-- MAIN CONTENT -->

<?php 
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
    $date=date('Y');
    $desbursment=$this->Query->get_total_desbursment($date);
    $anual_budget=$this->Query->get_annual_budget();
    $desbursment_01=$this->Query->get_total_desbursment(date('Y')."-01");
    $desbursment_02=$this->Query->get_total_desbursment(date('Y')."-02");
    $desbursment_03=$this->Query->get_total_desbursment(date('Y')."-03");
    $desbursment_04=$this->Query->get_total_desbursment(date('Y')."-04");
    $desbursment_05=$this->Query->get_total_desbursment(date('Y')."-05");
    $desbursment_06=$this->Query->get_total_desbursment(date('Y')."-06");
    $desbursment_07=$this->Query->get_total_desbursment(date('Y')."-07");
    $desbursment_08=$this->Query->get_total_desbursment(date('Y')."-08");
    $desbursment_09=$this->Query->get_total_desbursment(date('Y')."-09");
    $desbursment_10=$this->Query->get_total_desbursment(date('Y')."-10");
    $desbursment_11=$this->Query->get_total_desbursment(date('Y')."-11");
    $desbursment_12=$this->Query->get_total_desbursment(date('Y')."-12");
?>
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
                        <div class="col-md-6">
                            <div class="milestone-counter">
                                <div class="c-base"style='font-size:55px;font-family:"Roboto",sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center'>
                                    P <?=visualize_moneyCash($desbursment)?>
                                </div>
                                <h4 class="milestone-info c-base">Disbursement</h4>
                            </div>
                        </div>
                        <div class="col-md-6" style="border-left: #258233 1px solid;">
                            <div class="milestone-counter">
                                <div class="c-base text-center"style='font-size:55px;font-family:"Roboto",sans-serif;margin-bottom:20px;font-weight:700;text-transform:uppercase;text-align:center'>
                                    P <?=visualize_moneyCash($anual_budget-$desbursment)?>
                                </div>
                                <h4 class="milestone-info c-base">Remaining Budget</h4>
                            </div>
                        </div>
                    </div>
            <section class="slice light-gray bb">
                <div class="wp-section pricing-plans pricing-plans-2">
                    <div class="section-title-wr">
                        <h3 class="section-title center">
                            <span>Monthly Monitoring</span>
                            <small>From January to December 2015</small>
                        </h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="01"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="01"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">January</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_01)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="02"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="02"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">February</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_02)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="03"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="03"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>
                                    <div class="plan-header base">
                                        <h2 class="plan-title">March</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_03)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="04"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="04"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">April</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_04)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                       
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="05"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="05"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">May</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_05)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="06"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="06"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">June</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_06)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="07"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="07"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">July</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_07)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="08"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="08"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">August</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_08)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="09"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="09"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">September</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_09)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="10"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="10"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">October</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_10)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="11"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="11"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">November</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_11)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                        
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="wp-block <?php if((date('m')."")=="12"){ echo "popular";}else{ echo "default";} ?>">
                                    <?php if((date('m')."")=="12"){ ?><a href="#" class="badge-corner">
                                        <span><i class="fa fa-check"></i></span>
                                    </a>
                                    <?php } ?>    <div class="plan-header base">
                                        <h2 class="plan-title">December</h2>
                                    </div>
                                    <div class="plan-price">
                                        <h3 class="price-tag">
                                            <span>P</span><?=visualize_moneyCash($desbursment_12)?>
                                        </h3>
                                        <span class="price-interval">Expenditures for the Month</span>
                                    </div>
                                    <ul>
                                    </ul>          
                                    <p class="plan-select-block">
                                       
                                    </p>
                                </div>

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