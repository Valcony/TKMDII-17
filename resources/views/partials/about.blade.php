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
             min-height: 100vh;
             overflow: hidden;
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
             object-fit: cover;
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
     </style>

     <section class="landing-page">
         <img src="{{ asset('img/BEYOND BOUNDARIES.PNG') }}" alt="Beyond Boundaries" class="center-image lg:px-0 px-0">
         <img src="{{ asset('img/logo.png') }}" alt="Overlay Logo" class="overlay-logo lg:px-0 px-12">
     </section>


     <section class="what-is-section">
         <div class="paperboard-overlay"></div>
         <div class="what-is-content">
             <div class="left-content">
                 <img src="{{ asset('img/whatis.png') }}" alt="What is TKMDII">
                 <img src="{{ asset('img/text_white.png') }}" alt="Text White">
             </div>
             {{-- <div class="right-content"> --}}
             <div class="swiper mySwiper">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide">
                         <img src="{{ asset('img/dokum/day1.JPG') }}" alt="Slide 1">
                     </div>
                     <div class="swiper-slide">
                         <img src="{{ asset('img/dokum/day2.JPG') }}" alt="Slide 1">
                     </div>
                     <div class="swiper-slide">
                         <img src="{{ asset('img/dokum/day3.JPG') }}" alt="Slide 1">
                     </div>
                     <div class="swiper-slide">
                         <img src="{{ asset('img/dokum/day4.JPG') }}" alt="Slide 1">
                     </div>
                 </div>
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
                 <div class="swiper-pagination"></div>
             </div>

             {{-- <img src="{{ asset('img/image.png') }}" alt="Illustration"> --}}
             {{-- </div> --}}
         </div>
     </section>


     <script>
         var swiper = new Swiper(".mySwiper", {
             pagination: {
                 el: ".swiper-pagination",
                 type: "progressbar",
             },
             navigation: {
                 nextEl: ".swiper-button-next",
                 prevEl: ".swiper-button-prev",
             },
         });
     </script>