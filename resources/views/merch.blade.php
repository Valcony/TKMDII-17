@extends('base')

@section('head')
    <style>
        /* Price tag animations */
        .price-tag {
            opacity: 0;
            transform: translateY(-5px);
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .price-tag.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        /* Product hover effects */
        .product-item {
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .product-item:hover {
            transform: scale(1.02);
        }

        /* Wind sway animation */
        @keyframes windSway {

            0%,
            100% {
                transform: translateX(0) rotate(0deg);
            }

            25% {
                transform: translateX(2px) rotate(1deg);
            }

            75% {
                transform: translateX(-2px) rotate(-1deg);
            }
        }

        @keyframes gentleFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-2px);
            }
        }

        .animate-wind {
            animation: windSway 3s ease-in-out infinite;
        }

        .animate-float {
            animation: gentleFloat 4s ease-in-out infinite;
        }

        /* Product idle animations */
        .product-idle {
            animation: gentleFloat 6s ease-in-out infinite;
        }

        /* Specific delays for natural effect */
        .product-item:nth-child(1) {
            animation-delay: 0s;
        }

        .product-item:nth-child(2) {
            animation-delay: 1s;
        }

        .product-item:nth-child(3) {
            animation-delay: 2s;
        }

        .product-item:nth-child(4) {
            animation-delay: 3s;
        }

        /* Active state for clicked items */
        .product-active {
            transform: scale(1.05);
        }

        .product-active .price-tag {
            opacity: 1;
            transform: translateY(0);
            animation: windSway 2s ease-in-out infinite;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
@endsection

@section('content')
    <div
        class="w-full min-h-screen bg-[url('{{ asset('overlay/fiber.png') }}')] flex items-center justify-center p-2 pb-4 pt-2 sm:pb-6 sm:pt-3 lg:p-8">
        <div class="w-full h-full relative z-10 flex flex-col justify-center items-center">
            <h1
                class="font-primary skew-x-[-12deg] text-[var(--pink)] leading-none
               text-[calc(clamp(2rem,8vw,10rem)*2.5)]">
                TKMDII
            </h1>
            <h1
                class="font-primary mt-[-10%] text-[var(--blue)] mix-blend-multiply leading-none
               text-[calc(clamp(2rem,8vw,10rem)*2.5)]">
                OFFICIAL
            </h1>
            <div class="relative w-full max-w-6xl mb-[5%]">
                <img src="{{ asset('assets/merchs/market.png') }}" class="w-full h-auto object-contain" alt="Market">

                {{-- Books --}}
                <div id="books" class="absolute w-[37.5%] h-[18%] flex justify-between items-end"
                    style="top: 24.97%; left: 10%;">
                    <div class="flex w-[50%] h-full justify-start items-center">
                        <div class="w-[55%] h-full flex z-[5] justify-center items-center product-item product-idle"
                            data-product="book2">
                            <img src="{{ asset('assets/merchs/book2.png') }}" style="box-shadow: -1.5px 0 2px #513724;"
                                class="w-full h-full z-[5] object-fill" alt="Sketchbook1">
                            <div
                                class="absolute w-1/2 bottom-[-77.5%] z-[4] flex justify-center items-center h-full price-tag">
                                <img src="{{ asset('assets/merchs/priceTag/book2.png') }}"
                                    style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                    alt="Book2 Price">
                            </div>
                        </div>
                        <div class="w-[55%] ml-[-17.5%] h-full flex z-[6] justify-center items-center product-item product-idle"
                            data-product="book1">
                            <img src="{{ asset('assets/merchs/book1.png') }}"
                                style="filter: drop-shadow(-2px 0 4px #231810);" class="w-full z-[6] h-full object-fill"
                                alt="Sketchbook2">
                            <div
                                class="absolute w-1/2 bottom-[-77.5%] z-[5] flex justify-center items-center h-full price-tag">
                                <img src="{{ asset('assets/merchs/priceTag/book1.png') }}"
                                    style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                    alt="Book1 Price">
                            </div>
                        </div>
                    </div>
                    <div class="flex w-[50%] mr-[1%] h-full justify-end items-center">
                        <div class="w-[50%] h-full z-[6] flex justify-center items-center product-item product-idle"
                            data-product="sticker1">
                            <img src="{{ asset('assets/merchs/sticker1.jpg') }}" style="box-shadow: -1.5px 0 0px #7F5537;"
                                class="w-full h-full z-[6] object-fill" alt="Sticker1">
                            <div
                                class="absolute w-1/2 bottom-[-77.5%] z-[5] mr-[10%] flex justify-center items-center h-full price-tag">
                                <img src="{{ asset('assets/merchs/priceTag/sticker1.png') }}"
                                    style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                    alt="Sticker1 Price">
                            </div>
                        </div>
                        <div class="w-[55%] ml-[-21%] z-[7] h-full flex justify-center items-center product-item product-idle"
                            data-product="sticker2">
                            <img src="{{ asset('assets/merchs/sticker2.jpg') }}" style="box-shadow: -1.5px 0 1px #7F5537;"
                                class="w-full z-[6] h-full object-fill" alt="Sticker2">
                            <div
                                class="absolute w-1/2 bottom-[-77.5%] z-[5] flex justify-center items-center h-full price-tag">
                                <img src="{{ asset('assets/merchs/priceTag/sticker2.png') }}"
                                    style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                    alt="Sticker2 Price">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pins --}}
                <div id="pins" class="absolute w-[15%] h-[7.5%] flex justify-center items-end"
                    style="top: 24.28%; right: 32.3%;">
                    <div class="w-[49%] h-full z-[8] flex justify-center items-center product-item product-idle"
                        data-product="pin1">
                        <img src="{{ asset('assets/merchs/pin1.png') }}"
                            style="filter: drop-shadow(-5px 0.5px 0.5px #7F5537);"
                            class="w-full h-full z-[8] object-contain" alt="Pin1">
                        <div class="absolute w-1/2 bottom-[-100%] z-[7] flex justify-center items-center h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/pin1.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                alt="Pin1 Price">
                        </div>
                    </div>
                    <div class="w-[49%] ml-[-6.85%] z-[7] h-full flex justify-center items-center product-item product-idle"
                        data-product="pin2">
                        <img src="{{ asset('assets/merchs/pin2.png') }}"
                            style="filter: drop-shadow(-5px 0.5px 0.5px #7F5537);"
                            class="w-full h-full z-[7] object-contain" alt="Pin2">
                        <div class="absolute w-1/2 bottom-[-100%] z-[6] flex justify-center items-center h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/pin2.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                alt="Pin2 Price">
                        </div>
                    </div>
                </div>

                {{-- Enamels --}}
                <div id="enamels" class="absolute w-[21%] h-[6.25%] flex justify-center items-end"
                    style="top: 36.5%; right: 25.55%;">
                    <div class="w-[24.5%] h-full z-[6] flex justify-center items-end product-item product-idle"
                        data-product="enamel1">
                        <img src="{{ asset('assets/merchs/enamel1.png') }}"
                            style="filter: drop-shadow(-1.75px 0.5px 0.5px #000);"
                            class="w-full h-full z-[6] object-contain" alt="Enamel1">
                        <div class="absolute w-1/2 bottom-[-95%] z-[5] flex justify-center items-center h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/enamel1.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                alt="Enamel1 Price">
                        </div>
                    </div>
                    <div class="w-[24.5%] h-full z-[6] flex justify-center items-end product-item product-idle"
                        data-product="enamel2">
                        <img src="{{ asset('assets/merchs/enamel2.png') }}"
                            style="filter: drop-shadow(-1.75px 0.5px 0.5px #000);"
                            class="w-full h-full z-[6] object-contain" alt="Enamel2">
                        <div class="absolute w-1/2 bottom-[-95%] z-[5] flex justify-center items-center h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/enamel2.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                alt="Enamel2 Price">
                        </div>
                    </div>
                    <div class="w-[24.5%] h-full z-[6] flex justify-center items-end product-item product-idle"
                        data-product="enamel3">
                        <img src="{{ asset('assets/merchs/enamel3.png') }}"
                            style="filter: drop-shadow(-1.75px 0.5px 0.5px #000);"
                            class="w-full h-full z-[6] object-contain" alt="Enamel3">
                        <div class="absolute w-1/2 bottom-[-95%] z-[5] flex justify-center items-center h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/enamel3.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                alt="Enamel3 Price">
                        </div>
                    </div>
                    <div class="w-[24.5%] h-full z-[6] flex justify-center items-end product-item product-idle"
                        data-product="enamel4">
                        <img src="{{ asset('assets/merchs/enamel4.png') }}"
                            style="filter: drop-shadow(-1.75px 0.5px 0.5px #000);"
                            class="w-full h-full z-[6] object-contain" alt="Enamel4">
                        <div class="absolute w-1/2 bottom-[-95%] z-[5] flex justify-center items-center h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/enamel4.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/1 h-auto object-contain"
                                alt="Enamel4 Price">
                        </div>
                    </div>
                </div>

                {{-- Keys --}}
                <div id="keys" class="absolute w-[15%] h-[8%] flex justify-center items-end"
                    style="top: 28.65%; right: 10.925%;">
                    <div class="w-[55%] absolute right-[27.865%] h-full z-[6] flex justify-center items-end product-item product-idle"
                        data-product="key1">
                        <img src="{{ asset('assets/merchs/key1.png') }}"
                            style="filter: drop-shadow(-0.25px 0.25px 0.25px #000);"
                            class="w-full z-[6] h-full object-contain" alt="Key1">
                        <div
                            class="absolute w-[100%] bottom-[-95%] z-[5] flex justify-center items-start h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/key1.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/4 h-auto object-contain"
                                alt="Key1 Price">
                        </div>
                    </div>
                    <div class="w-[55%] absolute top-[7%] right-[-3.25%] h-full z-[5] flex justify-center items-end product-item product-idle"
                        data-product="key2">
                        <img src="{{ asset('assets/merchs/key2.png') }}"
                            style="filter: drop-shadow(-0.25px 0.25px 0.25px #000);"
                            class="w-full rotate-[20deg] z-[5] absolute h-full object-contain" alt="Key2">
                        <div
                            class="absolute w-[100%] bottom-[-95%] z-[4] flex justify-center items-start h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/key2.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/4 h-auto object-contain"
                                alt="Key2 Price">
                        </div>
                    </div>
                    <div class="w-[35%] absolute right-[-13.5%] h-full z-[7] flex justify-center items-end product-item product-idle"
                        data-product="key3">
                        <img src="{{ asset('assets/merchs/key3.png') }}"
                            style="filter: drop-shadow(-0.25px 0.25px 0.25px #000);"
                            class="w-full h-full z-[7] object-contain object-left" alt="Key3">
                        <div
                            class="absolute w-[125%] left-[18%] bottom-[-95%] z-[6] flex justify-start items-start h-full price-tag">
                            <img src="{{ asset('assets/merchs/priceTag/key3.png') }}"
                                style="filter: drop-shadow(-1.5px 0 2px #513724);" class="w-1/4 h-auto object-contain"
                                alt="Key3 Price">
                        </div>
                    </div>
                </div>

                {{-- Shirts --}}
                <div id="shirts" class="absolute w-[55%] h-[50%] flex justify-start items-end"
                    style="top: 48.25%; left: 10%;">
                    <div class="w-[50%] h-full z-[4] relative flex flex-col justify-center items-end product-item product-idle"
                        data-product="shirt1">
                        <img src="{{ asset('assets/merchs/shirt1.png') }}"
                            style="filter: drop-shadow(-0.2em 0.25px 0.25px #7F5537);"
                            class="w-full h-full object-contain object-top" alt="Shirt1">
                        <img src="{{ asset('assets/merchs/priceTag/shirt1.png') }}"
                            style="filter: drop-shadow(-1.5px 0 2px #513724);"
                            class="w-1/4 h-auto absolute top-0 left-0 object-contain price-tag" alt="Shirt1 Price">
                    </div>
                    <div class="w-[50%] ml-[-25%] h-full z-[3] relative flex flex-col justify-center items-end product-item product-idle"
                        data-product="shirt2">
                        <img src="{{ asset('assets/merchs/shirt2.png') }}"
                            style="filter: drop-shadow(-0.8em 0.25px 0.25px #7F5537);"
                            class="w-full h-full ml-[-15%] object-contain object-top" alt="Shirt2">
                        <img src="{{ asset('assets/merchs/priceTag/shirt2.png') }}"
                            style="filter: drop-shadow(-1.5px 0 2px #513724);"
                            class="w-1/4 h-auto absolute top-0 right-[10%] object-contain price-tag" alt="Shirt2 Price">
                    </div>
                    <div class="w-[50%] absolute right-[2.5%] h-full z-[2] flex flex-col justify-center items-end product-item product-idle"
                        data-product="shirt3">
                        <img src="{{ asset('assets/merchs/shirt3.png') }}"
                            style="filter: drop-shadow(-0.8em 0.25px 0.25px #7F5537);"
                            class="w-full h-full object-contain object-top" alt="Shirt3">
                        <img src="{{ asset('assets/merchs/priceTag/shirt3.png') }}"
                            style="filter: drop-shadow(-1.5px 0 2px #513724);"
                            class="w-1/4 h-auto absolute top-0 right-[10%] object-contain price-tag" alt="Shirt3 Price">
                    </div>
                </div>

                {{-- Bags --}}
                <div id="bags" class="absolute w-[33%] h-[50%] flex justify-start items-end"
                    style="top: 47.225%; right: -0.23%;">
                    {{-- shadow Bag1 --}}
                    <div class="w-[52.5%] top-0 left-[-3.5%] absolute h-full z-[2] flex justify-center items-center bg-[#7F5537]"
                        style="
                        -webkit-mask: url('{{ asset('assets/merchs/bag11.png') }}') no-repeat top / contain;
                        mask: url('{{ asset('assets/merchs/bag11.png') }}') no-repeat top / contain;">
                    </div>
                    <div class="w-[52.5%] h-full z-[4] flex justify-center items-end product-item product-idle"
                        data-product="bag1">
                        <img src="{{ asset('assets/merchs/bag11.png') }}" class="w-full h-full object-contain object-top"
                            alt="Bag1">
                        <img src="{{ asset('assets/merchs/priceTag/bag1.png') }}"
                            style="filter: drop-shadow(-1.5px 0 2px #513724);"
                            class="w-[32.5%] h-auto absolute top-0 left-0 object-contain price-tag" alt="Bag1 Price">
                    </div>
                    <div class="w-[47.5%] absolute right-[30.5%] h-full z-[3] flex justify-center items-end product-item product-idle"
                        data-product="bag2">
                        <img src="{{ asset('assets/merchs/bag21.png') }}" class="w-full h-full object-contain object-top"
                            alt="Bag2">
                        <img src="{{ asset('assets/merchs/priceTag/bag2.png') }}"
                            style="filter: drop-shadow(-1.5px 0 2px #513724);"
                            class="w-[35%] h-auto absolute top-0 right-[-3%] object-contain price-tag" alt="Bag2 Price">
                    </div>
                    {{-- shadow Bag2 --}}
                    <div class="w-[47.5%] top-0 left-[17.5%] absolute h-full z-[2] flex justify-center items-center bg-[#7F5537]"
                        style="
                        -webkit-mask: url('{{ asset('assets/merchs/bag21.png') }}') no-repeat top / contain;
                        mask: url('{{ asset('assets/merchs/bag21.png') }}') no-repeat top / contain;">
                    </div>
                </div>
            </div>

            <div class="absolute bottom-[-7.8%] right-[-0.8%] z-10 w-[22%] h-[26.5%] flex justify-center items-center">
                {{-- Replace the existing buyHere button section with this more responsive version --}}

                <div
                    class="absolute bottom-0 right-0 z-10 w-full max-w-[300px] sm:max-w-[350px] lg:max-w-[400px] 
            h-auto flex justify-end items-end p-2 sm:p-4">

                    {{-- Buy Here Button - More Responsive Version --}}
                    <button id="buyHere" onclick="window.location.href = 'https://forms.gle/Y388qsN1KUVPxA1s6'"
                        class="relative z-[9] mb-4 mr-2 sm:mb-6 sm:mr-4 lg:mb-8 lg:mr-6
               cursor-pointer flex justify-center items-center 
               font-secondary font-bold uppercase 
               text-[#fff]
               px-3 sm:px-4 sm:py-2 lg:px-6 lg:py-2.5
               transition-all duration-300 ease-out 
               text-sm sm:text-base lg:text-lg xl:text-xl
               focus:outline-none
               min-w-[80px] sm:min-w-[100px] lg:min-w-[120px]
               whitespace-nowrap">
                        <span class="relative z-10">BUY HERE</span>
                    </button>

                    <img src="{{ asset('assets/merchs/priceList.png') }}"
                        class="w-full max-w-[200px] sm:max-w-[250px] lg:max-w-[300px] 
                h-auto object-contain"
                        alt="Products Price List">
                </div>

                <style>
                    #buyHere {
                        text-shadow: 1px 1px 0 var(--pink), 2px 2px 0 var(--pink);
                        background: var(--green);
                    }

                    @media (max-width: 480px) {
                        #buyHere {
                            font-size: 0.75rem;
                            padding: 6px 12px;
                            text-shadow: 1px 1px 0 var(--pink);
                        }
                    }

                    @media (min-width: 481px) and (max-width: 768px) {
                        #buyHere {
                            font-size: 0.875rem;
                            padding: 8px 16px;
                            text-shadow: 1.5px 1.5px 0 var(--pink);
                        }
                    }

                    @media (min-width: 769px) and (max-width: 1024px) {
                        #buyHere {
                            font-size: 1rem;
                            padding: 10px 20px;
                            text-shadow: 2px 2px 0 var(--pink);
                        }
                    }

                    @media (min-width: 1025px) {
                        #buyHere {
                            font-size: 1.125rem;
                            padding: 12px 24px;
                            text-shadow: 2px 2px 0 var(--pink);
                        }
                    }

                    @media (hover: hover) {
                        #buyHere:hover {
                            transform: translateY(-2px);
                            box-shadow: -3px -3px 0px #4ca6f8, -6px -6px 0px rgba(76, 166, 248, 0.3);
                            color: var(--pink);
                            text-shadow: 2px 2px 0 var(--yellow);
                            padding: 8px 28px;
                        }

                        @media (min-width: 769px) {
                            #buyHere:hover {
                                padding: 10px 25px;
                                box-shadow: -4px -4px 0px #4ca6f8, -8px -8px 0px rgba(76, 166, 248, 0.2);
                            }
                        }

                        @media (min-width: 1025px) {
                            #buyHere:hover {
                                padding: 12px 28px;
                                box-shadow: -5px -5px 0px #4ca6f8, -10px -10px 0px rgba(76, 166, 248, 0.1);
                            }
                        }
                    }

                    @media (hover: none) {
                        #buyHere:active {
                            transform: scale(0.95) translateY(1px);
                            box-shadow: -2px -2px 0px #4ca6f8;
                        }
                    }

                    #buyHere:focus {
                        outline: none;
                        box-shadow: 0 0 0 2px #efe650, 0 0 0 4px #4ca6f8;
                    }

                    @media (min-width: 769px) {
                        #buyHere:focus {
                            box-shadow: 0 0 0 3px #efe650, 0 0 0 6px #4ca6f8;
                        }
                    }

                    #buyHere:active {
                        transform: scale(0.95) translateY(2px);
                        box-shadow: -1px -1px 0px #4ca6f8;
                    }

                    @media (min-width: 769px) {
                        #buyHere:active {
                            box-shadow: -2px -2px 0px #4ca6f8;
                        }
                    }

                    @media (-webkit-min-device-pixel-ratio: 2),
                    (min-resolution: 192dpi) {
                        #buyHere {
                            text-shadow: 1px 1px 0 var(--pink), 2px 2px 0 var(--pink);
                        }
                    }

                    @media (orientation: landscape) and (max-height: 600px) {
                        #buyHere {
                            font-size: 0.875rem;
                            padding: 6px 16px;
                        }
                    }

                    @media (max-width: 320px) {
                        #buyHere {
                            font-size: 0.625rem;
                            padding: 4px 8px;
                            min-width: 60px;
                        }
                    }

                    @media (min-width: 1440px) {
                        #buyHere {
                            font-size: 1.25rem;
                            padding: 14px 32px;
                        }
                    }
                </style>

                <img src="{{ asset('assets/merchs/priceList.png') }}" class="w-full z-[10] h-full object-fill"
                    alt="Products Price List">
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productItems = document.querySelectorAll('.product-item');
            let activeProducts = new Set();

            productItems.forEach((item, index) => {
                const priceTag = item.querySelector('.price-tag');
                const productName = item.dataset.product;

                let hoverTl = null;
                let activeTl = null;

                item.addEventListener('mouseenter', () => {
                    if (!activeProducts.has(productName)) {
                        if (hoverTl) hoverTl.kill();

                        hoverTl = gsap.timeline();

                        hoverTl.to(item, {
                            scale: 1.03,
                            duration: 0.3,
                            ease: "power2.out"
                        }, 0);

                        hoverTl.fromTo(priceTag, {
                            opacity: 0,
                            y: -8,
                            scale: 0.8
                        }, {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 0.4,
                            ease: "back.out(1.7)"
                        }, 0.1);

                        hoverTl.to(priceTag, {
                            x: 3,
                            rotation: 2,
                            duration: 2,
                            ease: "sine.inOut",
                            yoyo: true,
                            repeat: -1
                        }, 0.5);
                    }
                });

                item.addEventListener('mouseleave', () => {
                    if (!activeProducts.has(productName)) {
                        if (hoverTl) hoverTl.kill();

                        hoverTl = gsap.timeline();

                        hoverTl.to(item, {
                            scale: 1,
                            duration: 0.3,
                            ease: "power2.out"
                        }, 0);

                        hoverTl.to(priceTag, {
                            opacity: 0,
                            y: -5,
                            x: 0,
                            rotation: 0,
                            scale: 0.8,
                            duration: 0.3,
                            ease: "power2.in"
                        }, 0);
                    }
                });

                item.addEventListener('click', (e) => {
                    e.preventDefault();

                    if (hoverTl) hoverTl.kill();
                    if (activeTl) activeTl.kill();

                    if (activeProducts.has(productName)) {

                        activeProducts.delete(productName);
                        item.classList.remove('product-active');

                        activeTl = gsap.timeline();

                        activeTl.to(item, {
                            scale: 1,
                            duration: 0.4,
                            ease: "back.out(1.7)"
                        }, 0);

                        activeTl.to(priceTag, {
                            opacity: 0,
                            y: -10,
                            x: 0,
                            rotation: 0,
                            scale: 0.5,
                            duration: 0.4,
                            ease: "back.in(2)"
                        }, 0);

                    } else {

                        activeProducts.add(productName);
                        item.classList.add('product-active');

                        activeTl = gsap.timeline();

                        activeTl.to(item, {
                            scale: 1.05,
                            duration: 0.5,
                            ease: "back.out(2)"
                        }, 0);

                        activeTl.fromTo(priceTag, {
                            opacity: 0,
                            y: -15,
                            scale: 0.3,
                            rotation: -10
                        }, {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            rotation: 0,
                            duration: 0.6,
                            ease: "back.out(2)"
                        }, 0.1);

                        activeTl.to(priceTag, {
                            x: 4,
                            rotation: 3,
                            duration: 2.5,
                            ease: "sine.inOut",
                            yoyo: true,
                            repeat: -1
                        }, 0.7);

                        activeTl.to(item, {
                            y: -2,
                            duration: 3,
                            ease: "sine.inOut",
                            yoyo: true,
                            repeat: -1
                        }, 1);
                    }
                });

                document.addEventListener('click', (e) => {
                    if (!item.contains(e.target) && activeProducts.has(productName)) {
                        item.click();
                    }
                });
            });

            gsap.to('.product-idle', {
                y: -1,
                duration: 4 + Math.random() * 2,
                ease: "sine.inOut",
                yoyo: true,
                repeat: -1,
                stagger: {
                    amount: 2,
                    from: "random"
                }
            });

            gsap.to('[data-product^="key"]', {
                rotation: 1,
                duration: 3,
                ease: "sine.inOut",
                yoyo: true,
                repeat: -1,
                stagger: 0.5
            });
        });
    </script>
@endsection
