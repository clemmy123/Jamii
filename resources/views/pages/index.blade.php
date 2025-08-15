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
<h2 class="header-title" style="color: #bca002ff;">MINISTRY OF COMMUNITY DEVELOPMENT GENDER WOMEN AND SPECIAL GROUPS</h2>
<h3 style="color: #bca002ff;">(CD-MIS)</h3>
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
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="#" class="stretched-link">Gender and Women Empowerment</a></h4>
                            <p>Promoting gender equality and empowering women for inclusive community development.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="#" class="stretched-link">CD and CDTI&CDTTI</a></h4>
                            <p>Community Development provide training and support for sustainable community growth and capacity building.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="#" class="stretched-link">Children and Family</a></h4>
                            <p>Supporting family welfare and addressing children's issues for a stronger community.</p>
                        </div>

                    </div><!-- End Service Item -->
                    <div class="row gy-4">

                        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-activity icon"></i></div>
                                <h4><a href="#" class="stretched-link">NPA VWAC</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                                <h4><a href="#" class="stretched-link">Programs</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                                <h4><a href="#" class="stretched-link">Explore more...</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>

                        </div><!-- End Service Item -->

                    </div>

                </div>
            </div>

        </section>
    </main>
@endsection
