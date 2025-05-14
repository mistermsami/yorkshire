<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - Yorkshire Hair & Skin Solution</title>
    <meta name="description" content="Yorkshire Hair & Skin Solution specializes in expert hair transplants, PRP therapy, and advanced skincare treatments. Book a consultation today!">
    <meta name="keywords" content="Hair Transplant, PRP Therapy, Skin Care, Yorkshire, Hair Loss Treatment, FUE Transplant, Laser Hair removal, HydraFacial">
    <meta name="author" content="Yorkshire Hair & Skin Solution">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Yorkshire Hair & Skin Solution - Hair & Skin Experts">
    <meta property="og:description" content="We offer top-tier hair transplants, PRP therapy, and skin treatments in Yorkshire. Get a free consultation now!">
    <meta property="og:image" content="https://yorkshirehairandskinsolutions.co.uk/path-to-image.jpg">
    <meta property="og:url" content="https://yorkshirehairandskinsolutions.co.uk/">
    <meta property="og:site_name" content="Yorkshire Hair & Skin Solution">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="Yorkshire Hair & Skin Solution - Hair & Skin Experts">
    <meta name="twitter:description" content="Transform your hair & skin with our expert treatments in Yorkshire. Book a consultation now!">
    <meta name="twitter:image" content="https://yorkshirehairandskinsolutions.co.uk/path-to-image.jpg">
    <meta name="twitter:url" content="https://yorkshirehairandskinsolutions.co.uk/">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://yorkshirehairandskinsolutions.co.uk/">



    <!-- Favicons -->
    <link href="{{ asset('assets/img/yorkshirefavicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/yorkshirefavicon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    {{-- CSS FILE FOR LIVEWIRE --}}
    {{-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    @livewireStyles --}}

    @livewireStyles
    @yield('head')
    <style>
        .navmenu li a {
            font-weight: 600;
        }

    </style>
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@yorkshirehairandskinsolutions.co.uk">info@yorkshirehairandskinsolutions.co.uk</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>07570957502</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
        <!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('assets/img/yorkshirelogo_2.png') }}" alt="" style="max-height: 50px !important;">
                    {{-- <img src="assets/img/yorkshirelogo2.png" alt="" style="max-height: 50px !important;"> --}}
                    {{-- <h1 class="sitename">Medilab</h1> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('/') }}" class="active">Home<br></a></li>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
                        <li class="dropdown"><a href="#"><span>Solutions</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('hairtransplant') }}">Hair Transplant</a></li>
                                <li><a href="face-treatment">Face Treatments</a></li>
                                <li><a href="laser-hair-removal">Laser Hair Removal</a></li>
                                <li><a href="hydra-ficial">HydraFacial</a></li>
                                <li><a href="microneedling">Microneedling</a></li>
                                <li><a href="prp">PRP</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contactus') }}">Contact Us</a></li>

                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>

            </div>

        </div>

    </header>

    @yield('maincontent')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
           ></i></a>
    <div id="preloader"></div>
    <footer id="footer" class="footer light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="assets/img/yorkshirelogo_2.png" alt="" style="max-height: 50px !important;">
                    </a>
                    <div class="footer-contact pt-3">
                        <p>175 Dewsbury Roads
                            Leeds
                            LS11 5EG</p>

                        <p class="mt-3"><strong>Phone:</strong> <span>07570957502</span></p>
                        <p><strong>Email:</strong> <span>info@yorkshirehairandskinsolution.com</span></p>

                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://x.com/yorkshire_skin"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61575654459817"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/yorkshirehairandskinsolutions"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/">Home</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/aboutus">About us</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/hairtransplant">Hair Transplant</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/laser-hair-removalhttps://yorkshirehairandskinsolutions.co.uk/laser-hair-removal">Laser Hair Removal</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/prp">PRP</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/hydra-ficial">HydraFacial</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/face-treatment">Face Treatment</a></li>
                        <li><a href="https://yorkshirehairandskinsolutions.co.uk/microneedling">Microneedling</a></li>
                    </ul>
                </div>


                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-headset me-2"></i>Customer Care</a></li>
                        <li><a href="#"><i class="fas fa-truck me-2"></i>Track Your Order</a></li>
                        <li><a href="#"><i class="fas fa-undo me-2"></i>Returns & Refunds</a></li>
                        <li><a href="#"><i class="fas fa-shipping-fast me-2"></i>Shipping Information</a></li>
                        <li><a href="#"><i class="fas fa-envelope me-2"></i>Contact Support</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Why Choose Us?</h4>
                    <ul class="why-us-list">
                        <li><a href="#"><i class="bi bi-check-circle me-2"></i>Expert Team</a></li>
                        <li><a href="#"><i class="bi bi-check-circle me-2"></i>Personalized Care</a></li>
                        <li><a href="#"><i class="bi bi-check-circle me-2"></i>Proven Results</a></li>
                        <li><a href="#"><i class="bi bi-check-circle me-2"></i>Affordable Pricing</a></li>
                        <li><a href="#"><i class="bi bi-check-circle me-2"></i>Convenient Location</a></li>
                        <li><a href="#"><i class="bi bi-check-circle me-2"></i>Advanced Technology</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Yorkshire</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">

            </div>
        </div>

    </footer>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- - Page Scripts - --}}
    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
