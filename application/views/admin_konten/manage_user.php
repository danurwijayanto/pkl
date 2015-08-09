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
          <a class="btn btn-warning" data-toggle="modal" data-target="#tambah_user">Tambah User</a>
          <!-- Modal -->
          <div id="tambah_user" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah User</h4>
                </div>
                <div class="col-sm-11">
                  <div class="alert alert-warning" id="peringatan">
                    <Strong>Peringatan !</Strong>  Cek Kembali Password dan Konfirmasi Password
                  </div>
                </div>
                <div class="modal-body">
                   <form class="form-horizontal" action="#" role="form" method="post" onsubmit="return validatepassword()">
                    <div class="form-group">
                      <div class="col-sm-10">
                        <h5 class="modal-title">User dan Email</h5>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Nama User" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Email User" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <h5 class="modal-title">Role</h5>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <select name='role' id='role'  class="form-control">
                          <option value=0>-- Pilih Role --</option>
                        <?php 
                            foreach($role as $role)
                            {   ?>      
                                <option value="<?php echo $role['id']; ?>"><?php echo $role['nama']; ?></option>
                         <?php   }
                        ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <h5 class="modal-title">Password</h5>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="pass" id="pass"  placeholder="Password User" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="cpass" id="cpass"  placeholder="Confirm Password" required>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-10">
                       <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
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
              <td><?php echo $daftar_user['nama'];?></td>
              <td>
                <a href="<?php echo base_url();?>admin/edit_user?id=<?php echo $daftar_user['id']; ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo base_url();?>operation/del_user_byid?id=<?php echo $daftar_user['id']; ?>" class="btn btn-danger" <?php if ($daftar_user['role']==1){echo "style='pointer-events: none; opacity: 0.5;'";}else{}?>>Delete</a>                                               
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

    $(".alert").hide();  

    $("#pass, #cpass").change(function(){
           var password   = $("#pass").val();
           var cpassword    = $("#cpass").val();
           if(password!=cpassword){
            //alert('Password Didnt Match');
            $(".alert").show();            
           }else{
             $(".alert").hide(); 
           }
    });    
});

//Validate Ganti Password
function validatepassword(){ 
  var password   = $("#pass").val();
  var cpassword    = $("#cpass").val();
     if(password!=cpassword){
      //alert('Password Didnt Match');
      $(".alert").show();
      return false;            
     }else{
       $(".alert").hide(); 
     }
}

</script>