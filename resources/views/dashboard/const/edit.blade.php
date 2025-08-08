@extends('layout.dashboardlayout')
@php
    $pageName = 'Edit Hydra Appointment';
    $pageTitle = 'Edit Hydra Appointment';
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
            @livewire('EditConstDetail', ['appointmentId' => $appointment->id])
        </div> <!-- /.col -->
    </div>
@endsection
