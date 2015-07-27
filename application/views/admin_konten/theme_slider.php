 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Slider One
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Tampilan</a></li>
            <li class="active">Tampilan Slider</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="myTable" class="table table-bordered table-hover table-striped" style="width:60%">
           <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Gambar</th>
              <th scope="col">Action</th>
            </tr>
            <?php
              if ($slider_one != NULL){
                
                $i = 1; 
                foreach ($slider_one as $sliderone) { ;?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $sliderone['keterangan'];?></td>
                  <td><img alt="Thumbnail image" src="<?php echo base_url();?>upload/Gambar/images/<?php echo $sliderone['gambar'];?>" class="img-thumbnail" width="150" height="200"></td>
                  <td>
                    <a href="<?php echo base_url();?>operation/del_slider?id=<?php echo $sliderone['id']; ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                $i = $i+1; 
                }
              } else{
                echo "<tr><td colspan='4'>Tidak Ada Data</td></tr>";
              }
            ?>
          </thead>
          <tbody>

          </tbody>
        </table>
        	<a class="btn btn-default edit_kat" data-toggle="modal" data-target="#edit" id="<?php //echo //$kategori['id'];?>">
          	<i class="fa fa-trash-o fa-lg"></i> Tambah</a>
	        <!-- Modal -->
	        <div id="edit" class="modal fade" role="dialog">
	          <div class="modal-dialog">
	            <!-- Modal content-->
	            <div class="modal-content">
		            <div class="modal-header">
		               <button type="button" class="close" data-dismiss="modal">&times;</button>
		               <h4 class="modal-title">Upload Gambar</h4>
		            </div>
		            <div class="modal-body">
		            	<form action='<?php echo base_url();?>operation/do_upload' class="form-horizontal" enctype="multipart/form-data" method='post'>
		                 	<div class="form-group">
		                    	<div class="col-sm-10">		    
                            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required><br>                  	
                           	<input type="hidden" name="type" value="0">
                            <input type="file" name="userfile" size='20' id="upload" required onchange="previewImage(this,[256],1);">
                            <div class="imagePreview"></div>		                
		                    	</div>
		                  	</div>
		                  	<div class="form-group">        
		                    	<div class="col-sm-10">
		                     		 <input type="submit" value="Upload" class="btn btn-primary">
		                    	</div>
		                  	</div>
		                </form>
		            </div>
	            </div>
	          </div>
       		</div>
        </section>        
        <!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
      //Datatables
