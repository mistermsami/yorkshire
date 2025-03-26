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
        .aboutmain_sec {
           
            height: 90vh;
            background: linear-gradient(135deg, #f9f9f9, #e2f0fe)
        }
        .aboutmain_sec h2{
            font-size: 50px;
            font-weight: 700;
            margin-bottom:15px;
        }
        .aboutmain_sec .aboutsideimg img{
            height: 100vh;
            object-fit: cover;
            
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
    <section class="section aboutmain_sec d-flex align-items-center">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="" style="padding: 0px 50px">

                        <div class="section-header ">
                            {{-- <p>Our Services</p> --}}
                            <h2>About Us!</h2>
                            <h3 style="font-size: 34px; font-weight: 600;">This feels good,</h3>
                        </div>
                        
                        <div class="about-content">
                            <p><b>We’re challenging the outdated notion that real men shrug their shoulders and carry
                                    on.</b></p>
                            <p>
                                By empowering men with all the information and choices they need to proactively own their
                                wellbeing, we can turn a corner. We’re here to be your own personal manual. A guide to
                                owning your health and happiness. Giving you all the tools you need to be good to you.
                            </p>
                            <div>
                                <img src="/assets/img/trustpilotimage.png" alt="trustpilot" width="320px">
                               </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="height: 100%">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                                <img class="img-fluid" style="height: 470px; border-radius: 30px; width: 600px;" alt="User Image" src="{{asset('assets/img/sander-sammy-38Un6Oi5beE-unsplash.jpg')}}">
                             
                        </div>

                    </div>
                    <!-- /Doctor Widget -->
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
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/Screenshot_6-1.png')}}">
                           
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
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/Screenshot_8.png')}}">
                         
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
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/Screenshot_3-4.png')}}">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1dYOUR_LOCATION_ID!2dYOUR_LONGITUDE!3dYOUR_LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDQyJzQxLjgiTiA2N8KwMTknNTAuOSJF!5e0!3m2!1sen!2suk!4v1620000000000!5m2!1sen!2suk" 
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
                            <p>Phone: <a href="tel:+441234567890">07943289303</a><br>
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
