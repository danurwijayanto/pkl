 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Artikel <span style="font-size:12px;">Indonesia</span>
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Daftar Artikel</li>
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
            <?php foreach ($artikelidn as $artikel) { ?>
            <tr>
              <td><?php echo $artikel['id'];?></td>
              <td><?php echo $artikel['judul'];?></td>
              <td><?php echo $artikel['nama'];?></td>
              <td><?php echo date("d-m-Y",strtotime($artikel['time']));?></td>
              <td>
                <a href="<?php echo base_url();?>admin/edit_artikel?id=<?php echo $artikel['id']; ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo base_url();?>operation/del_art_byid?id=<?php echo $artikel['id']; ?>" class="btn btn-danger" <?php if ($artikel['kategori']==7){echo "style='pointer-events: none; opacity: 0.5;'";}else{}?>>Delete</a>                                               
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
        </section><!-- /.content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Artikel <span style="font-size:12px;">English</span>
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Artikel</a></li>
            <li class="active">Daftar Artikel</li>
          </ol>
          <br>
          <a href="<?php echo base_url();?>admin/tambah_artikel" class="btn btn-warning">Tambah Artikel</a>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="myTable1" class="table table-bordered table-hover table-striped">
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
            <?php foreach ($artikelen as $artikel) { ?>
            <tr>
              <td><?php echo $artikel['id'];?></td>
              <td><?php echo $artikel['judul'];?></td>
              <td><?php echo $artikel['nama'];?></td>
              <td><?php echo date("d-m-Y",strtotime($artikel['time']));?></td>
              <td>
                <a href="<?php echo base_url();?>admin/edit_artikel?id=<?php echo $artikel['id']; ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo base_url();?>operation/del_art_byid?id=<?php echo $artikel['id']; ?>" class="btn btn-danger" <?php if ($artikel['kategori']==7){echo "style='pointer-events: none; opacity: 0.5;'";}else{}?>>Delete</a>                                               
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
                $('#myTable1').DataTable();
            });
      </script>