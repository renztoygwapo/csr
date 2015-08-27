<?php
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
    $anual_budget=$this->Query->get_annual_budget();
 ?>
<div class="section-title-wr ">
                        <h4 class="section-title pull-right"><span>Monthly Expenditures</span></h4>
                    </div>
                    <label class="">January</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_01)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_01/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_01/($anual_budget/12))*100?>%">

                        </div>
                    </div>
                    <label class="">February</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_02)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_02/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_02/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">March</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_03)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_03/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_03/($anual_budget/12))*100?>%">

                        </div>
                    </div>
                    <label class="">April</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_04)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_04/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_04/($anual_budget/12))*100?>%">     
                        </div>
                    </div>
                    <label class="">May</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_05)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_05/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_05/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">June</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_06)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_06/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_06/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">July</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_07)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=($desbursment_07/($anual_budget/12))*100?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_07/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">August</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_08)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_08/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_08/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">September</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_09)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_09/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width:<?=($desbursment_09/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">October</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_10)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_10/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_10/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">November</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_11)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_11/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_11/($anual_budget/12))*100?>%">
                        </div>
                    </div>
                    <label class="">December</label><i class="c-base pull-right">P <?=visualize_moneyCash($desbursment_12)?>&nbsp;</i>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-base" role="progressbar" aria-valuenow="<?=$desbursment_12/($anual_budget/12)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($desbursment_12/($anual_budget/12))*100?>%">
                        </div>
                    </div>
