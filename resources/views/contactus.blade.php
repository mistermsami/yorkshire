@php
    $pagename = 'Contact Us';
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
            /* padding-top: 20px; */
            padding-top: 0;
            padding-bottom: 0;
            /* height: 100vh; */
            background-color: #f3f1ee;
        }
        .aboutmain_sec h2{
            font-size: 50px;
            font-weight: 700;
            margin-bottom:15px;
        }
        p{
            font-size: 16px !important;
        }
        .aboutmain_sec .aboutsideimg{
            height: 100% !important;
        }
        .aboutsecond_sec{
            padding: 80px 0 40px 0;
            background-color: #fff;
        }
        /* .aboutsecond_sec .profile-widget{
            background-color: #f3f1ee;
            border-radius: 20px;
            padding: 20px;
        } */
        .aboutsecond_sec .aboutsideimg img{
            height: 500px;
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
    </style>
@endsection

@section('maincontent')
    <main class="main">
        <!-- Popular Section -->
    <section class="section aboutmain_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="px-4">

                        <div class="section-header ">
                            {{-- <p>Our Services</p> --}}
                            <h2>Contact Us!</h2>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Doctor Widget -->
                    <div class="profile-widget">
                        <div class="doc-img aboutsideimg">
                                <img class="img-fluid" style="height: 100%" alt="User Image" src="{{asset('assets/img/contactus.jpg')}}">
                                {{-- <img class="img-fluid" alt="User Image" src="{{asset('assets/img/aboutus.png')}}"> --}}
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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="mb-5">
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2355.571914974049!2d-1.5183046236877165!3d53.814900739562496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795b882fb43061%3A0xf467750bd6ff3301!2sLuxor%20View%2C%20Harehills%2C%20Leeds%2C%20UK!5e0!3m2!1sen!2s!4v1739302064722!5m2!1sen!2s"
                frameborder="0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Location</h3>
                            <p>LS8 5jL Luxer View Leeds united kingdom</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>44 589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@yorkshirehairandskinsolution.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- /Contact Section -->
    </main>
@endsection
