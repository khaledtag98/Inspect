@extends('layout.layout')

@section('title', 'dashboard')

@section('customCSS')
<link rel="stylesheet" href="{{ asset('styles') }}/dashboard.css">
@endsection

@section('content')
<section class="hero_section">
    <h1>hello from dashboard</h1>
</section>
@endsection

@section('customJS')
@endsection
