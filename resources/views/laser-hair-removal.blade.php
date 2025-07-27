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

        .about-content {
            max-width: 535px;
        }

        .aboutmain_sec_img {
            border-radius: 15px;
            width: 100%;
            margin-left: 40px;
            height: calc(100vh - 130px);
        }

        .aboutmain_sec .aboutsideimg {
            height: 500px;
        }

        .aboutsecond_sec {
            padding: 80px 0 40px 0;
            background-color: #fff;
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

        /* .carousel-control-prev-icon {
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
            } */

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

        .laserinstruction .card h4 {
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
                margin-left: 0px;
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
                margin-left: 0px;
            }

            .exploreclinic .card {
                margin-bottom: 20px;
            }

            .hairTfaq .nav-item .active {
                background-color: #f1f7fc;
            }
        }

        /* Blue Color Scheme */

        /* Visual Section */
    </style>
@endsection

@section('maincontent')
    <main class="main">
        <!-- Popular Section -->
        <section class="section aboutmain_sec about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="">

                            <div class="section-header ">

                                <h2 style="color: #0d5a9e;">Laser Hair Removal from the Best Clinic</h2>

                            </div>
                            <div class="about-content">
                                <p>
                                    Restore your hair with the UK’s most trusted hair clinic. Yorkshire has helped over
                                    <b>200,000</b> men regain their confidence.
                                    Book your free consultation today and take the first step toward a fuller head of hair.
                                    Expert care, natural results – your transformation starts here.
                                </p>

                                <div>
                                    <img src="/assets/img/trustpilotimage.png" alt="trustpilot" width="320px">
                                </div>
                                <div style="margin: 20px 0px">
                                    <a href="#" class="btn btn-primary">Book a consultation
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start">
                        <img src="assets/img/lasercoverphoto.jpg" class="aboutmain_sec_img" alt="">
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

            <div class="row gy-4">
                <div class="position-relative">
                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <!-- Card 1 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/laserresult1.webp"
                                                        alt="Laser Hair Removal Results - Before & After" class="w-100">
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <hr style="color: #bfbfbf;">
                                                        <div class="col-md-6"><b>Treatment:</b></div>
                                                        <div class="col-md-6">Laser Hair Removal</div>

                                                        <div class="col-md-6 mt-2"><b>Sessions:</b></div>
                                                        <div class="col-md-6 mt-2">03</div>

                                                        <div class="col-md-6 mt-2"><b>Time Frame:</b></div>
                                                        <div class="col-md-6 mt-2">6 Weeks</div>

                                                        <div class="col-md-6 mt-2"><b>Starting at:</b></div>
                                                        <div class="col-md-6 mt-2 text-primary">&pound;8/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 2 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/laserresult2.jpg"
                                                        alt="Skin Brightening Results - Before & After" class="w-100">
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <hr style="color: #bfbfbf;">
                                                        <div class="col-md-6"><b>Treatment:</b></div>
                                                        <div class="col-md-6">Laser Hair Removal</div>

                                                        <div class="col-md-6 mt-2"><b>Sessions:</b></div>
                                                        <div class="col-md-6 mt-2">06</div>

                                                        <div class="col-md-6 mt-2"><b>Time Frame:</b></div>
                                                        <div class="col-md-6 mt-2">12 Weeks</div>

                                                        <div class="col-md-6 mt-2"><b>Package Price:</b></div>
                                                        <div class="col-md-6 mt-2 text-primary">&pound;35 (save 15%)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 3 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/laserresult3.webp"
                                                        alt="Acne Treatment Results - Before & After" class="w-100">
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <hr style="color: #bfbfbf;">
                                                        <div class="col-md-6"><b>Treatment:</b></div>
                                                        <div class="col-md-6">Laser Hair Removal</div>

                                                        <div class="col-md-6 mt-2"><b>Sessions:</b></div>
                                                        <div class="col-md-6 mt-2">06</div>

                                                        <div class="col-md-6 mt-2"><b>Time Frame:</b></div>
                                                        <div class="col-md-6 mt-2">8 Weeks</div>

                                                        <div class="col-md-6 mt-2"><b>Starting at:</b></div>
                                                        <div class="col-md-6 mt-2 text-primary">&pound;8/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row">
                                        <!-- Card 4 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/laserresult4.webp"
                                                        alt="Scar Reduction Results - Before & After" class="w-100">
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <hr style="color: #bfbfbf;">
                                                        <div class="col-md-6"><b>Treatment:</b></div>
                                                        <div class="col-md-6">Laser Hair Removal</div>

                                                        <div class="col-md-6 mt-2"><b>Sessions:</b></div>
                                                        <div class="col-md-6 mt-2">06</div>

                                                        <div class="col-md-6 mt-2"><b>Time Frame:</b></div>
                                                        <div class="col-md-6 mt-2">10 Weeks</div>

                                                        <div class="col-md-6 mt-2"><b>Package Deal:</b></div>
                                                        <div class="col-md-6 mt-2 text-primary">&pound;35/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 5 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/result5.png"
                                                        alt="Anti-Aging Results - Before & After" class="w-100">
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <hr style="color: #bfbfbf;">
                                                        <div class="col-md-6"><b>Treatment:</b></div>
                                                        <div class="col-md-6">Laser Hair Removal</div>

                                                        <div class="col-md-6 mt-2"><b>Sessions:</b></div>
                                                        <div class="col-md-6 mt-2">06</div>

                                                        <div class="col-md-6 mt-2"><b>Time Frame:</b></div>
                                                        <div class="col-md-6 mt-2">12 Weeks</div>

                                                        <div class="col-md-6 mt-2"><b>Starting at:</b></div>
                                                        <div class="col-md-6 mt-2 text-primary">&pound;8/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 6 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/result6.png"
                                                        alt="Pigmentation Results - Before & After" class="w-100">
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <hr style="color: #bfbfbf;">
                                                        <div class="col-md-6"><b>Treatment:</b></div>
                                                        <div class="col-md-6">Laser Hair Removal</div>

                                                        <div class="col-md-6 mt-2"><b>Sessions:</b></div>
                                                        <div class="col-md-6 mt-2">03</div>

                                                        <div class="col-md-6 mt-2"><b>Time Frame:</b></div>
                                                        <div class="col-md-6 mt-2">4 Weeks</div>

                                                        <div class="col-md-6 mt-2"><b>Quick Fix:</b></div>
                                                        <div class="col-md-6 mt-2 text-primary">&pound;35/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Controls -->
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

                <!-- CTA Button -->
                <div class="col-md-12 d-flex justify-content-center mt-4">
                    <button class="cta-btn resultsbtn d-none d-sm-block" onclick="window.location.href='#'">
                        View Full Results Gallery
                    </button>
                </div>
            </div>




        </section>
        <!-- /Services Section -->

        <section id="services" class="services-section">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="servicesection-title">Our Commitment to You</h2>
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
                            <p>Our certified specialists bring 15+ years of combined experience in advanced hair restoration
                                and skin rejuvenation treatments, using only medically-approved techniques.</p>

                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Personalized Care</h3>
                            <p>Your journey begins with a comprehensive consultation where we listen to understand your
                                unique concerns and goals before creating a customized treatment plan.</p>

                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-icon">
                                <i class="fas fa-clinic-medical"></i>
                            </div>
                            <h3>Premium Facilities</h3>
                            <p>Our state-of-the-art clinic combines medical precision with spa-like comfort, featuring the
                                latest FDA-cleared technologies in a serene Yorkshire setting.</p>

                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#contact" class="btn btn-primary ">
                        Book Your Consultation
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </section>

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
                {{-- <div class="text-center mb-4">
                    <button class="btn btn pricingbtn mx-2" onclick="showCards('female')">Plans For Fmale</button>
                    <button class="btn btn pricingbtn mx-2" onclick="showCards('male')">Plans For Male</button>
                </div> --}}

                <div id="female-cards">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Face Treatments
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Pricing Per Area</h6>
                                    <p>Save with multi-session packages.</p>
                                </div>
                                <div class="card-body p-0"
                                    style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th>Area</th>
                                                <th>1 Session</th>
                                                <th>6 Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Full Face</strong></td>
                                                <td>&pound;45</td>
                                                <td>&pound;270 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Half Face</strong></td>
                                                <td>&pound;30</td>
                                                <td>&pound;180 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Neck Front/Back</strong></td>
                                                <td>&pound;35</td>
                                                <td>&pound;210</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Upper Lip + Chin/Cheeks</strong></td>
                                                <td>&pound;15</td>
                                                <td>&pound;90 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sideburns</strong></td>
                                                <td>&pound;35</td>
                                                <td>&pound;210 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jaw Line + Chin</strong></td>
                                                <td>&pound;50</td>
                                                <td>&pound;300 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>1/2 Face + Front/back Neck</strong></td>
                                                <td>&pound;50</td>
                                                <td>&pound;300 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Beard + Cheek</strong></td>
                                                <td>&pound;55</td>
                                                <td>&pound;330 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Lower Body Treatments
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Pricing Per Area</h6>
                                    <p>Save with multi-session packages.</p>
                                </div>
                                <div class="card-body p-0"
                                    style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th>Area</th>
                                                <th>1 Session</th>
                                                <th>6 Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Full Legs <small style="color: #043264">(feet and
                                                            toes)</small></strong></td>
                                                <td>&pound;95</td>
                                                <td>&pound;570 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Half Legs</strong></td>
                                                <td>&pound;60</td>
                                                <td>&pound;330 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Feet & Toes</strong></td>
                                                <td>&pound;20</td>
                                                <td>&pound;120</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Female Bikini</strong></td>
                                                <td>&pound;30</td>
                                                <td>&pound;180 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Female Brazilian</strong></td>
                                                <td>&pound;40</td>
                                                <td>&pound;240 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Female Hollywood + Underarms</strong></td>
                                                <td>&pound;55</td>
                                                <td>&pound;330 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Male Brazalian</strong></td>
                                                <td>&pound;40</td>
                                                <td>&pound;240 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Beard + Cheek</strong></td>
                                                <td>&pound;55</td>
                                                <td>&pound;330 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>





                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Upper Body Treatments
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Pricing Per Area</h6>
                                    <p>Save with multi-session packages.</p>
                                </div>
                                <div class="card-body p-0"
                                    style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th>Area</th>
                                                <th>1 Session</th>
                                                <th>6 Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Under Arms</strong></td>
                                                <td>&pound;8</td>
                                                <td>&pound;48 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Full Arms</strong></td>
                                                <td>&pound;75</td>
                                                <td>&pound;450 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Half Arms</strong></td>
                                                <td>&pound;40</td>
                                                <td>&pound;240</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Full Back</strong></td>
                                                <td>&pound;90</td>
                                                <td>&pound;540 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Stomach</strong></td>
                                                <td>&pound;40</td>
                                                <td>&pound;240 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Chest</strong></td>
                                                <td>&pound;35</td>
                                                <td>&pound;210 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Hands + Fingers</strong></td>
                                                <td>&pound;15</td>
                                                <td>&pound;90 </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Snail Trail/Naval</strong></td>
                                                <td>&pound;25</td>
                                                <td>&pound;150 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-center" style="border: none">
                                <div class="card-header py-1">
                                    <div class="mt-3">
                                        <span
                                            style="background-color:#f1f7fc; color: #1977cc; padding: 5px; border-radius: 7px; font-size: 14px; font-weight: 500;">
                                            Full Body Treatments
                                        </span>
                                    </div>
                                    <h6 class="mt-3">Pricing Per Area</h6>
                                    <p>Save with multi-session packages.</p>
                                </div>
                                <div class="card-body p-0"
                                    style="border: 1px solid #ebebeb; border-radius: 0 0 20px 20px;">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th>Area</th>
                                                <th>1 Session</th>
                                                <th>6 Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Full Body</strong></td>
                                                <td>&pound;300</td>
                                                <td>&pound;1800</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Full body (4 parts)</strong></td>
                                                <td>&pound;190</td>
                                                <td>&pound;1200 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>

                {{-- <div id="male-cards" style="display: none;">
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
                </div> --}}

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
                                <h3>Treatment Plan Overview</h3>
                                <div class="faq-content">
                                    <p>
                                        <b>Face Treatments</b>
                                        <br>
                                        Full Face 1 session : 45 £
                                        <br>
                                        Full Face 6 session : 270 £
                                        <br>
                                        Half Face 1 session : 30 £
                                        <br>
                                        Half Face 6 session : 180 £
                                        <br>
                                        Neck Front/Back 1 session : 35 £
                                        <br>
                                        Neck Front/Back 6 session : 210 £
                                        <br>
                                        Upper Lip + Chin/Cheeks 1 session : 15 £
                                        <br>
                                        Upper Lip + Chin/Cheeks 6 session : 90 £
                                        <br>
                                        Sideburns 1 session : 35 £
                                        <br>
                                        Sideburns 6 session : 210 £
                                        <br>
                                        Jaw Line + Chin 1 session : 50 £
                                        <br>
                                        Jaw Line + Chin 6 session : 300 £
                                        <br>
                                        1/2 Face + Front/back Neck 1 session : 50 £
                                        <br>
                                        1/2 Face + Front/back Neck 6 session : 300 £
                                        <br>
                                        Beard + Cheek 1 session : 55 £
                                        <br>
                                        Beard + Cheek 6 session : 330 £
                                        <br><br>

                                        <b>Lower Body Treatments</b>
                                        <br>
                                        Full Legs (feet and toes) 1 session : 95 £
                                        <br>
                                        Full Legs (feet and toes) 6 session : 570 £
                                        <br>
                                        Half Legs 1 session : 60 £
                                        <br>
                                        Half Legs 6 session : 330 £
                                        <br>
                                        Feet & Toes 1 session : 20 £
                                        <br>
                                        Feet & Toes 6 session : 120 £
                                        <br>
                                        Female Bikini 1 session : 30 £
                                        <br>
                                        Female Bikini 6 session : 180 £
                                        <br>
                                        Female Brazilian 1 session : 40 £
                                        <br>
                                        Female Brazilian 6 session : 240 £
                                        <br>
                                        Female Hollywood + Underarms 1 session : 55 £
                                        <br>
                                        Female Hollywood + Underarms 6 session : 330 £
                                        <br>
                                        Male Brazalian 1 session : 40 £
                                        <br>
                                        Male Brazalian 1 session : 240 £
                                        <br>
                                        Beard + Cheek 1 session : 55 £
                                        <br>
                                        Beard + Cheek 1 session : 330 £
                                        <br><br>

                                        <b>Upper Body Treatments</b>
                                        <br>
                                        Under Arms 1 session : 8 £
                                        <br>
                                        Under Arms 6 session : 48 £
                                        <br>
                                        Full Arms 1 session : 75 £
                                        <br>
                                        Full Arms 6 session : 450 £
                                        <br>
                                        Half Arms 1 session : 40 £
                                        <br>
                                        Half Arms 6 session : 240 £
                                        <br>
                                        Full Back 1 session : 90 £
                                        <br>
                                        Full Back 6 session : 540 £
                                        <br>
                                        Stomach 1 session : 40 £
                                        <br>
                                        Stomach 6 session : 240 £
                                        <br>
                                        Chest 1 session : 35 £
                                        <br>
                                        Chest 6 session : 210 £
                                        <br>
                                        Hands + Fingers 1 session : 15 £
                                        <br>
                                        Hands + Fingers 6 session : 90 £
                                        <br>
                                        Snail Trail/Naval 1 session : 25 £
                                        <br>
                                        Snail Trail/Naval 6 session : 150 £
                                        <br><br>


                                        <b>Full body</b>
                                        <br>
                                        Full Body 1 session : 300 £
                                        <br>
                                        Full Body 6 session : 1800 £
                                        <br>
                                        Full body (4 parts) 1 session : 190 £
                                        <br>
                                        Full body (4 parts) 6 session : 1200 £
                                        <br><br>
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>


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
                                <h3>Affordable Pricing Plans</h3>
                                {{-- <br> --}}
                                <p>Lock in our best price—quality care that fits your budget.Transparent pricing, no hidden
                                    fees—ever.</p>
                                <p>Limited-time offer: Book now and save up to 20%.Premium results at a price you’ll love.
                                </p>
                                <p>Flexible payment plans tailored just for you.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>

        </section>

        <section id="laser-instructions" class="laser-instruction-section">
            <div class="container">
                <div class="section-header text-center mb-4">
                    <h2 class="lasersection-title">Laser Hair Removal Instructions</h2>
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



        <section class="soprano-laser-section">
            <div class="laser-container">
                <!-- Header -->
                <div class="laser-header">
                    <span class="badge">BEST IN CLASS</span>
                    <h2>Soprano ICE Platinum Laser System</h2>
                    <p class="subheader">The gold standard in pain-free, permanent hair reduction</p>
                </div>

                <!-- Main Content -->
                <div class="laser-grid">
                    <!-- Left Column - Visual -->
                    <div class="laser-visual">
                        <div class="machine-wrapper">
                            <img src="assets/img/saprano.jpg" alt="Soprano ICE Platinum Machine" class="main-machine">
                            <div class="tech-badge">
                                <span>810nm Diode Laser</span>
                            </div>
                        </div>

                        <div class="highlights-box">
                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div>
                                    <h4>All Skin Types</h4>
                                    <p>Safe for all skin tones (I-VI), including darker complexions that often can't use
                                        traditional lasers.</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-snowflake"></i>
                                </div>
                                <div>
                                    <h4>Virtually Painless</h4>
                                    <p>Patented cooling system eliminates discomfort - no numbing cream needed.</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4>Fast Treatments</h4>
                                    <p>Large 24mm spot size treats full legs in under 30 minutes.</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h4>Proven Results</h4>
                                    <p>90% permanent hair reduction in just 6-8 sessions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Details -->
                    <div class="laser-details">
                        <div class="detail-card">
                            <h3><i class="fas fa-atom blue-icon"></i> How It Works</h3>
                            <p>
                                The <strong>Soprano ICE Platinum</strong> uses advanced diode laser technology to gently
                                heat the hair follicles, effectively targeting the root without harming surrounding skin.
                                Its built-in <strong>cooling system</strong> keeps the skin protected and comfortable
                                throughout the treatment.
                            </p>
                            <p>
                                Operating at a precise <strong>810nm wavelength</strong>, the laser focuses on the melanin
                                in the hair shaft, disabling the follicle to prevent regrowth. This wavelength is known for
                                its efficiency and safety across a wide range of skin types and hair colors.
                            </p>
                            <p>
                                With consistent sessions, the treatment results in <strong>long-lasting hair
                                    reduction</strong>, giving you smoother skin with minimal discomfort or downtime.
                            </p>
                        </div>

                        <div class="tech-specs">
                            <h4>Technical Specifications:</h4>
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-wave-square"></i>
                                    <span>Wavelength</span>
                                    <strong>810nm</strong>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-expand"></i>
                                    <span>Spot Size</span>
                                    <strong>24mm</strong>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Repetition Rate</span>
                                    <strong>Up to 3Hz</strong>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-certificate"></i>
                                    <span>Approvals</span>
                                    <strong>FDA, CE, TGA</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">
            <div class="container section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>What is Laser Hair Removal, and how does it work?</h3>
                                <div class="faq-content">
                                    <p>
                                        Laser Hair Removal is a non-invasive procedure that uses concentrated light energy
                                        to target and destroy hair follicles, preventing future hair growth. It provides
                                        long-term hair reduction and works on various skin types.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is Laser Hair Removal permanent?</h3>
                                <div class="faq-content">
                                    <p>
                                        Laser Hair Removal significantly reduces hair growth, but results may vary. Some
                                        hair may regrow over time, requiring occasional maintenance sessions for
                                        long-lasting smooth skin.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is Laser Hair Removal safe?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes, Laser Hair Removal is a safe and FDA-approved procedure when performed by
                                        trained professionals. Minor redness or irritation may occur but usually subsides
                                        within a few hours.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How many sessions are needed for the best results?</h3>
                                <div class="faq-content">
                                    <p>
                                        Most individuals require 6-8 sessions spaced 4-6 weeks apart to achieve optimal
                                        results, depending on hair type, skin tone, and treatment area.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Does Laser Hair Removal hurt?</h3>
                                <div class="faq-content">
                                    <p>
                                        The procedure is generally well-tolerated, with most patients describing it as a
                                        mild tingling or snapping sensation. Cooling techniques and numbing creams can help
                                        reduce discomfort.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Which areas can be treated with Laser Hair Removal?</h3>
                                <div class="faq-content">
                                    <p>
                                        Laser Hair Removal can be performed on various areas, including the face, arms,
                                        legs, underarms, bikini line, back, and chest, offering smooth and hair-free skin.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Are there any side effects?</h3>
                                <div class="faq-content">
                                    <p>
                                        Side effects are minimal and may include slight redness, swelling, or temporary
                                        sensitivity in the treated area. These usually subside within a few hours to a
                                        couple of days.
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

                </div>
            </div>
        </section>
        <!-- /Services Section -->




        <!-- Laser CTA Section -->
        <section id="hydrafacial-contact" class="hydrafacial-cta-section py-5">
            <div class="hydrafacial-floating-bubbles">
                <div class="hydrafacial-bubble" style="left: 10%; width: 40px; height: 40px; animation-delay: 0s;"></div>
                <div class="hydrafacial-bubble" style="left: 20%; width: 30px; height: 30px; animation-delay: 2s;"></div>
                <div class="hydrafacial-bubble" style="left: 50%; width: 50px; height: 50px; animation-delay: 4s;"></div>
                <div class="hydrafacial-bubble" style="left: 70%; width: 25px; height: 25px; animation-delay: 1s;"></div>
                <div class="hydrafacial-bubble" style="left: 90%; width: 35px; height: 35px; animation-delay: 3s;"></div>
            </div>
            <div class="container position-relative py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" id="contact">
                        <h2 class="text-white mb-4">Ready for Laser Treatment?</h2>
                        <p class="lead text-white mb-5">Book your Laser treatment today and experience the difference
                        </p>
                        @livewire(name: 'AppointmentForm.LaserAppointmentForm')
                    </div>
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
    {{-- hydra bubles js --}}
    <script>
        function createHydraFacialBubbles() {
            const bubblesContainer = document.querySelector('.hydrafacial-floating-bubbles');
            if (!bubblesContainer) return;

            for (let i = 0; i < 8; i++) {
                const bubble = document.createElement('div');
                bubble.classList.add('hydrafacial-bubble');

                // Random size between 20px and 60px
                const size = Math.random() * 40 + 20;

                // Random position
                const left = Math.random() * 100;

                // Random animation delay
                const delay = Math.random() * 5;

                // Random animation duration between 10s and 20s
                const duration = Math.random() * 10 + 10;

                bubble.style.width = `${size}px`;
                bubble.style.height = `${size}px`;
                bubble.style.left = `${left}%`;
                bubble.style.animationDelay = `${delay}s`;
                bubble.style.animationDuration = `${duration}s`;

                bubblesContainer.appendChild(bubble);
            }
        }

        createHydraFacialBubbles();
        const bookButtons = document.getElementsByClassName('bookNow');

        // If there's only one button, access the first one
        // bookButtons[0].addEventListener('click', function(e) {
        //     e.preventDefault();
        //     const select = document.getElementById('appointmentSelect');
        //     select.value = "Signature HydraFacial"; // Value must match the option text exactly
        // });
        document.querySelectorAll('.bookNow').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default action
                const treatment = this.getAttribute('data-id'); // Get data-id value
                const select = document.getElementById('appointmentSelect');
                console.log(treatment);

                // Set the value of the select to match the treatment
                select.value = treatment;
            });
        });
    </script>
@endsection
