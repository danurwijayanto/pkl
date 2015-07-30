 
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <input type="hidden" name="id" value="<?php echo $session['id'];?>">
        <section class="content-header">
          <h1>
            Akun Saya
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">Akun Saya</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#akun" data-toggle="tab">Username & Email</a></li>
            <li><a href="#pesanan" data-toggle="tab">Password</a></li>
          </ul>
          <!-- Tab Username & Password-->
         <div class="tab-content">
            <div class="tab-pane active" id="akun">
              <!-- DATA PERSONAL-->
              <h3>Data Personal</h3><br>
              <form name="datauser" class="form-horizontal" role="form" action="<?php echo base_url();?>operation/change_useremail" method="post" >
                <!-- Nama -->
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="lg">Username</label>
                  <div class="col-sm-5">
                    <input type="text" id="nama" class="form-control" id="focusedInput" name="nama" value="<?php echo $session['nama'];?>" required value="">
                    <input type="hidden" name="id" value="<?php echo $session['id'];?>">
                  </div>
                </div>

                 <!-- Email -->
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="lg">Email</label>
                    <div class="col-sm-5">
                       <input type="Email" id="email" name="email" class="form-control" value="<?php echo $session['email'];?>" required value="">
                    </div>
                </div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              </form> 
              <!-- END FORM -->
              <br><br> 
            </div>
            <!--End Tab menu Akun Saya-->

            <!-- Tab Menu Password-->
            <div class="tab-pane" id="pesanan">
              <h3>Ganti Password</h3><br>
                <div class="alert alert-warning" id="peringatan">
                  <Strong>Peringatan !</Strong>  Cek Kembali Password Baru dan Konfirmasi Password
                </div>
              <form name="datauser" class="form-horizontal" role="form" action="<?php echo base_url();?>operation/ganti_password" method="post" onsubmit="return validatepassword()">
                <!-- Password Lama -->
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="lg">Password Lama</label>
                    <div class="col-sm-5">
                       <input type="password" id="pass" class="form-control" name="pass" placeholder="password lama" required>
                    </div>
                </div>

                <!-- Password Baru-->
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="lg">Password Baru</label>
                    <div class="col-sm-5">
                      <input type="password" id="password" name="passbaru" class="form-control" placeholder="Masukkan Password yang Baru" required>
                    </div>
                </div>

                <!-- Confirm Password Baru-->
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="lg">Confirm Password Baru</label>
                    <div class="col-sm-5">
                      <input type="password" id="cpassword" name="confirmpass" class="form-control" placeholder="Konfirmasi Masukkan Password yang Baru" required>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $session['id'];?>">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="submit_pass">
              </form> 
              <!-- END FORM --> 
                
            </div>
<!--End Tab menu pesanan-->
        </section>        
        <!-- /.content -->
      </div><!-- /.content-wrapper -->
  <script>
  $(document).ready(function(){

  //Menyembunyikan glype icon
  $(".alert").hide();  

  $("#cpassword, #password").change(function(){
         var password   = $("#password").val();
         var cpassword    = $("#cpassword").val();
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
    var password   = $("#password").val();
    var cpassword    = $("#cpassword").val();
       if(password!=cpassword){
        //alert('Password Didnt Match');
        $(".alert").show();
        return false;            
       }else{
         $(".alert").hide(); 
       }
  }
</script>
