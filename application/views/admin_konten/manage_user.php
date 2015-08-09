 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar User
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">Manage User</li>
          </ol>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="myTable" class="table table-bordered table-hover table-striped">
           <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama User</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1;foreach ($daftar_user as $daftar_user) { ?>
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $daftar_user['nama_user'];?></td>
              <td><?php echo $daftar_user['email'];?></td>
              <td><?php //echo date("d-m-Y",strtotime($artikel['time']));?></td>
              <td>
                <a href="<?php echo base_url();?>admin/edit_user?id=<?php echo $daftar_user['id']; ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo base_url();?>operation/del_user_byid?id=<?php echo $daftar_user['id']; ?>" class="btn btn-danger" <?php// if ($artikel['kategori']==7){echo "style='pointer-events: none; opacity: 0.5;'";}else{}?>>Delete</a>                                               
              </td>
            </tr>
            <?php
              $i = $i+1;
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