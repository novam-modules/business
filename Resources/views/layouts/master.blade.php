@extends('layouts.admin')
@section('head')
    <title>Business {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/business.css') }}">
@endsection
@section('layout')
<div id="business" class="business">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/business.js') }}"></script>
@endsection
