@php
    $pagename = 'Home';
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
        .svgicon{
            fill: #1977cc;
            color: #1977cc;
            flex-shrink: 0;
            height: 55px;
            margin-right: 20px;
        }
        .departments .dpt_img{
            height: 250px !important;
            width: 100%;
        }
    </style>
@endsection

@section('maincontent')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>WELCOME TO YORKSHIRE</h2>
                    <p>We are your premier destination for transformative hair and skin treatments.</p>
                    {{-- <p style="font-size: 17px">
                        We are your premier destination for transformative hair and skin treatments. With cutting-edge
                        technology, experienced professionals, and a commitment to excellence, we aim to bring out the best
                        version of you. Explore our range of services designed to enhance your confidence and beauty.
                    </p> --}}
                </div><!-- End Welcome -->

                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>Why Choose Yorkshire?</h3>
                            <p>
                                Choosing the right care for your hair and skin is a decision that should not be taken
                                lightly. Here at Yorkshire Hair and Skin Solutions, we are committed to providing
                                results-driven treatments tailored to your needs.
                            </p>
                            <div class="text-center">
                                <a href="#about" class="more-btn"><span>Learn More</span> <i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="row gy-4">

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                        <i class="bi bi-shield-fill-check"></i>
                                        <h4>Expertise You Can Trust</h4>
                                        <p>
                                            Our team of specialists brings years of experience in hair and skin treatments.
                                            We use advanced techniques and technology to ensure safety and effectiveness.
                                        </p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                        <i class="bi bi-person-fill-check"></i>
                                        <h4>Personalized Care</h4>
                                        <p>
                                            Every client is unique. We tailor each treatment plan to match your individual
                                            goals, ensuring you get the attention and results you deserve.
                                        </p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                        <i class="bi bi-bag-heart-fill"></i>
                                        <h4>State-of-the-Art Facilities</h4>
                                        <p>
                                            Our clinic is equipped with the latest medical-grade tools and technology to
                                            provide a comfortable and high-quality treatment experience.
                                        </p>
                                    </div>
                                </div><!-- End Icon Box -->

                            </div>
                        </div>
                    </div>
                </div><!-- End  Content-->

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4 gx-5">
                    {{-- data-aos="fade-up" data-aos-delay="200" --}}
                    <div class="col-lg-6 position-relative align-self-start" >
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/embed/QvzQlwSnzTQ?si=simxRnGf6dYMNeyV"
                            class="glightbox pulsating-play-btn"></a>
                    </div>
                    {{-- data-aos="fade-up" data-aos-delay="100" --}}
                    <div class="col-lg-6 content" >
                        <h3>About Us</h3>
                        <p>
                            Yorkshire Hair and Skin Solutions is a trusted name in the field of hair and skin care. Based in
                            the heart of Yorkshire, we combine innovation, expertise, and compassion to offer unparalleled
                            services. Our mission is to help you feel confident and radiant through our scientifically
                            backed and client-focused treatments.
                        </p>
                        <ul>
                            <li>
                                {{-- <i class="fa-solid fa-vial-circle-check"></i> --}}
                                <img class="svgicon" src="assets/img/hair.png" alt="">
                                <div>
                                    <h5>
                                        Hair Loss
                                    </h5>
                                    <p>Restore confidence with personalized hair loss solutions.</p>
                                </div>
                            </li>
                            <li>
                                {{-- <i class="fa-solid fa-pump-medical"></i> --}}
                                <img class="svgicon" src="assets/img/hair-transplant.png" alt="">
                                <div>
                                    <h5>
                                        Hair Transplant
                                    </h5>
                                    <p>Natural hair restoration with advanced transplant techniques.</p>
                                </div>
                            </li>
                            <li>
                                {{-- <i class="fa-solid fa-heart-circle-xmark"></i> --}}
                                <img class="svgicon" src="assets/img/weight-loss.png" alt="">
                                <div>
                                    <h5>
                                        Weight Loss
                                    </h5>
                                    <p>Achieve lasting results with personalized weight loss.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>
        <!-- /About Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title" >
                <h2>Services</h2>
                <p>
                    We offer a wide range of premium services to cater to your hair and skin needs. From advanced medical procedures to luxurious skincare treatments, our offerings are designed to enhance your natural beauty and well-being.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    {{-- data-aos="fade-up" data-aos-delay="100" --}}
                    <div class="col-lg-4 col-md-6" >
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Hair Transplant</h3>
                            </a>
                            <p>
                                Hair loss is now treatable. Clinically proven solutions work for 9 out of 10 men and we have them all here.
                            </p>
                        </div>
                    </div><!-- End Service Item -->
                    {{-- data-aos="fade-up" data-aos-delay="200" --}}
                    <div class="col-lg-4 col-md-6" >
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Weight Loss Treatments</h3>
                            </a>
                            <p>Achieve your fitness goals with our weight loss programs. Designed to fit your lifestyle, our treatments combine expert guidance with advanced methods to help you shed those extra pounds.</p>
                        </div>
                    </div><!-- End Service Item -->
                    {{-- data-aos="fade-up" data-aos-delay="300" --}}
                    <div class="col-lg-4 col-md-6" >
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-hospital-user"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Laser Hair Removal</h3>
                            </a>
                            <p>Say goodbye to unwanted hair with our effective laser hair removal treatments. Safe for all skin types, this solution delivers smooth and long-lasting results.</p>
                        </div>
                    </div><!-- End Service Item -->
                    {{-- data-aos="fade-up" data-aos-delay="400" --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Facial Treatments</h3>
                            </a>
                            <p>Rejuvenate your skin with our luxurious facial treatments. Designed to cleanse, hydrate, and revitalize, our facials leave you with a glowing and refreshed complexion.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                    {{-- data-aos="fade-up" data-aos-delay="500" --}}
                    <div class="col-lg-4 col-md-6" >
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Velit Doloremque</h3>
                            </a>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi
                                at autem alias eius labore.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                    {{-- data-aos="fade-up" data-aos-delay="600" --}}
                    <div class="col-lg-4 col-md-6" >
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Dolori Architecto</h3>
                            </a>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section>
        <!-- /Services Section -->


        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            {{-- data-aos="fade-up" data-aos-delay="100" --}}
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-regular fa-hospital"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-flask"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->


        <!-- Departments Section -->
        <section id="departments" class="departments section">

            {{-- <!-- Section Title -->  data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>Departments</h2>
                <p>At Yorkshire Hair and Skin Solutions, our clinic is divided into specialized departments to ensure a seamless and focused approach to your care:</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab"
                                    href="#departments-tab-1">Hair Restoration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Skin Treatment </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Weight Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Client Care and Support</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Hair Restoration Department</h3>
                                        <p class="fst-italic">
                                            Dedicated to hair transplant procedures and overall scalp health, this department combines advanced techniques with personalized care to address hair loss concerns effectively. We focus on delivering natural-looking hairlines that restore confidence and enhance your appearance.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/hairtp.jpg" alt="" class="dpt_img">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Skin Treatment Department</h3>
                                        <p class="fst-italic">
                                            Our team of skincare experts offers a comprehensive range of treatments designed to meet your unique needs. From effective laser hair removal to rejuvenating facials, we are committed to helping you achieve radiant, flawless, and healthy skin that boosts your confidence and enhances your natural beauty.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/facialtreatment.jpg" alt="" class="dpt_img">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Weight Management Department</h3>
                                        <p class="fst-italic">
                                            This department is focused on helping clients achieve their fitness goals through tailored weight loss programs and personalized guidance from certified professionals. By combining advanced weight management techniques with a compassionate approach, we aim to empower clients to lead healthier, more fulfilling lives. From nutritional advice to customized exercise regimens, we are dedicated to supporting you every step of the way.


                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/wloss.jpg" alt="" class="dpt_img">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Client Care and Support Department</h3>
                                        <p class="fst-italic">
                                            Our client care team is here to assist you throughout your journey, providing expert guidance, answering all your questions, and ensuring your experience is smooth, stress-free, and tailored to your needs.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/clientcare.jpg" alt="" class="dpt_img">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                                        </p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                            ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet.
                                            Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="dpt_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /Departments Section -->

        <!-- Appointment Section -->
        <section id="appointment" class="appointment section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Appointment</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                                placeholder="Appointment Date" required="">
                        </div>
                        <div class="col-md-8 form-group mt-3">
                            <select name="department" id="department" class="form-select" required="">
                                <option value="">Select Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <option value="Department 3">Department 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                    </div>
                    <div class="mt-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                        <div class="text-center"><button type="submit">Make an Appointment</button></div>
                    </div>
                </form>

            </div>

        </section><!-- /Appointment Section -->



        <!-- Doctors Section -->
        {{-- <section id="doctors" class="doctors section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Results</h2>
                <p>
                    Our results speak for themselves! From natural-looking hairlines to smooth, flawless skin, we are proud to have transformed countless lives. Explore our gallery of before-and-after photos to see the amazing outcomes achieved by our treatments.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="team-member d-flex align-items-start">
                            <div class="row">
                                <div class="col-md-8 d-flex" style="width: 100%">
                                    <img src="assets/img/1.1.jpg" alt="" style="width: 200px; height: 200px;">
                                    <img src="assets/img/1.2.jpg" alt="" style="width: 200px; height: 200px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="member-info py-3">
                                    <h4>Walter White</h4>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" >
                        <div class="team-member d-flex align-items-start">
                            <div class="row">
                                <div class="col-md-8 d-flex" style="width: 100%">
                                    <img src="assets/img/2.1.jpg" alt="" style="width: 200px; height: 200px;">
                                    <img src="assets/img/2.2.jpg" alt="" style="width: 200px; height: 200px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="member-info py-3">
                                    <h4>Walter White</h4>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6">
                        <div class="team-member d-flex align-items-start">
                            <div class="row">
                                <div class="col-md-8 d-flex" style="width: 100%">
                                    <img src="assets/img/3.1.jpg" alt="" style="width: 400px; height: 200px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="member-info py-3">
                                    <h4>Walter White</h4>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6">
                        <div class="team-member d-flex align-items-start">
                            <div class="row">
                                <div class="col-md-8 d-flex" style="width: 100%">
                                    <img src="assets/img/4.1.jpg" alt="" style="width: 400px; height: 200px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="member-info py-3">
                                    <h4>Walter White</h4>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section> --}}
        <!-- /Doctors Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Frequently Asked Questions</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>How long does a hair transplant procedure take?</h3>
                                <div class="faq-content">
                                    <p>
                                        The procedure typically takes 4-8 hours, depending on the number of grafts required.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is laser hair removal painful?</h3>
                                <div class="faq-content">
                                    <p>
                                        Laser hair removal is generally well-tolerated, with many clients describing it as a mild snapping sensation.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How soon can I see results from weight loss treatments?</h3>
                                <div class="faq-content">
                                    <p>
                                        Results vary depending on the individual and the chosen treatment plan, but many clients notice changes within a few weeks.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Are facial treatments suitable for sensitive skin?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes, our facial treatments are customized to suit all skin types, including sensitive skin.
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

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5 info">
                        <h3>Testimonials</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident.
                        </p>
                    </div>

                    <div class="col-lg-7">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                                suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                                Maecen aliquam, risus at semper.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-2.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Sara Wilsson</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-3.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Jena Karlis</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                                quem veniam duis minim tempor labore quem eram duis noster aute amet eram
                                                fore quis sint minim.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-4.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Matt Brandon</h3>
                                                <h4>Freelancer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                                minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt
                                                elit fore quem dolore labore illum veniam.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-5.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>John Larson</h3>
                                                <h4>Entrepreneur</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum
                                                fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- /Testimonials Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Gallery</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container-fluid">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>

        </section><!-- /Gallery Section -->

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
                        <form action="forms/contact.php" method="post" class="php-email-form">
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
