<?php
include('conf/koneksi.php');

// Query SQL
$sql_cek = "SELECT * FROM tb_profile WHERE id='3'";
$query_cek = mysqli_query($koneksi, $sql_cek);

// Cek apakah query berhasil
if (!$query_cek) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Ambil data
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
?>


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

    <!-- START SCOPE NAVBAR BOOTSTRAP -->
      <?php include 'header.php'; ?>
    <!-- END SCOPE NAVBAR BOOTSTRAP -->

    <div class="apecsaos-wrapper">
      <!-- START SCOPE SUB HEADER -->
      <section class="sub-header parallax-apecsa bg-service">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="title">
              Tentang Kami 
            </div>
            <div class="description">
              <?php echo $data_cek['tentang']; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE SUB HEADER -->
      
      <!-- START SCOPE INFORMATION DETAIL ABOUTUS -->
      <section class="content-video bg-white">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="video-wrapper">
                  <iframe width="100%" height="435" src="https://www.youtube.com/@rsiamalsehat7013" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-6">
                <div class="content-wrapper">
                  <div class="title">
                    Mengenai kami, RSI Amal Sehat Sragen
                  </div>
                  <div class="desc">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#about-visi" aria-expanded="true" aria-controls="about-visi">
                              Visi kami
                            </a>
                          </h4>
                        </div>
                        <div id="about-visi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <?php echo $data_cek['visi']; ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#misi" aria-expanded="false" aria-controls="misi">
                              Misi Kami
                            </a>
                          </h4>
                        </div>
                        <div id="misi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <?php echo $data_cek['misi']; ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#target" aria-expanded="false" aria-controls="target">
                              Sejarah
                            </a>
                          </h4>
                        </div>
                        <div id="target" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <?php echo $data_cek['sejarah']; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="text-center">
                  <a href="#" class="btn btn-default btn-lg">
                    <i class="fa fa-download"></i>
                    Company Profile Download
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE INFORMATION DETAIL ABOUTUS -->

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
  <script src="assets/js/incremental.number.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      incrementalNumber();
    });
  </script>
  <script src="assets/js/main.js"></script>
</html>
