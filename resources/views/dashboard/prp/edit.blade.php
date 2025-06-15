@extends('layout.dashboardlayout')
@php
    $pageName = 'Edit PRP Appointment';
    $pageTitle = 'Edit PRP Appointment';
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
            @livewire('EditPrpAppintmentDetail', ['appointmentId' => $appointment->id])
        </div> <!-- /.col -->
    </div>
@endsection
