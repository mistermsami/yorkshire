<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title') - Yorkshire Hair & Skin Solution</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />


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
    @yield('head')
    <style>
        .navmenu li a {
            font-weight: 600;
        }

        .footer {
            background-color: #1977CC;
            color: #f1f7fc;
            bottom: 0
        }

        .footer a {
            text-decoration: none;
            color: #f1f7fc;
        }

        .footer h3 {
            font-size: 18px;
            font-weight: 700;
            color: #f1f7fc;

        }

        .social-links a i {
            color: #fff
        }

        .company-img {
            max-width: 80px;
            height: auto;
            filter: brightness(90%);
            transition: filter 0.3s ease-in-out;
        }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        {{-- <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div> --}}
        <!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/yorkshirelogo_2.png" alt="" style="max-height: 50px !important;">
                    {{-- <img src="assets/img/yorkshirelogo2.png" alt="" style="max-height: 50px !important;"> --}}
                    {{-- <h1 class="sitename">Medilab</h1> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('/') }}" class="active">Home<br></a></li>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
                        <li class="dropdown"><a href="#"><span>Services</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('hairtransplant') }}">Hair Transplant</a></li>
                                <li><a href="weight-loss">Weight Loss Treatments</a></li>
                                <li><a href="laser-hair-removal">Laser Hair Removal</a></li>
                                <li><a href="hydra-ficial">HydraFacial</a></li>
                                <li><a href="tanning-bed">Tanning Bed</a></li>
                                <li><a href="prp">PRP</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> --}}
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
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <footer class="footer py-2">
        <div class="container">
            <div class="row text-md-start text-center pt-5">

                <!-- Logo & About -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/yorkshirelogo_2.png') }}" style="width: 100%;" alt="">
                        </a>
                    </div>
                    {{-- <div class="footer-logo">MEDILAB</div> --}}
                    <p class="mt-2">Providing quality services with passion and dedication.</p>
                </div>


                <!-- Useful Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h3>Useful Links</h3>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>


                <!-- Services -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h3>Our Services</h3>
                    <ul class="list-unstyled list-unstyled d-flex flex-column gap-2 ">
                        <li><a class="mt-2" href="#">Web Design</a></li>
                        <li><a class="mt-2" href="#">Web Development</a></li>
                        <li><a class="mt-2" href="#">Product Management</a></li>
                        <li><a class="mt-2" href="#">Marketing</a></li>
                        <li><a class="mt-2" href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-2 col-md-6 mb-4 ">
                    <h3>Contact</h3>
                    <p><i class="fas fa-map-marker-alt"></i> A108 Adam Street</p>
                    <p><i class="fas fa-map-marker-alt"></i> New York, NY 535022</p>
                    <p><i class="fas fa-phone"></i> +1 5589 55488 55</p>
                    <p><i class="fas fa-envelope"></i> info@example.com</p>
                </div>


                <!-- Additional Sections -->
                <div class="col-lg-2  col-md-6 mb-4">
                    <h3>Nobis illum</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ipsam</p>
                    <p>Laudantium dolorum</p>
                    <p>Dinera</p>
                    <p>Trodelas</p>
                    <p>Flexo</p>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h3>Hic solutasetp</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Molestiae accusamus iure</p>
                    <p>Excepturi dignissimos</p>
                    <p>Suscipit distinctio</p>
                    <p>Dilecta</p>
                    <p>Sit quas consectetur</p>
                </div>


                <!-- Follow Us -->
                <div class="col-lg-3 col-md-6 mb-4 text-center">
                    <h3>Follow Us</h3>
                    <div class="social-links mt-3 d-flex justify-content-center gap-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>


                <!-- Company Logos -->
                <div class="col-lg-3 col-md-6 mb-4 text-center">
                    <div class="row justify-content-center align-items-center g-4">
                        <div class="col-2 col-md-3 text-center">
                            <img class="img-fluid company-img" src="{{ asset('assets/img/CPDMember.webp') }}"
                                alt="CPD Member">
                        </div>
                        <div class="col-2 col-md-3 text-center">
                            <img class="img-fluid company-img" src="{{ asset('assets/img/CQCRatingNew.webp') }}"
                                alt="CQC Rating">
                        </div>
                        <div class="col-2 col-md-3 text-center">
                            <img class="img-fluid company-img" src="{{ asset('assets/img/footer-image-1.webp') }}"
                                alt="Company Logo 1">
                        </div>
                        <div class="col-2 col-md-3 text-center">
                            <img class="img-fluid company-img" src="{{ asset('assets/img/footer-image-2-2x.webp') }}"
                                alt="Company Logo 2">
                        </div>
                    </div>
                </div>

            </div>

            <hr>

            <div class="text-center mt-4">
                <p>© 2025 Medilab. All Rights Reserved.</p>
            </div>
        </div>
        <!-- Preloader -->
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

</body>

</html>
