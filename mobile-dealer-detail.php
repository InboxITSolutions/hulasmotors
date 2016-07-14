 <?php include 'partials/header.php'; ?>
  <?php include 'partials/navigation.php'; ?>
<div class="mobile-dealer-detail">
<a href="dealers.php" class="btn btn-primary" style="width: 100%; border-radius: 0px;">Go Back</a>
  <div id="city-map city-map-mobile" class="col-xs-12 detail-container "style="padding: 0px !important;" class="desktop-dealer-detail">

        <?php 
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        switch ($id) {
          case '1':
              ?>
              <div class="col-xs-12 dealer-contact" >
                <center class="dealer-detail">
                  <h1>Budeo Trading</h1>
                  <h2>Munal Path</h2>
                  <h2>Koshi Highway</h2>
                  <h2>Biratnagar</h2>
                  <h2>Phone: 021-562082</h2>
                </center>
              </div>
              <div class="col-xs-12 dealer-map-div dealer-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.96035915018!2d87.2656363145993!3d26.424755787287697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75a43ecafab3%3A0x6e40f0780a00ef32!2sHulas+Motors+pvt+ltd!5e0!3m2!1sen!2snp!4v1467220023416" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <?php
            break;
            case '2':
              ?>
              <div class="col-xs-12 dealer-contact" >
                <center class="dealer-detail">
                  <h1>Kathmandu Trading</h1>
                  <h2>Munal Path</h2>
                  <h2>Koshi Highway</h2>
                  <h2>Biratnagar</h2>
                  <h2>Phone: 021-562082</h2>
                </center>
              </div>
              <div class="col-xs-12 dealer-map-div dealer-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.96035915018!2d87.2656363145993!3d26.424755787287697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75a43ecafab3%3A0x6e40f0780a00ef32!2sHulas+Motors+pvt+ltd!5e0!3m2!1sen!2snp!4v1467220023416" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <?php
            break;
          
          default:
            # code...
            break;
        }


        ?>
        <?php
        }
        else{
          ?>
              
          <?php
          }
         ?>
      </div>


</div>
 <?php include 'partials/footer.php'; ?>