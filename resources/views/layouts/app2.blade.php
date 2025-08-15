<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Community Development Services</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">


  <!-- Favicons -->
  <link href="{{ asset('landing/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
<link href="{{ asset('landing/fonts/googlefonts-preconnect.css') }}" rel="preconnect">
<link href="{{ asset('landing/fonts/googlefonts-preconnect-crossorigin.css') }}" rel="preconnect" crossorigin>
<link href="{{ asset('landing/fonts/googlefonts.css') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('landing/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
<link href="{{ asset('landing/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .header-title {
  font-family: "Outfit", sans-serif;
  font-optical-sizing: 40px;
  font-weight: 700;
  font-style: regular;
}
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index-2.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">CD-MIS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        {{-- <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul> --}}
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted px-4 py-2 fs-5 rounded-pill shadow" href="#" style="background-color: #e6b800; color: #000; border: 2px solid #fff; transition: all 0.3s;">
        <i class="bi bi-person-plus me-2"></i> Sign Up
      </a>

    </div>
  </header>

@include('layouts.header1')
@yield('content')

<!-- ======= Footer ======= -->

@include('layouts.end')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  {{-- <div id="preloader"></div> --}}

  <!-- Vendor JS Files -->
<script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('landing/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landing/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('landing/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('landing/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('landing/js/main.js') }}"></script>

</body>


<!-- Mirrored from themewagon.github.io/eNno/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 13:46:48 GMT -->
</html>