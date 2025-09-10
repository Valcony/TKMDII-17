
    <style>
        .trapezoid-container {
            /* --trapezoid-color: #dcd6ba; */
            --trapezoid-color: transparent;
            --trapezoid-clip: polygon(0% 5%, 100% 0%, 100% 100%, 0% 95%);

            background-color: var(--trapezoid-color);
            clip-path: var(--trapezoid-clip);

            /* Responsive padding that adapts to screen size */
            padding: clamp(10px, 2vw, 15px) 0;
            transition: transform 0.5s ease-in-out;
        }

        .moreEvents {
            box-shadow: 3px 2px 1px #4ca6f8;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .moreEvents::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(76, 166, 248, 0.2);
            transition: all 0.3s ease-in-out;
            z-index: -1;
        }

        .moreEvents:hover {
            box-shadow: 3px 2px 1px #efe650;
            background: #4ca6f8;
            color: #efe650;
            transform: translateY(-3px);
            transition: all 0.3s ease-in-out;
        }

        .moreEvents:hover::before {
            left: 0;
        }

        .moreEvents:active {
            transform: translateY(0);
            box-shadow: 1px 1px 0px #efe650;
            transition: all 0.1s ease-in-out;
        }

        #ourEvents {
            text-shadow: 2px 0px 0px #4ca6f8;
            transition: all 0.3s ease-in-out;
        }

        #ourEvents:hover {
            text-shadow: 3px 1px 0px #4ca6f8;
            transform: translateY(-2px) scale(1.05);
            transition: all 0.3s ease-in-out;
        }

        .event-container img {
            transition: all 0.3s ease-in-out;
        }

        .event-container:hover img {
            transform: scale(1.05);
        }

        .carousel-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carousel-track {
            display: flex;
            width: fit-content;
        }

        .carousel-item {
            flex: 0 0 auto;
            width: calc(100% / 3);
        }

        .carousel-item2 {
            flex: 0 0 auto;
            width: calc(100% / 4);
        }

        @keyframes carouselLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-100% / 3 * 3))
            }
        }

        @keyframes carouselRight {
            0% {
                transform: translateX(calc(-100% / 4 * 4));
            }

            100% {
                transform: translateX(0);
            }
        }

        .carousel-left .carousel-track {
            animation: carouselLeft 20s linear infinite;
        }

        .carousel-right .carousel-track {
            animation: carouselRight 20s linear infinite;
        }

        .carousel-left:hover .carousel-track,
        .carousel-right:hover .carousel-track {
            animation-play-state: paused;
        }

        @media (max-width: 639px) {
            .event-label {
                font-size: 0.7em;
            }

            .trapezoid-label {
                padding: 0px 5px !important;
            }
        }

        @media (max-width: 420px) {
            .event-label {
                font-size: 0.5em;
            }

            #ourEvents {
                top: 6.5%;
                
            }
        }
    </style>

    <div id="events" style="padding: clamp(1em, 3vw, 2em) 0;"
        class="trapezoid-container relative flex w-[100%] overflow-hidden flex flex-col justify-center items-center">

        <h1 id="ourEvents"
            class="text-[#efe650] z-10 absolute top-[7%] -rotate-4 left-[2.8%] sm:top-[8%] sm:left-[3.1%] text-center sm:text-xl md:text-2xl lg:text-4xl font-bold gsap-title">
            OUR
            EVENTS</h1>

        <div data-aos="fade-up" data-aos-duration="800"
            class="z-[9] w-[120vw] h-[80%] overflow-x-hidden flex justify-center items-center trapezoid-container -rotate-3"
            style="--trapezoid-color: #4ba663; --trapezoid-clip: polygon(0% 0%, 100% 2%, 100% 97%, 0% 100%);">

            <div
                class="w-[80%] relative flex justify-center items-center">


                <!-- Carousel container for the green trapezoid -->
                <div class="w-full carousel-wrapper carousel-left">
                    <div class="carousel-track !py-3">
                        <!-- Original items -->
                        <div class="carousel-item relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbb1.webp') }}"
                                alt="Kbb" loading="lazy" decoding="async">
                            <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                                <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBB</h1>
                            </div>
                        </div>
                        <div class="carousel-item relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbd1.webp') }}"
                                alt="Kbd">
                            <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                                <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBD</h1>
                            </div>
                        </div>
                        <div class="carousel-item relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="fade-left" data-aos-delay="300" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbs1.webp') }}"
                                alt="Kbs">
                            <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                                <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBS</h1>
                            </div>
                        </div>

                        <!-- Duplicated items for infinite effect -->
                        <div class="carousel-item relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbb1.webp') }}"
                                alt="Kbb">
                            <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                                <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBB</h1>
                            </div>
                        </div>
                        <div class="carousel-item relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbd1.webp') }}"
                                alt="Kbd">
                            <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                                <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBD</h1>
                            </div>
                        </div>
                        <div class="carousel-item relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbs1.webp') }}"
                                alt="Kbs">
                            <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                                <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="z-[11] w-full relative">
            <div class="flex justify-center items-center absolute right-[15%] !mt-3 sm:right-5">
                <a href="{{ route('ourEvents') }}"
                    class="moreEvents cursor-pointer bg-[#efe650] text-[#4ca6f8] text-xs md:text-base lg:text-xl font-bold px-2 py-1 gsap-button"
                    style="padding: 0px 2px 0px 2px">SEE MORE</a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300"
            class="z-[10] w-[120vw] overflow-x-hidden flex justify-center items-center trapezoid-container rotate-3"
            style="--trapezoid-color: #e74893; --trapezoid-clip: polygon(0% 0%, 100% 2%, 100% 97%, 0% 100%); margin-top: clamp(40px, 5vw, 60px);">

            <div
                class="w-full flex justify-center items-center">

                <!-- Carousel container for the pink trapezoid -->
                <div class="w-full carousel-wrapper carousel-right">
                    <div class="carousel-track !py-5">
                        <!-- Original items -->
                        <div class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="zoom-in" data-aos-delay="400" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbb1.webp') }}"
                                alt="Kbb">
                            <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">WORKSHOP
                                </h1>
                            </div>
                        </div>
                        <div class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="zoom-in" data-aos-delay="500" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbd1.webp') }}"
                                alt="Kbd">
                            <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">SEMINAR
                                </h1>
                            </div>
                        </div>
                        <div class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="zoom-in" data-aos-delay="600" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbs1.webp') }}"
                                alt="Kbs">
                            <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">FIELDTRIP
                                </h1>
                            </div>
                        </div>
                        <div class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container"
                            data-aos="zoom-in" data-aos-delay="700" data-aos-duration="600">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbs2.webp') }}"
                                alt="Kbs">
                            <div class="trapezoid-container absolute right-[-5px] bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-[-2.5%] lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">GUEST
                                    LECTURE
                                </h1>
                            </div>
                        </div>

                        <div
                            class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbb1.webp') }}"
                                alt="Kbb">
                            <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">WORKSHOP
                                </h1>
                            </div>
                        </div>
                        <div
                            class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbd1.webp') }}"
                                alt="Kbd">
                            <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">SEMINAR
                                </h1>
                            </div>
                        </div>
                        <div
                            class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbs1.webp') }}"
                                alt="Kbs">
                            <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">FIELDTRIP
                                </h1>
                            </div>
                        </div>
                        <div
                            class="carousel-item2 relative flex h-[80%] justify-center items-center w-full event-container">
                            <img loading="lazy" decoding="async" class="w-[90%] sm:w-[80%] max-h-[100%]" src="{{ asset('assets/events/Kbs2.webp') }}"
                                alt="Kbs">
                            <div class="trapezoid-container absolute right-[-5px] bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-[-2.5%] lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                                style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                                <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">GUEST
                                    LECTURE
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // AOS.init({
            //     once: false,
            //     mirror: true,
            //     offset: 120,
            //     easing: 'ease-in-out'
            // });

            gsap.registerPlugin(ScrollTrigger);

            function resetCarouselAnimation(carouselTrack) {
                carouselTrack.style.animation = 'none';
                carouselTrack.offsetHeight;

                if (carouselTrack.parentElement.classList.contains('carousel-left')) {
                    carouselTrack.style.animation = 'carouselLeft 15s linear infinite';
                } else if (carouselTrack.parentElement.classList.contains('carousel-right')) {
                    carouselTrack.style.animation = 'carouselRight 15s linear infinite';
                }
            }

            document.querySelectorAll('.carousel-track').forEach(track => {
                track.addEventListener('animationiteration', () => {
                    resetCarouselAnimation(track);
                });
            });

            const eventContainers = document.querySelectorAll('.event-container');

            eventContainers.forEach(container => {
                container.addEventListener('mouseenter', () => {
                    gsap.to(container.querySelector('img'), {
                        scale: 1.05,
                        duration: 0.3,
                        ease: "power1.out"
                    });
                    gsap.to(container.querySelector('div'), {
                        backgroundColor: '#4ca6f8',
                        duration: 0.3,
                        ease: "power1.out"
                    });
                });

                container.addEventListener('mouseleave', () => {
                    gsap.to(container.querySelector('img'), {
                        scale: 1,
                        duration: 0.3,
                        ease: "power1.out"
                    });
                    gsap.to(container.querySelector('div'), {
                        backgroundColor: '#efe650',
                        duration: 0.3,
                        ease: "power1.out"
                    });
                });
            });
        });
    </script>
