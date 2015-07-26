
						<?php 
						echo $pagging;

						foreach ($konten as $konten) { ?>	
							<!-- Place somewhere in the <body> of your page -->
							<h2 style="padding: 15px 0 0 20px;"><?php echo $konten['judul']?></h2>
						<?php
							}
						?>