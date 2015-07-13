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
            <form action="<?php echo base_url();?>operation/simpan_artikel">
              <textarea id="ckeditor" name="ckeditor" class="ckeditor">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
              <br>
              <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>