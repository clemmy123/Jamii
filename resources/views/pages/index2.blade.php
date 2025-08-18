@extends('layouts.app2')

@section('content')
    @include('layouts.modal')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="section"
            style="background-image: url('{{ asset('landing/img/b3.jpg') }}'); background-size: cover;">

            <div class="container">
                <div class="row align-items-center" style="min-height: 70vh;">
                    <div class="col">
                        <div class="row gx-4">
                            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                                data-aos="fade-up">
                                <h1 class="baloo-bhaijaan-2-400" style="color: #e6b800;">MINISTRY OF COMMUNITY DEVELOPMENT
                                    GENDER WOMEN AND SPECIAL GROUPS</h1>
                                <h6 class="display-6 text-white" style="font-size: 24px;">Community Development Information
                                    System (CD-IS)</h6>
                                {{-- <div class="d-flex">
                                    <a href="#featured-services" class="btn rounded-pill px-3 border-3 border-white"
                                        style="background-color: #e6b800">
                                        View Services
                                        <i class="bi bi-arrow-right ms-2" style="font-size: 1.2rem;"></i>
                                    </a>

                                </div> --}}
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img px-3" data-aos="zoom-out" data-aos-delay="100">
                                <div class="row w-100 justify-content-center align-items-center py-5"
                                    style="background-color: ;">
                                    <div class="col">
                                        <div class="card py-5 rounded-5">
                                            <div class="card-body py-5">
                                                <div class="input-group mb-4 shadow rounded-pill">
                                                    <span class="input-group-text rounded-start-pill"><i class="bi bi-search"></i></span>
                                                    <input type="text" class="form-control form-control-lg rounded-end-pill" placeholder="Search">
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-4 text-center">
                                                        <i class="bi bi-people-fill"
                                                            style="font-size: 2.5rem; color: #e6b800;"></i>
                                                        <div style="color: #888; font-size: 1rem;">Gender & Women
                                                            Empowerment</div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <i class="bi bi-building-fill-up"
                                                            style="font-size: 2.5rem; color: #e6b800;"></i>
                                                        <div style="color: #888; font-size: 1rem;">CD & CDTI/CDTTI</div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <i class="bi bi-diagram-3-fill"
                                                            style="font-size: 2.5rem; color: #e6b800;"></i>
                                                        <div style="color: #888; font-size: 1rem;">Children & Family</div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <i class="bi bi-collection-fill"
                                                            style="font-size: 2.5rem; color: #e6b800;"></i>
                                                        <div style="color: #888; font-size: 1rem;">NPA VWAC</div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <i class="bi bi-card-list"
                                                            style="font-size: 2.5rem; color: #e6b800;"></i>
                                                        <div style="color: #888; font-size: 1rem;">Programs</div>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <i class="bi bi-card-checklist"
                                                            style="font-size: 2.5rem; color: #e6b800;"></i>
                                                        <div style="color: #888; font-size: 1rem;">Report Cases</div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <a href="#featured-services"
                                                            class="btn btn-getstarted w-100 py-3 rounded-pill px-3 border-3 border-white"
                                                            style="font-weight: 500;background-color:#e6b800">
                                                            Get Started
                                                            <i class="bi bi-arrow-right ms-2"
                                                                style="font-size: 1.2rem;"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
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
                        description: 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
                    },
                    {
                        icon: 'bi bi-calendar4-week',
                        title: 'Madawati ya Jinsia',
                        description: 'Report cases about children and family welfare, Gender and Development issues.'
                    },
                    {
                        icon: 'bi bi-calendar4-week',
                        title: 'Majukwaa uwezeshaji',
                        description: 'Report cases about children and family welfare, Gender and Development issues.'
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
