<script type="text/javascript">
	// Back to top button
$(function() {
  $(document).ready(function() {
    return $(window).scroll(function() {
      return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
    }), $("#back-to-top").click(function() {
      return $("html,body").animate({
        scrollTop: "0"
      })
    })
  })
}).call(this);
</script>
<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>

<!-- Sub Nav -->
<section class="nav-tab">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <ul class="navpills">
                    <li>
                      <a href="download_davinci.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/download.png"> --><h6>Brochure</h6></a>
                    </li>

                    <li>
                      <a href="specs_davinci.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/specs.png"> --><h6>Specs</h6></a>
                    </li>
                    <?php include 'partials/sub-menu-modal.php'; ?>
                    <li><a href="gallery.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/gal.png"> --><h6>Gallery</h6></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Sub Nav -->
<section id="product-container">
	<div class="container-fluid" style="padding: 0px;">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		        <h1 id="tab1">Specification</h1>
		    </div>
		</div>
		<div class="col-md-12 col-xs-8 col-sm-12 specs-container">
                <div class="specs-row specs-row-top">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-image">
						<img src="assets/back-image/products/new1.png" class="img-responsive">
					</div>
				</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container model-name">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title hidden-specs-title">
					<h1>Model Name</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p><span class="left-model-name">da vinci</span>

					<a href="#" class="go-top"><i class="fa fa-angle-up" style="font-size:128px;color:white"></i></a>

					</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Charging time</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>8 to 10 hours</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Range</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>170 Km</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Speed</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>55 Km/h</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Power Window</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Front Power, Rear Manual</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Central Lock</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Yes</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>AC</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Yes</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Seating Capacity</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>5</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Heater</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Yes</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Reverse Camera/Radar</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Yes</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>7" Display Screen</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Yes</p>	
				</div>
			</div>
         </div>
		<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
                <h3 style="text-align: center; font-size:26px; margin: 5%;"><u><strong>Technical Details</strong></u></h3>
		    </div>
		</div> -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header" style="margin: 5% 0%; padding-bottom: 5%;">
		        <h1 id="tab1">Technical Specification</h1>
		    </div>
		</div>
         
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Dimension(L X W X H)</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>3300 X 1500 X 1600</p>	
				</div>
			</div>
         </div>
        <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Climbing Gradient</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>20 deg with four person</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Motor</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>5KW AC</p>	
				</div>
			</div>
         </div>
          <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Ground Clearance</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>180 mm</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Battery</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>10PcsSMF*200 AH 6 V</p>	
				</div>
			</div>
         </div>
         
         
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Brakes</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Power Brakes</p>	
						
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>G.W</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>800 kg</p>	
						
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Controller</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>275A</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Driving Power </h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>10pcs of 6v200Ah <br/>Maintenance free batteries</p>	
				</div>
			</div>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Breaking System </h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Front Disc Rear Hydraulic Drum</p>	
				</div>
			</div>
         </div>
        
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Suspension System </h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Front Independent Suspension<br/>Rear Balancer and Spring</p>	
				</div>
			</div>
         </div>
        
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Fog Lamp </h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>Yes</p>	
				</div>
			</div>
         </div>
        
         <div class="col-md-12 col-xs-12 col-sm-12 specs-container">
         	<div class="specs-row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-title">
					<h1>Power Steering</h1>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 specs-desc">
					<p>EPS Power Steering</p>	
				</div>
			</div>
         </div>
        
        
    </div>
</section>

<?php include 'partials/footer.php'; ?>
