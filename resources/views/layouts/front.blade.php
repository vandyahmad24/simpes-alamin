<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Ponpes Al Amin Pabuwaran</title>
  <meta content="Pondok Pesantren Al Qur'an Al Amin Pabuwaran" name="description">
  <meta content="Pondok Pesantren Al Qur'an Al Amin Pabuwaran" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front/img/ppq.png')}}" rel="icon">
  <link href="{{asset('front/img/ppq.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v2.2.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>PPQ</span>Al Amin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('front/img/logo.png')}}')}}" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#home">Home</a></li>
          <li class="drop-down"><a href="">Profil</a>
            <ul>
              <li><a href="#sejarah">Sejarah</a></li>
              <li><a href="#visi">Visi Misi</a></li>
            </ul>
          </li>
          <li><a href="{{route('daftar-online')}}">Pendaftaran</a></li>
          <li><a href="#team">Potret Pesantren</a></li>
          <li><a href="#portfolio">Media Partner</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->
  @yield('content')

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-content">
                  <div class="footer-head">
                    <div class="footer-logo">
                      <h2><span>PPQ</span>Al Amin</h2>
                    </div>
    
                    <p> Mendidik dan mencetak generasi masa depan yang berjiwa ikhlas dan barokah dalam berjuang di jalan Islam. .</p>
                  </div>
                </div>
              </div>
              <!-- end single footer -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-content">
                  <div class="footer-head">
                    <h4>information</h4>
                    <p>
                      
Jalan H.R Boenyamin Gg Gunung Sumbing No 13. A Pabuaran Purwokerto Utara
                    </p>
                    <div class="footer-contacts">
                      <p><span>Tel:</span> {{$telp}}</p>
                      <p><span>Email:</span> {{$email}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end single footer -->
              
            </div>
          </div>
        </div>
        <div class="footer-area-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="copyright text-center">
                  <p>
                    &copy; Copyright <strong>Al  Amin</strong>. Pabuwaran
                  </p>
                </div>
                <div class="credits">
                  <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                -->
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- End  Footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <div id="preloader"></div>
    
      <!-- Vendor JS Files -->
      <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('front/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{asset('front/vendor/appear/jquery.appear.js')}}"></script>
      <script src="{{asset('front/vendor/knob/jquery.knob.js')}}"></script>
      <script src="{{asset('front/vendor/parallax/parallax.js')}}"></script>
      <script src="{{asset('front/vendor/wow/wow.min.js')}}"></script>
      <script src="{{asset('front/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('front/vendor/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
      <script src="{{asset('front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('front/vendor/venobox/venobox.min.js')}}"></script>
    
      <!-- Template Main JS File -->
      <script src="{{asset('front/js/main.js')}}"></script>
    
    </body>
    
    </html>