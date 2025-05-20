<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | TKMDII 17</title>
    {{-- Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" />

    {{-- swiper js --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> --}}

    {{-- GSAP --}}
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>

    <style>
        /* Effect supaya texture jadi overlay */
        .overlay1 {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-repeat: repeat;
            background-image: url({{ asset('overlay/paper.png') }});
            mix-blend-mode: multiply;
            pointer-events: none;
            z-index: 99999;
            opacity: 50%;
        }
    </style>
    @yield('head')

</head>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

<body class="bg-[#f4f4e7]">
    @include('partials.loader')
    <div class="container flex-col overflow-hidden fixed z-0 w-full h-auto">
        <!-- Include navbar disini -->

        @yield('content')
    </div>

    <!-- Include footer disini -->
</body>
@yield('script')

</html>