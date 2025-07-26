@extends('base')
@section('head')
<!-- <link rel="preload" as="image" href="{{ asset('events/Kbb1.webp') }}">
<link rel="preload" as="image" href="{{ asset('events/Kbd1.webp') }}">
<link rel="preload" as="image" href="{{ asset('events/Kbs1.webp') }}"> -->
@endsection
@section('content')
    

    {{-- Section About --}}
    <section class="w-full">
        @include('partials.about')
    </section>

    {{-- Section Events --}}
    <!-- <section id="events" class="w-full"> -->
        @include('partials.events')
    <!-- </section> -->

    {{-- Section Timeline --}}
    <section id="timeline" class="w-full">
        @include('partials.timeline')
    </section>

    {{-- Section Merch --}}
    <section id="merch" class="w-full">
        @include('partials.merch')
    </section>
@endsection

