@extends('layout.dashboardlayout')
@php
    $pageName = 'PRP Appointment';
    $pageTitle = 'PRP Appointment';
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
            @livewire('PrpAppintmentDetail', ['appointmentId' => $appointment->id])
        </div> <!-- /.col -->
    </div>
@endsection
