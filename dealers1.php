<?php include 'partials/header.php'; ?>
<?php include 'partials/navigation.php'; ?>
<div class="desktop">
<div id="pushobj">
  <?php 

    if(!isset($_GET['id'])){
        ?>
        <div class=" col-xs-10 col-sm-10 col-md-10 col-lg-10 full-map " style="width: 100%;">
            <iframe style="width: 100% !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594415.0500480854!2d81.88565593584941!3d28.38390430942377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1466704019112" width="800" height="600" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>
        </div>
        <?php
    }else{
    $sn = $_GET['id'];

    switch ($sn) {
      case '1':
        ?>
        <div class="map-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 district-map-container map">
              <!-- <img src="assets/front-image/ktmmap.png"/> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33349.13689300593!2d85.34518679891195!3d27.701903739490007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198e0fc991cb%3A0xbdb97ffff1d2d75b!2sInBox+I.T.+Solution!5e0!3m2!1sen!2snp!4v1466702208674" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dealers-detail-container">
              <h1 class="dealer-name"><i class="fa fa-building-o" aria-hidden="true"></i> ABC Traders</h1>
              <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Shantinagar, Kathmandu</h2>
              <h3 class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 01-4107712</h3>
              <h3 class="mail-address"><i class="fa fa-envelope" aria-hidden="true"></i> abc@gmail.com</h3>
            </div>
          </div>

        <?php
        break;
         case 2:
        ?>
        <div class="map-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 district-map-container map">
              <img src="assets/front-image/ktmmap.png"/>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.96035915018!2d87.2656363145993!3d26.424755787287697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75a43ecafab3%3A0x6e40f0780a00ef32!2sHulas+Motors+pvt+ltd!5e0!3m2!1sen!2snp!4v1466702631865" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dealers-detail-container">
              <h1 class="dealer-name"><i class="fa fa-building-o" aria-hidden="true"></i> Hulas Motors</h1>
               <h2><i class="fa fa-map-marker" aria-hidden="true"></i> SBiratnagar, Kathmandu</h2>
              <h3 class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 01-4107712</h3>
              <h3 class="mail-address"><i class="fa fa-envelope" aria-hidden="true"></i> abc@gmail.com</h3>
            </div>
          </div>

        <?php
        break;
         case 3:
        ?>
        <div class="map-container">
    <div class="district-map-container">
      <img src="assets/front-image/aa.png"/>
    </div>
    <div class="dealers-detail-container">
      <h1 class="dealer-name">DEF Traders</h1>
      <h2>Shantinager, Kathmandu</h2>
      <h3 class="phone">01-4107712</h3>
      <h3 class="mail-address">abc@gmail.com</h3>
    </div>
  </div>

        <?php
        break;
         case 4:
        ?>
        <div class="map-container">
    <div class="district-map-container">
      <img src="assets/front-image/aa.png"/>
    </div>
    <div class="dealers-detail-container">
      <h1 class="dealer-name">DEF Traders</h1>
      <h2>Shantinager, Kathmandu</h2>
      <h3 class="phone">01-4107712</h3>
      <h3 class="mail-address">abc@gmail.com</h3>
    </div>
  </div>

        <?php
        break;
      
      default:
        ?>
        <img src="assets/front-image/mon.png"/>
        <?php
        break;
    }
}
   ?>
</div>
<div id="menu">
            <nav>
                <h2><i class="fa fa-reorder"></i>Zones</h2>
                <ul>
                    <!-- Zone 1 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Mechi</a>
                        <h2><i class="fa fa-map-o"></i>Mechi</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Jhapa</a>
                                <h2><i class="fa fa-map-marker"></i>Jhapa</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 2 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Koshi</a>
                        <h2><i class="fa fa-map-o"></i>Koshi</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Sunsari</a>
                                <h2><i class="fa fa-map-marker"></i>Sunsari</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Inaruwa</a>
                                <h2><i class="fa fa-map-marker"></i>Inaruwa</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 3 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Sagarmatha</a>
                        <h2><i class="fa fa-map-o"></i>Sagarmatha</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 4 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Janakpur</a>
                        <h2><i class="fa fa-map-o"></i>Janakpur</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 5 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Bagmati</a>
                        <h2><i class="fa fa-map-o"></i>Bagmati</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 6 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Narayani</a>
                        <h2><i class="fa fa-map-o"></i>Narayani</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 7 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Gandaki</a>
                        <h2><i class="fa fa-map-o"></i>Gandaki</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 8 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Lumbini</a>
                        <h2><i class="fa fa-map-o"></i>Lumbini</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 10 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Dhawalagiri</a>
                        <h2><i class="fa fa-map-o"></i>Dhawalagiri</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 11 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Rapti</a>
                        <h2><i class="fa fa-map-o"></i>Rapti</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 12 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Karnali</a>
                        <h2><i class="fa fa-map-o"></i>Karnali</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 13 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Bheri</a>
                        <h2><i class="fa fa-map-o"></i>Bheri</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone 14 -->
                    <li>
                        <a href="#"><i class="fa fa-map-o"></i>Mahakali</a>
                        <h2><i class="fa fa-map-o"></i>Mahakali</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i>Ilam</a>
                                <h2><i class="fa fa-map-marker"></i>Ilam</h2>
                                <ul>
                                    <a href="dealers.php?id=1" class="dealer-name">Bhudeo Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Bhairav Trading<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">Kali Motors<i class="floatRight fa fa-angle-right"></i></a>
                                    <a href="dealers.php?id=2" class="dealer-name">BCD1 Tours<i class="floatRight fa fa-angle-right"></i></a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Zone Ends -->
                </ul>
            </nav>
        </div>
        </div>
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
                                <a href="dealer-detail.php?id=1">Bhudeo Trading</a>
                            </li>
                            <li class="col-xs-12 btn btn-default">
                                <a href="dealer-detail.php?id=2">Bhairav Trading</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
<?php include 'partials/footer.php'; ?>
