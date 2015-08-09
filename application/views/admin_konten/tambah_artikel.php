 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title;?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Tambah Artikel</li>
          </ol>
          <?php 
            if (isset($artikel)){
              if ($artikel['status']==1){?>
                <br>
                <div class="alert alert-success">
                  <strong><i class="fa fa-check fa-2x"></i> Artikel Sudah Terpublish <a style="text-decoration: none" href="<?php echo base_url();?>admin/artikel" class="btn btn-warning pull-right">Draft</a> </strong> 
                </div>
            <?php
              }else{
            ?>
              <br>
              <div class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle fa-2x"></i> Artikel Belum Terpublish <a style="text-decoration: none" href="<?php echo base_url();?>admin/artikel" class="btn btn-success pull-right">Publish</a> </strong> 
              </div>  
            <?php 
              }
            }
            ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php 
            if(isset($simpan_edit) AND ($simpan_edit==TRUE)){
              echo '<form action="'.base_url().'operation/rubah_artikel" role="form" method="post" class="form-horizontal">';
              echo '<input type="hidden" name="id" value="'.$artikel['id'].'" />';
            }else{
              echo '<form action="'.base_url().'operation/simpan_artikel" role="form" method="post" class="form-horizontal">';
            }?>
              <div class="form-group">
                <label class="col-sm-1 control-label" >Judul</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="judul" value="<?php if (isset($artikel)){echo $artikel['judul'];}else{}?>" placeholder="Judul">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Kategori</label>
                <div class="col-sm-7">
                  <select name='kategori' id='kategori'  class="form-control">
                    <?php if ((isset($artikel)) OR ($session['role'] != 'Admin')){}else{echo '<option value=0>-- Pilih Kategori --</option>'; }?>
                    <?php
                        if ($session['role'] != 'Admin'){?>
                          <option value="<?php echo $session['id_kat']; ?>" selected="selected"><?php echo $session['role']; ?></option>
                    <?php    }else{ 
                        foreach($kategori as $kategori)
                        {   ?>      
                            <option value="<?php echo $kategori['id']; ?>" <?php if (isset($artikel)){if($artikel['nama']==$kategori['nama']){echo 'selected="selected"';}}else{}?>><?php echo $kategori['nama']; ?></option>
                     <?php   
                      }}
                      ?>
                </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                  <textarea id="ckeditor" name="ckeditor" class="ckeditor"><?php if (isset($artikel)){echo $artikel['text'];}else{}?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                   <a href="<?php echo base_url();?>admin/artikel" class="btn btn-danger">Kembali</a>
                </div>
              </div>
            </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>


   <!--   <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>operation/simpan_kategori" >-->
                    
