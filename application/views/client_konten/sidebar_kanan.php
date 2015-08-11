<?php if (isset($tautan)){
	if ($tautan == TRUE){
?>
						<div class="col-md-4">
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b><?php echo $language['tautan'];?></b></h5>
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
								<?php 
								if ($artikel == NULL){ ?>
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Tidak Ada Post
								<?php
								}else{
								foreach ($artikel as $artikel) { ?>
									<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							  			<?php echo anchor('client/news/'.$artikel['id'].'', ''.$artikel['judul']); ?>
							  			<span class="date-title">
									    	<i><?php echo date("d/m/Y",strtotime($artikel['time']));?></i>
										</span>
							  		</li>
								<?php
									}
								}
								?>
							</ul>
						</div>
						<div class="panel" style="font-size: 14px;">
							<div class="judul_panel">
								<h5><b>Agenda Terdekat</b></h5>
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
							  		</li>
								<?php
									}
								}
								?>
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