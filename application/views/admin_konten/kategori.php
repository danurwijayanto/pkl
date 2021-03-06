 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Kategori
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Kategori</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <table class="table table-bordered">
              <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
              <?php 
              
              if (!$kategori){ ?>
                <tr>
                  <td colspan="3" valign="middle"> Kategori Kosong</td>
                </tr>
              <?php }else {$i=1; foreach ($kategori as $kategori){ ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $kategori['nama'];?></td>
                  <td>
                    <a class="btn btn-warning" href="<?php echo base_url();?>operation/del_kat_byid?id=<?php echo $kategori['id'];?>">
                      <i class="fa fa-trash-o fa-lg"></i> Delete</a>

                    <a class="btn btn-default edit_kat" data-toggle="modal" data-target="#edit" id="<?php echo $kategori['id'];?>">
                      <i class="fa fa-pencil-square-o fa-lg"></i> Edit</a>
                    <!-- Modal -->
                    <div id="edit" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Ganti Kategori</h4>
                          </div>
                          <div class="modal-body">
                             <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="kategori" id="cat_text"  placeholder="Nama Kategori Baru">
                                </div>
                              </div>
                              <div class="form-group">        
                                <div class="col-sm-10">
                                 <a class="btn btn-default simpan_edit_kat" id="<?php echo $kategori['id'];?>">Ganti</a>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>
                  </td>
                </tr>
              <?php $i=$i+1;} } ?>
          </table>
          <br>
          <!-- Tambah Kategori dengan modal-->
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" disabled>Tambah Kategori</button>
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Kategori</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>operation/simpan_kategori" >
                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="kategori"  placeholder="Nama Kategori">
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-10">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary ">
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
          <!-- End Tambah Kategori dengan modal-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

<script>
            
  //Menampilkan kategori di modal sebelum dirubah 
  $(document).ready(function(){
    var id;
    $(".edit_kat").click(function(){
      var element = $(this);
      id = element.attr("id");
     
      $.ajax({
        url:"../operation/get_kat_byid?id="+id,              
        dataType : "json",
        type: "POST",

        success: function(data){
          document.getElementById("cat_text").value = data;
          //document.form_ganti_kat.action = "../operation/ganti_kategori?id="+id;   
        }
      });                        
    });

    //Menyimpan kategori baru telah dirubah
    $(".simpan_edit_kat").click(function(){
      var myData = 'value='+ document.getElementById("cat_text").value;
     
      $.ajax({
        url:"../operation/ganti_kategori?id="+id,              
        dataType : "json",
        data : myData,
        type: "POST",
        success: success()       
      });                        
    });

    // on success...
    function success(){
      alert('Perubahan Berhasil')
       location.reload(); 
    }
  });

  </script>