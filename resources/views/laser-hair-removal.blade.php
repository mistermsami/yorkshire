@php
    $pagename = 'Laser Hair Removal';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .aboutmain_sec {
            min-height: 100vh;
            padding: 60px 0;
            background: linear-gradient(135deg, #f9f9f9, #e2f0fe)
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
            height: calc(100vh - 130px);
        }

        .aboutmain_sec .aboutsideimg {
            height: 550px;
        }

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

        .resultsbtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
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

        .results .carousel-item img {
            border-radius: 20px
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
            margin-bottom: 20px;

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
        .hairTfaq .details p {
            transition: all 0.5s ease-in-out;
        }

        .hairTfaq .hidden-content {
            display: none;
        }

        .hairTfaq .seemorebtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
        }

        .stepper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step {
            color: #fff;
            background: #8cbbe4;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
        }

        .step.active {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
        }

        .step-content {
            display: none;
        }

        .step-content.active {
            display: block;
        }

        .primartbtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            margin-top: 20px;
            padding: 10px 25px;
            border-radius: 3px;
        }

        .previousbtn {
            color: #fff;
            background: #848a90;
            border: none;
            font-size: 16px;
            font-weight: 500;
            margin-top: 20px;
            padding: 10px 25px;
            border-radius: 3px;
        }

        .flatpickr-calendar {
            width: 100%;
        }

        .calendar-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            /* display: flex; */
            gap: 5px;
            /* max-width: 300px; */
            /* margin: auto; */
        }

        .day-box {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .day-box.selected {
            background-color: #007bff;
            color: white;
        }

        .transpricing_card {
            border: none;
            background-color: #f8f7f6;
            border-radius: 15px;
        }

        .transpricingBlue_card {
            border: none;
            background-color: #1977cc;
            border-radius: 15px;
            color: #f1f7f7;
        }
        .laserdevice .card {
            border: none;
            background-color: #1977cc;
            border-radius: 15px;
            color: #f1f7f7;
        }
        .laserinstruction .card {
            border: none;
            background-color: #1977cc;
            border-radius: 15px;
            color: #f1f7f7;
        }
        .laserinstruction .card h4{
            color: #f1f7f7;
        }


        .transpricingBlue_card h3 {
            color: #f1f7f7;
        }

        @media only screen and (max-width: 1399px) and (min-width: 769px) {
            .afterresult .card {
                height: 280px !important;
            }

            .aboutmain_sec_img {
                height: auto;
            }
        }

        .pricingbtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
            transition: 0.3s;
            margin-bottom: 20px;
        }

        .pricingbtn:hover {
            color: #fff;
            background: #3e95e2;
        }

        .pricingbtn:active {
            color: #fff;
            background: #3e95e2;
        }

        .pricing .card-header h6 {
            color: #f1f7fc;
            font-weight: 600;
        }

        .pricing .card-header {
            background-color: #1977cc;
            border-radius: 20px 20px 0 0;
            color: #f1f7fc;
            min-height: 150px
        }

        .pricing .card {
            margin-top: 20px;
        }


        @media only screen and (max-width: 768px) {
            .pricing .card {
                margin-bottom: 20px;
            }

            .aboutmain_sec_img {
                height: auto;
            }

            .exploreclinic .card {
                margin-bottom: 20px;
            }
            .hairTfaq .nav-item .active {
                background-color: #f1f7fc;
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
                        <div class="" style="padding-left: 50px; padding-right: 50px;">

                            <div class="section-header ">
                                
                                <h2>Laser Hair Removal from the UK’s Leading Hair Removal Clinic</h2>
                               
                            </div>
                            <div class="about-content">
                               
                                <p>
                                    Restore your hair with the UK’s most trusted hair clinic. Yorkshire has helped over
                                    <b>200,000</b> men regain their confidence.
                                </p>
                               <div>
                                <img src="/assets/img/trustpilotimage.png" alt="trustpilot" width="320px">
                               </div>
                                <div style="margin-top: 20px">
                                    <a href="#" class="btn btn-primary">Book a consultation
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start">
                        <img src="assets/img/cosmetician-removing-her-female-patient-underarm-h-2024-10-18-09-06-30-utc.jpg"
                            class="aboutmain_sec_img" alt="">
                        {{-- <img src="assets/img/about.jpg" class="aboutmain_sec_img" alt=""> --}}
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
                                                        <img src="assets/img/laserresult1.webp" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Sessions:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    03
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/laserresult2.webp" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Sessions:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    06
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-header p-0">
                                                        <img src="assets/img/laserresult3.webp" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Sessions:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    06
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
                                                        <img src="assets/img/laserresult4.webp" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <hr style="color: #bfbfbf;">
                                                            <div class="col-md-6"><b>
                                                                    Session:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    06
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
                                                                    Session:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    06
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
                                                                    Sessions:
                                                                </b></div>
                                                            <div class="col-md-6">
                                                                <p>
                                                                    03
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

                    <div class="col-md-12 d-flex justify-content-center">
                        <button class="cta-btn resultsbtn d-none d-sm-block" onclick="window.location.href='#'">View
                            results gallery</button>
                    </div>
                </div>
            </div>



        </section>
        <!-- /Services Section -->

        <section id="services" class="services-section">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Our Commitment to You</h2>
                    <p class="section-subtitle">Experience the Yorkshire Hair and Skin Solutions difference</p>
                </div>
                
                <div class="row g-4">
                    <!-- Service Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Expertise You Can Trust</h3>
                            <p>Our certified specialists bring 15+ years of combined experience in advanced hair restoration and skin rejuvenation treatments, using only medically-approved techniques.</p>
                            
                        </div>
                    </div>
                    
                    <!-- Service Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Personalized Care</h3>
                            <p>Your journey begins with a comprehensive consultation where we listen to understand your unique concerns and goals before creating a customized treatment plan.</p>
                           
                        </div>
                    </div>
                    
                    <!-- Service Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-icon">
                                <i class="fas fa-clinic-medical"></i>
                            </div>
                            <h3>Premium Facilities</h3>
                            <p>Our state-of-the-art clinic combines medical precision with spa-like comfort, featuring the latest FDA-cleared technologies in a serene Yorkshire setting.</p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="#contact" class="btn btn-primary btn-lg">
                        Book Your Consultation
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
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
                <button class="btn-btn docbtn filter-button active" data-filter=".Doctor1">Dr. Furqan</button>
                <button class="btn-btn docbtn filter-button" data-filter=".Doctor2">Dr. Kamran</button>
                <button class="btn-btn docbtn filter-button" data-filter=".Doctor3">Dr. Imran</button>
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
                                            <p class="title text-center"><b>Hair restoration practitioner 2023</b></p>
                                            <p class="subtitle text-center">Shortlisted at aesthetic medicine awards</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title text-center"><b>Best surgical result</b></p>
                                            <p class="subtitle text-center">Finalist at aesthetic awards 2023</p>
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
                                            <p class="title text-center"><b>Hair restoration practitioner 2023</b></p>
                                            <p class="subtitle text-center">Shortlisted at aesthetic medicine awards</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p class="title text-center"><b>Best surgical result</b></p>
                                            <p class="subtitle text-center">Finalist at aesthetic awards 2023</p>
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
                                            <p "><b>Hair restoration practitioner 2023</b></p>
                                                                        <p cla">Shortlisted at aesthetic medicine awards
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card_centered_content p-3">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="text">
                                            <p "><b>Best surgical result</b></p>
                                                                        <p cla">Finalist at aesthetic awards 2023</p>
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
        <section id="pricing" class="pricing faq services section mb-4">
            <!-- Section Title -->
            <div class="container section-title">
                <h2>Our Pricing structure</h2>
                <p>
                    Our pricing structure is based on “graft buckets” as opposed to per graft or per hair, our prices are
                    transparent: you will never pay for more than you need or are quoted.
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="text-center mb-4">
                    <button class="btn btn pricingbtn mx-2" onclick="showCards('female')">Plans For Fmale</button>
                    <button class="btn btn pricingbtn mx-2" onclick="showCards('male')">Plans For Male</button>
                </div>

                <div id="female-cards">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Small Area (Female)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Upper Lip | Lower Lip | Chin | Jawline</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;4000</h4>
                                    <p><strong>&pound;333</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Medium Area (Female)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Full Face | Half-Arms | Bikini Line | Neck | Underarms</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;5000</h4>
                                    <p><strong>&pound;417</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Large Area (Female)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Full Bikini | Full-Arms | Half-Back | Buttocks | Chest | Tummy |
                                        Half-Legs</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;6000</h4>
                                    <p><strong>&pound;500</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Extra Large Area (Female)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Full Legs | Chest and Tummy | Full Back</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;6000</h4>
                                    <p><strong>&pound;500</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1"
                                    style="background-color: #1977cc; border-radius: 20px 20px 0 0; color: #f1f7fc;">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Full Body (Female)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Covers Full Body</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;6000</h4>
                                    <p><strong>&pound;500</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="male-cards" style="display: none;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Small Area (Male)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Upper Lip | Lower Lip | Chin | Jawline</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;4000</h4>
                                    <p><strong>&pound;333</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Medium Area (Male)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Full Face | Half-Arms | Beard Line | Neck | Underarms</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;5000</h4>
                                    <p><strong>&pound;417</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Large Area (Male)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Full Bikini | Full-Arms | Half-Back | Buttocks | Chest | Tummy |
                                        Half-Legs</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;6000</h4>
                                    <p><strong>&pound;500</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Extra Large Area (Male)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Full Legs | Chest and Tummy | Full Back</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;6000</h4>
                                    <p><strong>&pound;500</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1"
                                    style="background-color: #1977cc; border-radius: 20px 20px 0 0; color: #f1f7fc;">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Full Body (Male)
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Covers Full Body</h6>
                                    <p>Suitable for All.</p>
                                </div>
                                <div class="card-body" style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <h4 class="card-title"><sup style="font-size: 13px;">from</sup>&pound;6000</h4>
                                    <p><strong>&pound;500</strong> per month / 12 months</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- plans details --}}
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-10 mb-4">
                        <h2>Plans Details</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">

                    <div class="col-md-10">
                        <div class="faq-container">

                            <div class="faq-item ">
                                <h3>Female Plan Details</h3>
                                <div class="faq-content">
                                    <p>
                                        <b>Small Area - Upper Lip/ Lower Lip/ Chin/ Jawline</b>
                                        <br>
                                        1 session 15%: 59.50 £
                                        <br>
                                        3 session 25%: 157.50 £
                                        <br>
                                        6 session 30%: 294.00 £
                                        <br>
                                        <b>70 £</b>
                                        <br><br>

                                        <b>Medium Area – Full Face / Half-Arms / Bikini Line/ Neck/ Underarms</b>
                                        <br>
                                        1 session 15%: 193.50 £
                                        <br>
                                        3 sessions 25%: 517.50 £
                                        <br>
                                        6 sessions 30%: 966.00 £
                                        <br>
                                        <b>230 £</b>
                                        <br><br>

                                        <b>Large Area – Full Bikini/ Full-Arms/ Half-Back/ Buttocks/ Chest/ Tummy/ Half-Legs</b>
                                        <br>
                                        1 session 15%: 289.00 £
                                        <br>
                                        3 sessions 25%: 765.00 £
                                        <br>
                                        6 sessions 30%: 1428.00 £
                                        <br>
                                        <b>340 £</b>
                                        <br><br>

                                        <b>Extra Large area – Full Legs/ Chest and Tummy/ Full Back</b>
                                        <br>
                                        1 session 15%: 425.00 £
                                        <br>
                                        3 sessions 25%: 1125.00 £
                                        <br>
                                        6 sessions 30%: 2100.00 £
                                        <br>
                                        <b>500 £</b>
                                        <br><br>

                                        <b>Full body</b>
                                        <br>
                                        1 session 15%: 1147.50 £
                                        <br>
                                        3 sessions 25%: 3037.50 £
                                        <br>
                                        6 sessions 30%: 5670 £
                                        <br>
                                        <b>1350 £</b>
                                        <br><br>
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Male Plan Details</h3>
                                <div class="faq-content">
                                    <p>
                                        <b>Small Area - Upper Lip/ Lower Lip/ Chin/ Jawline</b>
                                        <br>
                                        1 session 15%: 59.50 £
                                        <br>
                                        3 session 25%: 157.50 £
                                        <br>
                                        6 session 30%: 294.00 £
                                        <br>
                                        <b>70 £</b>
                                        <br><br>

                                        <b>Medium Area – Full Face / Half-Arms / Beard Line/ Neck/ Underarms</b>
                                        <br>
                                        1 session 15%: 280.50 £
                                        <br>
                                        3 sessions 25%: 742.50 £
                                        <br>
                                        6 sessions 30%: 1386.00 £
                                        <br>
                                        <b>330 £</b>
                                        <br><br>

                                        <b>Large Area – Full Bikini/ Full-Arms/ Half-Back/ Buttocks/ Chest/ Tummy/ Half-Legs</b>
                                        <br>
                                        1 session 15%: 395.25 £
                                        <br>
                                        3 sessions 25%: 1046.25 £
                                        <br>
                                        6 sessions 30%: 1953.00 £
                                        <br>
                                        <b>465 £</b>
                                        <br><br>

                                        <b>Extra Large area – Full Legs/ Chest and Tummy/ Full Back</b>
                                        <br>
                                        1 session 15%: 561.00 £
                                        <br>
                                        3 sessions 25%: 1485.00 £
                                        <br>
                                        6 sessions 30%: 2772.00 £
                                        <br>
                                        <b>660 £</b>
                                        <br><br>

                                        <b>Full body</b>
                                        <br>
                                        1 session 15%: 1428.00 £
                                        <br>
                                        3 sessions 25%: 3780.00 £
                                        <br>
                                        6 sessions 30%: 7056.00 £
                                        <br>
                                        <b>1680 £</b>
                                        <br><br>
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div>
                </div>


                {{-- transparent pricing --}}

                <div class="row mt-5">
                    <div class="col-md-12 mb-4">
                        <h2>What is transparent pricing?</h2>
                    </div>

                    <div class="col-md-6">
                        <div class="card transpricing_card p-5 d-flex justify-content-center align-items-center">
                            <div class="transpricing_img">
                                <img src="{{ asset('assets/img/pound_Icon (5).svg') }}" style="height: 80px"
                                    alt="Transparent Pricing">
                            </div>
                            <div class="transpricing_text text-center mt-4">
                                <h3>The traditional pricing method</h3>
                                <p>
                                    Charged on a per graft basis to maximise the cost of your procedure
                                </p>
                            </div>
                            <div class="position-absolute" style="z-index: 99; right: -28px;">
                                <div class="vs-badge d-flex justify-content-center align-items-center"
                                    style="height: 30px; width: 30px; background-color: #000; color: #fff; border-radius: 50%;">
                                    vs</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card transpricingBlue_card p-5 d-flex justify-content-center align-items-center">
                            <div class="transpricing_img">
                                <img src="{{ asset('assets/img/1finance available.png') }}"
                                    style="height: 80px; width: 80px; background-color: rgba(255,255,255, 0.9); border-radius: 50%;"
                                    alt="Transparent Pricing">
                            </div>
                            <div class="transpricing_text text-center mt-4">
                                <h3>How YORKSHIRE prices</h3>
                                <p>
                                    Charged based on the size of procedure you need: small, medium or large
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- financing --}}
                <div class="col-md-12 mt-5">
                    <div class="card p-5" style="background-color: #f3f1ee; border: none; border-radius: 15px;">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="{{ asset('assets/img/1finance available.png') }}" style="width: 100%"
                                    alt="financing">
                            </div>
                            <div class="col-md-10 pt-1">
                                <h3>0% financing available</h3>
                                {{-- <br> --}}
                                <p>Finance your transplant at 0% interest up to 12 months.</p>
                            </div>
                        </div>
                    </div>

                </div>

        </section>

        <section id="laser-instructions" class="laser-instruction-section">
            <div class="container">
                <div class="section-header text-center mb-4">
                    <h2 class="section-title">Laser Hair Removal Instructions</h2>
                    <p class="section-subtitle">Essential guidelines for optimal treatment results</p>
                </div>
        
                <div class="row justify-content-center g-4">
                    <!-- Before Treatment -->
                    <div class="col-lg-5 col-md-6">
                        <div class="instruction-card">
                            <div class="card-header bg-light-purple">
                                <h3>Before Treatment</h3>
                            </div>
                            <div class="card-body">
                                <ul class="instruction-list">
                                    <li>Avoid sun exposure and tanning for <strong>14 days</strong> prior</li>
                                    <li>No other laser/IPL treatments for <strong>4 weeks</strong></li>
                                    <li>Stop waxing/plucking <strong>4 weeks</strong> before</li>
                                    <li>Shave treatment area <strong>24-48 hours</strong> before</li>
                                    <li>Arrive with clean, product-free skin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <!-- After Treatment -->
                    <div class="col-lg-5 col-md-6">
                        <div class="instruction-card">
                            <div class="card-header bg-light-purple">
                                <h3>After Treatment</h3>
                            </div>
                            <div class="card-body">
                                <ul class="instruction-list">
                                    <li>Avoid sun exposure for <strong>2 weeks</strong></li>
                                    <li>Apply <strong>SPF 30+</strong> sunscreen daily</li>
                                    <li>Expect temporary redness/swelling (24-48 hours)</li>
                                    <li>Use gentle skincare products for <strong>3 days</strong></li>
                                    <li>Avoid retinoids/exfoliants for <strong>1 week</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="text-center mt-4">
                    <p class="text-muted">For best results: 6-8 treatments spaced 4-6 weeks apart</p>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <section class="laserdevice section " >

            <!-- Section Title -->
            <div class="container section-title">
                <h2>How DUETTO MT EVO works for hair removal?</h2>
               
            </div>

            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="card " style="background-color: rgba(127, 127, 127, 0.364) ; color:black">
                            <p class="card-text p-5">
                                The Duetto MT EVO is equipped with two lasers, the Alexandrite and Nd:YAG. These lasers can be used simultaneously based on client’s skin type and hair quality.
                                <br><br>
                                The laser damages the hair follicle to inhibit hair growth and disrupt hair cycle. It selectively targets the melanin in the hair root, which then be converted to thermal energy causing the destruction of the hair follicle. In comparison with traditional hair removal methods, laser hair removal provides long lasting results with low-risk of possible skin injury. Laser hair removal is the most efficient hair removal method for both men and women, which is even safe for sensitive and intimate areas.
                                <br><br>
                                The most effective way to limit the discomfort during the procedure is through an air cooling system. Not all laser hair removal devices are equipped with this technology, meanwhile Duetto MT EVO has a built in cooling system that continuously emits cool air all throughout the procedure. This technology greatly reduces unpleasant sensation and limit overheating of the superficial skin. In addition, Duetto MT EVO has superior adjustability when it comes to spot sizes. Hence, it can effectively target small and large areas.
                            </p>
                        </div>
                    </div>

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
                                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">When will I see the results after having laser hair removal?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">What is the safety record for laser hair removal?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">How Does Laser Hair Removal Work?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">What do I need to do to prepare for my Laser Hair Removal appointment?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Can I use makeup before a laser treatment?</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>When will I see the results after having laser hair removal?</h3>
                                        <p class="fst-italic">
                                            You will likely see the results immediately after treatment. The results vary from patient to patient. The color and thickness of your hair, area treated, type of laser used, and color of your skin all affect the results. You can expect a 10% to 25% reduction in hair after the first treatment.
                                        </p>
                                        <p class="fst-italic">
                                            To remove the hair, most patients need 2 to 6 laser treatments. After finishing the treatments, most patients do not see any hair on the treated skin for several months or even years. When the hair regrows, there tends to be less of it. The hairs also tend to be finer and lighter in color.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>When is it safe to have another laser treatment for hair removal?</h3>
                                        <p class="fst-italic">
                                            This varies from patient to patient. Removing hair often requires a series of laser treatments. Most patients can have laser hair removal once every 4 to 6 weeks. Your dermatologist will tell you when it is safe to have another treatment.
                                        </p>
                                        <p class="fst-italic">
                                            Most patients see some hair regrowth. Your dermatologist can tell you when you can safely have laser treatments to maintain the results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>How Does Laser Hair Removal Work?</h3>
                                        <p class="fst-italic">
                                            Laser hair removal involves the use of laser pulses. These pulses emit light into the skin that destroys the root and follicle of the hair. When the root and follicle are destroyed, hair can no longer grow.
                                        </p>
                                        <p class="fst-italic">
                                            For this process to work, the hair must be targeted during an active growth phase. However, individual hairs usually grow at different rates. Therefore, it takes several treatment sessions to capture every hair in the growth phase and produce optimal results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>What do I need to do to prepare for my Laser Hair Removal appointment?</h3>
                                        <ul>
                                            <li>Shave treatment area at least 12-24 hours prior to your treatment.</li>
                                            <li>Avoid chemical peels or laser resurfacing treatments at least 4 weeks before your treatment.</li>
                                            <li>Exfoliate the treatment area at least 3 days before your treatment.</li>
                                            <li>Ensure all fake tan is removed and there is no residual fake tan present on the skin 24 hours before your treatment.</li>
                                            <li>Allow 4 weeks prior to your treatment if you have had direct sun exposure. (Any kind of tanning or active sunbathing, with or without SPF). Allow 2 weeks prior to your treatment if you have had incidental sun exposure  (stayed in the shade for the majority of the time during sunny periods, with or without SPF on).</li>
                                            <li>Avoid using topical creams, moisturisers, body oils, colognes or perfumes to the area being treated 24 hours prior to treatment.</li>
                                            <li>Do not wax, use depilatory creams or pluck hairs four weeks prior to laser treatment.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Can I use makeup before a laser treatment?</h3>
                                        <p class="fst-italic">No, do not use makeup, body lotion, deodorant, sunblock, sunscreen, day cream on the area to be treated on the same day of laser treatment. This is because of the chemicals that can be absorbed differently by the heat of the skin. The area to be treated needs to be completely clean of products and shaved before a laser treatment.
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
                        <div class="stepper d-flex justify-content-between">
                            <div class="step active">Step 1</div>
                            <div class="step">Step 2</div>
                            <div class="step">Step 3</div>
                        </div>
                        <form action="" method="post" class="php-email-form">
                            <!-- Step 1: User Details -->
                            <div class="step-content active">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" name="phone"
                                            placeholder="Phone Number" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="clinic" class="form-select" required>
                                            <option value="">Preferred Clinic*</option>
                                            <option value="London">London</option>
                                            <option value="Leeds">Leeds</option>
                                            <option value="Manchester">Manchester</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="contact_method" class="form-select" required>
                                            <option value="">Preferred Contact Method</option>
                                            <option value="Mobile">Mobile</option>
                                            <option value="Email">Email</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary next-step primartbtn">Next</button>
                            </div>

                            <!-- Step 2: Date Selection -->
                            <div class="step-content">
                                <h3>Select a Date</h3>
                                {{-- <input type="date" name="appointment_date" class="form-control active" required> --}}

                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <select id="month-selector" class="form-select">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select id="year-selector" class="form-select">
                                            {{-- <option value="2024">2024</option> --}}
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">

                                        <div id="custom-calendar" class="calendar-container form-control"></div>
                                    </div>
                                </div>

                                {{-- <input type="text" id="calendar" class="form-control" placeholder="Pick a Date" required> --}}
                                <button type="button" class="btn btn-secondary prev-step previousbtn">Previous</button>
                                <button type="button" class="btn btn-primary next-step primartbtn">Next</button>
                            </div>

                            <!-- Step 3: Time Selection -->
                            <div class="step-content">
                                <h3>Select a Time</h3>
                                {{-- <input type="time" name="appointment_time" class="form-control" required> --}}
                                <div class="col-md-12">
                                    <select name="appointment_time" class="form-select" required>
                                        <option value="">Preferred Time*</option>
                                        <option value="9:00am">9:00 am</option>
                                        <option value="10:00am">10: 00 am</option>
                                        <option value="11:00am">11:00 am</option>
                                        <option value="11:00am">11:00 am</option>
                                        <option value="12:00pm">12:00 pm</option>
                                        <option value="01:00pm">01:00 pm</option>
                                        <option value="02:00pm">02:00 pm</option>
                                        <option value="03:00pm">03:00 pm</option>
                                        <option value="04:00pm">04:00 pm</option>
                                        <option value="05:00pm">05:00 pm</option>
                                        <option value="06:00pm">06:00 pm</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-secondary prev-step previousbtn">Previous</button>
                                <button type="submit" class="btn btn-success primartbtn">Submit</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>

        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        function showCards(gender) {
            document.getElementById('male-cards').style.display = (gender === 'male') ? 'block' : 'none';
            document.getElementById('female-cards').style.display = (gender === 'female') ? 'block' : 'none';
        }
    </script>
    <script>
        $(document).ready(function() {
            let currentStep = 0;
            const steps = $(".step-content");
            const indicators = $(".step");

            function showStep(index) {
                steps.removeClass("active");
                indicators.removeClass("active");
                $(steps[index]).addClass("active");
                $(indicators[index]).addClass("active");
            }

            function validateStep(index) {
                let isValid = true;
                $(steps[index]).find("input[required], select[required]").each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("is-invalid");
                        isValid = false;
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });
                return isValid;
            }

            $(".next-step").click(function() {
                if (validateStep(currentStep) && currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            $(".prev-step").click(function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });
    </script>
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
    {{-- date picker --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const calendarContainer = document.getElementById("custom-calendar");
            const monthSelector = document.getElementById("month-selector");
            const yearSelector = document.getElementById("year-selector");
            let selectedDate = null;

            function generateCalendar() {
                calendarContainer.innerHTML = ""; // Clear previous dates
                const month = parseInt(monthSelector.value);
                const year = parseInt(yearSelector.value);
                const daysInMonth = new Date(year, month, 0).getDate();

                for (let day = 1; day <= daysInMonth; day++) {
                    let dayBox = document.createElement("div");
                    dayBox.classList.add("day-box");
                    dayBox.textContent = day;
                    dayBox.addEventListener("click", function() {
                        if (selectedDate) {
                            selectedDate.classList.remove("selected");
                        }
                        selectedDate = dayBox;
                        selectedDate.classList.add("selected");
                    });
                    calendarContainer.appendChild(dayBox);
                }
            }

            monthSelector.addEventListener("change", generateCalendar);
            yearSelector.addEventListener("change", generateCalendar);
            generateCalendar(); // Initial load
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
