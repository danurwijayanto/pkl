<?php if (isset($tautan)){
	if ($tautan == TRUE){
?>
						<div class="col-md-4">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Tautan</b></h5>
							</div>
							<br>
							<ul class="">
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://www.uksw.edu/id.php" title="Universitas Kristen Satya Wacana Salatiga">Universitas Kristen Satya Wacana Salatiga</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://unnes.ac.id/" title="Universitas Negeri Semarang">Universitas Negeri Semarang</a>
							  	</li>
							  	<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  		<a href="http://iainsalatiga.ac.id/" title="STAIN / UIN Salatiga">STAIN / UIN Salatiga</a>
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
	<?php
		}
	}else{
	?>
					<div class="col-md-4">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Artikel Terbaru</b></h5>
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
				<div class="row clearfix" style="margin: 0 0 158px;">
				</div>
			</div>
		</div>
		<!--End Content-->
<?php
}
?>