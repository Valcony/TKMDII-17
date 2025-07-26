<style>
    .landing-page {
        position: relative;
        background-image: url('{{ asset('img/Group 2.png') }}'), url('{{ asset('img/Background.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        overflow: hidden;
    }

    .center-image {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .overlay-logo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* section about us */
    .what-is-section {
        position: relative;
        background-image: url('{{ asset('img/bg_blue.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: auto;
        overflow: hidden;
        padding: 2rem 1rem;
        /* Adds spacing for smaller screens */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }


    .paperboard-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-image: url('{{ asset('img/paperboard.png') }}'); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.8;
        z-index: 1;
    }

    .what-is-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        width: 100%;
        margin: auto;
        padding: 40px 20px;
        gap: 20px;
    }

    .left-content {
        flex: 1 1 45%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
        padding: 20px;
    }

    .left-content img {
        max-width: 100%;
        height: auto;
    }


    /* .right-content {
                 flex: 1 1 45%;
                 display: flex;
                 justify-content: center;
             }

             .right-content img {
                 max-width: 100%;
                 height: auto;
             } */


    /* swiper */
    .swiper {
        width: 100%;
        height: 100%;
        aspect-ratio: 16/9;
        transform: rotate(-5deg);
        flex: 1 1 45%;
        display: flex;
        justify-content: center;

    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        /* object-fit: cover; */
        background-color: var(--darker-blue);
    }

    .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background-color: #efe650;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #efe650;
    }


    @media (max-width: 768px) {
        .what-is-content {
            flex-direction: column;
            align-items: center;
        }

        .left-content,
        .right-content {
            flex: 1 1 100%;
            text-align: center;
        }

        .left-content {
            align-items: center;
        }
    }

    #slide-container::-webkit-scrollbar {
        width: 8px;
    }

    #slide-container::-webkit-scrollbar-track {
        background: transparent;
    }

    #slide-container::-webkit-scrollbar-thumb {
        background-color: #efe650;
        border-radius: 8px;
    }
</style>

<section class="landing-page -mt-20" id="home">
    <img src="{{ asset('img/BEYOND BOUNDARIES.png') }}" alt="Beyond Boundaries" class="center-image lg:px-0 px-0">
    <img src="{{ asset('img/LOGO.png') }}" alt="Overlay Logo" class="overlay-logo lg:px-0 px-12">
</section>


<section class="what-is-section" id="about">
    <div class="paperboard-overlay"></div>
    <div class="what-is-content">
        <div class="left-content">
            <img src="{{ asset('img/whatis.png') }}" alt="What is TKMDII">

            <div class="relative w-full max-w-3xl mx-auto">
                <!-- Scrollable Caption Container -->
                <div id="slide-container"
                    class="items-center justify-center justify-items-center fade-mask overflow-y-auto h-60 sm:h-72 lg:h-80 p-4 font-secondary bg-[#f4f4e7]">
                    <p id="slide-caption" class="text-black font-semibold text-center leading-relaxed
        text-sm sm:text-base lg:text-lg">
                        TKMDII (Temu Karya Mahasiswa Desain Interior Indonesia) adalah forum tahunan yang mempertemukan
                        mahasiswa desain interior dari seluruh Indonesia. Acara ini menjadi wadah kolaborasi, berbagi
                        inspirasi, serta menampilkan karya dan gagasan inovatif dalam dunia desain interior antar
                        kampus.
                    </p>
                </div>
            </div>


        </div>
        {{-- <div class="right-content"> --}}
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/dokum/day1.JPG') }}" alt="Slide 1" class="object-cover"
                            data-caption="TKMDII (Temu Karya Mahasiswa Desain Interior Indonesia) adalah forum tahunan yang mempertemukan mahasiswa desain interior dari seluruh Indonesia. Acara ini menjadi wadah kolaborasi, berbagi inspirasi, serta menampilkan karya dan gagasan inovatif dalam dunia desain interior antar kampus.">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/logo-mini.png') }}" alt="Slide 2" class="w-64 p-4 h-auto object-contain"
                            data-caption="Skema warna logo TKMDII 25 mengandung makna inspiratif dan penuh harapan:
<br>🌸 Magenta melambangkan inspirasi,
<br>🔵 Biru untuk kecerdasan & percaya diri,
<br>💛 Kuning menyimbolkan optimisme,
<br>💚 Hijau mencerminkan nilai alami & keberlanjutan.">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/BEYOND BOUNDARIES.png') }}" class="w-64 p-4 h-auto object-contain"
                            alt="Slide 1"
                            data-caption="Tema TKMDII 2025 menyoroti perpaduan teknologi, budaya, dan daur ulang. AI dimanfaatkan untuk efisiensi desain dan material berkelanjutan, sementara unsur budaya menjaga identitas lokal. Pendekatan ekonomi sirkular mendorong penggunaan limbah industri sebagai bahan utama booth pameran. Delegasi ditantang menciptakan booth fungsional dan kreatif dari limbah interior yang sudah diolah, berprinsip knockdown dan keberlanjutan, agar bisa dipakai ulang dan berdampak positif bagi masyarakat dan lingkungan.">
                    </div>
                    <!-- <div class="swiper-slide">
                        <img src="{{ asset('img/dokum/day4.JPG') }}" alt="Slide 1" data-caption="caption4">
                    </div> -->
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

            {{-- <img src="{{ asset('img/image.png') }}" alt="Illustration"> --}}
            {{--
        </div> --}}
    </div>
</section>


<script>
      function adjustCaptionAlignment() {
        const container = document.getElementById('slide-container');
        const caption = document.getElementById('slide-caption');

        // Reset dulu ke default
        container.classList.remove('flex', 'items-center', 'justify-center');

        // Cek apakah ada overflow
        const isOverflowing = caption.scrollHeight > container.clientHeight;

        if (!isOverflowing) {
            container.classList.add('flex', 'items-center', 'justify-center');
        }
    }

    // Panggil saat halaman load
    window.addEventListener('load', adjustCaptionAlignment);
    var swiper = new Swiper(".mySwiper", {
        loop: true,

        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            slideChangeTransitionStart: function () {
                const captionEl = document.getElementById("slide-caption");
                captionEl.classList.remove("opacity-100");
                captionEl.classList.add("opacity-0");
            },
            slideChangeTransitionEnd: function () {
                const captionEl = document.getElementById("slide-caption");
                const activeSlideImage = document.querySelector(".swiper-slide-active img");
                const newCaption = activeSlideImage?.getAttribute("data-caption") || "";
                captionEl.innerHTML = newCaption;
                captionEl.classList.remove("opacity-0");
                captionEl.classList.add("opacity-100");
            }

        }
    });
    window.addEventListener("load", function () {
        const captionEl = document.getElementById("slide-caption");
        const activeSlideImage = document.querySelector(".swiper-slide-active img");
        const newCaption = activeSlideImage?.getAttribute("data-caption") || "";
        captionEl.innerHTML = newCaption;
    });

</script>