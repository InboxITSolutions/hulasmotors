<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>
<?php 
				if (!isset($_GET['id'])) {
					?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 map-whole" id="map-locator">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594415.0500480854!2d81.88565593584941!3d28.38390430942377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1467205204036" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<?php
				}
				else{
					$id =$_GET['id'];

					switch ($id) {
						case '1':
							?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 map-whole" id="map-locator">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.221144908559!2d85.34649861462664!3d27.710457531963097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197922ea1e89%3A0x739090deff2ba4a6!2sPashupatinath+Temple!5e0!3m2!1sen!2snp!4v1467216050186" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
							</iframe>
							</div>

							<?php
							break;
						
						default:
							?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 map-whole" id="map-locator">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.96035915018!2d87.2656363145993!3d26.424755787287697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75a43ecafab3%3A0x6e40f0780a00ef32!2sHulas+Motors+pvt+ltd!5e0!3m2!1sen!2snp!4v1467217627612" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<?php
							break;
					}
				}
				?>