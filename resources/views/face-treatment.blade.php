@php
    $pagename = 'Face Treatment';
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
@endsection

@section('maincontent')
    
<main style="margin: 0; font-family: 'Segoe UI', sans-serif; background: linear-gradient(135deg, #cfe8ff, #e0f2fe); color: #0f172a; overflow: hidden;">

        
    <!-- Page Content -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="content">
        <h1>Face Treatment Services Available at Our Clinic</h1>
        <p>While we're still working on our online information, our expert Face Treatment services are currently available at Yorkshire Hair and Skin Solutions Clinic. Visit us or call to book your consultation today!</p>
        <button class="btn btn-lg mt-4 notify-btn" onclick="alert('We’ll notify you when it’s live!')">
          Notify Me
        </button>
        <p class="mt-5 text-muted" style="font-size: 0.9rem;">&copy; 2025 Yorkshire hair and skin solutions. All rights reserved.</p>
      </div>
    </div>
  
  </main>
@endsection
