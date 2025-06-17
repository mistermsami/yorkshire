@extends('layout.dashboardlayout')
@php
    $pageName = 'Laser Appointment';
    $pageTitle = 'Laser Appointment';
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
            @livewire('LaserAppintmentDetail', ['appointmentId' => $appointment->id])
        </div> <!-- /.col -->
    </div>
@endsection
