<!DOCTYPE HTML> 
<html>
	<head>
		 <meta charset="utf-8">
		
		<!-- Bootstrap -->
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--Custom CSS-->
		<link href="<?php echo base_url();?>assets/cssku/css.css" rel="stylesheet">
		<title><?php echo $title;?></title>
	</head>
	<body>
	<div class="container">	
	  
	    <form class="form-login" method="POST" action="<?php echo base_url();?>auth/request_lupa_password" role="form" enctype="multipart/form-data">
			<div>
			<label for="email">Email Anda</label> 
			<input type="email" name="email" value="<?php if (empty ( $submitSukses )) echo set_value('email')?>" class="form-control" placeholder="Isikan Email Anda" required /><br>
			<button class="btn btn-lg btn-primary btn-block" type="submit"
				name="submit" >Kirim Reset Password</button>
			<br>
		</div>
		</form>
		<?php
			if (! empty( $submitErrors)) {
				echo "<div class= \"alert alert-danger\"><ol type='1'>";
					echo "<li>".$submitErrors."</li>\n";
				echo "</ol></div>";
			}
			if (! empty ( $submitSukses )) {
				echo "<div class= \"alert alert-success\"><ol type='1'>";
					echo "<li>".$submitSukses."</li>\n";
				echo "</ol></div>";
			}
		?>
	  </div>
	
</body>