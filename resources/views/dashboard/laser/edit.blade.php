@extends('layout.dashboardlayout')
@php
    $pageName = 'Edit Laser Appointment';
    $pageTitle = 'Edit Laser Appointment';
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
            @livewire('EditLaserAppintmentDetail', ['appointmentId' => $appointment->id])
        </div> <!-- /.col -->
    </div>
@endsection
