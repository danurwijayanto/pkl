     <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      <br>
      <?php
      function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
} 

echo url();?>
      </footer>
    </div><!-- ./wrapper -->

    <!-- Load DataTables dan Bootstrap dari CDN -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/datatables/js/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/css/dataTables.bootstrap.css">
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/adminlte/js/app.min.js" type="text/javascript"></script>
    
  </body>
</html>