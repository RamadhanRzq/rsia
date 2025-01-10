<?php
include('../conf/koneksi.php');

// Query SQL
$sql_cek = "SELECT * FROM tb_poli WHERE id='16'";
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
    <link rel="icon" type="image/ico" href="../assets/images/logo/logorsia.png"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/revolution-slider.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/main-responsive.css">

    <script src="../assets/js/jquery-3.1.0.min.js"></script>
  </head>
  <body>
    <div class="apecsaos-wrapper">
      <!-- END SCOPE HEADER -->
        <?php include 'header-poli.php'; ?>
      <!-- END SCOPE NAVBAR BOOTSTRAP -->

      <!-- START SCOPE SUB HEADER -->
      <section class="sub-header parallax-apecsa bg-service">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="title">
              Poli Ortopedi & Traumatologi
            </div>
            <div class="description">
              <?php echo $data_cek['kepala_poli']; ?>
            </div>

            <div class="description">
              <?php echo $data_cek['badan_poli']; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE SUB HEADER -->
      
      <!-- START SCOPE WHAT WE DO -->
      <!-- <section class="development-categories bg-gray">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">What we do</span>
              </div>
              <div class="desc color-black">
                Product and service offered by ApecsaOS consists of
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="box-categories">
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-desktop"></i>
                      </div>
                    </div>
                    <div class="title">
                      Software as a Service (SAAS)
                    </div>
                    <div class="description">
                      <p>
                        E‒government Suite (E-Budgeting, E-Planning, E-Monitoring), ERP (Enterprise Resource Planning System)
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-mobile"></i>
                      </div>
                    </div>
                    <div class="title">
                      ICT Consultant
                    </div>
                    <div class="description">
                      <p>
                        Website development, Mobile apps Development, Custom Software
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-server"></i>
                      </div>
                    </div>
                    <div class="title">
                      Design & Branding Consultant
                    </div>
                    <div class="description">
                      <p>
                        Logo Design, Office Kit (Business Card, Letterhead, Envelope, Stamp, Map), Communication Kit (Brochure, Flyer, Catalogue), Company Profile, Illustration, Photography
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- END SCOPE WHAT WE DO -->

      <!-- START SCOPE TECHNOLOGIES WE USE-->
     <!--  <section class="technologies-we-use">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">Technologies We Use</span>
              </div>
              <div class="desc color-black">
                Beberapa teknologi yang kami gunakan dalam tahap development
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="list-techno">
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="SASS">
                    <i class="devicon-sass-original"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Amazon Web Services">
                    <i class="devicon-amazonwebservices-original"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="PHP Storm">
                    <i class="devicon-phpstorm-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Apache">
                    <i class="devicon-apache-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Bitbucket">
                    <i class="devicon-bitbucket-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Twitter Bootstrap">
                    <i class="devicon-bootstrap-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Codeigniter">
                    <i class="devicon-codeigniter-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Confluence">
                    <i class="devicon-confluence-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="CSS3">
                    <i class="devicon-css3-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Djanggo">
                    <i class="devicon-django-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Git">
                    <i class="devicon-git-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Go">
                    <i class="devicon-go-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Gulp">
                    <i class="devicon-gulp-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="HTML5">
                    <i class="devicon-html5-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="jQuery">
                    <i class="devicon-jquery-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Laravel">
                    <i class="devicon-laravel-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="MySql">
                    <i class="devicon-mysql-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Nginx">
                    <i class="devicon-nginx-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Postgresql">
                    <i class="devicon-postgresql-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Python">
                    <i class="devicon-python-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Ruby">
                    <i class="devicon-ruby-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Ruby On Rails">
                    <i class="devicon-rails-plain"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- END SCOPE TECHNOLOGIES WE USE-->

      <!-- START SCOPE INTRODUCE CONTACT US -->
      <!-- <section class="parallax-apecsa bg-img-2 introduce-wrapper contact-us">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-white">
                <span>Contact Us</span>
              </div>
              <div class="desc color-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eaque, quisquam blanditiis, voluptatibus, delectus nesciunt tenetur cupiditate quae facere voluptates nihil saepe tempora laboriosam alias a quod! Libero, ipsum, blanditiis.
              </div>
              <a href="contactus.html" class="btn btn-apecsa-orange btn-lg">
                <i class="fa fa-envelope"></i>
                Hubungi Kami
              </a>
            </div>
          </div>
        </div>
      </section> -->
      <!-- END SCOPE INTRODUCE CONTACT US -->

      <!-- START SCOPE FOOTER -->
        <?php include 'footer-poli.php'; ?>
      <!-- END SCOPE FOOTER -->

    </div>
  </body>

  <!-- SCOPE JAVASCRIPT -->
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.scrolltofixed.js"></script>
  <script src="../assets/js/wow.min.js"></script>
  <script src="../assets/js/jquery.scrollspeed.js"></script>
  <script src="../assets/js/main.js"></script>
  </html>
