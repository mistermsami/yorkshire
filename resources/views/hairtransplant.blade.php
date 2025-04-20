@php
    $pagename = 'Hair Transplant';
    // $title = 'Home';
@endphp
@extends('layout.layout')

@section('title')
    {{ $pagename }}
@endsection

@section('head')
    {{-- for meta tags (SEO)
    and for custom css --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        
        .content {
          position: relative;
          z-index: 2;
          text-align: center;
          padding: 20px;
        }
    
        .content h1 {
          font-size: 2.5rem;
          font-weight: bold;
          color: #1e3a8a;
          animation: fadeIn 1.5s ease-in-out;
        }
    
        .content p {
          font-size: 1.1rem;
          color: #334155;
          animation: fadeIn 2.5s ease-in-out;
          margin-top: 10px;
        }
    
        .notify-btn {
          background-color: #3b82f6;
          color: white;
          border: none;
          animation: fadeIn 3s ease-in-out;
        }
    
        /* Responsive Tweaks */
        @media (max-width: 576px) {
          .content h1 {
            font-size: 1.8rem;
          }
    
          .content p {
            font-size: 1rem;
          }
    
         
        }
      </style>
    {{-- <style>
        .aboutmain_sec {
            min-height: 100vh;
            padding: 60px 0;
            background: linear-gradient(135deg, #f9f9f9, #e2f0fe);
        }

        .aboutmain_sec h2 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px !important;
        }

        .aboutmain_sec_img {
            border-radius: 15px;
            width: 100%;
            height: calc(100vh - 130px);
        }

        .aboutmain_sec .aboutsideimg {
            height: 500px;
        }

        .aboutsecond_sec {
            padding: 80px 0 40px 0;
            background-color: #fff;
        }

        /* .aboutsecond_sec .profile-widget{
                                                background-color: #f3f1ee;
                                                border-radius: 20px;
                                                padding: 20px;
                                            } */
        .aboutsecond_sec .aboutsideimg img {
            height: 500px;
            border-radius: 25px !important;
        }

        .aboutsecond_sec .section-header {
            margin-bottom: 30px !important;
        }

        .aboutthird_sec {
            padding: 80px 0 40px 0;
        }

        .aboutthird_sec .profile-widget {
            border-radius: 20px;
        }

        .aboutthird_sec .aboutsideimg img {
            height: 500px;
            border-radius: 25px !important;
        }

        .aboutthird_sec .section-header {
            margin-bottom: 30px !important;
        }

        .aboutmain_sec .about-content .booking {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            margin-top: 40px;
            border-radius: 3px;
            transition: 0.3s;
        }

        .results .card {
            border: none;
        }

        .results .card-header {
            border: none;
        }

        .results .card-header img {
            width: 100%;
            height: 250px;
        }

        .results .card-body {
            margin-top: 10px;
            border-radius: 10px;
            padding: 20px;
            background-color: #f3f1ee;
        }

        .resultsbtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
        }

        .carousel-control-prev-icon {
            background-image: none;
            width: 3rem;
            height: 3rem;
            background-color: #1977cc;
            mask-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 11-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z'/%3E%3C/svg%3E");
            mask-size: cover;
        }

        .carousel-control-next-icon {
            background-image: none;
            width: 3rem;
            height: 3rem;
            background-color: #1977cc;
            mask-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M4.646 1.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 11-.708-.708L10.293 8 4.646 2.354a.5.5 0 010-.708z'/%3E%3C/svg%3E");
            mask-size: cover;
        }

        .afterresult .card {
            background-color: #1977cc;
            margin: 5px;
            color: #fff;
            padding: 20px;
        }

        .afterresult .card h4 {
            color: #fff;
        }

        .experts {
            margin-top: 50px;
            background-color: #f3f1ee;
        }

        .experts .docbtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
            transition: 0.3s;
            margin-bottom: 20px;

        }

        .experts .doc_details img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 25px;
        }

        .experts .card_centered_content {
            display: flex;
            align-items: center;
            justify-content: start;
            background-color: #f6faf5;
            border: none;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .experts .icon {
            font-size: 24px;
            color: #1977cc;
            margin-right: 10px;
        }

        .experts .text {
            display: flex;
            flex-direction: column;
        }

        .experts .title {
            font-weight: 700;
            color: #1977cc;
          
            margin-bottom: 2px;
        }

        .exploreclinic {
            background-color: #f1f7fc;
        }

        .exploreclinic .carousel-indicators {
            position: relative;
            /* color: #1977cc; */
        }

        .exploreclinic .carousel-indicators button {
            background-color: #1977cc;
            border: none;
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }

        .exploreclinic .carousel-item .card {
            border: none;
        }

        .exploreclinic .carousel-item .card img {
            height: 500px;
            border-radius: 20px;
            object-fit: cover;
        }

        .howitworks .card {
            border: none;
            border-radius: 20px;
        }

        .howitworks .card-header {
            border-radius: 20px 20px 0 0;
            border: none;
        }

        .howitworks .card-header img {
            height: 300px;
            object-fit: cover;
        }

        .howitworks .card-body {
            background-color: #e9e9e9;
            /* color: #f1f7fc; */
            border-radius: 0 0 20px 20px;
            border: none;
        }

        .howitworks .card-body .card-title {
            font-weight: 700;
        }

        /* .hairTfaq .hidden-content {
                                        display: none;

                                    } */
        .hairTfaq .details p {
            transition: all 0.5s ease-in-out;
        }

        .hairTfaq .hidden-content {
            display: none;
        }

        .hairTfaq .seemorebtn {
            color: #fff;
            background: #1977cc;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 3px;
        }

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
            border-radius: 15px;
            color: #f1f7f7;
        }

        .transpricingBlue_card h3 {
            color: #f1f7f7;
        }

        @media only screen and (max-width: 1399px) and (min-width: 769px) {
            .afterresult .card {
                height: 280px !important;
            }

            .howitworks .card .card-body {
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
    </style> --}}
@endsection

@section('maincontent')

<main style="margin: 0; font-family: 'Segoe UI', sans-serif; background: linear-gradient(135deg, #cfe8ff, #e0f2fe); color: #0f172a; overflow: hidden;">

        
    <!-- Page Content -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="content">
        <h1>HairTransplant Service is Coming Soon!</h1>
        <p>We're preparing something special at Yorkshire hair and skin solutions Clinic. Stay tuned for the launch!</p>
        <button class="btn btn-lg mt-4 notify-btn" onclick="alert('We’ll notify you when it’s live!')">
          Notify Me
        </button>
        <p class="mt-5 text-muted" style="font-size: 0.9rem;">&copy; 2025 Yorkshire hair and skin solutions. All rights reserved.</p>
      </div>
    </div>
  
  </main>
     

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const buttons = document.querySelectorAll('.docbtn');
    const allDoctors = document.querySelectorAll('.doc_details');
    
    // Hide all doctors except first by default
    allDoctors.forEach((doctor, index) => {
        doctor.style.display = index === 0 ? 'flex' : 'none';
    });

    // Button click handler
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Add active to clicked button
            this.classList.add('active');
            
            // Hide all doctors
            allDoctors.forEach(doctor => {
                doctor.style.display = 'none';
            });
            
            // Show selected doctor
            const targetClass = this.getAttribute('data-filter').replace('.', '');
            const targetDoctor = document.querySelector(`.${targetClass}`).closest('.doc_details');
            if (targetDoctor) {
                targetDoctor.style.display = 'flex'; // Use flex to maintain layout
            }
        });
    });
});
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
        
    </script> --}}
@endsection
