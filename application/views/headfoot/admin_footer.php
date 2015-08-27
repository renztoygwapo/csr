<script type="text/javascript">
  <?php 
    if(count($this->session->userdata('admin_need_promp'))>0){
      ?>
      get_promp_admin();
      <?php
    }
  ?>
  

function get_promp_admin () {
     $.ajax({
                                      type: 'POST',
                                      url: "<?= site_url('admin/get_promp_admin') ?>",
                                      data: {
                                      },
                                      success: function(data) {
                                        var h1=document.getElementById('float_promp1');
                                        h1.innerHTML= data;
                                        setTimeout(function(){
                                            var pawalaon=document.getElementById('admin_promp');
                                            pawalaon.removeAttribute('class');
                                            var att=document.createAttribute('class');
                                            att.value="alert alert-danger fade in figure fadeOut  animated col-md-3 pull-right ";
                                            pawalaon.setAttributeNode(att);
                                            setTimeout(function(){
                                                get_promp_admin();
                                            
                                            },6000);
                                        },6000);
                                     } 
                                    });
}
</script>
