@php
    $pagename = 'Summer Skin Care Tips';
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
        <h1 class="display-4 fw-bold mb-3" style="color: white">Summer Skin Care Tips</h1>
        <p class="lead mb-4">By <strong>Sarah Johnson</strong> | Published on <strong>March 25, 2025</strong></p>
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
                            <p class="fs-5">As temperatures rise, our skin faces unique challenges such as sun damage, dehydration, and increased oil production. Proper summer skin care is essential to keep your skin healthy and glowing throughout the season. Here are some essential tips to protect and nourish your skin this summer!</p>
                        </section>

                        <!-- Tip 1 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">1. Sun Protection is Non-Negotiable</h2>
                            <p class="fs-5">The most important summer skin care tip is daily sunscreen application. Choose a broad-spectrum SPF 30+ sunscreen and reapply every 2 hours when outdoors. Don't forget often-missed spots like ears, neck, and the back of your hands.</p>
                            <img src="assets/img/sunscreen.webp" alt="Applying sunscreen" class="img-fluid rounded mb-3">
                            <p class="fs-5"><strong>Pro Tip:</strong> Look for water-resistant formulas if you'll be swimming or sweating.</p>
                        </section>

                        <!-- Tip 2 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">2. Stay Hydrated Inside and Out</h2>
                            <p class="fs-5">Hot weather dehydrates your skin. Drink plenty of water and use lightweight, hydrating serums containing hyaluronic acid. Switch to a gel-based moisturizer that won't feel heavy in the heat.</p>
                            <img src="assets/img/drinkwater2.jpg" alt="Hydrated skin" class="img-fluid rounded mb-3">
                        </section>

                        <!-- Tip 3 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">3. Adjust Your Cleansing Routine</h2>
                            <p class="fs-5">Summer sweat and oil production increase, so you might need to cleanse more frequently. Opt for a gentle foaming cleanser that removes excess oil without stripping your skin.</p>
                            <p class="fs-5"><strong>Pro Tip:</strong> Carry facial wipes for quick refreshment during the day.</p>
                        </section>

                        <!-- Case Study -->
                        <section class="case-study bg-light p-4 rounded mb-5">
                            <h2 class="h3 mb-3">Real-Life Success Story</h2>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <img src="assets/img/casestory.jpg" alt="Case Study" class="img-fluid rounded" style="height: 180px">
                                </div>
                                <div class="col-md-8">
                                    <strong>Emma's Transformation:</strong> Emma, a 28-year-old teacher, struggled every summer with breakouts and sun sensitivity. After one particularly bad sunburn, she visited Yorkshire Hair and Skin Solution. Our experts created a customized summer skin care regimen focusing on protection and hydration. Within weeks, Emma noticed her skin was clearer, more resilient, and glowing. Now she enjoys summer activities without worrying about her skin!
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
                            <img src="assets/img/doc2.jpg" alt="Author" class="img-fluid rounded-circle mb-3">
                            <h3 class="h5">About the Author</h3>
                            <p class="fs-5">Sarah Johnson is a licensed esthetician with 8 years of experience specializing in seasonal skin care adjustments and protective treatments.</p>
                        </div>

                        <!-- Related Posts -->
                        <div class="related-posts bg-white p-4 rounded shadow-sm mb-4">
                            <h3 class="h5 mb-3">Related Posts</h3>
                            <ul class="list-unstyled">
                                <div class="related-posts bg-white p-4 rounded shadow-sm mb-4">
                                    <h3 class="h5 mb-3">Related Posts</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><a href="#" class="text-decoration-none">Best Sunscreens for Summer 2025</a></li>
                                        <li class="mb-2"><a href="#" class="text-decoration-none">How to Treat Sunburn Fast</a></li>
                                        <li class="mb-2"><a href="#" class="text-decoration-none">Summer Makeup That Won't Melt</a></li>
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
                                                <i class="fas fa-question-circle me-3"></i> How often should I exfoliate in summer?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                During summer, 2-3 times per week is ideal. Over-exfoliation combined with sun exposure can make skin more sensitive. Use gentle chemical exfoliants rather than harsh scrubs.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 2 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading2">
                                            <button class="accordion-button d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                                <i class="fas fa-question-circle me-3"></i> What's the best way to treat summer breakouts?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Lightweight, oil-free products with salicylic acid can help. Don't skip moisturizer - look for non-comedogenic formulas. And always remove sweat promptly after workouts.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 3 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading3">
                                            <button class="accordion-button d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                                <i class="fas fa-question-circle me-3"></i> Should I change my routine for vacation climates?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Absolutely! Humid destinations call for lighter products, while dry climates need extra hydration. Always pack travel-sized versions of your essentials and a reef-safe sunscreen for beach trips.
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
                        With the right summer skin care routine, you can enjoy the sunny season while keeping your skin healthy, protected, and radiant. Remember that prevention is easier than repair when it comes to sun damage. Need personalized advice for your skin type? Our experts at Yorkshire Hair and Skin Solution can create a customized summer skin care plan just for you!
                    </p>
                    <a href="#appointment" class="btn btn-primary btn-lg">Book a Skin Consultation</a>
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
                                            <option value="Summer Skin Consultation">Summer Skin Consultation</option>
                                            <option value="HydraFacial">HydraFacial</option>
                                            <option value="Chemical Peels">Chemical Peels</option>
                                            <option value="Laser Treatments">Laser Treatments</option>
                                            <option value="Acne Treatment">Acne Treatment</option>
                                            <option value="Anti-Aging Treatment">Anti-Aging Treatment</option>
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