<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>
<!-- Sub Nav -->
<section class="nav-tab">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <ul class="navpills">
                    <li>
                      <a href="download_battery.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/download.png"> --><h6>Brochure</h6></a>
                    </li>

                    <li>
                      <a href="specs_battery.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/specs.png"> --><h6>Specs</h6></a>
                    </li>
                    <?php include 'partials/sub-menu-modal.php'; ?>
                    </li>
                    <li><a href="gallery.php"><!-- <img src="http://hulasmotors.com/demo/hulasmotors/assets-front/images/gal.png"> --><h6>Gallery</h6></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Subnav -->
<section class="brochure" id="product-container">
  <div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="page-header">
            <h1 id="tab1">Brochures</h1>
        </div>
    </div>
    <div class="table-container">
      <table class="table table-hover">
          <thead>
            <tr>
              <th>Product Name</th>
              <th colspan="2"></th>
              <th>Downloads</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Green Battery</td>
              <td colspan="2"></td>
              <td>
                <!-- View Modal -->
                <a data-toggle="modal" data-target="#myModalBrochure" href="#"  class="option">View</a>
                         <!-- Modal Started -->
                       <!-- Modal -->
                        <div class="modal fade" id="myModalBrochure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><h1 style="font-size: 20px; text-align: center; margin: 0px;">Green Battery</h1></h4>
                              </div>
                              <div class="modal-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="assets/back-image/press/1.jpg"/>
                                    </div>
                                    <div class="item">
                                      <img src="assets/back-image/press/2.jpg"/>
                                    </div>
                                    <div class="item">
                                      <img src="assets/back-image/press/3.jpg"/>
                                    </div>
                                  </div>
                                  <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myModalBrochure" role="button" data-slide="prev">
                                          <span ><img src="assets/front-image/btnPrev.png"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myModalBrochure" role="button" data-slide="next">
                                          <span ><img src="assets/front-image/btnNext.png"></span>
                                        </a>
                                </div> 
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal Ended -->
      <!-- View Modal -->




              <a href="#"  class="option">Download</a></td>
            </tr>
            <tr>
              <td>White Battery</td>
              <td colspan="2"></td>
              <td>
                <!-- View Modal -->
                <a data-toggle="modal" data-target="#myModalBrochure" href="#"  class="option">View</a>
                         <!-- Modal Started -->
                       <!-- Modal -->
                        <div class="modal fade" id="myModalBrochure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><h1 style="font-size: 20px; text-align: center; margin: 0px;">White Battery</h1></h4>
                              </div>
                              <div class="modal-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="assets/back-image/press/1.jpg"/>
                                    </div>
                                    <div class="item">
                                      <img src="assets/back-image/press/2.jpg"/>
                                    </div>
                                    <div class="item">
                                      <img src="assets/back-image/press/3.jpg"/>
                                    </div>
                                  </div>
                                  <a class="left carousel-control" href="#myModalBrochure" role="button" data-slide="prev">
                                    <span ><img src="assets/front-image/btnPrev.png"></span>
                                  </a>
                                  <a class="right carousel-control" href="#myModalBrochure" role="button" data-slide="next">
                                    <span ><img src="assets/front-image/btnNext.png"></span>
                                  </a>
                                </div> 
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal Ended -->
      <!-- View Modal -->




              <a href="#"  class="option">Download</a></td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>

</section>

<?php include 'partials/footer.php'; ?>
