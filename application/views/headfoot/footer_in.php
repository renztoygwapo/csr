 
    </div>
    <div id="float_promp">

    </div>
    <div id="float_promp1">

    </div>
<!--
 Essentials -->

<script src="<?=base_url('assets/sou/js/modernizr.custom.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/sou/js/jquery.mousewheel-3.0.6.pack.js')?>"></script>
<script src="<?=base_url('assets/sou/js/jquery.easing.js')?>"></script>
<script src="<?=base_url('assets/sou/js/jquery.metadata.js')?>"></script>
<script src="<?=base_url('assets/sou/js/jquery.hoverup.js')?>"></script>
<script src="<?=base_url('assets/sou/js/jquery.hoverdir.js')?>"></script>
<script src="<?=base_url('assets/sou/js/jquery.stellar.js')?>"></script>

<!-- Boomerang mobile nav - Optional  -->
<script src="<?=base_url('assets/sou/assets/responsive-mobile-nav/js/jquery.dlmenu.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js')?>"></script>

<!-- Forms -->
<script src="<?=base_url('assets/sou/assets/ui-kit/js/jquery.powerful-placeholder.min.j')?>s"></script> 
<script src="<?=base_url('assets/sou/assets/ui-kit/js/cusel.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/sky-forms/js/jquery.form.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/sky-forms/js/jquery.validate.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/sky-forms/js/jquery.maskedinput.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/sky-forms/js/jquery.modal.js')?>"></script>

<!-- Assets -->
<script src="<?=base_url('assets/sou/assets/hover-dropdown/bootstrap-hover-dropdown.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/page-scroller/jquery.ui.totop.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/mixitup/jquery.mixitup.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/mixitup/jquery.mixitup.init.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/fancybox/jquery.fancybox.pack.js?v=2.1.5')?>"></script>
<script src="<?=base_url('assets/sou/assets/waypoints/waypoints.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/milestone-counter/jquery.countTo.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/easy-pie-chart/js/jquery.easypiechart.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/social-buttons/js/rrssb.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/nouislider/js/jquery.nouislider.min.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/owl-carousel/owl.carousel.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/bootstrap/js/tooltip.js')?>"></script>
<script src="<?=base_url('assets/sou/assets/bootstrap/js/popover.js')?>"></script>

<!-- Sripts for individual pages, depending on what plug-ins are used -->
<script src="<?=base_url('assets/sou/assets/layerslider/js/greensock.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/sou/assets/layerslider/js/layerslider.transitions.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/sou/assets/layerslider/js/layerslider.kreaturamedia.jquery.js')?>" type="text/javascript"></script>
<!-- Initializing the slider -->
<script>
    jQuery("#layerslider").layerSlider({
        pauseOnHover: true,
        autoPlayVideos: false,
        skinsPath: 'assets/layerslider/skins/',
        responsive: false,
        responsiveUnder: 1280,
        layersContainer: 1280,
        skin: 'borderlessdark3d',
        hoverPrevNext: true,
    });
</script>

<!-- Boomerang App JS -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Temp -- You can remove this once you started to work on your project -->
<script src="<?=base_url('assets/sou/js/wp.switcher.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/sou/js/wp.ga.js')?>"></script>

   
</script>
<?php if(($this->session->userdata('type'))=="admin"){
  $this->load->view('headfoot/admin_footer');
}
?>
<script src="<?php echo base_url('assets/sou/js/wp.app.js')?>"></script>

<script src="<?php echo base_url('assets/sou/js/jquery.cookie.js')?>"></script>

</body>

</html> 