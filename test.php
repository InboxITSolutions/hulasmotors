<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>
<style type="text/css">
.sidenav {
    height: 85%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 50px;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 7% 2%;
    min-height: 553px;
}
.mapofnepal{
	height: 450px;
}
.mapofnepal iframe{
	height: 100%;
}
.dealer-detail {
	line-height: 1;
}
.dealer-detail h1 {
	font-size: 30px;
	font-weight: lighter;
}
.dealer-detail h2{
	font-size: 20px;
	font-weight: lighter;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="test.php?id=1">Biratnagar</a>
  <a href="test.php?id=2">Kathmandu</a>
  <a href="test.php?id=3">Bhairahawa</a>
  <a href="test.php?id=4">Butwal</a>
</div>
 <!-- Open Nav -->
  <span style="font-size:30px;cursor:pointer; margin-left: 30px; float: left; vertical-align: middle;" onclick="openNav()">☰</span>
  <h1 style="float: left;vertical-align: middle;text-align: center;width: 90%;font-size: 30px;margin-bottom: 30px;">FIND YOUR NEAREST DEALER..</h1>
<div id="main">

  <?php 
  if(isset($_GET['id'])){
  	$id = $_GET['id'];

  	switch ($id) {
  		case '1':
  				?>
  				<div class="col-xs-12 col-sm-3 col-md-3 dealer-detail">
  					<h1>Budeo Trading</h1>
  					<h2>Munal Path</h2>
  					<h2>Koshi Highway</h2>
  					<h2>Biratnagar</h2>
  					<h2>Phone: 021-562082</h2>
  				</div>
  				<div class="col-xs-12 col-sm-9 col-md-9 dealer-map">
  					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.96035915018!2d87.2656363145993!3d26.424755787287697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75a43ecafab3%3A0x6e40f0780a00ef32!2sHulas+Motors+pvt+ltd!5e0!3m2!1sen!2snp!4v1467220023416" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  				</div>
  				<?php
  			break;
  			case '2':
  				?>
  				<div class="col-xs-12 col-sm-3 col-md-3 dealer-detail">
  					<h1>Pashupati Trading</h1>
  					<h2>Pashupati Path</h2>
  					<h2>Ariniko Highway</h2>
  					<h2>Kathmandu</h2>
  					<h2>Phone: 01-462082</h2>
  				</div>
  				<div class="col-xs-12 col-sm-9 col-md-9 dealer-map">
  					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2211449085594!2d85.34649861462664!3d27.71045753196308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197922ea1e89%3A0x739090deff2ba4a6!2sPashupatinath+Temple!5e0!3m2!1sen!2snp!4v1467221929242" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  				</div>
  				<?php
  			break;
  		
  		default:
  			# code...
  			break;
  	}
  }
  else{
  	?>
  	<div class="col-sm-12 col-md-12 col-lg-12 mapofnepal">
  		<iframe style="width: 100% !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594415.0500480854!2d81.88565593584941!3d28.38390430942377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1466704019112" width="800" height="600" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>
  	</div>
  	<?php
  }
  ?>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>


<?php include 'partials/footer.php'; ?>
