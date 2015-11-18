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
                    <a class="btn btn-primary edit_slider1" data-toggle="modal" data-target="#edit_slider1" id="<?php echo $sliderone['id'];?>"> Edit</a>
                    <!-- Modal -->
                    <div id="edit_slider1" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Slider</h4>
                          </div>
                          <div class="modal-body">
                             <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="keterangan" id="keterangan_edit" placeholder="Keterangan" required><br>                    
                                  <input type="hidden" name="type" value="0">
                                  <input type="text" style="cursor:pointer" class="form-control" name="file_gambar" id="file_gambar_edit" placeholder="Klick Untuk Upload" name="file_gambar"  placeholder="Klik Untuk Pilih File Gambar" value="" onclick="openKCFinder(this);previewImage(this,[256],1);" onchange="" readonly="readonly" required></input>
                                </div>
                              </div>
                              <div class="form-group">        
                                <div class="col-sm-10">
                                 <a class="btn btn-primary simpan_edit_slider1" id="">Ganti</a>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>
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
          	<i class="fa fa-plus fa-lg"></i> Tambah</a>
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
                            <input type="text" id="keterangan" class="form-control" name="keterangan" placeholder="Keterangan" required><br>                  	
                           	<input type="hidden" name="type" value="0">
                            <input type="text" style="cursor:pointer" class="form-control" name="file_gambar" placeholder="Klick Untuk Upload" id="file_gambar"  placeholder="Klik Untuk Pilih File Gambar" value="" onclick="openKCFinder(this);previewImage(this,[256],1);" onchange="" readonly="readonly" required></input>
                            <!--<input type="file" name="userfile" size='20' id="upload" required onchange="previewImage(this,[256],1);">
                            <div class="imagePreview"></div>-->		                
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

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Slider Two
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="myTable" class="table table-bordered table-hover table-striped" style="width:80%">
           <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Gambar</th>
              <th scope="col">Link</th>
              <th scope="col">Action</th>
            </tr>
            <?php
              if ($slider_two != NULL){
                
                $i = 1; 
                foreach ($slider_two as $slidertwo) { ;?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><img alt="Thumbnail image" src="<?php echo base_url();?>upload/Gambar/images/<?php echo $slidertwo['gambar'];?>" class="img-thumbnail" width="150" height="200"></td>
                  <td><?php echo $slidertwo['link']?></td>
                  <td>
                    <a href="<?php echo base_url();?>operation/del_slider?id=<?php echo $slidertwo['id']; ?>" class="btn btn-danger">Delete</a>
                    <a class="btn btn-primary edit_slider2" data-toggle="modal" data-target="#edit_slider2" id="<?php echo $slidertwo['id'];?>"> Edit</a>
                    <!-- Modal -->
                    <div id="edit_slider2" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Slider</h4>
                          </div>
                          <div class="modal-body">
                             <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="url" class="form-control" name="link" id="link_edit" required ><br>                    
                                  <input type="hidden" name="type" value="0">
                                  <input type="text" style="cursor:pointer" class="form-control" name="file_gambar" id="file_gambar_edit2" placeholder="Klick Untuk Upload" onclick="openKCFinder(this);" readonly="readonly" required></input>
                                </div>
                              </div>
                              <div class="form-group">        
                                <div class="col-sm-10">
                                 <a class="btn btn-primary simpan_edit_slider2" id="">Ganti</a>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

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
          <a class="btn btn-default edit_kat" data-toggle="modal" data-target="#tambah1" >
          <i class="fa fa-plus fa-lg"></i> Tambah</a>
          <!-- Modal -->
          <div id="tambah1" class="modal fade" role="dialog">
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
                            <input type="url" class="form-control" name="link" placeholder="Link Gambar, ex : http://google.com" required  pattern="https?://.+"><br>                      
                            <input type="hidden" name="type" value="1">
                            <input type="text" style="cursor:pointer" class="form-control" placeholder="Klick Untuk Upload" name="file_gambar" id="file_gambar2"  placeholder="Klik Untuk Pilih File Gambar" value="" onclick="openKCFinder(this);" onchange="" readonly="readonly" required></input>
                            <!--<input type="file"  name="userfile" size='20' id="upload" required onchange="previewImage(this,[256],1);">
                          <div class="imagePreview"></div>   -->                   
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

<script type="text/javascript">

function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            var newURL = window.location.protocol + "://" + window.location.host + "/" + window.location.pathname;
            field.value = url.split('/').pop();
            window.KCFinder = null;
        }
    };
    window.open('../assets/kcfinder/browse.php?type=images', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}

   
  //Menampilkan kategori di modal sebelum dirubah 
  $(document).ready(function(){
    var id;
    //Aksi jika edit_slider1 di klick (link edit slider 1)
    $(".edit_slider1").click(function(){
      var element = $(this);
      id = element.attr("id");
     
      $.ajax({
        url:"../operation/get_slider_byid?id="+id,              
        dataType : "json",
        type: "POST",

        success: function(data){
          document.getElementById("keterangan_edit").value = data.keterangan;
          document.getElementById("file_gambar_edit").value = data.gambar;   
        }
      });                        
    });

     //Aksi jika edit_slider2 di klick (link edit slider 2)
    $(".edit_slider2").click(function(){
      var element = $(this);
      id = element.attr("id");
     
      $.ajax({
        url:"../operation/get_slider_byid?id="+id,              
        dataType : "json",
        type: "POST",

        success: function(data){
          document.getElementById("link_edit").value = data.link;
          document.getElementById("file_gambar_edit2").value = data.gambar;   
        }
      });                        
    });

    //Menyimpan slider1 baru telah dirubah
    $(".simpan_edit_slider1").click(function(){
      var myData = 'keterangan_edit='+ document.getElementById("keterangan_edit").value +
                    '&file_gambar_edit='+ document.getElementById("file_gambar_edit").value;
     
      $.ajax({
        url:"../operation/ganti_slider_one?id="+id,              
        dataType : "json",
        data : myData,
        type: "POST",
        success: success()       
      });                        
    });

    //Menyimpan slider2 baru telah dirubah
    $(".simpan_edit_slider2").click(function(){
      var myData = 'link_edit='+ document.getElementById("link_edit").value +
                    '&file_gambar_edit2='+ document.getElementById("file_gambar_edit2").value;
     
      $.ajax({
        url:"../operation/ganti_slider_two?id="+id,              
        dataType : "json",
        data : myData,
        type: "POST",
        success: success()       
      });                        
    });

    // on success...
    function success(){
      alert('Perubahan Berhasil')
      window.location.reload();
    }
  });


</script>
