@extends('layout.dashboardlayout')
@php
    $pageName = 'Contact Detail';
    $pageTitle = 'Contact Detail';
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
            @livewire('view-contact-detail', ['contactId' => $contactId])
        </div> <!-- /.col -->
    </div>
@endsection
