@extends('layout.dashboardlayout')
@php
    $pageName = 'Laser Appointments';
    $pageTitle = 'Laser Appointments';
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
            @livewire('laser-appointments-view')
        </div> <!-- /.col -->
    </div>
@endsection
