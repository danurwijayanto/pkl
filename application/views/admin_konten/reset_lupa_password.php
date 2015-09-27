 <html> 
  <head>
    <meta charset="UTF-8">
    <title>Admin | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   
   <!-- Load JQuery dari CDN -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/2.1.4/jquery.min.js"></script>


  </head>
<body>
<script>
function checkPasswordMatch() {
	var password = $("#newPassword").val();
	var confirmPassword = $("#newPasswordConf").val();

	if (password != confirmPassword){
		$("#validPass").html("Passwords Tidak Sama!");
		$("#validPass").addClass("alert alert-danger");
		$("#validPass").removeClass("alert-success");
		return false; 
	}
	else{
		$("#validPass").html("Passwords Sesuai.");
		$("#validPass").addClass("alert alert-success");
		$("#validPass").removeClass("alert-danger");
	}
}
</script>

<div class="container" style="padding-top: 0px">
		
	<h1 class="page-header">Reset Password</h1>
	
	<div class="panel panel-default">
		<!-- /.panel-heading -->
		<div class="panel-body">
		<?php if (empty($hideForm)) {?>
			<form class="form-login" method="POST" action="<?php echo site_url($formAction);?>" role="form" onsubmit="return checkPasswordMatch()">
				<label for="newPassword">Password Baru</label>
				<input type="password" name="newPassword" id="newPassword" class="form-control" placeholder="Isikan password baru" onKeyUp="checkPasswordMatch();" required />
				<label for="newPasswordConf">Konfirmasi Password Baru</label>
				<input type="password" name="newPasswordConf" id="newPasswordConf" class="form-control" placeholder="Isikan kembali password baru" onKeyUp="checkPasswordMatch();" required /><br>
				<div id="validPass"></div><br>
				<button class="btn btn-lg btn-primary btn-block " type="submit" name="submit">Ubah Password</button><br>
			</form>
		<?php } else{?>
			<div style="padding-bottom: 10px">
				<a href="<?php echo site_url("/masukadmin"); ?>" class="btn btn-default">Kembali</a><br>
			</div>
		<?php }
		if (!empty(validation_errors()) || !empty($errors)) {
			echo "<div class= \"alert alert-danger\"><ol type='1'>";
			if(!empty(validation_errors()) ) echo validation_errors("<li>", "</li>");
			if(!empty($errors)) echo "<li>".$errors."</li>";
			echo "</ol></div>";
		}else if (! empty ( $submitSukses )) {
			echo "<div class= \"alert alert-success\"><ul style='list-style-type:none'>";
			echo "<li>".$submitSukses."</li>\n";
			echo "</ul></div>";
		}
		?>
		</div>
	</div>

</div>
</body>
</html>