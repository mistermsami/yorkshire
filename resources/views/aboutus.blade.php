@php
    $pagename = 'About Us';
    // $title = 'Home';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    {{-- for meta tags (SEO)
    and for custom css --}}
    <style>
       /* About Page Hero Section - Scoped Styles */
       .about-page-hero {
           min-height: 90vh;
           display: flex;
           align-items: center;
           background: linear-gradient(135deg, #ffffff 0%, #d1e7ff 100%);
           position: relative;
           overflow: hidden;
           padding: 60px 0 150px;
       }

       .about-hero-wave {
           position: absolute;
           bottom: 0;
           left: 0;
           width: 100%;
           height: 100px;
           background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%231977cc" opacity=".1"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="%231977cc" opacity=".3"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%231977cc"/></svg>');
           background-size: cover;
           z-index: 1;
       }

       .about-hero-container {
           width: 100%;
           max-width: 1200px;
           margin: 0 auto;
           padding: 0 2rem;
           position: relative;
           z-index: 2;
       }

       .about-hero-content {
           display: grid;
           grid-template-columns: 1fr 1fr;
           /* gap: 4rem; */
           /* align-items: center; */
       }

       /* Typography */
       .about-hero-title {
           font-family: 'Montserrat', sans-serif;
           font-weight: 900;
           font-size: clamp(2.5rem, 5vw, 3.5rem);
           line-height: 1.2;
           color: #0d5a9e;
           margin-bottom: 1.5rem;
       }

       .about-hero-subtitle {
           font-size: 1.1rem;
           line-height: 1.8;
           color: #2a2a2a;
           margin-bottom: 2.5rem;
           max-width: 90%;
       }

       /* Image Gallery Styles */
       .about-hero-gallery {
           display: grid;
           grid-template-columns: repeat(6, 1fr);
           grid-template-rows: repeat(5, 1fr);
           gap: 15px;
           height: 500px;
           width: 100%;
           margin-bottom: 20px;
       }

       .about-gallery-item {
           border-radius: 12px;
           overflow: hidden;
           position: relative;
           box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
           transition: all 0.3s ease;
       }

       .about-gallery-item:hover {
           transform: scale(1.03);
           box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
           z-index: 2;
       }

       .about-gallery-item img {
           width: 100%;
           height: 100%;
           object-fit: cover;
           transition: transform 0.5s ease;
       }

       .about-gallery-item:hover img {
           transform: scale(1.1);
       }

       /* Positioning for each image */
       .about-gallery-item-1 {
           grid-column: 1 / 5;
           grid-row: 1 / 4;
       }

       .about-gallery-item-2 {
           grid-column: 5 / 7;
           grid-row: 1 / 3;
       }

       .about-gallery-item-3 {
           grid-column: 1 / 3;
           grid-row: 4 / 6;
       }

       .about-gallery-item-4 {
           grid-column: 3 / 5;
           grid-row: 4 / 6;
       }

       .about-gallery-item-5 {
           grid-column: 5 / 7;
           grid-row: 3 / 6;
       }

       /* Buttons */
       .about-hero-buttons {
           display: flex;
           gap: 1rem;
           margin-top: 2rem;
           color: white;
       }

       .btn-about-primary {
           background: #1977cc;
           color: white;
           padding: 0.8rem 2rem;
           border-radius: 50px;
           font-weight: 600;
           border: none;
           transition: all 0.3s ease;
       }

       .btn-about-primary:hover {
           background: #0d5a9e;
           transform: translateY(-3px);
           /* box-shadow: 0 10px 20px rgba(25, 119, 204, 0.3); */
       }

       .btn-about-outline {
           border: 2px solid #1977cc;
           color: #1977cc;
           background: transparent;
           padding: 0.8rem 2rem;
           border-radius: 50px;
           font-weight: 600;
           transition: all 0.3s ease;
       }

       .btn-about-outline:hover {
           background: #1977cc;
           color: white;
       }

       /* Responsive */
       @media (max-width: 992px) {
           .about-hero-content {
               grid-template-columns: 1fr;
               gap: 3rem;
               text-align: center;
           }
           
           .about-hero-subtitle {
               margin: 0 auto 2rem;
           }
           
           .about-hero-buttons {
               justify-content: center;
           }
           
           .about-hero-gallery {
               height: 400px;
               order: -1;
           }
           .trustpilot-line, .award-badge {
         text-align: center;
         display: flex;
         flex-direction: column;
         align-items: center;
         }
           
       }

       @media (max-width: 768px) {
           .about-hero-buttons {
               flex-direction: column;
               align-items: center;
           }
           

           .about-hero-gallery {
               height: 350px;
               gap: 10px;
           }
           
           .about-page-hero {
               padding-bottom: 120px;
           }
       }

       @media (max-width: 576px) {
           .about-hero-gallery {
               height: 300px;
           }
       }
  
       
        p{
            font-size: 16px !important;
        }
       
        .aboutsecond_sec{
            padding: 80px 0 40px 0;
            background-color: #fff;
        }
        

        .aboutsecond_sec .aboutsideimg img{
            height: 500px;
            
            object-fit: cover;
            border-radius: 25px !important;
        }
        .aboutsecond_sec .section-header{
            margin-bottom: 30px !important;
        }
        .aboutthird_sec{
            padding: 80px 0 40px 0;
        }
        .aboutthird_sec .profile-widget{
            border-radius: 20px;
        }
        .aboutthird_sec .aboutsideimg img{
            height: 500px;
            border-radius: 25px !important;
        }
        .aboutthird_sec .section-header{
            margin-bottom: 30px !important;
        }
        .textarea{
            padding-left: 50px;
            padding-right: 50px;
        }
        @media only screen and (max-width: 768px) {
            .aboutsecond_sec .aboutsideimg img{
                width: 100%;
                height: 300px;
                margin-bottom: 20px;
            }
            .aboutthird_sec .aboutsideimg img{
                height: 300px;
                width: 100%;
            }
        }
    </style>
@endsection

@section('maincontent')
    <main class="main">
        <!-- Popular Section -->
        <section class="about-page-hero">
            <div class="about-hero-wave"></div>
            <div class="about-hero-container">
                <div class="about-hero-content">
                    <div class="about-hero-text">
                        <h1 class="about-hero-title">Our Journey in Excellence</h1>
                        <p class="about-hero-subtitle">
                            Founded with a vision to redefine healthcare standards, we combine cutting-edge technology 
                            with compassionate care. Our team of board-certified specialists brings together decades 
                            of experience to deliver exceptional results.
                            lore
                        </p>
                        <div class="trustpilot-container" >
                            <div class="trustpilot-line">
                               <img src="/assets/img/trustpilotimage.png" alt="trustpilot" width="320px">
                            </div>
                        </div>
                        <div class="award-badge">
                            <i class="fas fa-award" style="color: var(--primary-color);"></i>
                            <span>2023 Best Aesthetic Treatment Award</span>
                        </div>
                        <div class="about-hero-buttons">
                            <button class="btn btn-about-primary">Meet Our Team</button>
                            <button class="btn btn-about-outline">Our Approach</button>
                        </div>
                    </div>
                    <div class="about-hero-gallery">
                        <div class="about-gallery-item about-gallery-item-1">
                            <img src="{{asset('assets/img/Screenshot_3-4.png')}}"
                                 alt="Medical team discussing treatment">
                        </div>
                        <div class="about-gallery-item about-gallery-item-2">
                            <img src="{{asset('assets/img/care.jpg')}}" 
                                 alt="Doctor examining patient">
                        </div>
                        <div class="about-gallery-item about-gallery-item-3">
                            <img src="{{asset('assets/img/happypt.jpg')}}" 
                                 alt="Hospital hallway">
                        </div>
                        <div class="about-gallery-item about-gallery-item-4">
                            <img src="{{asset('assets/img/meditation.jpg')}}" 
                                 alt="Medical equipment">
                        </div>
                        <div class="about-gallery-item about-gallery-item-5">
                            <img src="{{asset('assets/img/happypt2.jpg')}}" 
                                 alt="Nurse helping patient">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- /Popular Section -->
    
    <!-- Popular Section -->
    <section class="section aboutsecond_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/Screenshot_8.png')}}">
                           
                        </div>

                    </div>
                    <!-- /Doctor Widget -->
                </div>
                <div class="col-lg-6 d-flex align-items-center textarea">
                    <div>
                        <div class="section-header">
                            <h2>Nearly 90% of men don't seek help unless they have a serious problem.</h2>
                        </div>
                        <div class="about-content">
                            <p>This stat sucks. It's actually quite scary. We're here to fix it as best we can.</p>
                            
                            <p>Many men wait until their hair loss becomes severe before taking action, often when it's more difficult to treat effectively.</p>
                            
                            <p>At Yorkshire Hair and Skin Solution, we understand the hesitation men feel about addressing hair loss. That's why we've created a welcoming, judgment-free environment where you can get expert advice without embarrassment.</p>
                            
                            <p>Our team specializes in early detection and prevention, offering personalized solutions tailored to your specific needs and hair goals.</p>
                        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Popular Section -->
    <!-- Popular Section -->
    <section class="section aboutthird_sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center textarea">
                    <div>

                        <div class="section-header">
                            
                            <h2 >
                                What we believe
                            </h2>
                            
                        </div>
                        <div class="about-content">
                            <p>
                                The first step is to open up and talk – no issue too embarrassing, no subject too taboo. Then to embrace holistic solutions, avoiding quick fixes. Looking after yourself from top to bottom, inside and out.  
                            </p>
                            <p>
                                Your health isn’t just about fixing problems; it’s about preventing them. Small, consistent changes in lifestyle, diet, and mental well-being can make a huge difference. Seeking help is a sign of strength, not weakness – and every step forward counts.  
                            </p>
                            <p>
                                It’s time to break the stigma and take control. Whether it’s improving sleep, managing stress, or staying physically active, every effort contributes to a healthier, happier you. No one has to do it alone – support, guidance, and real solutions are always within reach.
                            </p>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/Screenshot_6-1.png')}}">
                         
                        </div>

                    </div>
                    <!-- /Doctor Widget -->
                </div>

            </div>
        </div>
    </section>
    <!-- /Popular Section -->
    <!-- Popular Section -->
    <section class="section aboutsecond_sec mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/Screenshot_1-1.png')}}">
                           
                        </div>

                    </div>
                    <!-- /Doctor Widget -->
                </div>
                <div class="col-lg-6 d-flex align-items-center textarea">
                    <div>

                        <div class="section-header">
                            {{-- <p>Our Services</p> --}}
                            <h2 >
                                From Meh to YEAH!
                            </h2>
                           
                        </div>
                        <div class="about-content">
                            <p>
                                We’re no strangers to the pitfalls of ignoring your well-being.
                            </p>
                            <p>
                                We started Manual because we spent years sweeping everything under the carpet until everything piled up and the carpet wore out.
                            </p>
                            <p>
                                Overweight, anxious, unable to sleep, run down, and fatigued are just some of the problems we’d stacked up between us. Not a pretty sight.
                            </p>
                            <p>
                                But we realized something—change is possible. Taking control of our health didn’t happen overnight, but step by step, we built better habits. Now, we’re here to help others do the same.
                            </p>
                            <p>
                                So grab the guide, change gears, and let’s get started. Health and happiness? 
                                Let’s make it happen.
                            </p>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Popular Section -->
    <!-- Popular Section -->
    <section class="section aboutthird_sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center textarea">
                    <div>

                        <div class="section-header">
                            
                            <h2 >
                                What We Stand For
                            </h2>
                            
                        </div>
                        <div class="about-content">
                            <p class="lead font-weight-bold">
                                We’re challenging the outdated notion that real men shrug their shoulders and carry on.
                            </p>
                            <p>
                                By empowering men with all the information and choices they need to proactively own their
                                well-being, we can turn a corner. We’re here to be your own personal manual—a guide to
                                owning your health and happiness. Giving you all the tools you need to be good to you.
                            </p>
                            <p>
                                We started talking—first to each other, then to others—and actively sought help. 
                                The more we spoke, the better we felt. The more we learned about solutions, the 
                                more we began to apply them in our lives. And you know what? Taking care of yourself, 
                                inside and out, really works.
                            </p>
                            <p>
                                But we’re not done yet—it’s a journey. We created Manual to help all of us find the best 
                                path to well-being.
                            </p>
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/happyteam.jpg')}}" >
                            {{-- <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a> --}}
                        </div>

                    </div>
                    <!-- /Doctor Widget -->
                </div>

            </div>
        </div>
    </section>
    <!-- /Popular Section -->
  

   
<!-- Where We're Located Section -->
<section class="location-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="fw-bold">Where We're Located</h2>
            <p class="lead">Visit our clinic for personalized hair and skin solutions</p>
        </div>

        <div class="row g-4 d-flex align-items-stretch"> <!-- Added align-items-stretch -->
            <!-- Map Column -->
            <div class="col-lg-6">
                <div class="location-map rounded shadow-sm h-100"> <!-- Added h-100 -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.051356621758!2d-1.564123684178722!3d53.77547198007586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDQ2JzMxLjciTiAxwrAzMyc1MC44Ilc!5e0!3m2!1sen!2suk!4v1620000000000!5m2!1sen!2suk" 
                            width="100%" 
                            height="100%" 
                            style="border:0; min-height: 400px;"
                            allowfullscreen="" 
                            loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Address & Hours Column -->
            <div class="col-lg-6">
                <div class="location-info bg-light p-4 rounded h-100 d-flex flex-column"> <!-- Added flex classes -->
                    <div>
                        <h3 class="h4 mb-4">Yorkshire Hair and Skin Solution</h3>
                        
                        <div class="mb-4">
                            <h4 class="h5"><i class="fas fa-map-marker-alt text-primary me-2"></i> Address</h4>
                            <p>175 Dewsbury Roads<br>
                                Leeds Ls11 5EG</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="h5"><i class="fas fa-clock text-primary me-2"></i> Opening Hours</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</li>
                                <li class="mb-2"><strong>Saturday:</strong> 10:00 AM - 4:00 PM</li>
                                <li><strong>Sunday:</strong> Closed</li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h4 class="h5"><i class="fas fa-phone-alt text-primary me-2"></i> Contact</h4>
                            <p>Phone: <a href="tel:+447570957502">07570957502</a><br>
                            Email: <a href="mailto:info@yorkshirehairsolution.com">info@yorkshirehairsolution.com</a></p>
                        </div>
                    </div>

                    <div class="mt-auto pt-3"> <!-- Pushes buttons to bottom -->
                        <a href="#appointment" class="btn btn-primary me-2">
                            <i class="fas fa-calendar-check me-1"></i> Book Appointment
                        </a>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-directions me-1"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    </main>
@endsection
