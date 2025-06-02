@php
    $pagename = 'Hydra Ficial';
    // $title = 'Home';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    {{-- for meta tags (SEO)
    and for custom css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #5a82cd;
            /* Slate blue - professional yet modern */
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }

        /* HydraFacial Hero Section */
        .hydrafacial-hero {
            background: linear-gradient(to right, #1977cc, #02126ce8);
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hydrafacial-hero::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: white;
            transform: skewY(-3deg);
            z-index: 1;
        }

        .hydrafacial-hero-title {
            /* font-size: 3.5rem; */
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hydrafacial-hero-subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            margin-bottom: 25px;
        }

        .hydrafacial-btn-primary {
            background-color: #ff6b6b;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .hydrafacial-btn-primary:hover {
            background-color: #ff5252;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.6);
        }

        .hydrafacial-section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
            font-weight: 700;
            color: var(--dark-color);
        }

        .hydrafacial-section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 70px;
            height: 4px;
            background: linear-gradient(to right, #4a8fe7, #5e72e4);
            border-radius: 2px;
        }

        /* HydraFacial Process Steps */
        .hydrafacial-process-step {
            position: relative;
            padding-left: 90px;
            margin-bottom: 40px;
        }

        .hydrafacial-step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            background: linear-gradient(to right, #4a8fe7, #5e72e4);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
        }

        /* HydraFacial Testimonials */
        /* .hydrafacial-testimonial-card {
                                          background: white;
                                          border-radius: 15px;
                                          padding: 30px;
                                          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                                          margin: 15px;
                                          position: relative;
                                      }
                                      
                                      .hydrafacial-testimonial-card::before {
                                          content: '"';
                                          position: absolute;
                                          top: 20px;
                                          left: 30px;
                                          font-size: 5rem;
                                          color: rgba(106, 90, 205, 0.1);
                                          font-family: Georgia, serif;
                                          line-height: 1;
                                      }
                                      
                                      .hydrafacial-client-name {
                                          color: var(--primary-color);
                                          font-weight: 600;
                                          margin-top: 20px;
                                      }
                                      
                                      .hydrafacial-client-rating {
                                          color: #ffc107;
                                          margin-bottom: 15px;
                                      } */

        /* HydraFacial Pricing */
        .hydrafacial-price-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .hydrafacial-price-card.popular {
            border: 2px solid #ccd3f8;
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(106, 90, 205, 0.2);
        }

        .hydrafacial-price-card.popular .card-header {
            background: linear-gradient(to right, #4a8fe7, #5e72e4);
            color: white;
        }

        .hydrafacial-price-card .card-header {
            padding: 20px;
            background: rgba(90, 174, 205, 0.1);
            text-align: center;
            font-weight: 600;
        }

        .hydrafacial-price-amount {
            font-size: 2.5rem;
            font-weight: 700;
            color: #5e72e4;
        }

        .hydrafacial-price-period {
            color: #6c757d;
        }

        /* HydraFacial Before/After */
        .hydrafacial-before-after-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .hydrafacial-before-after-img {
            width: 100%;
            height: 400px;
            display: block;
        }

        .hydrafacial-trustpilot-image img {
            width: 170px;
            margin-bottom: 20px;
        }

        /* HydraFacial Glass Cards */
        .hydrafacial-glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            overflow: hidden;
            transition: var(--transition);
        }

        /* HydraFacial CTA Section */
        .hydrafacial-cta-section {
            background: linear-gradient(to right, #3577cf, #021580e8);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hydrafacial-cta-section::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: white;
            transform: skewY(-3deg);
            z-index: 1;
        }

        .hydrafacial-floating-bubbles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }

        .hydrafacial-bubble {
            position: absolute;
            bottom: -100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: hydrafacial-floating 15s infinite ease-in;
        }

        @keyframes hydrafacial-floating {
            0% {
                bottom: -100px;
                transform: translateX(0);
            }

            50% {
                transform: translateX(100px);
            }

            100% {
                bottom: 100%;
                transform: translateX(-100px);
            }
        }

        @media (max-width: 768px) {
            .hydrafacial-hero-title {
                font-size: 2.5rem;
            }

            .hydrafacial-hero-subtitle {
                font-size: 1.2rem;
            }

            .hydrafacial-process-step {
                padding-left: 70px;
            }

            .hydrafacial-step-number {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
@endsection

@section('maincontent')
    <main class="main">
        <section class="hydrafacial-hero text-center">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="hydrafacial-hero-title animate__animated animate__fadeInDown">Advanced HydraFacial
                            Treatment</h1>
                        <p class="hydrafacial-hero-subtitle animate__animated animate__fadeIn animate__delay-1s">Revitalize
                            your skin with our medical-grade facial that cleanses, exfoliates, extracts, and hydrates</p>
                        <div class="hydrafacial-trustpilot-image">
                            <img src="assets/img/c1.png" alt="not found">
                            <img src="assets/img/c2.png" alt="not found">
                        </div>
                        <div class="animate__animated animate__fadeIn animate__delay-2s">
                            <a href="#contact" class="btn hydrafacial-btn-primary me-2">Book Your Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HydraFacial About Section -->
        <section id="hydrafacial-about" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="hydrafacial-section-title">What is HydraFacial?</h2>
                        <p class="lead">HydraFacial is a revolutionary, non-invasive skin treatment that combines
                            cleansing, exfoliation, extraction, hydration, and antioxidant protection simultaneously.</p>
                        <p>Our advanced HydraFacial system delivers instant, noticeable results with no downtime. It's
                            suitable for all skin types and addresses a wide range of skin concerns including fine lines and
                            wrinkles, congested and enlarged pores, oily or acne-prone skin, hyperpigmentation, and uneven
                            skin tone.</p>
                        <p>Unlike traditional facials, HydraFacial uses patented vortex technology to painlessly remove dead
                            skin cells and impurities while simultaneously delivering nourishing serums tailored to your
                            skin's unique needs.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="hydrafacial-before-after-container">
                            <img src="assets/img/prp11.jpg" alt="Before HydraFacial" class="hydrafacial-before-after-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HydraFacial Benefits Section -->
        <section id="hydrafacial-benefits" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="hydrafacial-section-title">Why Choose Our HydraFacial?</h2>
                        <p class="lead mb-5">Experience the ultimate skin rejuvenation with our premium HydraFacial
                            treatment</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="hydrafacial-glass-card p-4 h-100">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle">
                                    <i class="fas fa-spa fs-2 text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center mb-3">Instant Radiance</h4>
                            <p class="text-center">See visible glow and refined skin texture immediately after your first
                                session with our enhanced hydration technology.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hydrafacial-glass-card p-4 h-100">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle">
                                    <i class="fas fa-atom fs-2 text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center mb-3">Molecular Infusion</h4>
                            <p class="text-center">Our patented delivery system transports active ingredients 3x deeper than
                                standard treatments for lasting results.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hydrafacial-glass-card p-4 h-100">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle">
                                    <i class="fas fa-dna fs-2 text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center mb-3">Personalized Science</h4>
                            <p class="text-center">Skin analysis technology creates a custom treatment protocol tailored to
                                your unique skin profile and goals.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hydrafacial-glass-card p-4 h-100">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle">
                                    <i class="fas fa-clock fs-2 text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center mb-3">Zero Downtime</h4>
                            <p class="text-center">Advanced vortex technology provides exceptional results without
                                irritation or recovery time.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hydrafacial-glass-card p-4 h-100">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle">
                                    <i class="fas fa-shield-alt fs-2 text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center mb-3">Barrier Restoration</h4>
                            <p class="text-center">Specialized serums repair and strengthen your skin's natural protective
                                barrier for long-term health.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hydrafacial-glass-card p-4 h-100">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle">
                                    <i class="fas fa-leaf fs-2 text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center mb-3">Toxin Removal</h4>
                            <p class="text-center">Advanced extraction removes environmental pollutants and impurities from
                                deep within pores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HydraFacial Process Section -->
        <section id="hydrafacial-process" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="hydrafacial-section-title">The HydraFacial Process</h2>
                        <p class="lead mb-5">A complete 4-step treatment that delivers real results</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hydrafacial-process-step">
                            <div class="hydrafacial-step-number">1</div>
                            <h4>Cleanse + Peel</h4>
                            <p>Gentle exfoliation and relaxing resurfacing to remove dead skin cells and reveal a fresh
                                layer of skin.</p>
                        </div>
                        <div class="hydrafacial-process-step">
                            <div class="hydrafacial-step-number">2</div>
                            <h4>Extract + Hydrate</h4>
                            <p>Painless vortex suction removes debris from pores while vortex-fused hydration nourishes the
                                skin.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hydrafacial-process-step">
                            <div class="hydrafacial-step-number">3</div>
                            <h4>Boost + Protect</h4>
                            <p>Customized serums are applied to address your specific skin concerns like aging, dryness, or
                                oiliness.</p>
                        </div>
                        <div class="hydrafacial-process-step">
                            <div class="hydrafacial-step-number">4</div>
                            <h4>Fuse + Protect</h4>
                            <p>LED light therapy enhances results by stimulating collagen production and killing
                                acne-causing bacteria.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HydraFacial Results Section -->
        <section id="hydrafacial-results" class="py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="hydrafacial-section-title">Real Patient Results</h2>
                        <p class="lead mb-5">See the transformation our patients have experienced</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="assets/img/acne.jpg" class="card-img-top" alt="Before and After 1">
                            <div class="card-body">
                                <h5 class="card-title">Acne-Prone Skin</h5>
                                <p class="card-text">After just 3 treatments over a span of 6 weeks, patients noticed a
                                    significant reduction in acne, visibly clearer skin, and a noticeable improvement in
                                    overall texture and tone. The skin appeared smoother, more balanced, and showed fewer
                                    signs of inflammation and breakouts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="assets/img/anti-aging.jpg" class="card-img-top" alt="Before and After 2">
                            <div class="card-body">
                                <h5 class="card-title">Anti-Aging</h5>
                                <p class="card-text">After 4 monthly treatments, patients observed a visible reduction in
                                    fine lines, improved skin elasticity, and a smoother, more youthful-looking complexion.
                                    The skin appeared firmer, more supple, and showed enhanced radiance and hydration, with
                                    long-lasting rejuvenating effects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="assets/img/hyperpigmantaion.jpg" class="card-img-top" alt="Before and After 3">
                            <div class="card-body">
                                <h5 class="card-title">Hyperpigmentation</h5>
                                <p class="card-text">After 5 treatments, patients experienced a noticeable evening out of
                                    skin tone, along with a significant reduction in dark spots and discoloration. The
                                    complexion appeared brighter, more balanced, and visibly refreshed.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HydraFacial Testimonials -->
                {{-- <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center mb-5">What Our Clients Say</h3>
                </div>
                <div class="col-md-4">
                    <div class="hydrafacial-testimonial-card">
                        <div class="hydrafacial-client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-0">"I've tried many facials but HydraFacial is by far the best. My skin has never looked this good! The treatment was relaxing and I saw immediate results."</p>
                        <p class="hydrafacial-client-name">- Sarah J.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hydrafacial-testimonial-card">
                        <div class="hydrafacial-client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-0">"As a man, I was skeptical about facials but the HydraFacial has completely changed my skin. My wife even commented on how youthful I look now!"</p>
                        <p class="hydrafacial-client-name">- Michael T.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hydrafacial-testimonial-card">
                        <div class="hydrafacial-client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="mb-0">"I get HydraFacials before all my big events. It gives me that perfect glow and makes my makeup apply so smoothly. Worth every penny!"</p>
                        <p class="hydrafacial-client-name">- Emily R.</p>
                    </div>
                </div>
            </div> --}}
            </div>
        </section>

        {{-- hydrafacial-testimonials --}}
        <section id="testimonial" class="testimonial-section">
            <div class="container">
                <h2>What Our Clients Say</h2>
                <div class="timeline">
                    <!-- Testimonial 1 -->
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <img src="assets/img/pt2.jpg" alt="Patient 1">
                            <div class="testimonial-text">
                                <p>"The HydraFacial treatment left my skin glowing! I've never felt so refreshed after just
                                    one session."</p>
                                <h5>Jessica Williams</h5>
                                <span>HydraFacial Client</span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <img src="assets/img/pt.jpg" alt="Patient 2">
                            <div class="testimonial-text">
                                <p>"My pores have never been cleaner. The extraction process was gentle yet incredibly
                                    effective."</p>
                                <h5>David Rodriguez</h5>
                                <span>HydraFacial Client</span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <img src="assets/img/pt3.jpg" alt="Patient 3">
                            <div class="testimonial-text">
                                <p>"After just 3 treatments, my acne scars have visibly faded and my complexion is more
                                    even."</p>
                                <h5>Olivia Chen</h5>
                                <span>HydraFacial Client</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- hydrafacial-machine section --}}
        <section class="soprano-laser-section">
            <div class="laser-container">
                <!-- Header -->
                <div class="laser-header">
                    <span class="badge">BEST IN CLASS</span>
                    <h2>HydraFacial MD Elite System</h2>
                    <p class="subheader">The gold standard in advanced, non-invasive skin rejuvenation</p>
                </div>

                <!-- Main Content -->
                <div class="laser-grid">
                    <!-- Left Column - Visual -->
                    <div class="laser-visual">
                        <div class="machine-wrapper">
                            <img src="assets/img/hydraMachine.jpg" alt="HydraFacial MD Elite Machine"
                                class="main-machine">
                            <div class="tech-badge">
                                <span>Vortex-Fusion Technology</span>
                            </div>
                        </div>

                        <div class="highlights-box">
                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div>
                                    <h4>All Skin Types</h4>
                                    <p>Safe and effective for all skin tones and conditions, with customizable treatment
                                        options.</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-spa"></i>
                                </div>
                                <div>
                                    <h4>Instant Glow</h4>
                                    <p>Patented vortex technology deeply cleanses and hydrates for immediate visible
                                        results.</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h4>Quick Treatments</h4>
                                    <p>Complete facial rejuvenation in just 30 minutes with no downtime.</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="icon-circle">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h4>Proven Results</h4>
                                    <p>Clinically proven to improve skin texture, tone, and hydration after just one
                                        treatment.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Details -->
                    <div class="laser-details">
                        <div class="detail-card">
                            <h3><i class="fas fa-atom blue-icon"></i> How It Works</h3>
                            <p>
                                The <strong>HydraFacial MD Elite</strong> uses patented vortex-fusion technology to deeply
                                cleanse, exfoliate, extract impurities, and hydrate the skin. This multi-step treatment
                                delivers instant, noticeable results with no discomfort or downtime.
                            </p>
                            <p>
                                The system's unique <strong>4-in-1 approach</strong> combines cleansing, exfoliation,
                                extraction, and hydration with nourishing serums tailored to your specific skin concerns.
                                The vortex suction removes dead skin cells and impurities while simultaneously delivering
                                potent skin solutions.
                            </p>
                            <p>
                                With regular treatments, HydraFacial improves <strong>skin texture, tone, and
                                    elasticity</strong> while reducing fine lines, wrinkles, hyperpigmentation, and acne
                                concerns.
                            </p>
                        </div>

                        <div class="tech-specs">
                            <h4>Technical Specifications:</h4>
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-tint"></i>
                                    <span>Technology</span>
                                    <strong>Vortex-Fusion</strong>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-layer-group"></i>
                                    <span>Treatment Steps</span>
                                    <strong>4-Step Process</strong>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Treatment Time</span>
                                    <strong>30 Minutes</strong>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-certificate"></i>
                                    <span>Approvals</span>
                                    <strong>FDA Cleared</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <!-- HydraFacial Pricing Section -->
        <section id="hydrafacial-pricing" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="hydrafacial-section-title">Treatment Packages</h2>
                        <p class="lead mb-5">Choose the perfect package for your skincare needs</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="hydrafacial-price-card card">
                            <div class="card-header">
                                <h4>Signature HydraFacial</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="hydrafacial-price-amount">£75-£95</div>
                                <div class="hydrafacial-price-period">per session</div>
                                <ul class="list-unstyled my-4">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Standard HydraFacial
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Serum Infusion
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>60 Minute Session
                                    </li>
                                    <li class="mb-2"><i class="fas fa-times text-muted me-2"></i>LED Light Therapy</li>
                                    <li class="mb-2"><i class="fas fa-times text-muted me-2"></i>Booster Add-ons</li>
                                </ul>
                                <a href="#contact" class="btn btn-outline-primary w-100 bookNow"
                                    data-id="Signature HydraFacial">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hydrafacial-price-card card popular">
                            <div class="card-header">
                                <h4>Advance Face detox facial</h4>
                                <span class="badge bg-white text-primary">Most Popular</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="hydrafacial-price-amount">£65-£85</div>
                                <div class="hydrafacial-price-period">per session</div>
                                <ul class="list-unstyled my-4">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Enhanced HydraFacial
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Premium Serum
                                        Infusion</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>75 Minute Session
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>LED Light Therapy
                                    </li>
                                    <li class="mb-2"><i class="fas fa-times text-muted me-2"></i>Booster Add-ons</li>
                                </ul>
                                <a href="#contact" class="btn hydrafacial-btn-primary w-100 bookNow" data-id="Advance Face detox facial">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hydrafacial-price-card card">
                            <div class="card-header">
                                <h4>Platinum</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="hydrafacial-price-amount">£85-£110</div>
                                <div class="hydrafacial-price-period">per session</div>
                                <ul class="list-unstyled my-4">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Ultimate HydraFacial
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Custom Serum Cocktail
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>90 Minute Session
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>LED Light Therapy
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Booster Add-ons
                                    </li>
                                </ul>
                                <a href="#contact" class="btn btn-outline-primary w-100 bookNow">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p class="text-muted">* Package discounts available when purchasing multiple sessions</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- HydraFacial FAQ Section -->
        <section id="faq" class="faq section light-background">
            <div class="container section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>What is a HydraFacial, and how does it work?</h3>
                                <div class="faq-content">
                                    <p>
                                        HydraFacial is a non-invasive facial treatment that uses patented technology to
                                        cleanse, extract, and hydrate the skin. It combines cleansing, exfoliation,
                                        extraction, hydration, and antioxidant protection in one session to improve overall
                                        skin health and appearance.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>What are the benefits of a HydraFacial?</h3>
                                <div class="faq-content">
                                    <p>
                                        HydraFacial helps improve skin texture, tone, and overall appearance. It addresses
                                        concerns like fine lines, wrinkles, enlarged pores, oily skin, and
                                        hyperpigmentation. It delivers immediate, noticeable results without downtime.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is HydraFacial suitable for all skin types?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes, HydraFacial is safe for all skin types, including sensitive skin. The treatment
                                        can be customized with different serums and intensities to suit individual skin
                                        concerns and goals.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How often should I get a HydraFacial?</h3>
                                <div class="faq-content">
                                    <p>
                                        For best results, it is recommended to get a HydraFacial once a month. Regular
                                        treatments help maintain healthy skin and improve long-term results.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Is there any downtime after a HydraFacial?</h3>
                                <div class="faq-content">
                                    <p>
                                        No, there is no downtime. You can return to your normal activities immediately after
                                        the treatment. Some people may experience slight redness, but it typically fades
                                        quickly.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>How long does a HydraFacial session take?</h3>
                                <div class="faq-content">
                                    <p>
                                        A typical HydraFacial treatment takes about 30 to 60 minutes, depending on the
                                        specific skin concerns being addressed and any add-on treatments selected.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Can HydraFacial be combined with other treatments?</h3>
                                <div class="faq-content">
                                    <p>
                                        Yes, HydraFacial can be safely combined with other skincare treatments such as LED
                                        therapy, chemical peels, or microneedling. Your skincare professional can recommend
                                        the best combination based on your skin's needs.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div><!-- End Faq Column-->
                </div>
            </div>
        </section>


        <!-- HydraFacial CTA Section -->
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
                        <h2 class="text-white mb-4">Ready for Radiant Skin?</h2>
                        <p class="lead text-white mb-5">Book your HydraFacial treatment today and experience the difference
                        </p> 
                        @livewire('AppointmentForm.AppointmentForm') 
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Smooth scrolling for anchor links
            $('a[href*="#"]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top - 70,
                    },
                    500,
                    'linear'
                );
            });

            // Animation on scroll for HydraFacial elements
            function animateHydraFacialOnScroll() {
                const elements = document.querySelectorAll(
                    '.hydrafacial-glass-card, .hydrafacial-process-step, .hydrafacial-testimonial-card, .hydrafacial-price-card'
                );

                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;

                    if (elementPosition < screenPosition) {
                        element.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            }

            window.addEventListener('scroll', animateHydraFacialOnScroll);
            animateHydraFacialOnScroll(); // Run once on page load

            // Create floating bubbles for HydraFacial CTA section
            function createHydraFacialBubbles() {
                const bubblesContainer = document.querySelector('.hydrafacial-floating-bubbles');
                if (!bubblesContainer) return;

                for (let i = 0; i < 8; i++) {
                    const bubble = document.createElement('div');
                    bubble.classList.add('hydrafacial-bubble');

                    // Random size between 20px and 60px
                    const size = Math.random() * 40 + 20;

                    // Random position
                    const left = Math.random() * 100;

                    // Random animation delay
                    const delay = Math.random() * 5;

                    // Random animation duration between 10s and 20s
                    const duration = Math.random() * 10 + 10;

                    bubble.style.width = `${size}px`;
                    bubble.style.height = `${size}px`;
                    bubble.style.left = `${left}%`;
                    bubble.style.animationDelay = `${delay}s`;
                    bubble.style.animationDuration = `${duration}s`;

                    bubblesContainer.appendChild(bubble);
                }
            }

            createHydraFacialBubbles();
        });
    </script>
    <script>
        const bookButtons = document.getElementsByClassName('bookNow');

        // If there's only one button, access the first one
        // bookButtons[0].addEventListener('click', function(e) {
        //     e.preventDefault();
        //     const select = document.getElementById('appointmentSelect');
        //     select.value = "Signature HydraFacial"; // Value must match the option text exactly
        // });
        document.querySelectorAll('.bookNow').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default action
                const treatment = this.getAttribute('data-id'); // Get data-id value
                const select = document.getElementById('appointmentSelect');
                console.log(treatment);

                // Set the value of the select to match the treatment
                select.value = treatment;
            });
        });
    </script>
@endsection
