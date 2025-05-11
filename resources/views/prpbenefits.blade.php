@php
    $pagename = 'Benefits of PRP';
@endphp

@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
@endsection

@section('maincontent')

<header class="blog-header text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3" style="color: white">Benefits of PRP Therapy</h1>
        <p class="lead mb-4">By <strong>John Doe</strong> | Published on <strong>March 10, 2025</strong></p>
    </div>
</header>

<main class="main">
    <main class="blog-content py-5">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="blog-main bg-white p-4 rounded shadow-sm">
                        <!-- Introduction -->
                        <section class="mb-5">
                            <p class="fs-5">Platelet-Rich Plasma (PRP) Therapy is a revolutionary treatment that uses your body’s natural healing abilities to promote hair growth and improve skin health. Whether you're struggling with hair loss, thinning hair, or skin concerns, PRP Therapy offers a safe and effective solution. Let’s explore the benefits of this cutting-edge treatment!</p>
                        </section>

                        <!-- Benefit 1 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">1. Natural & Safe</h2>
                            <p class="fs-5">PRP Therapy uses your own blood, making it a natural and safe treatment with minimal risk of allergic reactions or side effects. The process involves drawing a small amount of blood, processing it to concentrate the platelets, and injecting the plasma into the treatment area.</p>
                            <img src="assets/img/prpprocess.png" alt="Natural & Safe" class="img-fluid rounded mb-3">
                            <p class="fs-5"><strong>Pro Tip:</strong> PRP Therapy is ideal for those looking for a non-surgical and drug-free solution to hair loss.</p>
                        </section>

                        <!-- Benefit 2 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">2. Stimulates Hair Growth</h2>
                            <p class="fs-5">PRP injections stimulate dormant hair follicles, promoting thicker, stronger, and healthier hair growth. The growth factors in the plasma help repair damaged follicles and encourage new hair growth.</p>
                            <img src="assets/img/blog-3.jpg" alt="Stimulates Hair Growth" class="img-fluid rounded mb-3">
                        </section>

                        <!-- Benefit 3 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">3. Quick & Convenient</h2>
                            <p class="fs-5">Each PRP session takes about 60-90 minutes, with no downtime, allowing you to resume your daily activities immediately. Most patients see noticeable results within 3-6 months of treatment.</p>
                            <p class="fs-5"><strong>Pro Tip:</strong> For best results, a series of 3-4 sessions spaced 4-6 weeks apart is recommended.</p>
                        </section>

                        <!-- Case Study -->
                        <section class="case-study bg-light p-4 rounded mb-5">
                            <h2 class="h3 mb-3">Real-Life Success Story</h2>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <img src="assets/img/pt3.jpg" alt="Case Study" class="img-fluid rounded">
                                </div>
                                <div class="col-md-8">
                                    <strong>Sarah’s Journey:</strong> Sarah, a 32-year-old marketing professional, had been struggling with severe hair loss for over two years. She tried countless products and treatments, but nothing seemed to work. Frustrated and losing confidence, she decided to visit Yorkshire Hair and Skin Solution for a consultation. Our experts recommended PRP Therapy, and after just 3 sessions, Sarah noticed a significant reduction in hair fall and new hair growth. Today, she’s thrilled with her results and continues to follow our maintenance plan
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <!-- Author Bio -->
                        <div class="author-bio bg-white p-4 rounded shadow-sm mb-4">
                            <img src="assets/img/doc1copy.jpg" alt="Author" class="img-fluid rounded-circle mb-3">
                            <h3 class="h5">About the Author</h3>
                            <p class="fs-5">John Doe is a certified dermatologist with over 10 years of experience in hair and skin care. He specializes in PRP therapy and personalized hair care routines.</p>
                        </div>

                        <!-- Related Posts -->
                        <div class="related-posts bg-white p-4 rounded shadow-sm mb-4">
                            <h3 class="h5 mb-3">Related Posts</h3>
                            <ul class="list-unstyled">
                                <div class="related-posts bg-white p-4 rounded shadow-sm mb-4">
                                    <h3 class="h5 mb-3">Related Posts</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><a href="#" class="text-decoration-none">5 Reasons to Choose PRP Therapy for Hair Loss</a></li>
                                        <li class="mb-2"><a href="#" class="text-decoration-none">PRP vs. Hair Transplant: Which is Right for You?</a></li>
                                        <li class="mb-2"><a href="#" class="text-decoration-none">How PRP Therapy Can Improve Skin Health</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>

                        <!-- Newsletter -->
                        <div class="newsletter bg-white p-4 rounded shadow-sm">
                            <h3 class="h5 mb-3">Subscribe to Our Newsletter</h3>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                            </form>
                        </div>
                    </aside>
                </div>

                <!-- FAQs -->
                <section class="faqs mb-5">
                    <h2 class="h2 text-center mb-4 fw-bold">Frequently Asked Questions</h2>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="accordion custom-accordion" id="faqAccordion">
                                    <!-- FAQ 1 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading1">
                                            <button class="accordion-button d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                                <i class="fas fa-question-circle me-3"></i> How does PRP Therapy work?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                PRP Therapy involves drawing a small amount of your blood, processing it to concentrate the platelets, and injecting the plasma into the treatment area. The growth factors in the plasma stimulate hair follicles and promote healing.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 2 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading2">
                                            <button class="accordion-button d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                                <i class="fas fa-question-circle me-3"></i> Is PRP Therapy painful?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Most patients experience minimal discomfort during the procedure. A topical anesthetic is applied to the treatment area to ensure a comfortable experience.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 3 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading3">
                                            <button class="accordion-button d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                                <i class="fas fa-question-circle me-3"></i> How many PRP sessions are needed?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Most patients require 3-4 sessions spaced 4-6 weeks apart for optimal results. Maintenance sessions may be recommended every 6-12 months.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Conclusion -->
                <section class="conclusion text-center">
                    <h2 class="h3 mb-3">Conclusion</h2>
                    <p class="fs-5 mb-4">
                        PRP Therapy is a safe, natural, and effective solution for hair loss and skin rejuvenation. By harnessing your body’s healing abilities, this treatment can help you achieve thicker, healthier hair and glowing skin. Ready to transform your look? Book a consultation today and let our experts create a personalized PRP treatment plan for you!
                    </p>
                    <a href="#appointment" class="btn btn-primary btn-lg">Book a Consultation</a>
                </section>

                <!-- Appointment Section -->
                <section id="appointment" class="appointment section">
                    <!-- Section Title -->
                    <div class="container section-title">
                        <h2>Appointment</h2>
                        <p>Ready to book your appointment? Fill out the form below, and our team will get back to you shortly to confirm your schedule.</p>
                    </div><!-- End Section Title -->

                    <div class="container d-flex justify-content-center">
                        <div class="col-md-10">
                            <form action="" method="post" role="form" class="">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-md-4 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                                    </div>
                                    <div class="col-md-4 form-group mt-3 mt-md-0">
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group mt-3">
                                        <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
                                    </div>
                                    <div class="col-md-8 form-group mt-3">
                                        <select name="department" id="department" class="form-select" required="">
                                            <option value="">Select Treatment</option>
                                            <option value="Hair Transplant">Hair Transplant</option>
                                            <option value="Face Treatment">Face Treatment</option>
                                            <option value="Microneedling">Microneedling</option>
                                            <option value="Laser Hair Removal">Laser Hair Removal</option>
                                            <option value="HydraFacial">HydraFacial</option>
                                            <option value="Tanning Bed">Tanning Bed</option>
                                            <option value="PRP">PRP</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary mt-3" type="submit">Make an Appointment <i class="fas fa-calendar-check me-3"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</main>

@endsection