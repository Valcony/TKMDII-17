@extends('base')
@section('head')
<link rel="preload" as="image" href="{{ asset('events/Kbb1.webp') }}">
<link rel="preload" as="image" href="{{ asset('events/Kbd1.webp') }}">
<link rel="preload" as="image" href="{{ asset('events/Kbs1.webp') }}">
@endsection
@section('content')
    <!-- Include tiap part section homepage disini -->
    @include('partials.events')
    @include('partials.timeline')
    @include('partials.merch')

@endsection

@section('head')

@endsection