@php
    $pagename = 'Gallery transformation';
    // $title = 'Home';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
{{-- styling --}}
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7fa;
    }
    
    /* Transformation Gallery Specific Styles */
    .tfg-hero-section {
        background: linear-gradient(135deg, #03045e, #00b4d8);
        color: white;
        padding: 5rem 0;
        margin-bottom: 3rem;
        border-radius: 0 0 20px 20px;
    }
    
    .tfg-main-title {
        font-weight: 700;
        font-size: 2.8rem;
        color: white;
        margin-bottom: 1rem;
    }
    
    .tfg-subtitle {
        font-weight: 300;
        font-size: 1.2rem;
        opacity: 0.9;
    }
    
    .tfg-container {
        margin-top: 30px;
    }
    
    .tfg-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .tfg-card-header {
        padding: 20px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .tfg-card-title {
        font-weight: 600;
        color: #1977cc;
        margin-bottom: 0.5rem;
    }
    
    .tfg-card-subtitle {
        color: #6c757d;
        font-size: 0.9rem;
    }
    
    .tfg-img-compare-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        flex-grow: 1;
        min-height: 350px;
    }
    
    .tfg-img-compare {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        cursor: ew-resize;
    }
    
    .tfg-before-img, 
    .tfg-after-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .tfg-after-img {
        width: 50%;
    }
    
    .tfg-slider-handle {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 4px;
        background: white;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    
    .tfg-slider-handle::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        content: '\f07e';
        color: #ff7e5f;
        font-size: 14px;
    }
    
    .tfg-card-body {
        padding: 20px;
    }
    
    .tfg-detail-item {
        margin-bottom: 15px;
    }
    
    .tfg-detail-label {
        font-weight: 600;
        color: #3a5f8a;
        margin-bottom: 5px;
        font-size: 0.9rem;
    }
    
    .tfg-detail-text {
        font-size: 0.95rem;
    }
    
    .tfg-doctor-card {
        display: flex;
        align-items: center;
        background: rgba(58, 95, 138, 0.05);
        border-radius: 10px;
        padding: 15px;
        margin-top: 15px;
    }
    
    .tfg-doctor-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
        border: 3px solid white;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }
    
    .tfg-doctor-info {
        flex: 1;
    }
    
    .tfg-doctor-name {
        font-weight: 600;
        margin-bottom: 2px;
    }
    
    .tfg-doctor-specialty {
        font-size: 0.8rem;
        color: #6c757d;
    }
    
    .tfg-treatment-badge {
        background-color: #ff7e5f;
        color: white;
        font-weight: 500;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
    }
    
    .tfg-time-badge {
        background-color: #28a745;
        color: white;
        padding: 3px 8px;
        border-radius: 5px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    
    .tfg-filter-section {
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        position: relative;
        z-index: 10;
    }
    
    .tfg-filter-title {
        font-weight: 600;
        color: #1977cc;
        margin-bottom: 15px;
        text-align: center;
    }
    
    .tfg-filter-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }
    
    .tfg-filter-btn {
        border: 2px solid #1977cc;
        color: #1977cc;
        background: transparent;
        border-radius: 30px;
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 8px 20px;
        white-space: nowrap;
    }
    
    .tfg-filter-btn:hover, 
    .tfg-filter-btn.active {
        background: #1977cc;
        color: white;
    }
    
    .tfg-search-box {
        position: relative;
        max-width: 500px;
        margin: 0 auto 20px;
    }
    
    .tfg-search-input {
        width: 100%;
        padding: 12px 20px 12px 45px;
        border-radius: 30px;
        border: 1px solid #ddd;
        font-size: 1rem;
        transition: all 0.3s;
    }
    
    .tfg-search-input:focus {
        border-color: #1977cc;
        box-shadow: 0 0 0 3px rgba(58, 95, 138, 0.2);
        outline: none;
    }
    
    .tfg-search-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }
    
    .tfg-no-results {
        text-align: center;
        padding: 50px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-top: 20px;
    }
    
    .tfg-stats-bar {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        text-align: center;
    }
    
    .tfg-stat-item {
        padding: 10px 15px;
    }
    
    .tfg-stat-number {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1977cc;
        margin-bottom: 5px;
    }
    
    .tfg-stat-label {
        font-size: 0.9rem;
        color: #6c757d;
    }
    
    @media (max-width: 768px) {
        .tfg-main-title {
            font-size: 2rem;
        }
        
        .tfg-img-compare-container {
            min-height: 250px;
        }
        
        .tfg-filter-buttons {
            gap: 8px;
        }
        
        .tfg-filter-btn {
            padding: 6px 15px;
            font-size: 0.9rem;
        }
        
        .tfg-stat-item {
            flex: 0 0 50%;
            margin-bottom: 10px;
        }
    }
</style>
@endsection

@section('maincontent')


<div class="main">
    <section class="tfg-hero-section">
        <div class="container text-center">
            <h1 class="tfg-main-title">Transformation Gallery</h1>
            <p class="tfg-subtitle">Real results from our patients. Swipe to see before & after comparisons.</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Stats Bar -->
        <div class="tfg-stats-bar">
            <div class="tfg-stat-item">
                <div class="tfg-stat-number">2,500+</div>
                <div class="tfg-stat-label">Successful Treatments</div>
            </div>
            <div class="tfg-stat-item">
                <div class="tfg-stat-number">99%</div>
                <div class="tfg-stat-label">Patient Satisfaction</div>
            </div>
            <div class="tfg-stat-item">
                <div class="tfg-stat-number">10+</div>
                <div class="tfg-stat-label">Specialist Doctors</div>
            </div>
            <div class="tfg-stat-item">
                <div class="tfg-stat-number">8</div>
                <div class="tfg-stat-label">Years Experience</div>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="tfg-filter-section">
            <div class="tfg-search-box">
                <i class="fas fa-search tfg-search-icon"></i>
                <input type="text" class="tfg-search-input" placeholder="Search treatments or conditions...">
            </div>
            
            <h5 class="tfg-filter-title">Filter Results By Treatment Type</h5>
            <div class="tfg-filter-buttons">
                <button class="btn tfg-filter-btn active" data-filter="all">All Treatments</button>
                <button class="btn tfg-filter-btn" data-filter="laser">Laser Hair Removal</button>
                <button class="btn tfg-filter-btn" data-filter="prp">PRP Therapy</button>
                <button class="btn tfg-filter-btn" data-filter="teeth">Teeth Whitening</button>
                <button class="btn tfg-filter-btn" data-filter="hairloss">Hair Loss Treatment</button>
                <button class="btn tfg-filter-btn" data-filter="transplant">Hair Transplant</button>
            </div>
        </div>

        <!-- Gallery Container -->
        <div class="tfg-container">
            <div class="row" id="tfg-results-container">
                <!-- Result 1 - Laser Hair Removal -->
                <div class="col-lg-6 mb-4" data-category="laser">
                    <div class="tfg-card">
                        <div class="tfg-card-header">
                            <h3 class="tfg-card-title">Laser Hair Removal</h3>
                            <p class="tfg-card-subtitle">28 year old female • After 6 sessions</p>
                        </div>
                        <div class="tfg-img-compare-container">
                            <div class="tfg-img-compare">
                                <img src="" alt="Before laser hair removal" class="tfg-before-img">
                                <img src="https://images.unsplash.com/photo-1596704017256-9a8cb4a8c1e0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="After laser hair removal" class="tfg-after-img">
                                <div class="tfg-slider-handle"></div>
                            </div>
                        </div>
                        <div class="tfg-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="tfg-treatment-badge">Laser Hair Removal</span>
                                <span class="tfg-time-badge">6 sessions</span>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">TREATMENT DETAILS</div>
                                <div class="tfg-detail-text">Diode laser treatment for permanent hair reduction on legs. Sessions spaced 4-6 weeks apart using our advanced pain-reduction technology for maximum comfort.</div>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">PATIENT FEEDBACK</div>
                                <div class="tfg-detail-text">"I'm amazed by the results! After struggling with waxing for years, laser treatment has given me smooth skin with no maintenance. The procedure was much more comfortable than I expected."</div>
                            </div>
                            <div class="tfg-doctor-card">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Dr. Priya Sharma" class="tfg-doctor-img">
                                <div class="tfg-doctor-info">
                                    <div class="tfg-doctor-name">Dr. Priya Sharma</div>
                                    <div class="tfg-doctor-specialty">Laser Specialist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result 2 - PRP Therapy -->
                <div class="col-lg-6 mb-4" data-category="prp">
                    <div class="tfg-card">
                        <div class="tfg-card-header">
                            <h3 class="tfg-card-title">PRP Hair Restoration</h3>
                            <p class="tfg-card-subtitle">35 year old male • 4 month progress</p>
                        </div>
                        <div class="tfg-img-compare-container">
                            <div class="tfg-img-compare">
                                <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Before PRP treatment" class="tfg-before-img">
                                <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="After PRP treatment" class="tfg-after-img">
                                <div class="tfg-slider-handle"></div>
                            </div>
                        </div>
                        <div class="tfg-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="tfg-treatment-badge">PRP Therapy</span>
                                <span class="tfg-time-badge">3 sessions</span>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">TREATMENT DETAILS</div>
                                <div class="tfg-detail-text">Platelet-rich plasma therapy for hair regrowth. Using patient's own blood, we extracted and injected growth factors to stimulate dormant follicles. Sessions spaced 1 month apart.</div>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">PATIENT FEEDBACK</div>
                                <div class="tfg-detail-text">"I noticed less hair fall after just the first session. By the third treatment, I could see new hair growth. The non-surgical approach was exactly what I was looking for."</div>
                            </div>
                            <div class="tfg-doctor-card">
                                <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Dr. Rohan Kapoor" class="tfg-doctor-img">
                                <div class="tfg-doctor-info">
                                    <div class="tfg-doctor-name">Dr. Rohan Kapoor</div>
                                    <div class="tfg-doctor-specialty">Trichology Specialist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result 3 - Teeth Whitening -->
                <div class="col-lg-6 mb-4" data-category="teeth">
                    <div class="tfg-card">
                        <div class="tfg-card-header">
                            <h3 class="tfg-card-title">Professional Teeth Whitening</h3>
                            <p class="tfg-card-subtitle">30 year old male • After 1 session</p>
                        </div>
                        <div class="tfg-img-compare-container">
                            <div class="tfg-img-compare">
                                <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Before teeth whitening" class="tfg-before-img">
                                <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80&brightness=120&contrast=15&saturation=90" alt="After teeth whitening" class="tfg-after-img">
                                <div class="tfg-slider-handle"></div>
                            </div>
                        </div>
                        <div class="tfg-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="tfg-treatment-badge">Teeth Whitening</span>
                                <span class="tfg-time-badge">1 session</span>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">TREATMENT DETAILS</div>
                                <div class="tfg-detail-text">In-office power whitening using our advanced LED technology. Achieved 8 shades lighter in just 45 minutes with our sensitive-teeth protocol for maximum comfort.</div>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">PATIENT FEEDBACK</div>
                                <div class="tfg-detail-text">"I was skeptical I could get such dramatic results in one visit. The treatment was painless and my teeth look amazing! I've received so many compliments."</div>
                            </div>
                            <div class="tfg-doctor-card">
                                <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Dr. Ananya Gupta" class="tfg-doctor-img">
                                <div class="tfg-doctor-info">
                                    <div class="tfg-doctor-name">Dr. Ananya Gupta</div>
                                    <div class="tfg-doctor-specialty">Cosmetic Dentist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result 4 - Hair Loss Treatment -->
                <div class="col-lg-6 mb-4" data-category="hairloss">
                    <div class="tfg-card">
                        <div class="tfg-card-header">
                            <h3 class="tfg-card-title">Advanced Hair Loss Treatment</h3>
                            <p class="tfg-card-subtitle">40 year old female • 6 month progress</p>
                        </div>
                        <div class="tfg-img-compare-container">
                            <div class="tfg-img-compare">
                                <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Before hair loss treatment" class="tfg-before-img">
                                <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="After hair loss treatment" class="tfg-after-img">
                                <div class="tfg-slider-handle"></div>
                            </div>
                        </div>
                        <div class="tfg-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="tfg-treatment-badge">Hair Regrowth</span>
                                <span class="tfg-time-badge">6 months treatment</span>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">TREATMENT DETAILS</div>
                                <div class="tfg-detail-text">Combination therapy including topical medications, low-level laser therapy, and nutritional supplements. Customized treatment plan based on scalp analysis and blood work.</div>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">PATIENT FEEDBACK</div>
                                <div class="tfg-detail-text">"After postpartum hair loss, I thought I'd never get my thick hair back. This treatment regrew my hair better than before! The team was incredibly supportive throughout my journey."</div>
                            </div>
                            <div class="tfg-doctor-card">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Dr. Neha Patel" class="tfg-doctor-img">
                                <div class="tfg-doctor-info">
                                    <div class="tfg-doctor-name">Dr. Neha Patel</div>
                                    <div class="tfg-doctor-specialty">Hair Restoration Specialist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result 5 - Hair Transplant -->
                <div class="col-lg-6 mb-4" data-category="transplant">
                    <div class="tfg-card">
                        <div class="tfg-card-header">
                            <h3 class="tfg-card-title">FUE Hair Transplant</h3>
                            <p class="tfg-card-subtitle">45 year old male • 12 month results</p>
                        </div>
                        <div class="tfg-img-compare-container">
                            <div class="tfg-img-compare">
                                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Before hair transplant" class="tfg-before-img">
                                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="After hair transplant" class="tfg-after-img">
                                <div class="tfg-slider-handle"></div>
                            </div>
                        </div>
                        <div class="tfg-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="tfg-treatment-badge">Hair Transplant</span>
                                <span class="tfg-time-badge">12 months post-op</span>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">TREATMENT DETAILS</div>
                                <div class="tfg-detail-text">Follicular Unit Extraction (FUE) procedure with 2800 grafts transplanted to frontal hairline and crown. Performed under local anesthesia with our advanced ARTAS robotic system for precision.</div>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">PATIENT FEEDBACK</div>
                                <div class="tfg-detail-text">"The results have changed my life. The procedure was comfortable and the recovery was easier than I anticipated. Nobody can tell I had a transplant - it looks completely natural."</div>
                            </div>
                            <div class="tfg-doctor-card">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Dr. Arjun Malhotra" class="tfg-doctor-img">
                                <div class="tfg-doctor-info">
                                    <div class="tfg-doctor-name">Dr. Arjun Malhotra</div>
                                    <div class="tfg-doctor-specialty">Hair Transplant Surgeon</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result 6 - Laser Hair Removal (Facial) -->
                <div class="col-lg-6 mb-4" data-category="laser">
                    <div class="tfg-card">
                        <div class="tfg-card-header">
                            <h3 class="tfg-card-title">Facial Hair Removal</h3>
                            <p class="tfg-card-subtitle">25 year old female • After 4 sessions</p>
                        </div>
                        <div class="tfg-img-compare-container">
                            <div class="tfg-img-compare">
                                <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Before facial hair removal" class="tfg-before-img">
                                <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="After facial hair removal" class="tfg-after-img">
                                <div class="tfg-slider-handle"></div>
                            </div>
                        </div>
                        <div class="tfg-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="tfg-treatment-badge">Laser Hair Removal</span>
                                <span class="tfg-time-badge">4 sessions</span>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">TREATMENT DETAILS</div>
                                <div class="tfg-detail-text">Gentle laser treatment for facial hair using our specialized Soprano ICE system. Customized for sensitive skin with built-in cooling for maximum comfort. Sessions spaced 6 weeks apart.</div>
                            </div>
                            <div class="tfg-detail-item">
                                <div class="tfg-detail-label">PATIENT FEEDBACK</div>
                                <div class="tfg-detail-text">"I struggled with PCOS-related facial hair for years. After just 4 sessions, I have smooth skin without daily shaving. The treatment was quick and virtually painless."</div>
                            </div>
                            <div class="tfg-doctor-card">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Dr. Shreya Joshi" class="tfg-doctor-img">
                                <div class="tfg-doctor-info">
                                    <div class="tfg-doctor-name">Dr. Shreya Joshi</div>
                                    <div class="tfg-doctor-specialty">Dermatologist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No Results Message (hidden by default) -->
            <div class="tfg-no-results d-none" id="tfg-no-results">
                <i class="fas fa-search fa-3x mb-3" style="color: #ddd;"></i>
                <h4>No Results Found</h4>
                <p>Try adjusting your search or filter criteria</p>
                <button class="btn btn-primary mt-3" id="tfg-reset-filters">Reset All Filters</button>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image comparison slider functionality
        const comparisons = document.querySelectorAll('.tfg-img-compare');
        
        comparisons.forEach(comparison => {
            const beforeImg = comparison.querySelector('.tfg-before-img');
            const afterImg = comparison.querySelector('.tfg-after-img');
            const handle = comparison.querySelector('.tfg-slider-handle');
            
            let isDragging = false;
            
            // Set initial position
            afterImg.style.width = '50%';
            handle.style.left = '50%';
            
            // Desktop drag events
            comparison.addEventListener('mousedown', startDrag);
            document.addEventListener('mouseup', stopDrag);
            document.addEventListener('mousemove', drag);
            
            // Touch events for mobile
            comparison.addEventListener('touchstart', startDrag);
            document.addEventListener('touchend', stopDrag);
            document.addEventListener('touchmove', drag, { passive: false });
            
            function startDrag(e) {
                e.preventDefault();
                isDragging = true;
                comparison.classList.add('active');
            }
            
            function stopDrag() {
                isDragging = false;
                comparison.classList.remove('active');
            }
            
            function drag(e) {
                if (!isDragging) return;
                
                e.preventDefault();
                
                let x;
                if (e.type === 'mousemove') {
                    x = e.pageX - comparison.getBoundingClientRect().left;
                } else if (e.type === 'touchmove') {
                    x = e.touches[0].pageX - comparison.getBoundingClientRect().left;
                }
                
                const width = comparison.offsetWidth;
                const percentage = (x / width) * 100;
                
                // Limit between 5% and 95%
                const boundedPercentage = Math.min(Math.max(5, percentage), 95);
                
                afterImg.style.width = `${boundedPercentage}%`;
                handle.style.left = `${boundedPercentage}%`;
            }
        });
        
        // Filter functionality
        const filterButtons = document.querySelectorAll('.tfg-filter-btn');
        const searchInput = document.querySelector('.tfg-search-input');
        const resetFiltersBtn = document.getElementById('tfg-reset-filters');
        const noResultsMessage = document.getElementById('tfg-no-results');
        const resultsContainer = document.getElementById('tfg-results-container');
        const resultCards = document.querySelectorAll('[data-category]');
        
        // Active filter state
        let activeFilter = 'all';
        let searchTerm = '';
        
        // Apply filters
        function applyFilters() {
            let hasVisibleResults = false;
            
            resultCards.forEach(card => {
                const category = card.getAttribute('data-category');
                const cardText = card.textContent.toLowerCase();
                
                // Check if card matches both filter and search term
                const matchesFilter = activeFilter === 'all' || category === activeFilter;
                const matchesSearch = searchTerm === '' || cardText.includes(searchTerm.toLowerCase());
                
                if (matchesFilter && matchesSearch) {
                    card.style.display = 'block';
                    hasVisibleResults = true;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Show/hide no results message
            if (hasVisibleResults) {
                noResultsMessage.classList.add('d-none');
            } else {
                noResultsMessage.classList.remove('d-none');
            }
        }
        
        // Filter button click handler
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Set active filter
                activeFilter = button.getAttribute('data-filter');
                
                // Apply filters
                applyFilters();
            });
        });
        
        // Search input handler
        searchInput.addEventListener('input', () => {
            searchTerm = searchInput.value.trim();
            applyFilters();
        });
        
        // Reset filters handler
        resetFiltersBtn.addEventListener('click', () => {
            // Reset search
            searchInput.value = '';
            searchTerm = '';
            
            // Reset filter buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelector('.tfg-filter-btn[data-filter="all"]').classList.add('active');
            activeFilter = 'all';
            
            // Apply filters
            applyFilters();
        });
        
        // Initialize
        applyFilters();
    });
</script>
@endsection