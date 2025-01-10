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
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
      #map {
        height: 500px; /* Tinggi peta */
        width: 100%;   /* Lebar peta */
      }
    </style>

  </head>
  <body>
    <div class="apecsaos-wrapper">

      <!-- START SCOPE NAVBAR BOOTSTRAP -->
        <?php include 'header.php'; ?>
      <!-- END SCOPE NAVBAR BOOTSTRAP -->
      
      <!-- START SCOPE MAPS GOOGLE -->
        <div id="map"></div>
          <script>
            // Inisialisasi peta
            var map = L.map('map').setView([-7.434658513901028, 111.02469097785065], 15); // Lokasi (Jakarta Selatan)

            // Tambahkan tile layer dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Tambahkan marker di lokasi tertentu
            var marker = L.marker([-7.434658513901028, 111.02469097785065]).addTo(map)
              .bindPopup("<b>Amal Sehat</b><br>Sragen")
              .openPopup();
          </script>
      <!-- END SCOPE MAPS GOOGLE -->
      
      <!-- START SCOPE INFORMATION ADDRESS -->
      <div class="adresses">
        <div class="list-data">
          <ul>
            <li>
              <div class="icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="info">
                Jl. Veteran No.35, Kroyo, Kec. Karangmalang, Kabupaten Sragen, Jawa Tengah 57211
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fa fa-whatsapp"></i>
              </div>
              <div class="info">
                (0271) 891977
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="info">
                cs@rsiamalsehat.com
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END SCOPE INFORMATION ADDRESS -->
      
      <!-- START SCOPE FORM CONTACT US -->
      <section class="bg-white">
        
      </section>
      <!-- END SCOPE FORM CONTACT US -->

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
</html>
