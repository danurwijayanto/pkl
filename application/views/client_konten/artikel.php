		<!--Start Content Page-->
		<div class="container">
			<div class="content">
				<div class="row clearfix">
					<div class="col-md-8" style="margin: -15px">
						<div id="article">
							<!-- Place somewhere in the <body> of your page -->
							<h2 style="padding: 15px 0 0 20px;"><?php echo $konten['judul']?></h2>
							<div class="site_news_metadate">Diposting oleh Administrator pada <?php echo date("d m Y",strtotime($konten['time']));?></div>
							<hr>
							<p style="padding: 15px 0 0px 20px;">
								<?php echo $konten['text'];?>
							</p>

							<div style="padding: 15px 0 20px 20px;">
								Kategori: <b><a href="http://if.undip.ac.id/news?cat=1">
									<?php echo $konten['nama']?></a></b>
							</div>

						</div>
					</div>
