<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?=date('Y');?> <a href="https://vcaretechs.in/">VcareTechs</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=admin_assets_url()?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=admin_assets_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=admin_assets_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=admin_assets_url()?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=admin_assets_url()?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=admin_assets_url()?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=admin_assets_url()?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=admin_assets_url()?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=admin_assets_url()?>plugins/moment/moment.min.js"></script>
<script src="<?=admin_assets_url()?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=admin_assets_url()?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=admin_assets_url()?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=admin_assets_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=admin_assets_url()?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=admin_assets_url()?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=admin_assets_url()?>dist/js/demo.js"></script>
<script src="<?=admin_assets_url()?>sweetalert.min.js"></script>

<script>        
    function alertMeggase(textH,textMessage,textIcon,action)
    {
        swal({
          title: textH,
          text: textMessage,
          icon: textIcon,
        }).then((willDelete) => {
            if(willDelete && action=='yes')
            {
                location.reload();
            }
        });
    }

    function waitForProcess()
    {
        swal("Please wait while processing..", {
            title:'Please Wait!.',
            buttons:false,
            closeOnClickOutside:false,
        });
    }

    function IsEmail(email){
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
            return false;
        }else{
            return true;
        }
    }
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
