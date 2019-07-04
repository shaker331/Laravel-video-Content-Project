@extends('back-end.layout.app')
@section('title')
Admin|Home Page

@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
@component('back-end.layout.header')

@slot('nav_title')
Home Page
@endslot
@endcomponent
@include('back-end.dashboard')
@endsection
@push('js')
    <script>
    
    </script>
@endpush