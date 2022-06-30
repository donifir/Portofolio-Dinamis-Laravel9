<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/iPortfolio/assets/img/favicon.png" rel="icon">
  <link href="/iPortfolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/iPortfolio/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/iPortfolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/iPortfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/iPortfolio/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/iPortfolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/iPortfolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/iPortfolio/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@include('sweetalert::alert')

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="/iPortfolio/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/iPortfolio/index.html">{{$about->jawaban1}}</a></h1>
        <div class="social-links mt-3 text-center">
          @foreach ($sosmeds as $sosmed )
          <a href="{{$sosmed->link}}" class="facebook"><i class="{{$sosmed->icon->kode_icon}}"></i></a>
          @endforeach
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ (request()->is('/')) ? '/#hero' : '/#hero' }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ (request()->is('/')) ? '/#about' : '/#about' }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{ (request()->is('/')) ? '/#resume' : '/#resume' }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{ (request()->is('/')) ? '/#portfolio' : '/#portfolio' }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
          <li><a href="{{ (request()->is('/')) ? '/#contact' : '/#contact' }}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

@yield('body')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/iPortfolio/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/iPortfolio/assets/vendor/aos/aos.js"></script>
  <script src="/iPortfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/iPortfolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/iPortfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/iPortfolio/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/iPortfolio/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/iPortfolio/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/iPortfolio/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/iPortfolio/assets/js/main.js"></script>

</body>

</html>