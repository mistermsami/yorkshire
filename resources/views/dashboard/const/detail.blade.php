@extends('layout.dashboardlayout')
@php
    $pageName = 'Consultation Details';
    $pageTitle = 'Consultation Details';
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
            @livewire('ConstAppointmentDetail', ['appointmentId' => $appointment->id])
        </div> <!-- /.col -->
    </div>
@endsection
