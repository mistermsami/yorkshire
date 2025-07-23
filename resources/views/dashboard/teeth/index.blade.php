@extends('layout.dashboardlayout')
@php
    $pageName = 'Teeth Appointments';
    $pageTitle = 'Teeth Appointments';
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
            @livewire('teeth-appointments-view')
        </div> <!-- /.col -->
    </div>
@endsection
