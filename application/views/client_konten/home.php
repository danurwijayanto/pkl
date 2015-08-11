<!--Start Content Page-->
		<div class="container">
			<div class="content">
				<div class="row clearfix">
					<div class="col-md-6">
						<!-- Place somewhere in the <body> of your page -->
						<div id="slider-one" class="flexslider">
				          <ul class="slides">
				          	<?php
				          	if ($slider_one == NULL){?>
				          	<li>
				          		<img src="<?php echo base_url();?>upload/Gambar/images/no-image-available.jpg" />
				  	    	    <p class="flex-caption">Slider Tidak Tersedia</p>	
				          	</li>
				          	<?php } else {
				          	foreach ($slider_one as $sliderone) {?>
				          	<li>
				          		<img src="<?php echo base_url();?>upload/Gambar/images/<?php echo $sliderone['gambar']?>" />
				  	    	    <p class="flex-caption"><?php echo $sliderone['keterangan']?></p>	
				          	</li>
				          	<?php
				          	}
				          	}
				          	?>
				          </ul>
				        </div>
					</div>
					<div class="col-md-6">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b><?php echo $language['pengumuman'];?></b></h5>
							</div>
							<br>
							<ul class="">
								<?php 
								if ($pengumuman == NULL){ ?>
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Tidak Ada Post
								<?php
								}else{
								$i=1;foreach ($pengumuman as $pengumuman) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$pengumuman['id'].'', ''.$pengumuman['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($pengumuman['time']));?></i>
										</span>
										<?php if ($i==1){?>
											<p style="clearfix"></p>
											<p  style="padding: 0 20px 0 20px; text-align: justify; font-size: 12px;"><?php echo substr( strip_tags($pengumuman['text']), 0, 200).' .....  <a href="'.base_url().'client/news/'.$pengumuman['id'].'" class="news_readmore">Read More >></a>';?>						
											</p>
											<p></p>
										<?php
										}else{}
										?>
							  		</li>
								<?php
									$i=$i+1;
									}
								}
								?>

							</ul>
						</div>
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b><?php echo $language['agenda'];?></b></h5>
							</div>
							<br>
							<ul class="">
								<?php 
								if ($agenda == NULL){ ?>
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Tidak Ada Post
								<?php
								}else{
								foreach ($agenda as $agenda) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$agenda['id'].'', ''.$agenda['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($agenda['time']));?></i>
										</span>
							  		<?php if ($i==1){?>
											<p style="clearfix"></p>
											<p  style="padding: 0 20px 0 20px; text-align: justify; font-size: 12px;"><?php echo substr( strip_tags($agenda['text']), 0, 200).' .....  <a href="'.base_url().'client/news/'.$agenda['id'].'" class="news_readmore">Read More >></a>';?>						
											</p>
											<p></p>
										<?php
										}else{}
										?>
							  		</li>
								<?php
									$i=$i+1;
									}
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b><?php echo $language['berita'];?></b></h5>
							</div>
							<br>
							<ul class="">
								<?php 
								if ($berita == NULL){ ?>
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Tidak Ada Post
								<?php
								}else{
								$i=1; foreach ($berita as $berita) { ?>
									<li>
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$berita['id'].'', ''.$berita['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($berita['time']));?></i>
										</span>
							  		<?php if ($i==1){?>
											<p style="clearfix"></p>
											<p  style="padding: 0 20px 0 20px; text-align: justify; font-size: 12px;"><?php echo substr( strip_tags($berita['text']), 0, 200).' .....  <a href="'.base_url().'client/news/'.$berita['id'].'" class="news_readmore">Read More >></a>';?>						
											</p>
											<p></p>
										<?php
										}else{}
										?>
							  		</li>
								<?php
									$i=$i+1;
									}
								}
								?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b><?php echo $language['artikel'];?></b></h5>
							</div>
							<br>
							<ul class="">
								<?php 
								if ($artikel == NULL){ ?>
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Tidak Ada Post
								<?php
								}else{
								$i=1; foreach ($artikel as $artikel) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$artikel['id'].'', ''.$artikel['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($artikel['time']));?></i>
										</span>
							  		<?php if ($i==1){?>
											<p style="clearfix"></p>
											<p  style="padding: 0 20px 0 20px; text-align: justify; font-size: 12px;"><?php echo substr( strip_tags($artikel['text']), 0, 200).' .....  <a href="'.base_url().'client/news/'.$artikel['id'].'" class="news_readmore">Read More >></a>';?>						
											</p>
											<p></p>
										<?php
										}else{}
										?>
							  		</li>
								<?php
									$i=$i+1;
									}
								}
								?>
							</ul>
						</div>
					</div>

				</div>
				<div class="row clearfix" style="margin: auto;">
					<div class="col-sm-12">
						<div id="main link-gambar" class="col-sm-12 link-gambar" role="main">
							<div class="flexslider" id="slider-two">
								<ul class="slides">
									<?php
						          	if ($slider_two == NULL){?>
						          	<li>
						          		<a href="#">
										<img style="height: 100px; !important" src="<?php echo base_url();?>upload/Gambar/images/no-image-available.jpg" class="attachment-full image" alt="site-name3" />
										</a>	
						          	</li>
						          	<?php } else {
						          	foreach ($slider_two as $slidertwo) {?>
						          	<li>
						          		<a href="<?php echo $slidertwo['link'];?>">
										<img style="height: 100px; !important" src="<?php echo base_url();?>upload/Gambar/images/<?php echo $slidertwo['gambar']?>" class="attachment-full image" alt="site-name3" />
										</a>
						          	</li>
						          	<?php
						          	}
						          	}
						          	?>
								</ul><!-- .slides -->
							</div><!-- .flexslider -->
						</div> <!-- END LINK GAMBAR -->
					</div>
				</div>
			</div>
		</div>
		<!--End Content-->

		<!--JS -->
		
    </body>


