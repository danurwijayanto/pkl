 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Artikel
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Tambah Artikel</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
            <?php echo $this->ckeditor->editor("Post","default textarea value"); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

   