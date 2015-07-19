 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Artikel
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Daftar Artikel</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="myTable" class="table table-bordered table-hover table-striped">
           <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($artikel as $artikel) { ?>
            <tr>
              <td><?php echo $artikel['id'];?></td>
              <td><?php echo $artikel['judul'];?></td>
              <td><?php echo $artikel['nama'];?></td>
              <td><?php echo date("d-m-Y",strtotime($artikel['time']));?></td>
              <td>
                <a href="<?php echo base_url();?>admin/edit_artikel?id=<?php echo $artikel['id']; ?>" class="btn btn-success">Edit</a>                                                    
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
      //Datatables
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
            </script>