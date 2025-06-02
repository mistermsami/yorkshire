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
    


@endsection

@section('maincontent')


<main class="main">

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



</main>
    
@endsection
