<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>

<section id="product-container contact">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-header">
			<div class="page-header">
		        <h1 id="tab1">Contact Us</h1>
		    </div>
		</div>
		<div class="row first-row" id="contact-first">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 inside-contact phone-sec">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 icon phone-icon">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<name>Contact Address</name>
				</div>
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 icon icon-desc">
					<p>
						<phone>
							01-4107712 
						</phone>
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 inside-contact address-sec">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 icon phone-icon">
					<i class="fa fa-home" aria-hidden="true"></i>
					<name>Postal Address</name>
				</div>
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 icon icon-desc">
					<p>
						<p>
							Chemical Marg, Nepal
						</p>
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 inside-contact email-sec">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 icon phone-icon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<name>Mailing Address</name>
				</div>
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 icon icon-desc">
					<p>
						<p>
							info@hulasmotors.com
						</p>
					</p>
				</div>
			</div>
		</div>
		<div class="row second-row" id="query">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 feedback-form">
                <div class="page-header header-shadow">
                    <h1 id="tab1">FEEDBACK</h1>
                </div>
                <form method="POST" action="http://hulasmotors.com/demo/hulasmotors/contact" accept-charset="UTF-8" id="form" class="contact-form"><input name="_token" type="hidden" value="GODuxNCWu6Nqe7sYsd0ZfqJV2WHSLOA3IURs2sdU">
                <span id="successMessage"></span>
                <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" id="name" placeholder="&#xf007;&nbsp; Enter Your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control" id="email" placeholder="&#xf0e0;&nbsp; Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="&#xf075;&nbsp; Messege Here"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        	<button type="submit" class="btn btn-default submit">Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 map-frame">
            	<div class="page-header header-shadow">
                    <h1 id="tab1">Locate Us</h1>
                </div>
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.9605080212586!2d87.26563631503464!3d26.42475098334012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75a43ecafab3%3A0x6e40f0780a00ef32!2sHulas+Motors+pvt+ltd!5e0!3m2!1sen!2snp!4v1462184579884" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
		</div>
	</div>
</section>

<?php include 'partials/footer.php'; ?>
