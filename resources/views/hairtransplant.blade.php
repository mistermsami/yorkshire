@php
    $pagename = 'Hair Transplant';
    // $title = 'Home';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    {{-- for meta tags (SEO)
    and for custom css --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <style>
        .aboutmain_sec {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f3f1ee;
        }

        .aboutmain_sec h2 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px !important;
        }

        .aboutmain_sec_img {
            border-radius: 15px;
            width: 100%;
        }

        .aboutmain_sec .aboutsideimg {
            height: 500px;
        }

        .aboutsecond_sec {
            padding: 80px 0 40px 0;
            background-color: #fff;
        }

        /* .aboutsecond_sec .profile-widget{
                                background-color: #f3f1ee;
                                border-radius: 20px;
                                padding: 20px;
                            } */
        .aboutsecond_sec .aboutsideimg img {
            height: 500px;
            border-radius: 25px !important;
        }

        .aboutsecond_sec .section-header {
            margin-bottom: 30px !important;
        }

        .aboutthird_sec {
            padding: 80px 0 40px 0;
        }

        .aboutthird_sec .profile-widget {
            border-radius: 20px;
        }

        .aboutthird_sec .aboutsideimg img {
            height: 500px;
            border-radius: 25px !important;
        }

        .aboutthird_sec .section-header {
            margin-bottom: 30px !important;
        }

        .aboutmain_sec .about-content .booking {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            margin-top: 40px;
            border-radius: 3px;
            transition: 0.3s;
        }

        .results .card {
            border: none;
        }

        .results .card-header {
            border: none;
        }

        .results .card-header img {
            width: 100%;
            height: 250px;
        }

        .results .card-body {
            margin-top: 10px;
            border-radius: 10px;
            padding: 20px;
            background-color: #f3f1ee;
        }

        .carousel-control-prev-icon {
            background-image: none;
            width: 3rem;
            height: 3rem;
            background-color: #1977cc;
            mask-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 11-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z'/%3E%3C/svg%3E");
            mask-size: cover;
        }

        .carousel-control-next-icon {
            background-image: none;
            width: 3rem;
            height: 3rem;
            background-color: #1977cc;
            mask-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M4.646 1.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 11-.708-.708L10.293 8 4.646 2.354a.5.5 0 010-.708z'/%3E%3C/svg%3E");
            mask-size: cover;
        }

        .afterresult .card {
            background-color: #1977cc;
            margin: 5px;
            color: #fff;
            padding: 20px;
        }

        .afterresult .card h4 {
            color: #fff;
        }

        .experts {
            margin-top: 50px;
            background-color: #f3f1ee;
        }

        .experts .docbtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
            transition: 0.3s;
        }

        .experts .doc_details img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 25px;
        }

        .experts .card_centered_content {
            display: flex;
            align-items: center;
            justify-content: start;
            background-color: #f6faf5;
            /* Light greenish background */
            border: none;
            /* height: 100px; */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .experts .icon {
            font-size: 24px;
            /* Adjust icon size */
            color: #1977cc;
            /* Dark green color */
            margin-right: 10px;
        }

        .experts .text {
            display: flex;
            flex-direction: column;
        }

        .experts .title {
            font-weight: 700;
            color: #1977cc;
            /* Dark green color */
            margin-bottom: 2px;
        }

        .exploreclinic {
            background-color: #f1f7fc;
        }

        .exploreclinic .carousel-indicators {
            position: relative;
            /* color: #1977cc; */
        }

        .exploreclinic .carousel-indicators button {
            background-color: #1977cc;
            border: none;
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }

        .exploreclinic .carousel-item .card {
            border: none;
        }

        .exploreclinic .carousel-item .card img {
            height: 500px;
            border-radius: 20px;
            object-fit: cover;
        }

        .howitworks .card {
            border: none;
            border-radius: 20px;
        }

        .howitworks .card-header {
            border-radius: 20px 20px 0 0;
            border: none;
        }

        .howitworks .card-header img {
            height: 300px;
            object-fit: cover;
        }

        .howitworks .card-body {
            background-color: #1977cc;
            color: #f1f7fc;
            border-radius: 0 0 20px 20px;
            border: none;
        }

        .howitworks .card-body .card-title {
            font-weight: 700;
        }
        /* .hairTfaq .hidden-content {
            display: none;

        } */
        .hairTfaq .details p {
            transition: all 0.5s ease-in-out;
        }
        .hairTfaq .hidden-content {
            display: none;
        }
        .hairTfaq .seemorebtn{
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
            transition: 0.3s;
        }
        @media only screen and (max-width: 768px) {
            .pricing .card{
                margin-bottom: 20px;
            }
            .exploreclinic .card{
                margin-bottom: 20px;
            }
            .howitworks .card{
                margin-bottom: 20px;
            }
            .hairTfaq .nav-item .active{
                background-color:#f1f7fc;
            }
        }

        /* .experts .subtitle {
                    font-size: 14px;
                    color: #5c7a7a;
                } */
    </style>
@endsection

@section('maincontent')
    <main class="main">
        <!-- Popular Section -->
        <section class="section aboutmain_sec about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="px-4">

                            <div class="section-header ">
                                {{-- <p>Our Services</p> --}}
                                <h2>Hair Transplants from the UK’s Leading Hair Loss Clinic</h2>
                                {{-- <h3 style="font-size: 34px; font-weight: 600;">This feels good,</h3> --}}
                            </div>
                            <div class="about-content">
                                {{-- <p><b>We’re challenging the outdated notion that real men shrug their shoulders and carry
                                    on.</b></p> --}}
                                <p>
                                    Restore your hair with the UK’s most trusted hair clinic. Yrokshire has helped over
                                    <b>200,000</b> men regain their confidence.
                                </p>
                                <button class="cta-btn booking d-none d-sm-block" href="#appointment">Book a
                                    Culsultation</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start">
                        <img src="assets/img/about.jpg" class="aboutmain_sec_img" alt="">
                        <a href="https://www.youtube.com/embed/QvzQlwSnzTQ?si=simxRnGf6dYMNeyV"
                            class="glightbox pulsating-play-btn"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Section -->


        <!-- Services Section -->
        <section id="services" class="services results section">

            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>Results</h2>
                <p>
                    Our surgeons have performed over 7,500 successful hair transplants.
                </p>
            </div><!-- End Section Title -->

            <div class="">
                <div class="row gy-4">
                    <div class="position-relative">
                        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/result1.png" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Procedure:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    FUE hair transplant
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Grafts:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    1,720
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Time post transplant:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    12 months
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/result2.png" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Procedure:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    FUE hair transplant
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Grafts:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    1,720
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Time post transplant:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    12 months
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/result3.png" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Procedure:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    FUE hair transplant
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Grafts:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    1,720
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Time post transplant:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    12 months
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/result4.png" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Procedure:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    FUE hair transplant
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Grafts:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    1,720
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Time post transplant:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    12 months
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/result5.png" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Procedure:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    FUE hair transplant
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Grafts:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    1,720
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Time post transplant:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    12 months
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/result6.png" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Procedure:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    FUE hair transplant
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Grafts:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    1,720
                                                                </p>
                                                            </div>
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Time post transplant:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    12 months
                                                                </p>
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
                        <button class="carousel-control-prev position-absolute top-50 start-0 translate-middle-y"
                            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"
                            style="margin-left: -13px; color: #1977cc;">
                            <span class="carousel-control-prev-icon" style="filter: invert(0);"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next position-absolute top-50 end-0 translate-middle-y"
                            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"
                            style="margin-right: -13px; color: #1977cc;">
                            <span class="carousel-control-next-icon" style="filter: invert(0);"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>



        </section>
        <!-- /Services Section -->

        <section id="services" class="services afterresult section">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="icon-box aos-init aos-animate" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-shield-fill-check"></i>
                                    <h4>Expertise You Can Trust</h4>
                                    <p>
                                        Our team of specialists brings years of experience in hair and skin treatments.
                                        We use advanced techniques and technology to ensure safety.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="icon-box aos-init aos-animate" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-person-fill-check"></i>
                                    <h4>Personalized Care</h4>
                                    <p>
                                        Every client is unique. We tailor each treatment plan to match your individual
                                        goals, ensuring you get the attention and results you deserve.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="icon-box aos-init aos-animate" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-bag-heart-fill"></i>
                                    <h4>State-of-the-Art Facilities</h4>
                                    <p>
                                        Our clinic is equipped with the latest medical-grade tools and technology to
                                        provide a comfortable and high-quality treatment experience.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section id="services" class="services experts section">

            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>Expert surgeons, best-in-class results</h2>
                <p>
                    Your consultation, surgery and follow ups will all be with the same, dedicated Yrokshire surgeon
                </p>
            </div><!-- End Section Title -->

            <div class="text-center mb-4">
                {{-- <button class="btn btn-primary filter-button active" data-filter=".Doctor1">Doctor 1</button> --}}
                <button class="btn-btn docbtn filter-button active" data-filter=".Doctor1">Doctor 1</button>
                <button class="btn-btn docbtn filter-button" data-filter=".Doctor2">Doctor 2</button>
                <button class="btn-btn docbtn filter-button" data-filter=".Doctor3">Doctor 3</button>
            </div>


            <div class="container">
                <div class="grid">
                    <div class="row doc_details">
                        <div class="col-md-5 Doctor1 grid-item">
                            <img src="assets/img/magdiel-lagos-7hjh_X3xsDA-unsplash.jpg" alt="">
                        </div>
                        <div class="col-md-7 Doctor1 grid-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                            <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title"><b>Best surgical result</b></p>
                                            <p class="subtitle">Finalist at aesthetic awards 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card_centered_content p-4"
                                        style="background-color: #1977cc; color: #f3f1ee;">
                                        {{-- <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div> --}}
                                        <div class="text">
                                            <p><strong>Dr. Furqan Raja</strong>, a leading British hair restoration surgeon
                                                who employs world-class surgical techniques to ensure natural results which
                                                are <strong>virtually undetectable.</strong></p>
                                            <h6 class="mt-3" style="color: #f3f1ee;">EDUCATIONAL AND MEDICAL EXPERIENCE
                                            </h6>
                                            <p><i class="bi bi-mortarboard"></i> University of <strong>Leicester</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card_centered_content p-4">
                                                {{-- <div class="icon">
                                                    <i class="bi bi-award"></i>
                                                </div> --}}
                                                <div class="text">
                                                    <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                                    <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card_centered_content p-4">
                                                {{-- <div class="icon">
                                                    <i class="bi bi-award"></i>
                                                </div> --}}
                                                <div class="text">
                                                    <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                                    <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row doc_details">
                        <div class="col-md-5 Doctor2 grid-item">
                            <img src="assets/img/ashkan-forouzani-DPEPYPBZpB8-unsplash.jpg" alt="">
                        </div>
                        <div class="col-md-7 Doctor2 grid-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                            <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title"><b>Best surgical result</b></p>
                                            <p class="subtitle">Finalist at aesthetic awards 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card_centered_content p-4"
                                        style="background-color: #1977cc; color: #f3f1ee;">
                                        {{-- <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div> --}}
                                        <div class="text">
                                            <p><strong>Dr. Furqan Raja</strong>, a leading British hair restoration surgeon
                                                who employs world-class surgical techniques to ensure natural results which
                                                are <strong>virtually undetectable.</strong></p>
                                            <h6 class="mt-3" style="color: #f3f1ee;">EDUCATIONAL AND MEDICAL EXPERIENCE
                                            </h6>
                                            <p><i class="bi bi-mortarboard"></i> University of <strong>Leicester</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card_centered_content p-4">
                                                {{-- <div class="icon">
                                                    <i class="bi bi-award"></i>
                                                </div> --}}
                                                <div class="text">
                                                    <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                                    <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card_centered_content p-4">
                                                {{-- <div class="icon">
                                                    <i class="bi bi-award"></i>
                                                </div> --}}
                                                <div class="text">
                                                    <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                                    <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row doc_details">
                        <div class="col-md-5 Doctor3 grid-item">
                            <img src="assets/img/ashkan-forouzani-l-NIPb-9Njg-unsplash.jpg" alt="">
                        </div>
                        <div class="col-md-7 Doctor3 grid-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                            <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title"><b>Best surgical result</b></p>
                                            <p class="subtitle">Finalist at aesthetic awards 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card_centered_content p-4"
                                        style="background-color: #1977cc; color: #f3f1ee;">
                                        {{-- <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div> --}}
                                        <div class="text">
                                            <p><strong>Dr. Furqan Raja</strong>, a leading British hair restoration surgeon
                                                who employs world-class surgical techniques to ensure natural results which
                                                are <strong>virtually undetectable.</strong></p>
                                            <h6 class="mt-3" style="color: #f3f1ee;">EDUCATIONAL AND MEDICAL EXPERIENCE
                                            </h6>
                                            <p><i class="bi bi-mortarboard"></i> University of <strong>Leicester</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card_centered_content p-4">
                                                {{-- <div class="icon">
                                                    <i class="bi bi-award"></i>
                                                </div> --}}
                                                <div class="text">
                                                    <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                                    <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card_centered_content p-4">
                                                {{-- <div class="icon">
                                                    <i class="bi bi-award"></i>
                                                </div> --}}
                                                <div class="text">
                                                    <p class="title"><b>Hair restoration practitioner 2023</b></p>
                                                    <p class="subtitle">Shortlisted at aesthetic medicine awards</p>
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
            </div>
        </section>
        <!-- /Services Section -->


        <!-- Services Section -->
        <section id="pricing" class="pricing services section mb-4">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Our Pricing structure</h2>
                <p>
                    Our pricing structure is based on “graft buckets” as opposed to per graft or per hair, our prices are
                    transparent: you will never pay for more than you need or are quoted.
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center" style="border: none">
                            <div class="card-header py-1"
                                style="background-color: #1977cc; border: none; border-radius: 20px 20px 0 0; color: #f1f7fc;">
                                <div class="mt-3">
                                    <span class=""
                                        style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">small
                                        Transplant</span>
                                </div>
                                <h6 class="mt-3" style="color: #f1f7fc; font-weight: 600;">Grafts &lt;1000</h6>
                                <p>Suitable for minimal hair loss.</p>
                            </div>
                            <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                <h4 class="card-title"><sup style="font-size: 13px; color: #616161;">from</sup>&pound;4000
                                </h4>
                                <p class="card-text">
                                    <strong>&pound;333</strong> per month / 12 months
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="border: none">
                            <div class="card-header py-1"
                                style="background-color: #1977cc; border: none; border-radius: 20px 20px 0 0; color: #f1f7fc;">
                                <div class="mt-3">
                                    <span class=""
                                        style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">Medium
                                        Transplant</span>
                                </div>
                                <h6 class="mt-3" style="color: #f1f7fc; font-weight: 600;">Grafts &lt;1,000 - 1,500</h6>
                                <p>Suitable for minimal hair loss.</p>
                            </div>
                            <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                <h4 class="card-title"><sup style="font-size: 13px; color: #616161;">from</sup>&pound;5000
                                </h4>
                                <p class="card-text">
                                    <strong>&pound;417</strong> per month / 12 months
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="border: none">
                            <div class="card-header py-1"
                                style="background-color: #1977cc; border: none; border-radius: 20px 20px 0 0; color: #f1f7fc;">
                                <div class="mt-3">
                                    <span class=""
                                        style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">Large
                                        Transplant</span>
                                </div>
                                <h6 class="mt-3" style="color: #f1f7fc; font-weight: 600;">Grafts &lt;1,500 - 2,000</h6>
                                <p>Suitable for minimal hair loss.</p>
                            </div>
                            <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                <h4 class="card-title"><sup style="font-size: 13px; color: #616161;">from</sup>&pound;4000
                                </h4>
                                <p class="card-text">
                                    <strong>&pound;500</strong> per month / 12 months
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services exploreclinic section">
            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>Explore our clinics</h2>
                <p>
                    {{-- Our surgeons have performed over 7,500 successful hair transplants. --}}
                </p>
            </div><!-- End Section Title -->
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic1.jpg" class="" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic3.jpg" class="" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic4.jpg" class="" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clientcare.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic3.jpg" class="" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic4.jpg" class="" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic1.jpg" class="" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic3.jpg" class="" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="assets/img/clinic4.jpg" class="" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-indicators mt-4">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> --}}
                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <section id="services" class="services howitworks section">

            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>How it works</h2>
                <p>
                    {{-- Our surgeons have performed over 7,500 successful hair transplants. --}}
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header p-0">
                                {{-- image here --}}
                                <img src="assets/img/clinic1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title">1. Surgeon consultation</h5>
                                <p class="card-text">
                                    Schedule a consultation with your dedicated, expert surgeon to formulate a tailored plan
                                    to achieve your hair restoration consultation fee £75.
                                </p>
                            </div>
                        </div>
                        {{-- end card --}}
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header p-0">
                                {{-- image here --}}
                                <img src="assets/img/clinic1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title">2. Day of surgery</h5>
                                <p class="card-text">
                                    Your surgery will take place at one of our state-of-the-art clinics, where you will be
                                    welcomed by your surgeon and the rest of the clinical team.
                                </p>
                            </div>
                        </div>
                        {{-- end card --}}
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header p-0">
                                {{-- image here --}}
                                <img src="assets/img/clinic1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title">3. Aftercare</h5>
                                <p class="card-text">
                                    We will provide you with all the medications and aftercare needed to get optimal results
                                    from your procedure.
                                </p>
                            </div>
                        </div>
                        {{-- end card --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background" style="background-color: #f3f1ee">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Frequently Asked Questions</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row ">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="assets/img/Artboard-11111.png" style="height: 400px" alt="">
                    </div>

                    <div class="col-md-6">
                        <p style="font-size: 18px; font-weight: 500;">
                            During your consultation we’ll work with you to understand your hair restoration goals and
                            evaluate the best treatment for you.
                        </p>
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>FUE Transplants</h3>
                                <div class="faq-content">
                                    <p>
                                        Suitable for all types of hair loss. FUE transplants involve follicle extraction and
                                        implantation, done manually by the surgeon using fine forceps.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>FUE Direct hair implantation</h3>
                                <div class="faq-content">
                                    <p>
                                        Suitable for all types of hair loss. FUE direct hair implantation transplants
                                        involve follicle extraction and implantation, done manually by the surgeon using an
                                        implanter pen.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>FUT Transplants</h3>
                                <div class="faq-content">
                                    <p>
                                        In FUT surgery, a thin strip of hair is removed from the back of the head from which
                                        individual grafts are taken and implanted into balding areas.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section>
        <!-- /Faq Section -->

        <!-- Departments Section -->
        <section id="departments" class="departments hairTfaq section">

            {{-- <!-- Section Title -->  data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>FAQ</h2>
                <p>Hair transplant FAQs</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Is a hair
                                    transplant right for me?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Is a hair transplant permanent?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Will I be left with scarring?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Is a hair transplant procedure painful?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Will I need to take medications?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-6">Will I have to cut my hair short or shave my head?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-7">Which hair transplant procedure is best for me?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-8">How long after my hair transplant will I see results?</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Is a hair transplant right for me?</h3>
                                        <p class="fst-italic">
                                            There are numerous factors that determine whether a hair transplant is right for
                                            you, including:
                                        </p>

                                            <h4 class="pt-2">Your age</h4>
                                            <p class="fst-italic">
                                                Your existing level of hair loss is a major factor in determining whether a
                                                hair transplant is the right course of treatment for you. If your thinning
                                                or balding isn’t very severe it may be treatable with medications such as
                                                Finasteride and Minoxidil. If your hair loss is too severe, there may not be
                                                sufficient donor hair available to perform an effective hair transplant.
                                            </p>
                                        {{-- <div id="hiddenSection" class="hidden-content"> --}}
                                            <h4 class="pt-2">Donor hair density</h4>
                                            <p class="fst-italic">
                                                Good hair density on the back and sides of the head is one of the most
                                                important factors. This is where donor follicles are usually harvested from,
                                                so density in these areas is critical in determining if a transplant will be
                                                a success for you.
                                            </p>
                                            <div id="hiddenSection" class="hidden-content">
                                            <h4 class="pt-2">Hair texture</h4>
                                            <p class="fst-italic">
                                                All hair types are suitable for hair transplant surgery. Patients with curly
                                                or wavy hair can often expect better outcomes with a lower volume of grafts
                                                as this type of hair may improve the appearance of density. Afro-textured
                                                hair is a good example of this principle, as the hairs curl back on
                                                themselves, this can give a “double density” effect which means we can
                                                achieve great results with a smaller volume of grafts.
                                            </p>
                                            <h4 class="pt-2">Hair thickness</h4>
                                            <p class="fst-italic">
                                                Candidates with thicker hair require fewer grafts to achieve a natural
                                                looking result because their hair is likely to conceal the underlying scalp
                                                more effectively.
                                            </p>
                                        </div>
                                        <button id="toggleButton" class="btn-btn seemorebtn mt-3">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Is a hair transplant permanent?</h3>
                                        <p class="fst-italic">
                                            You’ll start to see the full results of your hair transplant after 12 to 18 months, when most of the transplanted hair follicles will have reached their full potential. We expect the majority of the transplanted hairs to remain permanently, although you can expect a small amount of shedding as you age.
                                            <br>
                                            It’s important to note the role of non-surgical treatment, namely medication, alongside a transplant. As well as ensuring that you achieve the best results from your procedure, hair-loss medication will help you maintain hair in other areas that may be vulnerable to thinning. Most patients will warrant another procedure or a smaller, top-up procedure if their hair loss progresses - we’ll discuss this with you in your consultation to ensure that you have a thorough long-term plan to manage your hair loss.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Will I be left with scarring?</h3>
                                        <p class="fst-italic">
                                            All current hair transplant procedures will cause some degree of scarring. However, a procedure performed by an experienced surgeon will result in minimal, virtually undetectable scars. Scars from FUE techniques are often not visible at all once there is even a small amount of growth in the donor area. FUT procedures leave a linear scar which may be more apparent with shorter hair so this method tends to suit those who plan to keep their hair longer.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Is a hair transplant procedure painful?</h3>
                                        <p class="fst-italic">
                                            Hair transplants are performed under local anaesthesia - once the initial injections have been administered you should feel no pain or discomfort during the procedure. Our patients often find the procedure relaxing and many fall asleep. You can expect some minor swelling and mild discomfort after the procedure but this will subside and is easily managed with medication. The day following your surgery you should have no significant pain or discomfort.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Will I need to take medications?</h3>
                                        <p class="fst-italic">Following your surgery we’ll prescribe a tailored selection of medications to prevent infection and alleviate any potential discomfort:
                                        </p>
                                        <ol>
                                            <li>Antibiotics to minimise the risk of infection</li>
                                            <li>Antihistamines if required, to reduce scalp itchiness post-surgery</li>
                                            <li>Painkillers to reduce discomfort post-surgery</li>
                                            <li>Steroid tablets may also be prescribed to prevent and reduce swelling</li>
                                        </ol>
                                        <p>
                                            We will also prescribe hair-loss medications to enhance and maintain the results of your hair transplant:
                                        </p>
                                        <ol>
                                            <li>Minoxidil to stimulate continued hair growth</li>
                                            <li>Finasteride to minimise future hair loss</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-6">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Will I have to cut my hair short or shave my head?</h3>
                                        <p class="fst-italic">
                                            Most of our procedures are performed using a part-shaven technique which allows you to keep most of the hair on top whilst we trim the donor area to facilitate extraction. However, we also offer unshaven FUE hair transplant (UFUE) and direct hair implantation methods which allow us to perform the procedure without having to shave a larger area. This may not be achievable for all patients so we suggest discussing this with your surgeon during your consultation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-7">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Which hair transplant procedure is best for me?</h3>
                                        <p class="fst-italic">
                                            The recommended transplant procedure will depend on your level of hair loss and personal preferences. We therefore advise all of our patients to speak to one of our hair transplant specialists who will pass your details on to one of our surgeons and they will create a bespoke hair transplant plan that will best suit your hair restoration requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-8">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>How long after my hair transplant will I see results?</h3>
                                        <p class="fst-italic">
                                            You can expect to see new, sustained hair growth at month 3 following your procedure - after the shedding phase. This time frame varies from patient to patient, however, so it could take a little longer. The initial growth is gentle which has the benefit of making your transplant seem “undetectable” but your hairs will gradually start to thicken and look more voluminous.
                                        </p>
                                        <p class="fst-italic">
                                            After 12 to 18 months, you will see the full results of your hair transplant and can show off your new hair with confidence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /Departments Section -->

        <section id="appointment" class="services appointment howitworks section mb-4">

            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>Make Appointment</h2>
                {{-- <p>
                    Our surgeons have performed over 7,500 successful hair transplants.
                </p> --}}
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        {{-- add heading and sub title here --}}
                        <div>
                            <h3 class="title" style="font-weight: 700; font-size: 34px;">Book a consultation</h3>
                            <p>
                                Fill in your details and we’ll get in touch with you shortly to answer your questions.
                            </p>
                            <br>
                            <h5>Want to contact us directly?</h5>
                            <p><strong>Leeds: </strong>44 589 55488 55</p>
                            <p><strong>Email: </strong>info@yorkshirehairandskinsolution.com</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone umber"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <select name="department" id="department" class="form-select" required="">
                                        <option value="">Preferred Clinic*</option>
                                        <option value="Department 1">London</option>
                                        <option value="Department 2">Leeds</option>
                                        <option value="Department 3">Manchester</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <select name="department" id="department" class="form-select" required="">
                                        <option value="">Preferred method of contact</option>
                                        <option value="Department 1">Mobile</option>
                                        <option value="Department 2">Email</option>
                                    </select>
                                </div>

                                <div class="col-md-12 text-center">
                                    {{-- <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div> --}}

                                    <button type="submit" class="w-100">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>

        </section>

    </main>
    <script>
        $(document).ready(function() {
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                layoutMode: 'fitRows',
                filter: '.Doctor1' // Show only Category 1 by default
            });

            $('.filter-button').on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });

                // Remove active class and add it to the clicked button
                $('.filter-button').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#hiddenSection").slideToggle(600, function() {
                    if ($(this).is(":visible")) {
                        $("#toggleButton").text("See Less");
                        $("html, body").animate({
                            scrollTop: $("#hiddenSection").offset().top - 100
                        }, 800);
                    } else {
                        $("#toggleButton").text("See More");
                    }
                });
            });
        });
    </script>
@endsection
