<?php
include('conf/koneksi.php');
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
    <div class="apecsaos-wrapper">

       <!-- START SCOPE NAVBAR BOOTSTRAP -->
        <?php include 'header.php'; ?>
      <!-- END SCOPE NAVBAR BOOTSTRAP -->
      
      <!-- START SCOPE SUB HEADER -->
      <section class="sub-header parallax-apecsa bg-service">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="title">
              Jadwal Doker RSI Amal Sehat Sragen
            </div>
            <div class="table-responsive">
             
              <table class="table table-striped table-bordered table-hover table-sm">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Praktek</th>
                    <th scope="col">Jam Praktek</th>
                  </tr>
                </thead>
                <tbody>
                 

                    <?php
                    $no = 1;
                $sql = $koneksi->query("SELECT * from tb_dokter");
                    while ($data= $sql->fetch_assoc()) {
                  ?>

                <tr>
                  <td>
                    <?php echo $no++; ?>
                  </td>
                  
                  <td>
                    <?php echo $data['nama']; ?>
                  </td>

                  <td>
                    <?php echo $data['spesialis']; ?>
                  </td>

                  <td>
                    <?php echo $data['praktek']; ?>
                  </td>

                  <td>
                    <?php echo $data['waktu']; ?>
                  </td>
                </tr>

                <?php
                    }
                  ?>


                </tbody>
              </table>

            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE SUB HEADER -->

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
