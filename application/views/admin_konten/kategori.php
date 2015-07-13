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
              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
          </table>
          <br>
          <!-- Tambah Kategori dengan modal-->
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Kategori</button>
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
                        <input type="submit" name="daftar" value="Daftar" class="btn btn-primary ">
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