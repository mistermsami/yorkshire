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
        /* Modern Blue Theme */
        :root {
            --electric-blue: #2962ff;
            --deep-blue: #0039cb;
            --sky-blue: #82b1ff;
            --ice-blue: #e3f2fd;
            --neon-blue: #00b0ff;
            --text-dark: #212121;
            --text-light: #f5f5f5;
        }
        
        
        .hero-section {
            background: linear-gradient(to right, #1977cc, #02126ce8);
            color: var(--text-light);
            padding: 8rem 2rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        
        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .hero-title span {
            color: #00f3ff;
            position: relative;
            display: inline-block;
        }
        
        .hero-title span::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: #00f3ff;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
        }
        
        .hero-title:hover span::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .hero-subtitle {
            font-size: 1.35rem;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
            font-weight: 300;
            opacity: 0.9;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        
        .contact-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            color: var(--text-dark);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            box-shadow: 0 4px 15px rgba(0, 176, 255, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .contact-btn i {
            margin-right: 10px;
            font-size: 1.1rem;
        }
        
        .contact-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .contact-btn:hover::before {
            left: 100%;
        }
        
        .contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 176, 255, 0.4);
        }
        
        .secondary-btn {
            background-color: transparent;
            color: var(--text-light);
            border: 2px solid var(--sky-blue);
            box-shadow: none;
        }
        
        .secondary-btn:hover {
            background-color: rgba(130, 177, 255, 0.1);
            transform: translateY(-3px);
        }
        
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            overflow: hidden;
        }
        
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            animation: float 15s infinite linear;
        }
        
        .circle-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }
        
        .circle-2 {
            width: 150px;
            height: 150px;
            bottom: 15%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .circle-3 {
            width: 100px;
            height: 100px;
            top: 60%;
            left: 20%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
            100% {
                transform: translateY(0) rotate(360deg);
            }
        }
        
        .pulse-animation {
            display: inline-block;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .hero-section {
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 6rem 1.5rem 4rem;
                clip-path: polygon(0 0, 100% 0, 100% 97%, 0 100%);
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.15rem;
            }
            
            .btn-container {
                gap: 1rem;
            }
            
            .contact-btn {
                padding: 0.9rem 1.8rem;
                font-size: 0.95rem;
            }
        }
        
        @media (max-width: 480px) {
            .hero-section {
                padding: 5rem 1rem 3rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .btn-container {
                flex-direction: column;
                align-items: center;
            }
            
            .contact-btn {
                width: 100%;
                max-width: 280px;
            }
        }
    </style>
@endsection

@section('maincontent')
    <main class="main">
     <section class="hero-section">
        <div class="floating-elements">
            <div class="floating-circle circle-1"></div>
            <div class="floating-circle circle-2"></div>
            <div class="floating-circle circle-3"></div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-title">Transform Your <span class="pulse-animation">Asthetics</span></h1>
            <p class="hero-subtitle">
                Our dermatology experts are ready to provide personalized care. Schedule your consultation today 
                and take the first step toward radiant skin and healthy hair with our cutting-edge treatments.
            </p>
            <div class="btn-container">
                <a href="#contact" class="contact-btn">
                    <i class="fas fa-calendar-check"></i> Book Consultation
                </a>
                <a href="tel:+1234567890" class="contact-btn secondary-btn">
                    <i class="fas fa-phone-alt"></i> Call  &nbsp;+447570957502
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Contact</h2>
            <p>For enquiries or further information, please contact us. Our team is available to assist you</p>
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
                            <p>175 Dewsbury Roads
                                Leeds
                                LS11 5EG</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+447570957502</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@yorkshirehairandskinsolution.co.uk</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    @livewire('contact-form.contact-form')
                    {{-- <form action="" method="post" class="php-email-form">
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
                    </form> --}}
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- /Contact Section -->
    </main>
@endsection
