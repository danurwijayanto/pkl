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
            <form action="<?php echo base_url();?>operation/simpan_artikel" role="form" method="post" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-1 control-label">Judul</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" name="judul"  placeholder="Judul">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Kategori</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" name="kategori"  placeholder="Kategori">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                  <textarea id="ckeditor" name="ckeditor" class="ckeditor">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                  <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
              </div>
            </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>


      <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>operation/simpan_kategori" >
                    
