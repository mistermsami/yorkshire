@php
    $pagename = 'PRP';

@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    {{-- for meta tags (SEO)
    and for custom css --}}
    <style>

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
            color: #f1f7f7;
        }

        .transpricingBlue_card h3 {
            color: #f1f7f7;
        }

        @media only screen and (max-width: 1399px) and (min-width: 769px) {
            .afterresult .card{
                height: 280px !important;
            }
            .howitworks .card .card-body{
                height: 200px;
            }
            .aboutmain_sec_img {
                height: auto;
            }
        }


        @media only screen and (max-width: 768px) {
            .pricing .card {
                margin-bottom: 20px;
            }

            .exploreclinic .card {
                margin-bottom: 20px;
            }

            .howitworks .card {
                margin-bottom: 20px;
            }

            .hairTfaq .nav-item .active {
                background-color: #f1f7fc;
            }
            .aboutmain_sec_img {
                height: auto;
            }
        }

        
    </style>


@endsection

@section('maincontent')

    <main class="main">
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="main-heading">Revolutionary PRP Therapy for Youthful, Radiant Skin</h1>
                            
                            <p class="sub-text">
                                Harness your body's natural healing power with our advanced Platelet-Rich Plasma treatments, recommended by leading dermatologists.
                            </p>
                            
                         
                            
                            <div class="trustpilot-container" >
                                <div class="trustpilot-line">
                                   <img src="/assets/img/trustpilotimage.png" alt="trustpilot" width="320px">
                                </div>
                            </div>
                            
                            <a href="#" class="btn btn-primary">Book a consultation
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <div class="divider"></div>
                            
                            <div class="award-badge">
                                <i class="fas fa-award" style="color: var(--primary-color);"></i>
                                <span>2023 Best Aesthetic Treatment Award</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-container">
                            <!-- Beauty clinic image slideshow -->
                            <img src="assets/img/prp11.jpg" 
                                 alt="PRP treatment in progress" 
                                 class="hero-image active">
                            <img src="assets/img/prp1.webp" 
                                 alt="Before and after PRP results" 
                                 class="hero-image">
                            <img src="assets/img/prp1.jpg" 
                                 alt="Luxury beauty clinic environment" 
                                 class="hero-image">
                            <img src="assets/img/prpdep.jpg" 
                                 alt="Happy client after treatment" 
                                 class="hero-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-prp-section">
            <div class="container">
              <div class="row">
                <!-- Left Side -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="left-side">
                    <div class="content">
                      <h2>What is PRP Therapy?</h2>
                      <p>
                        PRP (Platelet-Rich Plasma) therapy is a cutting-edge, non-surgical treatment that harnesses your body's natural healing abilities to repair and rejuvenate tissues. It’s widely used for its effectiveness in promoting recovery and enhancing skin, hair, and joint health. This innovative treatment is gaining popularity due to its natural approach and minimal downtime.
                      </p>
                      <a href="#contact" class="btn">
                         <!-- Font Awesome icon -->
                         Learn More About PRP
                         <i class="fas fa-medkit"></i>
                    </a>
                    </div>
                  </div>
                </div>
                <!-- Right Side -->
                <div class="col-lg-6">
                  <div class="row">
                    <!-- Icon Box 1 -->
                    <div class="col-md-6 mb-4">
                      <div class="icon-box">
                        <i class="fas fa-syringe"></i>
                        <h4>Minimally Invasive</h4>
                        <p>No surgery required. Just a simple injection process.</p>
                      </div>
                    </div>
                    <!-- Icon Box 2 -->
                    <div class="col-md-6 mb-4">
                      <div class="icon-box">
                        <i class="fas fa-heartbeat"></i>
                        <h4>Natural Healing</h4>
                        <p>Uses your body's own platelets for natural recovery.</p>
                      </div>
                    </div>
                    <!-- Icon Box 3 -->
                    <div class="col-md-6 mb-4">
                      <div class="icon-box">
                        <i class="fas fa-clock"></i>
                        <h4>Quick Recovery</h4>
                        <p>Most patients resume normal activities within a day.</p>
                      </div>
                    </div>
                    <!-- Icon Box 4 -->
                    <div class="col-md-6 mb-4">
                      <div class="icon-box">
                        <i class="fas fa-check-circle"></i>
                        <h4>Proven Results</h4>
                        <p>Clinically proven to improve tissue repair and regeneration.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


        <section id="prp-benefits" class="prp-benefits-section">
            <div class="container">
                <h2>Benefits of PRP</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="benefit-item">
                            <div class="icon-wrapper">
                                <i class="bi bi-heart"></i>
                            </div>
                            <h3>Natural Results</h3>
                            <p>Uses your body's own healing mechanisms for safe  results.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-item">
                            <div class="icon-wrapper">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3>Minimal Downtime</h3>
                            <p>Return to your daily activities almost immediately after treatment.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-item">
                            <div class="icon-wrapper">
                                <i class="bi bi-scissors"></i>
                            </div>
                            <h3>Non-Surgical</h3>
                            <p>A non-invasive solution for hair loss and skin rejuvenation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="prp-process" class="prp-process-section">
            <div class="container">
                <h2>PRP Treatment Process</h2>
                <div class="timeline">
                    <div class="process-step">
                        <div class="step-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="step-contents">
                            <span>1</span>
                            <h3>Consultation</h3>
                            <p>Discuss your goals and medical history with our experts.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-icon">
                            <i class="bi bi-droplet"></i>
                        </div>
                        <div class="step-contents">
                            <span>2</span>
                            <h3>Blood Draw</h3>
                            <p>A small amount of blood is drawn from your arm.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <div class="step-contents">
                            <span>3</span>
                            <h3>PRP Preparation</h3>
                            <p>Your blood is processed to concentrate the platelets.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-icon">
                            <i class="bi bi-syringe"></i>
                        </div>
                        <div class="step-contents">
                            <span>4</span>
                            <h3>Injection</h3>
                            <p>The PRP is injected into the treatment area.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Before & After Section -->
    <section class="before-after-section">
    <div class="container">
        <h2>Before & After</h2>
        <div class="grid-container">
            <!-- Grid Item 1 -->
            <div class="grid-item">
                <img src="./assets/img/ba1.jpg" alt="Before PRP">
                <div class="overlay">
                    <h4>Case Study 1</h4>
                    <p>Improved hair growth after 6 months of PRP therapy.</p>
                </div>
            </div>
            <!-- Grid Item 2 -->
            <div class="grid-item">
                <img src="./assets/img/ba2.jpg" alt="After PRP">
                <div class="overlay">
                    <h4>Case Study 2</h4>
                    <p>Noticeable reduction in wrinkles and fine lines after 2 months.</p>
                </div>
            </div>
            <!-- Grid Item 3 -->
            <div class="grid-item">
                <img src="./assets/img/ba3.png" alt="Before PRP">
                <div class="overlay">
                    <h4>Case Study 3</h4>
                    <p>Patient saw significant improvement in skin texture after 3 sessions.</p>
                </div>
            </div>
            <!-- Grid Item 4 -->
            <div class="grid-item">
                <img src="./assets/img/ba4.jpg" alt="After PRP">
                <div class="overlay">
                    <h4>Case Study 4</h4>
                    <p>Enhanced skin elasticity and glow after 4 sessions.</p>
                </div>
            </div>
            <!-- Grid Item 5 -->
            <div class="grid-item">
                <img src="./assets/img/ba5.jpg" alt="Before PRP">
                <div class="overlay">
                    <h4>Case Study 5</h4>
                    <p>Improved hair growth after 6 months of PRP therapy.</p>
                </div>
            </div>
            <!-- Grid Item 6 -->
            <div class="grid-item">
                <img src="./assets/img/ba6.webp" alt="Before PRP">
                <div class="overlay">
                    <h4>Case Study 6</h4>
                    <p>Improved hair growth after 6 months of PRP therapy.</p>
                </div>
            </div>
        </div>
    </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonial" class="testimonial-section">
         <div class="container">
          <h2>What Our Patients Say</h2>
         <div class="timeline">
            <!-- Testimonial 1 -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <img src="assets/img/pt2.jpg" alt="Patient 1">
                    <div class="testimonial-text">
                        <p>"PRP therapy has been life-changing for me. My skin feels rejuvenated, and I’ve received so many compliments!"</p>
                        <h5>Sarah Johnson</h5>
                        <span>PRP Patient</span>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <img src="assets/img/pt.jpg" alt="Patient 2">
                    <div class="testimonial-text">
                        <p>"I was skeptical at first, but after just a few sessions, I noticed a huge difference in my hair growth."</p>
                        <h5>Michael Smith</h5>
                        <span>PRP Patient</span>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <img src="assets/img/pt3.jpg" alt="Patient 3">
                    <div class="testimonial-text">
                        <p>"The results are amazing! My wrinkles have reduced significantly, and my skin looks younger."</p>
                        <h5>Emily Davis</h5>
                        <span>PRP Patient</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>

        <section class="meet-experts-section">
            <div class="container">
              <h2>Meet the Experts</h2>
              <div class="experts-grid">

                <!-- Expert Card 2 -->
                <div class="expert-card">
                  <div class="card-inner">
                    <div class="card-front">
                      <img src="./assets/img/doc1copy.jpg" alt="Dr. Jane Smith">
                      <h4>Dr. Jane Smith</h4>
                      <p>Dermatologist</p>
                      <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                    <div class="card-back">
                      <h4>Dr. Jane Smith</h4>
                      <p>8+ years of experience in cosmetic dermatology and skin rejuvenation.</p>

                      <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +123 456 7890</p>
                        <p><i class="fas fa-envelope"></i> jane.smith@example.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Expert Card 3 -->
                <div class="expert-card">
                  <div class="card-inner">
                    <div class="card-front">
                      <img src="./assets/img/doc2.jpg" alt="Dr. Emily Davis">
                      <h4>Dr. Emily Davis</h4>
                      <p>Cosmetic Surgeon</p>
                      <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                    <div class="card-back">
                      <h4>Dr. Emily Davis</h4>
                      <p>12+ years of experience in cosmetic and reconstructive surgery.</p>

                      <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +123 456 7890</p>
                        <p><i class="fas fa-envelope"></i> emily.davis@example.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Expert Card 4 -->
                <div class="expert-card">
                  <div class="card-inner">
                    <div class="card-front">
                      <img src="./assets/img/doc3.jpg" alt="Dr. Michael Brown">
                      <h4>Dr. Michael Brown</h4>
                      <p>PRP Therapist</p>
                      <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                    <div class="card-back">
                      <h4>Dr. Michael Brown</h4>
                      <p>7+ years of experience in PRP therapy and hair restoration.</p>

                      <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +123 456 7890</p>
                        <p><i class="fas fa-envelope"></i> michael.brown@example.com</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>



        <section id="faq" class="faq section light-background">
            <div class="container section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>What is PRP therapy, and how does it work?</h3>
                                <div class="faq-content">
                                    <p>
                                        PRP (Platelet-Rich Plasma) therapy is a non-surgical treatment that uses your own blood's platelets to promote healing and rejuvenation. The plasma, rich in growth factors, is injected into the targeted area to stimulate tissue repair and collagen production.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>What conditions can PRP therapy treat?</h3>
                                <div class="faq-content">
                                    <p>
                                        PRP therapy is commonly used for hair restoration, skin rejuvenation, joint pain relief, and wound healing. It can also improve the appearance of fine lines, wrinkles, and acne scars.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is PRP therapy safe?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes, PRP therapy is safe because it uses your own blood, reducing the risk of allergic reactions or infections. The procedure is minimally invasive and performed under sterile conditions.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How long does a PRP treatment session take?</h3>
                                <div class="faq-content">
                                    <p>
                                        A typical PRP session takes about 30-60 minutes, depending on the area being treated. This includes blood draw, plasma preparation, and injection.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is PRP therapy painful?</h3>
                                <div class="faq-content">
                                    <p>
                                        Most patients experience minimal discomfort during PRP therapy. A topical anesthetic can be applied to the treatment area to ensure a comfortable experience.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How soon can I see results from PRP therapy?</h3>
                                <div class="faq-content">
                                    <p>
                                        Results vary depending on the individual and the condition being treated. For hair restoration, visible improvements may take 3-6 months. For skin rejuvenation, results can often be seen within a few weeks.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How many PRP sessions are needed for optimal results?</h3>
                                <div class="faq-content">
                                    <p>
                                        The number of sessions depends on the treatment area and desired results. Typically, 3-4 sessions spaced 4-6 weeks apart are recommended for hair restoration, while skin rejuvenation may require fewer sessions.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Are there any side effects of PRP therapy?</h3>
                                <div class="faq-content">
                                    <p>
                                        Side effects are rare but may include mild swelling, redness, or bruising at the injection site. These usually resolve within a few days.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section>


        <section id="blog" class="blog-section">
            <div class="container">
                <h2>Latest News</h2>
                <div class="row">
                    <!-- Blog Post 1 -->
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <img src="assets/img/blog-3.jpg" alt="Blog Post 1">
                            </div>
                            <div class="blog-post-content">
                                <h3>Top Hair Care Tips</h3>
                                <p>Learn how to keep your hair healthy.</p>
                                <a href="hairblog" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Post 2 -->
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <img src="assets/img/blog-2.jpg" alt="Blog Post 2">
                            </div>
                            <div class="blog-post-content">
                                <h3>Benefits of PRP Therapy</h3>
                                <p>Discover how PRP can rejuvenate your skin.</p>
                                <a href="prpbenefits" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Post 3 -->
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <img src="assets/img/blog-1.webp" alt="Blog Post 3">
                            </div>
                            <div class="blog-post-content">
                                <h3>Summer Skin Care Tips</h3>
                                <p>Stay protected and glowing this summer.</p>
                                <a href="skincaretips" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                        @livewire('AppointmentForm.PrpAppointmentForm')
                    </div>
                </div>
            </div>
        </section>

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
    {{-- script for hero-section --}}
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.hero-image');
            let currentIndex = 0;
            
            function changeImage() {
                // Hide current image
                images[currentIndex].classList.remove('active');
                
                // Move to next image
                currentIndex = (currentIndex + 1) % images.length;
                
                // Show next image
                images[currentIndex].classList.add('active');
            }
            
            // Change image every 3 seconds
            setInterval(changeImage, 3000);
        });
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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const processSteps = document.querySelectorAll('.process-step');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.5 });

            processSteps.forEach((step) => {
                observer.observe(step);
            });
        });
        // JavaScript for FAQ Toggle
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
          question.addEventListener('click', () => {
            question.classList.toggle('active');
            const answer = question.nextElementSibling;
            if (answer.style.maxHeight) {
              answer.style.maxHeight = null;
              answer.style.padding = '0 20px';
            } else {
              answer.style.maxHeight = answer.scrollHeight + 'px';
              answer.style.padding = '10px 20px';
            }
          });
        });
        </script>
        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    </main>
@endsection
