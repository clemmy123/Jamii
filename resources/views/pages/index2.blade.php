@extends('layouts.app2')

@section('content')
    @include('layouts.modal')
    @include('layouts.side_modal')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="section"
            style="background-image: url('{{ asset('landing/img/theme3.jpg') }}'); background-size: cover;">

            <div class="container">
                <div class="row align-items-center" style="min-height: 70vh;">
                    <div class="col">
                        <div class="row gx-4">
                            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                                data-aos="fade-up">
                                <h1 class="baloo-bhaijaan-2-400" style="color: #fde68d;">MINISTRY OF COMMUNITY DEVELOPMENT
                                    GENDER WOMEN AND SPECIAL GROUPS</h1>
                                <h6 class="display-6 text-white" style="font-size: 24px;">Community Development Information
                                    System (CDIS)</h6>
                                <div class="d-flex">
                                    <a class="btn-getstarted px-4 py-2 fs-5 rounded-pill shadow"
                                        href="landing/user.pdf" target="_blank"
                                        style="background-color: #fefefd; color: #000; border: 2px solid #fff; transition: all 0.3s;">
                                        <i class="bi bi-file-pdf me-2"></i> User Guidelines
                                    </a>
                                 </div>
                            </div>
                          <div class="col-lg-6 order-1 order-lg-2 hero-img px-3" data-aos="zoom-out" data-aos-delay="100">
       <div class="col-lg-15 order-10 order-lg-5 hero-img px-3" data-aos="zoom-out" data-aos-delay="100">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img src="landing/img/zoom.jpeg" class="d-block w-100 img-fluid" alt="Slide 1" 
                     style="transform: scale(1.1); transform-origin: center;">
            </div>

            <div class="carousel-item">
                <img src="landing/img/zoom.jpeg" class="d-block w-100 img-fluid" alt="Slide 2" 
                     style="transform: scale(1.1); transform-origin: center;">
            </div>

            <div class="carousel-item">
                <img src="landing/img/zoom.jpeg" class="d-block w-100 img-fluid" alt="Slide 3" 
                     style="transform: scale(1.1); transform-origin: center;">
            </div>

        </div>

        </div>
</div>
            </div>
                    </div>

                </div>


        </section><!-- /Hero Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">
                <div class="section-header pt-5">

                    <p class="fs-4 mt-2 text-center fw-bold">Services</p>
                </div>

                <div class="row gy-4 pt ">

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-people-fill icon" style="color: #e6b800;"></i></div>
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
                            <div class="icon"><i class="bi bi-building-fill-up icon" style="color: #e6b800;"></i></div>
                            <h4><a href="#" class="stretched-link cd-link">CD and CDTI&CDTTI</a></h4>
                            <style>
                                .cd-link:hover {
                                    color: #e6b800 !important;
                                }
                            </style>
                            <p>Community Development provide training and support for sustainable community growth and
                                capacity building.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-diagram-3-fill icon" style="color: #e6b800;"></i></div>
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
                                <div class="icon"><i class="bi bi-collection-fill icon" style="color: #e6b800;"></i>
                                </div>
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
                                <div class="icon"><i class="bi bi-card-list icon" style="color: #e6b800;"></i>
                                </div>
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
                                <div class="icon"><i class="bi bi-card-checklist icon" style="color: #e6b800;"></i>
                                </div>
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

    <script>
        // Example of how to call the showModal function
        document.querySelectorAll('.gender-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                const items = [{
                        icon: 'bi bi-wallet-fill',
                        title: 'WDF-Loans',
                        description: 'Apply online view status for disbursment and make payment Economic women empowerment.'
                        
                    },
                    {
                        icon: 'bi bi-bounding-box-circles',
                        title: 'Women Leadership(twl)',
                        description: 'Register,Update details in different leadership positions'
                    },
                    {
                        icon: 'bi bi-calendar4-week',
                        title: 'Gender Desks',
                        description: 'Report cases about children and family welfare, Gender and Development issues.'
                    },
                    {
                        icon: 'bi bi-calendar4-week',
                        title: 'Women Economic Empowerment Forums',
                        description: 'Report cases about women development forums, Gender and Development issues.'
                    }
                ];

                showModal(items);
            });
        });
        document.querySelectorAll('.cd-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                const items = [{
                        icon: 'bi bi-activity',
                        title: 'CDTI and CDTTI',
                        description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
                    },
                    {
                        icon: 'bi bi-bounding-box-circles',
                        title: 'CODEPATA',
                        description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
                    },
                    {
                        icon: 'bi bi-calendar4-week',
                        title: 'Miradi ya maendeleo',
                        description: 'Report cases about children and family welfare, Gender and Development issues.'
                    }
                ];

                showModal(items);
            });
        });
        document.querySelectorAll('.ch-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                const items = [{
                        icon: 'bi bi-activity',
                        title: 'Parenting Groups',
                        description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
                    },
                    {
                        icon: 'bi bi-bounding-box-circles',
                        title: 'Family-IS',
                        description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
                    },
                    {
                        icon: 'bi bi-calendar4-week',
                        title: 'Usalama wa mtoto',
                        description: 'Report cases about children and family welfare, Gender and Development issues.'
                    }
                ];

                showModal(items);
            });
        });
    </script>
@endsection
