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
                        <img src="assets/img/lasercoverphoto.jpg" class="aboutmain_sec_img" alt="" >
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
                                                    <img src="assets/img/laserresult1.webp" alt="Laser Hair Removal Results - Before & After" class="w-100">
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
                                                        <div class="col-md-6 mt-2 text-primary">$99/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Card 2 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/laserresult2.jpg" alt="Skin Brightening Results - Before & After" class="w-100">
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
                                                        <div class="col-md-6 mt-2 text-primary">$499 (save 15%)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Card 3 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/laserresult3.webp" alt="Acne Treatment Results - Before & After" class="w-100">
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
                                                        <div class="col-md-6 mt-2 text-primary">$129/session</div>
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
                                                    <img src="assets/img/laserresult4.webp" alt="Scar Reduction Results - Before & After" class="w-100">
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
                                                        <div class="col-md-6 mt-2 text-primary">$699 (save 20%)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Card 5 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/result5.png" alt="Anti-Aging Results - Before & After" class="w-100">
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
                                                        <div class="col-md-6 mt-2 text-primary">$149/session</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Card 6 -->
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-header p-0 overflow-hidden">
                                                    <img src="assets/img/result6.png" alt="Pigmentation Results - Before & After" class="w-100">
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
                                                        <div class="col-md-6 mt-2 text-primary">$299 (all-in)</div>
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
                            <span class="carousel-control-prev-icon" style="filter: invert(0);" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next position-absolute top-50 end-0 translate-middle-y" 
                                type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"
                                style="margin-right: -13px; color: #1977cc;">
                            <span class="carousel-control-next-icon" style="filter: invert(0);" aria-hidden="true"></span>
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
                                <p>Lock in our best price—quality care that fits your budget.Transparent pricing, no hidden fees—ever.</p>  
                                <p>Limited-time offer: Book now and save up to 20%.Premium results at a price you’ll love.</p>  
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

        <!-- dmue -->
        {{-- <section class="laserdevice section " >

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

        </section> --}}
        <!-- /dmue -->

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
                                        Laser Hair Removal is a non-invasive procedure that uses concentrated light energy to target and destroy hair follicles, preventing future hair growth. It provides long-term hair reduction and works on various skin types.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
        
                            <div class="faq-item">
                                <h3>Is Laser Hair Removal permanent?</h3>
                                <div class="faq-content">
                                    <p>
                                        Laser Hair Removal significantly reduces hair growth, but results may vary. Some hair may regrow over time, requiring occasional maintenance sessions for long-lasting smooth skin.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
        
                            <div class="faq-item">
                                <h3>Is Laser Hair Removal safe?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes, Laser Hair Removal is a safe and FDA-approved procedure when performed by trained professionals. Minor redness or irritation may occur but usually subsides within a few hours.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
        
                            <div class="faq-item">
                                <h3>How many sessions are needed for the best results?</h3>
                                <div class="faq-content">
                                    <p>
                                        Most individuals require 6-8 sessions spaced 4-6 weeks apart to achieve optimal results, depending on hair type, skin tone, and treatment area.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
        
                            <div class="faq-item">
                                <h3>Does Laser Hair Removal hurt?</h3>
                                <div class="faq-content">
                                    <p>
                                        The procedure is generally well-tolerated, with most patients describing it as a mild tingling or snapping sensation. Cooling techniques and numbing creams can help reduce discomfort.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
        
                            <div class="faq-item">
                                <h3>Which areas can be treated with Laser Hair Removal?</h3>
                                <div class="faq-content">
                                    <p>
                                        Laser Hair Removal can be performed on various areas, including the face, arms, legs, underarms, bikini line, back, and chest, offering smooth and hair-free skin.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
        
                            <div class="faq-item">
                                <h3>Are there any side effects?</h3>
                                <div class="faq-content">
                                    <p>
                                        Side effects are minimal and may include slight redness, swelling, or temporary sensitivity in the treated area. These usually subside within a few hours to a couple of days.
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
