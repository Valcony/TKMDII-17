<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | TKMDII XVII</title>
    <meta name="description"
        content="Temu Karya Mahasiswa Desain Interior Indonesia XVII @ Petra Christian University (PCU)">
    <meta name="keywords"
        content="TKMDII, Desain Interior, Temu Karya Mahasiswa Desain Interior Indonesia, TKMDII XVII, TKMDII 17">
    <link rel="canonical" href="https://tkmdii.petra.ac.id/">

    <meta property="og:title" content="TKMDII XVII @ Petra Christian University">
    <meta property="og:description"
        content="Temu Karya Mahasiswa Desain Interior Indonesia XVII @ Petra Christian University (PCU)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tkmdii.petra.ac.id/">
    <meta property="og:site_name" content="TKMDII XVII">
    



    {{-- Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" />


    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    {{-- GSAP --}}
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>

    {{-- Swiper JS --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> --}}

    <style>
        :root {
            --blue: #4ca6f8;
            --yellow: #efe650;
            --pink: #e74893;
            --green: #4ba663;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            background-color: #dcd6ba;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--blue);
            /* border-radius: 5px; */
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--pink);
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }


        /* Effect supaya texture jadi overlay */
        /* .overlay1 {
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
        } */

        .container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* display: flex; */
            justify-items: center;
            justify-content: center;
            align-items: center;
            overflow-x: hidden;
            overflow-y: scroll;
            background: #f4f4e7;
        }

        @font-face {
            font-family: 'Soon-Poster';
            src: url('{{ asset('font/1797/1797-MEDIUM.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        .font-primary {
            font-family: 'Soon-Poster', sans-serif;
        }

        .container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* display: flex; */
            justify-items: center;
            justify-content: center;
            align-items: center;
            overflow-x: hidden;
            overflow-y: scroll;
            background: #f4f4e7;
        }

        @font-face {
            font-family: 'Soon-Poster';
            src: url('{{ asset('font/1797/1797-MEDIUM.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        .font-primary {
            font-family: 'Soon-Poster', sans-serif;
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
    <div class="container">
        <!-- Include navbar disini -->
        @yield('content')
    </div>

    <!-- Include footer disini -->
</body>
@yield('script')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "TKMDII XVII @ Petra Christian University",
  "description": "Temu Karya Mahasiswa Desain Interior Indonesia XVII @ Petra Christian University (PCU)",
  "url": "https://tkmdii.petra.ac.id/",
  "startDate": "2025-11-10", 
  "endDate": "2025-11-10",    
  "location": {
    "@type": "Place",
    "name": "Petra Christian University",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Siwalankerto 121-131",
      "addressLocality": "Surabaya",
      "addressRegion": "Jawa Timur",
      "postalCode": "60236",
      "addressCountry": "ID"
    }
  },
  "organizer": {
    "@type": "Organization",
    "name": "Petra Christian University",
    "url": "https://www.petra.ac.id"
  }
}
</script>

</html>