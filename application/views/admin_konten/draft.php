 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Draft Artikel
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Draft Artikel</li>
          </ol>
          <br>
          <a href="<?php echo base_url();?>admin/tambah_artikel" class="btn btn-warning">Tambah Artikel</a>
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
            <?php foreach ($draft as $draft) { ?>
            <tr>
              <td><?php echo $draft['id'];?></td>
              <td><?php echo $draft['judul'];?></td>
              <td><?php echo $draft['nama'];?></td>
              <td><?php echo date("d-m-Y",strtotime($draft['time']));?></td>
              <td>
                <a href="<?php echo base_url();?>admin/edit_artikel?id=<?php echo $draft['id']; ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo base_url();?>operation/del_art_byid?id=<?php echo $draft['id']; ?>" class="btn btn-danger" <?php if ($draft['kategori']==7){echo "style='pointer-events: none; opacity: 0.5;'";}else{}?>>Delete</a>                                               
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