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
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('./assets/img/prp11.webp');">
                    <div class="carousel-caption">
                        <h5>Explore the Beauty of Nature</h5>
                        <p>
                            Discover breathtaking landscapes, from majestic mountains to serene beaches. Immerse yourself in the tranquility of lush forests and crystal-clear lakes, and let nature rejuvenate your soul. Experience the wonders of the natural world like never before.
                        </p>
                        <a href="#" class="btn btn-primary">Book a consultation
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('./assets/img/prp2.webp');">
                    <div class="carousel-caption">
                        <h5>Adventure Awaits</h5>
                        <p>
                            Embark on thrilling journeys to the world's most stunning peaks, where every step brings you closer to breathtaking vistas. Challenge yourself with rugged trails, conquer towering summits, and experience the exhilaration of reaching new heights. Adventure is calling—are you ready to answer?
                        </p>
                        <a href="#" class="btn btn-primary">Book a consultation
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('./assets/img/prp3.webp');">
                    <div class="carousel-caption">
                        <h5>Connect with Nature</h5>
                        <p>
                            Immerse yourself in the tranquility of lush green forests, where the rustling leaves and chirping birds create a symphony of peace. Breathe in the fresh, crisp air and let the beauty of nature rejuvenate your mind and soul. Discover a world where every moment is a step closer to serenity.
                        </p>
                        <a href="#" class="btn btn-primary">Book a consultation
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        
           
        </div>
        
        
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
                <!-- grid-5 -->
                <div class="grid-item">
                  <img src="./assets/img/ba5.jpg" alt="Before PRP">
                  <div class="overlay">
                    <h4>Case Study 5</h4>
                    <p>Improved hair growth after 6 months of PRP therapy.</p>
                  </div>
                </div>
                <!-- grid-6 -->
                <div class="grid-item">
                  <img src="./assets/img/ba6.webp" alt="Before PRP">
                  <div class="overlay">
                    <h4>Case Study 6</h4>
                    <p>Improved hair growth after 6 months of PRP therapy.</p>
                  </div>
                </div>
              </div>
              <!-- Testimonial Slider -->
              <section id="testimonials" class="testimonial-section">
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
                                <a href="blog-post1.html" class="btn btn-secondary">Read More</a>
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
                                <a href="blog-post2.html" class="btn btn-secondary">Read More</a>
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
                                <a href="blog-post3.html" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        
        <section id="appointment" class="services appointment howitworks section mb-4">

            <!-- Section Title -->
            {{-- data-aos="fade-up" --}}
            <div class="container section-title">
                <h2>Make Appointment</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <h3 class="title" style="font-weight: 700; font-size: 34px;">Book a consultation</h3>
                            <p>
                                Fill in your details and we’ll get in touch with you shortly to answer your questions.
                            </p>
                            <br>
                            <h5>Want to contact us directly?</h5>
                            <p><strong>Leeds: </strong>07943289303</p>
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
