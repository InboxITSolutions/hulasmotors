<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>
<!-- Sub Nav -->
<section class="nav-tab">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <ul class="navpills">
                    <li>
                      <a href="download_cargo.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/download.png"> --><h6>Brochure</h6></a>
                    </li>

                    <li>
                      <a href="specs_cargo.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/specs.png"> --><h6>Specs</h6></a>
                    </li>
                    <?php include 'partials/sub-menu-modal.php'; ?>
                    <li><a href="gallery.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/gal.png"> --><h6>Gallery</h6></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Subnav -->
<section class="spy">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class='tabs'>
                  <li><a href="#tab1" class="active" ></a></li>
                  <li><a href="#tab2"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="product-container">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		        <h1 id="tab1">Cargo</h1>
		    </div>
		</div>
		<!-- Product 1 -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-item product-margin-top-10" id="tab1">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-desc ">
				<h1 class="product-name">Cargo 1</h1>
				<p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>
					<a href="#" class="btn btn-link">Learn More<i class="fa fa-angle-right " aria-hidden="true"></i></a>
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display-pic">
				<img src="assets/back-image/products/new1.png">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
				<img src="assets/front-image/border-bottom.png" style="height: 10px; width: 100%;" >
			</div>
		</div>
		<!-- Product 2 -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-item product-margin-top-10" id="tab2">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-desc ">
				<h1 class="product-name">Cargo 2</h1>
				<p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>
					<a href="#" class="btn btn-link">Learn More<i class="fa fa-angle-right " aria-hidden="true"></i></a>
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display-pic">
				<img src="assets/back-image/products/new2.png">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
				<img src="assets/front-image/border-bottom.png" style="height: 10px; width: 100%;">
			</div>
		</div>
	</div>

</section>

<?php include 'partials/footer.php'; ?>
