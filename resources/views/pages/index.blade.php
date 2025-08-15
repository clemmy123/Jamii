@extends('layouts.app2')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="section" style="background-image: url('{{ asset('landing/img/banner-bg.png') }}'); background-size: cover;">
            <div class="container">
               <div class="hero-img-container text-center mb-4">
            <img src="{{ asset('landing/img/nembo2.png') }}"  alt="Hero Image" style="height: 120px; width: 120px;">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
<h2 class="header-title" style="color: #e6b800;">MINISTRY OF COMMUNITY DEVELOPMENT GENDER WOMEN AND SPECIAL GROUPS</h2>
<h3 style="color: #e6b800;">(CD-MIS)</h3>
                    </div>
                </div>
                {{-- <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2>MINISTRY OF COMMUNITY DEVELOPMENT GENDER WOMEN AND SPECIAL GROUPS</h2>
                        <p>We are team of talented designers making websites with Bootstrap</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Sign Up</a>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                            {{-- <img src="{{ asset('landing/img/hero-img.png') }}" class="img-fluid animated" alt=""> --}}
                        {{-- </div>
                    </div>
                </div> --}}

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
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
