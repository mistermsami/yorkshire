@extends('layout.dashboardlayout')
@php
    $pageName = 'Consultation Booking';
    $pageTitle = 'Consultation Booking';
@endphp

@section('pageName')
    {{ $pageName }}
@endsection
@section('pageTitle')
    {{ $pageTitle }}
@endsection
@section('headSection')
@endsection

@section('MainSection')
    <div class="row">
        <div class="col-md-12">
            @livewire('ConstAppointmentsView')
        </div> <!-- /.col -->
    </div>
@endsection
