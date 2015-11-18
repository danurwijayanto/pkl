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
                  <strong><i class="fa fa-check fa-2x"></i> Artikel Sudah Terpublish  </strong> 
                </div>
            <?php
              }else{
            ?>
              <br>
              <div class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle fa-2x"></i> Artikel Belum Terpublish  </strong> 
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
              echo '<form name="tambahartikel" action="'.base_url().'operation/rubah_artikel" role="form" method="post" class="form-horizontal" onsubmit="return validasi(this)">';
              echo '<input type="hidden" name="id" value="'.$artikel['id'].'" />';
            }else{
              echo '<form name="tambahartikel" action="'.base_url().'operation/simpan_artikel" role="form" method="post" class="form-horizontal" onsubmit="return validasi(this)">';
            }?>
              <div class="form-group">
                <label class="col-sm-1 control-label" >Judul</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="judul" value="<?php if (isset($artikel)){echo $artikel['judul'];}else{}?>" placeholder="Judul" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Kategori</label>
                <div class="col-sm-7">
                  <select name='kategori' id='kategori'  class="form-control required">
                    <?php if ((isset($artikel)) OR ($session['role'] != 'Admin')){}else{echo '<option value="0">-- Pilih Kategori --</option>'; }?>
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
                <label class="col-sm-1 control-label">Bahasa</label>
                <div class="col-sm-7">
                  <select name='bahasa' id='bahasa'  class="form-control required">
                    <?php if (isset($artikel)){}else{echo '<option value=0>-- Pilih Kategori Bahasa --</option>'; } ?>
                    <?php 
                        foreach($bahasa as $bahasa){  ?>      
                        <option value="<?php echo $bahasa['id_bahasa']; ?>" <?php if (isset($artikel)){if($artikel['bahasa']==$bahasa['id_bahasa']){echo 'selected="selected"';}}else{}?>><?php echo $bahasa['nama_bahasa']; ?></option>
                     <?php   
                      }
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
                  <input type="submit" value="<?php if (isset($simpan_edit) AND ($simpan_edit==TRUE)){echo 'Simpan';}else{echo 'Tambah ke Draft';}?>" class="btn btn-primary">
                  <!--Jika Melakukan Edit Artikel-->
                  <?php if (isset($artikel)){
                      if ($artikel['status']==1){
                  ?>
                    <a href="<?php echo base_url();?>operation/draft?id=<?php echo $artikel['id'];?>" class="btn btn-warning">Masukkan Draft</a>
                    <a href="<?php echo base_url();?>admin/artikel" class="btn btn-danger pull-right">Kembali</a>
                  <?php
                      }else{
                  ?>
                    <a href="<?php echo base_url();?>operation/publish?id=<?php echo $artikel['id'];?>" class="btn btn-success <?php if ($session['role']!='Admin')echo 'disabled';?>">Publish</a>
                    <a href="<?php echo base_url();?>admin/draft" class="btn btn-danger pull-right">Kembali</a>
                  <?php      
                      }
                    }
                  ?>
                  <!-- End Jika Melakukan Edit Artikel-->
                </div>
              </div>
            </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
      <script>

          function validasi(form){
            var kategori=document.tambahartikel.kategori.value;
            if (kategori=="0" || kategori==0){
              alert("Kategori harus dipilih");
              return false;
            } 
            return true;

      </script>

   <!--   <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>operation/simpan_kategori" >-->
                    
