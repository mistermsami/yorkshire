@extends('layout.dashboardlayout')
@php
    $pageName = 'Contact List';
    $pageTitle = 'Contact List';
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
            @livewire('contact-list-view')
        </div> <!-- /.col -->
    </div>
@endsection
