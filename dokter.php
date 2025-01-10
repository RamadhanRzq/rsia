<!DOCTYPE html>
<html>
  <head>
    <title>RSI Amal Sehat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SCOPE MOBILE VERSION RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

    <!-- SCOPE ADD TO HOMESCREEN AND THEME COLOR -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="PT. Apecsa Optima Solusi">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- SCOPE COLOR FOR BROWSER CHROME, FIREFOX AND OPERA -->
    <meta name="theme-color" content="#F17127" />

    <!-- SCOPE BROWSER WINDOWS PHONE -->
    <meta name="msapplication-navbutton-color" content="#F17127">

    <!-- SCOPE BROWSER IOS, SAFARI BROWSER -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="HandheldFriendly" content="true" />

    <!-- SCOPE SHARE FACEBOOK -->
    <meta property="og:url" content="http://urlnya.com/"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="PT. Apecsa Optima Solusi"/>
    <meta property="og:description" content="PT. Apecsa Optima Solusi"/>
    <meta property="og:image" content="URL IMAGE WEBSITE"/>

    <!-- SCOPE SHARE TWITTER -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="apecsa"/>
    <meta name="twitter:title" content="PT. Apecsa Optima Solusi">
    <meta name="twitter:description" content="PT. Apecsa Optima Solusi"/>
    <meta name="twitter:creator" content="Fathan Rohman"/>
    <meta name="twitter:image:src" content="https://website.com/image250X250.png"/>
    <meta name="twitter:domain" content="website.com"/>

    <!-- SCOPE SHARE GOOGLE PLUS -->
    <meta itemprop="name" content="PT. Apecsa Optima Solusi"/>
    <meta itemprop="description" content="Apecsa Optima Solusi (ApecsaOS) Bergerak di jasa pembuatan aplikasi, e-gov, erp, custom software, mobile application"/>
    <meta itemprop="image" content="https://website.com/image250X250.png"/>

    <!-- SCOPE STLYESHEET -->
    <link rel="icon" type="image/ico" href="assets/images/logo/logorsia.png"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/revolution-slider.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/main-responsive.css">

    <script src="assets/js/jquery-3.1.0.min.js"></script>
  </head>
  <body>
    <div class="apecsaos-wrapper">

       <!-- START SCOPE NAVBAR BOOTSTRAP -->
        <?php include 'header.php'; ?>
      <!-- END SCOPE NAVBAR BOOTSTRAP -->
      
      <!-- START SCOPE SUB HEADER -->
      <!-- <section class="sub-header parallax-apecsa bg-portfolio">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="title">
              Dokter Kami
            </div>
            <div class="description">
              Amal Sehat mempunyai dokyter yang sangat profesional dll.
            </div>
          </div>
        </div>
      </section> -->
      <!-- END SCOPE SUB HEADER -->
      
        <!-- START SCOPE OUR TEAM -->
      <section class="our-team bg-white">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-white">Dokter Kami</span>
              </div>
              <div class="desc color-black">
                We are team professional
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="list-team">
                
                <?php
                  include 'tampilkan_dokter.php';
                ?>
                 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE OUR TEAM -->

      <!-- START SCOPE FOOTER -->
        <?php include 'footer.php'; ?>
      <!-- END SCOPE FOOTER -->

    </div>
  </body>

  <!-- SCOPE JAVASCRIPT -->
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.scrolltofixed.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.scrollspeed.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    // .modal-backdrop classes
    $(".modal-transparent").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-transparent");
      }, 0);
    });

    $(".modal-transparent").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-transparent");
    });

    $(".modal-fullscreen").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
      }, 0);
    });

    $(".modal-fullscreen").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    });
  </script>
</html>
