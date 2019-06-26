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
@endsection
@push('js')
    <script>
    
    </script>
@endpush