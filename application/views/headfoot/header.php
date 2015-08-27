<!DOCTYPE html><?php
$theme=$this->Query->get_theme();
foreach ($theme as $key => $value) {
    $path=$value->path;
    $c_num=$value->color;
}
 ?>
<html>  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>CSR Fund Monitoring</title>

    <!-- Essential styles -->
    <link rel="stylesheet" href="<?=base_url('assets/sou/assets/bootstrap/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/sou/font-awesome/css/font-awesome.min.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?=base_url('assets/sou/assets/fancybox/jquery.fancybox.css?v=2.1.5')?>" media="screen"> 
     
    <!-- Boomerang styles -->
        <link id="wpStylesheet" type="text/css" href="<?php echo base_url('assets/sou/css/'.$path.'.css')?>" rel="stylesheet" media="screen">
        

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/sou/images/logo.png')?>" rel="icon" type="image/png">

    <!-- Assets -->
    <link rel="stylesheet" href="<?=base_url('assets/sou/assets/owl-carousel/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/sou/assets/owl-carousel/owl.theme.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/sou/assets/sky-forms/css/sky-forms.css')?>">    
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/sky-forms/css/sky-forms-ie8.css">
    <![endif]-->

    <!-- Required JS -->
    <script src="<?=base_url('assets/sou/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/sou/js/jquery-ui.min.js')?>"></script>

    <!-- Page scripts -->
    <link rel="stylesheet" href="<?=base_url('assets/sou/assets/layerslider/css/layerslider.css')?>" type="text/css">


</head>