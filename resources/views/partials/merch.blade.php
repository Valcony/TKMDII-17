<style>
    .overlay7 {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-repeat: repeat;
        background-image: url({{ asset('overlay/halftone.png') }});
        background-size: 75%;
        mix-blend-mode: multiply;
        pointer-events: none;
        z-index: 0;
        opacity: 50%;
        width: 200%;
        height: 100%;
    }

    .reveal-btn {
        position: relative;
        overflow: hidden;
        display: inline-block;
        background: var(--green);
        /* warna default hijau */
    }

    .reveal-btn::before {
        content: "";
        position: absolute;
        inset: 0;
        background: var(--pink);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
        z-index: 1;
    }

    .reveal-btn span {
        position: relative;
        z-index: 2;
        display: inline-block;
        /* opacity: 0.9; */
        transition: all 0.6s ease;
    }

    /* efek hover */
    .reveal-btn:hover::before {
        transform: translateX(0);
    }

    /* 
    .reveal-btn:hover span {
        opacity: 1;
    } */
</style>
<div class="relative w-full h-auto pb-10">
    <div class="overlay7"></div>
    <div class="relative flex justify-center items-center"> <img loading="lazy" decoding="async" src="{{ asset('assets/merch1.png') }}"
            alt="Background Image" class="absolute z-0 w-full h-full">
        <!-- <img loading="lazy" decoding="async" src="{{ asset('assets/merch3.png') }}" alt="Foreground Image" class="relative z-10 max-w-[50%]"> -->
        <div class="z-20 items-center flex flex-col">
            <p data-aos="zoom-out"
                class="merch h-[100%] lg:text-8xl text-4xl text-center font-primary text-[var(--yellow)] bg-[var(--blue)] inline-block">
                MERCH</p>
            <div class="relative flex justify-center w-full md:w-[80%]">
                <img loading="lazy" decoding="async" src="{{ asset('assets/shelf.png') }}" alt="Merch Catalog" class="w-full">
                <a href="{{ route('merch') }}" data-aos="zoom-out"
                    class="absolute bottom-0 translate-y-[50%] px-4 py-2 md:px-8 md:py-3 text-shadow-lg lg:text-5xl text-3xl font-primary text-white bg-[var(--green)] cursor-pointer transition-all duration-300 group overflow-hidden">
                    <span class="relative z-10">SEE MORE</span> <span
                        class="absolute inset-0 bg-[var(--pink)] translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- <img loading="lazy" decoding="async" src="{{ asset('assets/merch3.png') }}" alt="Foreground Image" class="relative z-10 max-w-[50%]"> -->

    <!-- <p data-aos="zoom-out"
                class="coming-soon rotate-3 w-[120%] h-[120%] lg:text-8xl text-4xl text-center font-primary text-[var(--pink)] bg-[var(--yellow)] inline-block">
                COMING SOON</p> -->
    <script>

    </script>