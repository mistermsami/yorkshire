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
                            <img src="assets/img/prp1.webp" alt="Wash Hair Properly" class="img-fluid rounded mb-3">
                            <p class="fs-5"><strong>Pro Tip:</strong> Always use lukewarm water to wash your hair, as hot water can strip away natural oils.</p>
                        </section>

                        <!-- Tip 2 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">2. Condition Regularly</h2>
                            <p class="fs-5">Conditioning helps restore moisture and keeps your hair soft and manageable. Apply conditioner from mid-length to the ends, avoiding the scalp.</p>
                            <img src="assets/img/blog-3.jpg" alt="Condition Regularly" class="img-fluid rounded mb-3">
                        </section>

                        <!-- Tip 3 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">3. Avoid Heat Styling</h2>
                            <p class="fs-5">Excessive use of heat styling tools like straighteners and curling irons can damage your hair. If you must use them, always apply a heat protectant.</p>
                            <p class="fs-5"><strong>Pro Tip:</strong> Let your hair air-dry whenever possible to minimize heat exposure.</p>
                        </section>

                        <!-- Tip 4 -->
                        <section class="mb-5">
                            <h2 class="h3 mb-3">4. Trim Your Hair Regularly</h2>
                            <p class="fs-5">Regular trims prevent split ends and keep your hair looking healthy. Aim to trim your hair every 6-8 weeks.</p>
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
                                    <img src="assets/img/blog-2.jpg" alt="Case Study" class="img-fluid rounded">
                                </div>
                                <div class="col-md-8">
                                    <p class="fs-5"><strong>Sarah’s Journey:</strong> Sarah struggled with hair loss for years. After following our personalized hair care routine, she saw a 50% reduction in hair fall within 3 months.</p>
                                    <a href="#" class="btn btn-primary">Read Full Story</a>
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
                            <img src="assets/img/pt.jpg" alt="Author" class="img-fluid rounded-circle mb-3">
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
                    <h2 class="h3 mb-3">Frequently Asked Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    How often should I wash my hair?
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    What’s the best way to prevent split ends?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Regular trims, avoiding heat styling, and using a leave-in conditioner can help prevent split ends.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Conclusion -->
                <section class="conclusion text-center">
                    <h2 class="h3 mb-3">Conclusion</h2>
                    <p class="fs-5 mb-4">Taking care of your hair doesn’t have to be complicated. By following these tips, you can achieve healthy, shiny, and strong hair. Start today and see the difference!</p>
                    <a href="#" class="btn btn-primary btn-lg">Book a Consultation</a>
                </section>
            </div>
        </div>
    </main>


</main>

@endsection