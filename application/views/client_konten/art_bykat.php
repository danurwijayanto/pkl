
		<!--Start Content Page-->
		<div class="container">
			<div class="content">
				<div class="row clearfix">
					
					<div class="col-md-8" style="margin: auto">
						<?php foreach ($konten as $konten) { ?>	
						<div id="article">
							<!-- Place somewhere in the <body> of your page -->
							<h2 style="padding: 15px 0 0 20px;"><?php echo $konten['judul']?></h2>
							<div class="site_news_metadate">Diposting oleh Administrator pada <?php echo date("d m Y",strtotime($konten['time']));?></div>
							<hr>

						</div>
						<?php
							}
							echo $pagging;
						?>
					</div>
					
