@php
    $pagename = 'Hair Blog';

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
        <h1 class="display-4 fw-bold mb-3" style="color: white">Top Hair Care Tips</h1>
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
                            <p class="fs-5">Healthy hair is a sign of overall well-being. Whether you're dealing with hair loss, dryness, or just want to maintain your luscious locks, these top hair care tips will help you achieve your goals. Let’s dive in!</p>
                        </section>

                        <!-- Tip 1 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">1. Wash Your Hair Properly</h2>
                            <p class="fs-5">Over-washing or under-washing can damage your hair. Use a sulfate-free shampoo and wash your hair 2-3 times a week, depending on your hair type.</p>
                            <img src="assets/img/blog-3.jpg" alt="Wash Hair Properly" class="img-fluid rounded mb-3">
                            <p class="fs-5"><strong>Pro Tip:</strong> Always use lukewarm water to wash your hair, as hot water can strip away natural oils.</p>
                        </section>

                        <!-- Tip 2 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">2. Condition Regularly</h2>
                            <p class="fs-5">Conditioning helps restore moisture and keeps your hair soft and manageable. Apply conditioner from mid-length to the ends, avoiding the scalp.</p>
                            <img src="assets/img/Conditioning.webp" alt="Condition Regularly" class="img-fluid rounded mb-3">
                        </section>

                        <!-- Tip 3 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">3. Avoid Heat Styling</h2>
                            <p class="fs-5">
                                Excessive use of heat styling tools like straighteners and curling irons can damage your hair by stripping moisture and causing breakage. To protect your hair, always apply a heat protectant, use the lowest effective temperature, and limit heat styling to 2-3 times a week. Opt for heatless styles whenever possible to keep your hair healthy and strong.
                            </p>
                            <p class="fs-5"><strong>Pro Tip:</strong> Let your hair air-dry whenever possible to minimize heat exposure.</p>
                        </section>

                        <!-- Tip 4 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">4. Trim Your Hair Regularly</h2>
                            <p class="fs-5">
                                Regular trims are essential for maintaining healthy hair and preventing split ends. Split ends occur when the protective outer layer of your hair (the cuticle) wears away, causing the hair to fray. Trimming your hair every <strong>6-8 weeks</strong> helps remove these damaged ends, keeping your hair looking fresh and healthy.
                            </p>
                        </section>

                        <!-- Tip 5 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">5. Eat a Hair-Healthy Diet</h2>
                            <p class="fs-5">Your diet plays a crucial role in hair health. Include foods rich in vitamins, minerals, and proteins.</p>
                            <ul class="fs-5">
                                <li><strong>Protein:</strong> Promotes hair growth (found in eggs, fish, and beans).</li>
                                <li><strong>Vitamin E:</strong> Protects hair from damage (found in nuts and seeds).</li>
                                <li><strong>Iron:</strong> Prevents hair loss (found in spinach and lentils).</li>
                            </ul>
                        </section>

                        <!-- Case Study -->
                        <section class="case-study bg-light p-4 rounded mb-5">
                            <h2 class="h3 mb-3">Real-Life Success Story</h2>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <img src="assets/img/pt3.jpg" alt="Case Study" class="img-fluid rounded">
                                </div>
                                <div class="col-md-8">
                                    <strong>Sarah’s Journey:</strong> Sarah, a 32-year-old marketing professional, had been struggling with severe hair loss for over two years. She tried countless products and treatments, but nothing seemed to work. Frustrated and losing confidence, she decided to visit Yorkshire Hair and Skin Solution for a consultation. Our experts conducted a thorough scalp analysis and diagnosed her with stress-induced hair loss combined with a vitamin deficiency. We created a personalized hair care routine for Sarah
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
                            <img src="assets/img/doc3.jpg" alt="Author" class="img-fluid rounded-circle mb-3">
                            <h3 class="h5">About the Author</h3>
                            <p class="fs-5">John Doe is a certified dermatologist with over 10 years of experience in hair and skin care. He specializes in PRP therapy and personalized hair care routines.</p>
                        </div>

                        <!-- Related Posts -->
                        <div class="related-posts bg-white p-4 rounded shadow-sm mb-4">
                            <h3 class="h5 mb-3">Related Posts</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-decoration-none">5 Best Hair Oils for Growth</a></li>
                                <li class="mb-2"><a href="#" class="text-decoration-none">How to Prevent Split Ends</a></li>
                                <li class="mb-2"><a href="#" class="text-decoration-none">The Benefits of Scalp Massage</a></li>
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
                                                <i class="fas fa-question-circle me-3"></i> How often should I wash my hair?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                It depends on your hair type. For oily hair, wash every other day. For dry hair, 2-3 times a week is sufficient.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 2 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading2">
                                            <button class="accordion-button d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                                <i class="fas fa-question-circle me-3"></i> What’s the best way to prevent split ends?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Regular trims, avoiding heat styling, and using a leave-in conditioner can help prevent split ends.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading3">
                                            <button class="accordion-button d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                                <i class="fas fa-question-circle me-3"></i> How do I choose the right shampoo for my hair type?
                                            </button>
                                        </h3>
                                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Choosing the right shampoo depends on your hair type and specific needs:
                                                <ul>
                                                    <li><strong>Oily Hair:</strong> Use a clarifying shampoo to remove excess oil.</li>
                                                    <li><strong>Dry Hair:</strong> Opt for a moisturizing shampoo with ingredients like argan oil or shea butter.</li>
                                                    <li><strong>Curly Hair:</strong> Look for sulfate-free shampoos that enhance curls and reduce frizz.</li>
                                                    <li><strong>Color-Treated Hair:</strong> Use a color-safe shampoo to protect your hair color and prevent fading.</li>
                                                </ul>
                                                Always read the label and choose a shampoo tailored to your hair’s unique needs.
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
                        Taking care of your hair doesn’t have to be complicated. By following these tips, you can achieve healthy, shiny, and strong hair. Start today and see the difference! Remember, consistency is key. Whether it’s regular trims, using the right products, or protecting your hair from heat, small changes can make a big impact over time. At Yorkshire Hair and Skin Solution, we’re here to help you every step of the way. 
                    </p>
                </section>
                <section id="appointment" class="appointment section">

                    <!-- Section Title -->
                    <div class="container section-title">
                        <h2>Appointment</h2>
                        <p>Ready to book your appointment? Fill out the form below, and our team will get back to you shortly to
                            confirm your schedule.</p>
                    </div><!-- End Section Title -->
        
                    <div class="container d-flex justify-content-center">
                        <div class="col-md-10">
                            <form action="" method="post" role="form" class="">
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
                                        <input type="datetime-local" name="date" class="form-control datepicker"
                                            id="date" placeholder="Appointment Date" required="">
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
                                <div class="text-center"><button class="btn btn-primary mt-3" type="submit">Make an Appointment
                                        <i class="fas fa-calendar-check me-3"></i>
                                    </button>
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