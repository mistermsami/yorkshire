@php
    $pagename = 'Teeth Whitening';

@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    {{-- for meta tags (SEO)
    and for custom css --}}
    

<style>
/* Updated CSS with unique class names */
.teeth-whitening-process-section {
    position: relative;
}

.bg-soft-light {
    background-color: #f8f9fa;
}

.tw-section-heading {
    color: var(--dark-blue);
    position: relative;
    margin-bottom: 50px;
    text-align: center;
}

.tw-section-heading::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--gradient-blue);
    border-radius: 2px;
}

.tw-process-item {
    position: relative;
    padding-left: 80px;
    margin-bottom: 40px;
}

.tw-step-indicator {
    position: absolute;
    left: 0;
    top: 0;
    width: 60px;
    height: 60px;
    background: var(--gradient-blue);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
}

.tw-step-title {
    color: #2a4365;
    margin-bottom: 10px;
    font-weight: 600;
}

.tw-step-description {
    color: #4a5568;
    line-height: 1.6;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .tw-process-item {
        padding-left: 70px;
    }
    
    .tw-step-indicator {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
    }
}

@media (max-width: 576px) {
    .tw-process-item {
        padding-left: 60px;
        margin-bottom: 30px;
    }
    
    .tw-step-indicator {
        width: 45px;
        height: 45px;
    }
    
    .tw-step-title {
        font-size: 1.1rem;
    }
}
</style>
 <style>
        :root {
            --primary-blue: #0077b6;
            --secondary-blue: #00b4d8;
            --light-blue: #90e0ef;
            --dark-blue: #023e8a;
            --white: #ffffff;
            --off-white: #f8f9fa;
            --gradient-blue: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
        }
        
       
        
        h1, h2, h3, h4, h5 {
     
            font-weight: 600;
        }
        
        .hero-section {
            background: var(--gradient-blue);
            color: var(--white);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 300;
        }
        
        .btn-whitening {
            background-color: var(--white);
            color: var(--primary-blue);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--white);
        }
        
        .btn-whitening:hover {
            background-color: transparent;
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .btn-whitening-outline {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-whitening-outline:hover {
            background-color: var(--white);
            color: var(--primary-blue);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .section-title {
            color: var(--dark-blue);
            position: relative;
            margin-bottom: 50px;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-blue);
            border-radius: 2px;
        }
        
        .benefit-card {
            background: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 4px solid var(--secondary-blue);
        }
        
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .benefit-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
        
        .process-step {
            position: relative;
            padding-left: 80px;
            margin-bottom: 40px;
        }
        
        .step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            background: var(--gradient-blue);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .testimonial-card {
            background: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 15px;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(0, 180, 216, 0.1);
            font-family: 'Playfair Display', serif;
            line-height: 1;
        }
        
        .testimonial-text {
            position: relative;
            z-index: 1;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        .before-after-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 400px;
        }
        
        .before-image, .after-image {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .before-image {
            z-index: 1;
            clip-path: polygon(0 0, 50% 0, 50% 100%, 0% 100%);
        }
        
        .slider-handle {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--white);
            z-index: 3;
            cursor: ew-resize;
            transform: translateX(-50%);
        }
        
        .slider-handle::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            background: var(--white);
            border: 4px solid var(--primary-blue);
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .pricing-card {
            background: var(--white);
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            text-align: center;
            border: 2px solid var(--secondary-blue);
        }
        
        .pricing-card.popular {
            border: 2px solid var(--secondary-blue);
            position: relative;
            transform: scale(1.05);
        }
        
        .popular-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--gradient-blue);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .pricing-card.popular:hover {
            transform: scale(1.05) translateY(-10px);
        }
        
        .price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin: 20px 0;
        }
        
        .price span {
            font-size: 1rem;
            font-weight: 400;
        }
        
        .contact-info-card {
            background: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .contact-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
       
     
        /* Animation classes */
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(50px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .process-step {
                padding-left: 60px;
            }
            
            .step-number {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .before-after-container {
                height: 300px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 70px 0;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .btn-whitening, .btn-whitening-outline {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .pricing-card.popular {
                transform: scale(1);
            }
            
            .pricing-card.popular:hover {
                transform: scale(1) translateY(-10px);
            }
        }
    </style>
@endsection

@section('maincontent')


<main class="main">

     <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content fade-in">
                    <h1 class="hero-title">Professional Teeth Whitening</h1>
                    <p class="hero-subtitle">Get a brighter, whiter smile in just one visit to our clinic. Safe, effective, and long-lasting results.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contact" class="btn btn-whitening">Book Appointment</a>
                        <a href="#pricing" class="btn btn-whitening-outline">View Pricing</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block slide-up">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Smiling woman" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 my-5" id="benefits">
        <div class="container">
            <h2 class="section-title">Why Choose Our Whitening Service?</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card slide-up" style="transition-delay: 0.1s;">
                        <div class="benefit-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Fast Results</h4>
                        <p>See noticeable whitening results in just 45 minutes with our advanced technology.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card slide-up" style="transition-delay: 0.2s;">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Safe Procedure</h4>
                        <p>Our gentle formula protects your enamel while effectively removing stains.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card slide-up" style="transition-delay: 0.3s;">
                        <div class="benefit-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h4>Professional Grade</h4>
                        <p>Uses stronger whitening agents than over-the-counter products for better results.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card slide-up" style="transition-delay: 0.4s;">
                        <div class="benefit-icon">
                            <i class="fas fa-smile"></i>
                        </div>
                        <h4>Boost Confidence</h4>
                        <p>A whiter smile can enhance your appearance and self-confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="teeth-whitening-process-section py-5 bg-soft-light" id="teeth-whitening-process">
    <div class="container">
        <h2 class="tw-section-heading">Our Whitening Process</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="tw-process-item">
                    <div class="tw-step-indicator">1</div>
                    <h4 class="tw-step-title">Initial Consultation</h4>
                    <p class="tw-step-description">Our dentist will examine your teeth and discuss your whitening goals to determine the best approach for you.</p>
                </div>
                <div class="tw-process-item">
                    <div class="tw-step-indicator">2</div>
                    <h4 class="tw-step-title">Teeth Cleaning</h4>
                    <p class="tw-step-description">We'll professionally clean your teeth to remove plaque and surface stains for optimal whitening results.</p>
                </div>
                <div class="tw-process-item">
                    <div class="tw-step-indicator">3</div>
                    <h4 class="tw-step-title">Gum Protection</h4>
                    <p class="tw-step-description">A protective barrier is applied to your gums to prevent irritation from the whitening gel.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tw-process-item">
                    <div class="tw-step-indicator">4</div>
                    <h4 class="tw-step-title">Whitening Application</h4>
                    <p class="tw-step-description">The professional-grade whitening gel is carefully applied to your teeth.</p>
                </div>
                <div class="tw-process-item">
                    <div class="tw-step-indicator">5</div>
                    <h4 class="tw-step-title">Activation</h4>
                    <p class="tw-step-description">A special light may be used to activate the gel and accelerate the whitening process.</p>
                </div>
                <div class="tw-process-item">
                    <div class="tw-step-indicator">6</div>
                    <h4 class="tw-step-title">Final Results</h4>
                    <p class="tw-step-description">After 2-3 applications (about 45 minutes total), you'll see dramatically whiter teeth!</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Before/After Section -->
    <section class="py-5 my-5" id="results">
        <div class="container">
            <h2 class="section-title">See the Transformation</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="before-after-container" id="beforeAfterSlider">
                        <img src="assets/img/teethwhiting1.jpg" alt="Before teeth whitening" class="before-image">
                        <img src="assets/img/teethwhiting.jpg" alt="After teeth whitening" class="after-image">
                        <div class="slider-handle"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">What Our Patients Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">I was amazed by the results! My teeth are several shades whiter after just one session. The staff was professional and made me feel comfortable throughout the process.</p>
                        <div class="testimonial-author">- Sarah Johnson</div>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">As a coffee drinker, my teeth were badly stained. The whitening treatment worked wonders! No sensitivity issues and the results have lasted for months.</p>
                        <div class="testimonial-author">- Michael Chen</div>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">I was nervous about teeth whitening, but the dentist explained everything and made sure I was comfortable. The results were better than I expected!</p>
                        <div class="testimonial-author">- Emily Rodriguez</div>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5 my-5" id="pricing">
        <div class="container">
            <h2 class="section-title">Whitening Packages</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="pricing-card">
                        <h4>Basic Whitening</h4>
                        <div class="price">$199 <span>/ session</span></div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Single whitening session</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Professional cleaning</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Take-home maintenance kit</li>
                            <li class="mb-2"><i class="fas fa-times text-secondary me-2"></i> No touch-up sessions</li>
                        </ul>
                        <a href="#contact" class="btn btn-whitening-outline w-100">Book Now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <h4>Premium Whitening</h4>
                        <div class="price">$299 <span>/ session</span></div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Two whitening sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Professional cleaning</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Enhanced whitening gel</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 1 free touch-up session</li>
                        </ul>
                        <a href="#contact" class="btn btn-whitening w-100">Book Now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card">
                        <h4>Deluxe Package</h4>
                        <div class="price">$499 <span>/ session</span></div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Three whitening sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Professional cleaning</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Premium whitening gel</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 2 free touch-up sessions</li>
                        </ul>
                        <a href="#contact" class="btn btn-whitening-outline w-100">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <p class="text-muted">* Results may vary based on individual circumstances. Consultation required.</p>
            </div>
        </div>
    </section>



   {{-- faq section --}}
  <section id="faq" class="faq section light-background">
    <div class="container section-title">
        <h2>Frequently Asked Questions</h2>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>Is teeth whitening safe?</h3>
                        <div class="faq-content">
                            <p>
                                Yes, when performed by a dental professional, teeth whitening is completely safe. Our treatments are designed to minimize sensitivity and protect your enamel.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>How long do teeth whitening results last?</h3>
                        <div class="faq-content">
                            <p>
                                Whitening results typically last between 6 months to 2 years, depending on your lifestyle and oral care habits. Avoiding coffee, tea, and smoking can help extend the brightness.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>Will teeth whitening make my teeth sensitive?</h3>
                        <div class="faq-content">
                            <p>
                                Some patients may experience mild sensitivity during or after treatment. This usually subsides within a day or two. We use desensitizing agents to keep you comfortable.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>How long does the whitening procedure take?</h3>
                        <div class="faq-content">
                            <p>
                                Our in-office whitening sessions typically take about 60 minutes. You can walk out with a noticeably brighter smile in just one visit.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>Can anyone get their teeth whitened?</h3>
                        <div class="faq-content">
                            <p>
                                Most people are eligible for whitening, but we always begin with a consultation to ensure it's safe for you, especially if you have dental restorations or sensitive teeth.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>What’s the difference between professional and over-the-counter whitening?</h3>
                        <div class="faq-content">
                            <p>
                                Professional whitening uses stronger, dentist-approved agents that deliver faster and more effective results without harming your teeth. OTC products are less potent and may take longer.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>Does whitening work on all teeth?</h3>
                        <div class="faq-content">
                            <p>
                                Whitening is most effective on natural teeth. It does not work on crowns, veneers, or fillings. We’ll evaluate your smile to tailor the best whitening plan for you.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                    <div class="faq-item">
                        <h3>What should I avoid after whitening?</h3>
                        <div class="faq-content">
                            <p>
                                For 24–48 hours post-treatment, avoid dark-colored foods and drinks like coffee, red wine, and berries. Also avoid smoking to keep your results lasting longer.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </section>


<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('beforeAfterSlider');
        const beforeImage = slider.querySelector('.before-image');
        const sliderHandle = slider.querySelector('.slider-handle');
        
        let isDragging = false;
        
        function moveSlider(e) {
            if (!isDragging) return;
            
            let x = e.pageX - slider.getBoundingClientRect().left;
            if (e.type === 'touchmove') {
                x = e.touches[0].pageX - slider.getBoundingClientRect().left;
            }
            
            // Constrain the slider within the container
            if (x < 0) x = 0;
            if (x > slider.offsetWidth) x = slider.offsetWidth;
            
            // Calculate percentage
            const percent = (x / slider.offsetWidth) * 100;
            
            // Update the before image width and slider handle position
            beforeImage.style.clipPath = `polygon(0 0, ${percent}% 0, ${percent}% 100%, 0% 100%)`;
            sliderHandle.style.left = `${percent}%`;
        }
        
        // Mouse events
        sliderHandle.addEventListener('mousedown', () => {
            isDragging = true;
        });
        
        document.addEventListener('mouseup', () => {
            isDragging = false;
        });
        
        document.addEventListener('mousemove', moveSlider);
        
        // Touch events
        sliderHandle.addEventListener('touchstart', () => {
            isDragging = true;
        });
        
        document.addEventListener('touchend', () => {
            isDragging = false;
        });
        
        document.addEventListener('touchmove', moveSlider);

        // Scroll animations
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.slide-up');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };
        
        animateOnScroll();
        window.addEventListener('scroll', animateOnScroll);
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

</main>
    
@endsection
