
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title;?>
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Files</a></li>
            <li class="active"><?php echo $title;?></li>
          </ol>
          <br>
        </section>
        <?php 
        	if ($kcfinder == NULL){}else{
        		if($kcfinder == 'images'){
        			echo '<iframe id="kc_frame" name="kcfinder_alone" src="'.base_url().'/assets/kcfinder/browse.php?type=images&dir=images/public&lng=en&theme=default" frameborder="0" width="90%" height="475px"  resizable=1 style="padding:0;margin:15px 0px 15px 50px;border-radius:4px;border: 1px solid #6B6B6B;box-shadow:0 0 4px #6B6B6B;"></iframe>';
        		}else{
        			echo '<iframe id="kc_frame" name="kcfinder_alone" src="'.base_url().'/assets/kcfinder/browse.php?type=files&dir=files/public&lng=en&theme=default" frameborder="0" width="90%" height="475px"  resizable=1 style="padding:0;margin:15px 0px 15px 50px;border-radius:4px;border: 1px solid #6B6B6B;box-shadow:0 0 4px #6B6B6B;"></iframe>';
        		}
        	}
        ?>
        <!-- Main content -->
        <section class="content">
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
