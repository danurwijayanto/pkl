<!--Start Content Page-->
		<div class="container">
			<div class="content">
				<div class="row clearfix">
					<div class="col-md-6">
						<!-- Place somewhere in the <body> of your page -->
						<div id="slider" class="flexslider">
				          <ul class="slides">
				            <li>
				  	    	    <img src="<?php echo base_url();?>assets/flexslider/images/kitchen_adventurer_cheesecake_brownie.jpg" />
				  	    	     <p class="flex-caption">Adventurer Cheesecake Brownie</p>
				  	    		</li>
				  	    		<li>
				  	    	    <img src="<?php echo base_url();?>assets/flexslider/images/kitchen_adventurer_lemon.jpg" />
				  	    	    <p class="flex-caption">Adventurer Cheesecake Brownie</p>
				  	    		</li>
				  	    		<li>
				  	    	    <img src="<?php echo base_url();?>assets/flexslider/images/kitchen_adventurer_donut.jpg" />
				  	    	    <p class="flex-caption">Adventurer Cheesecake Brownie</p>
				  	    		</li>
				  	    		<li>
				  	    	    <img src="<?php echo base_url();?>assets/flexslider/images/kitchen_adventurer_caramel.jpg" />
				  	    		<p class="flex-caption">Adventurer Cheesecake Brownie</p>
				  	    		</li>
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
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Agenda Terdekat</b></h5>
							</div>
							<br>
							<ul class="">
								<?php foreach ($agenda as $agenda) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$agenda['id'].'', ''.$agenda['judul'].'',array('title'=>'Link Title')); ?>
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

				</div>
				<div class="row clearfix" style="margin: 0 0 158px;">
				</div>
			</div>
		</div>
		<!--End Content-->

		<!--JS -->
		
    </body>