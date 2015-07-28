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
								<h5><b>Pengumuman</b></h5>
							</div>
							<br>
							<ul class="">
								<?php foreach ($pengumuman as $pengumuman) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$pengumuman['id'].'', ''.$pengumuman['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($pengumuman['time']));?></i>
										</span>
							  		</li>
								<?php
									}
								?>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">SK PPA dan BBPPPA tahun 2015</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PRESS RELEASE LAUNCHING KARTU CO-BRANDING BRI</a>
							  	</li>
							</ul>
						</div>
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Agenda Terdekat</b></h5>
							</div>
							<br>
							<ul class="">
								<?php foreach ($agenda as $agenda) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$agenda['id'].'', ''.$agenda['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($agenda['time']));?></i>
										</span>
							  		</li>
								<?php
									}
								?>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">SK PPA dan BBPPPA tahun 2015</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PRESS RELEASE LAUNCHING KARTU CO-BRANDING BRI</a>
							  	</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Berita</b></h5>
							</div>
							<br>
							<ul class="">
								<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="Hasil Seleksi Proposal Penelitian Hibah FSM Tahun 2015 UNDIP">Hasil Seleksi Proposal Penelitian Hibah FSM Tahun 2015 UNDIP</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">SK PPA dan BBPPPA tahun 2015</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PRESS RELEASE LAUNCHING KARTU CO-BRANDING BRI</a>
							  	</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Artikel</b></h5>
							</div>
							<br>
							<ul class="">
								<?php foreach ($artikel as $artikel) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$artikel['id'].'', ''.$artikel['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($artikel['time']));?></i>
										</span>
							  		</li>
								<?php
									}
								?>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">SK PPA dan BBPPPA tahun 2015</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://fsm.undip.ac.id/2015/06/hasil-seleksi-proposal-penelitian-hibah-fsm-tahun-2015-undip/" title="PENGEMBANGAN BUDIDAYA PRODUKTIF BERKELANJUTAN (SUSTAINABLE AQUACULTURE) SISTEM IMTA (INTEGRATED MULTI TROPHIC AQUACULTURE)">PRESS RELEASE LAUNCHING KARTU CO-BRANDING BRI</a>
							  	</li>
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
						          		<a href="#">
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


