
		<!--Start Content Page-->
		<div class="container">
			<div class="content">
				<div class="row clearfix">
					
					<div class="col-md-8" style="margin: auto">
						<?php if ($konten == NULL) {echo "Data Tidak Ditemukan";}else{ ?>
						<?php $i=1; foreach ($konten as $konten) { ?>
						<?php if ($i==1)echo "<h3>Category : <b>".$language[$konten["nama"]]."</b></h3>";?>
						<div id="article">
							<!-- Place somewhere in the <body> of your page -->
							<h3 style="padding: 15px 0 0 20px;"><?php echo $konten['judul']?></h3>
							<p  style="padding: 0 20px 0 20px;"><?php echo substr( strip_tags($konten['text']), 0, 300).' .....  <a href="'.base_url().'client/news/'.$konten['id'].'" class="news_readmore">Read More >></a>';?>						
							</p><br>

							
							<div class="site_news_metadate">Diposting oleh <?php echo $konten['nama_user'];?> pada <?php echo date("d m Y",strtotime($konten['time']));?>, kategori :  <?php echo $konten['nama'];?></div>
							<hr>

						</div>
						<?php
							$i=$i+1; } 
						}
							echo $pagging;
						?>
					</div>
					