<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>
<section id="dealer-section" class="desktop">
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 style="float: left;vertical-align: middle;text-align: center;font-size: 24px;margin-bottom: 10px;">FIND YOUR NEAREST DEALER</h1>
      </div> -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="page-header">
            <h1 id="tab1">FIND YOUR NEAREST DEALER</h1>
        </div>
    </div>
    </div>
    <div class="row dealer-row">
      <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 city-name">
        <div id="mySidenav" class="col-xs-12 col-sm-3 col-md-2 col-lg-2 sidenav">
          <a href="?id=1" id="1">Biratnagar</a>
          <a href="?id=2" id="2">Kathmandu</a>
          <a href="?id=3" id="3">Bhairahawa</a>
          <a href="?id=4">Butwal</a>
        </div>
      </div>
      <?php include 'dealer-detail.php'; ?>
    </div>
  </div>
</section>
<div class="mobile">
            <section id="product-container">
                <div class="container-fluid">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h1 id="tab1">Dealers</h1>
                        </div>
                    </div>
                    <div class="col-xs-12 dealers-list">
                        <ul class="dealers-ul">
                            <li class="col-xs-12 btn btn-default">
                                <a href="mobile-dealer-detail.php?id=1">Bhudeo Trading</a>
                            </li>
                            <li class="col-xs-12 btn btn-default">
                                <a href="mobile-dealer-detail.php?id=2">Bhairav Trading</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
<?php include 'partials/footer.php'; ?>
<script type="text/javascript">
 // $('.sidenav a').click(function(e) {
    //var url = window.location.href;
    /*var $this = <?php echo $id; ?> ;*/
    //$url.removeClass('city-active').end().addClass('city-active');
    //e.preventDefault();

    // Load the page content in to element
    // with id #content using ajax (There are other ways)
    //$('#city-map').load($this.href());
//});
</script>
<script type="text/javascript">
  $(".sidenav a").each(function() {   
    if (this.href == window.location.href) {
        $(this).addClass("city-active");
        //$('#1').removeClass("city-active");
    }
});
</script>

