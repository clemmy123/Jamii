@extends('layouts.app2')

@section('content')
 
 <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section"style="background-image: url('{{ asset('landing/img/banner-bg.png') }}'); background-size: cover;">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h3 style="color: #e6b800;">MINISTRY OF COMMUNITY DEVELOPMENT GENDER WOMEN AND SPECIAL GROUPS</h3>
            <p style="color: #e6b800;">Community Development Information System (CD-MIS)</p>
            <div class="d-flex">
            <a href="#" class="btn-get-started" style="background-color: #e6b800; color: #080808ff; border: none;">Get Started</a>
              {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <div style="width: 100%; height: 150%; background-color: #e0e0e0; border-radius: 16px; display: flex; align-items: center; justify-content: center;">
                <div class="row w-100 justify-content-center align-items-center">
                    <div class="col-4 text-center">
                        <i class="bi bi-activity" style="font-size: 2.5rem; color: #e6b800;"></i>
                        <div style="color: #888; font-size: 1rem;">Gender & Women Empowerment</div>
                    </div>
                    <div class="col-4 text-center">
                        <i class="bi bi-bounding-box-circles" style="font-size: 2.5rem; color: #e6b800;"></i>
                        <div style="color: #888; font-size: 1rem;">CD & CDTI/CDTTI</div>
                    </div>
                    <div class="col-4 text-center">
                        <i class="bi bi-calendar4-week" style="font-size: 2.5rem; color: #e6b800;"></i>
                        <div style="color: #888; font-size: 1rem;">Children & Family</div>
                    </div>
                     <div class="col-4 text-center">
                        <i class="bi bi-calendar4-week" style="font-size: 2.5rem; color: #e6b800;"></i>
                        <div style="color: #888; font-size: 1rem;">NPA VWAC</div>
                    </div>
                     <div class="col-4 text-center">
                        <i class="bi bi-calendar4-week" style="font-size: 2.5rem; color: #e6b800;"></i>
                        <div style="color: #888; font-size: 1rem;">Programs</div>
                    </div>
                     <div class="col-4 text-center">
                        <i class="bi bi-calendar4-week" style="font-size: 2.5rem; color: #e6b800;"></i>
                        <div style="color: #888; font-size: 1rem;">Report Cases</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
            <section id="featured-services" class="featured-services section">

            <div class="container">
                <div class="section-header">
                    <p class="fs-4 mt-2">Select Services below...</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon" ><i class="bi bi-activity icon"style="color: #e6b800;"></i></div>
                            <h4><a href="#" class="stretched-link gender-link">Gender and Women Empowerment</a></h4>
                            <style>
                                .gender-link:hover {
                                    color: #e6b800 !important;
                                }
                            </style>
                            <p>Promoting gender equality and empowering women for inclusive community development.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"style="color: #e6b800;"></i></div>
                            <h4><a href="#" class="stretched-link cd-link">CD and CDTI&CDTTI</a></h4>
                            <style>
                                .cd-link:hover {
                                    color: #e6b800 !important;
                                }
                            </style>
                            <p>Community Development provide training and support for sustainable community growth and capacity building.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"style="color: #e6b800;"></i></div>
                            <h4><a href="#" class="stretched-link ch-link">Children and Family</a></h4>
                            <style>
                                .ch-link:hover {
                                    color: #e6b800 !important;
                                }
                            </style>
                            <p>Supporting family welfare and addressing children's issues for a stronger community.</p>
                        </div>

                    </div><!-- End Service Item -->
                    <div class="row gy-4">

                        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-activity icon"style="color: #e6b800;"></i></div>
                                <h4><a href="#" class="stretched-link npa-link">NPA VWAC</a></h4>
                                <style>
                                    .npa-link:hover {
                                        color: #e6b800 !important;
                                    }
                                </style>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-bounding-box-circles icon"style="color: #e6b800;"></i></div>
                                <h4><a href="#" class="stretched-link program-link">Programs</a></h4>
                                <style>
                                    .program-link:hover {
                                        color: #e6b800 !important;
                                    }
                                </style>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar4-week icon"style="color: #e6b800;"></i></div>
                                <h4><a href="#" class="stretched-link explore-link">Explore more...</a></h4>
                                <style>
                                    .explore-link:hover {
                                        color: #e6b800 !important;
                                    }
                                </style>
                                <p>Report cases about children and family welfare, Gender and Development issues.</p>
                            </div>

                        </div><!-- End Service Item -->

                    </div>

                </div>
            </div>

        </section>
    </main>
@endsection 