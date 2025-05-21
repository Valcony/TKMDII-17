
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
                top: -20%;
            }
        }
    </style>

    <div style="padding: clamp(1em, 3vw, 2em) 0;"
        class="trapezoid-container relative flex w-[100%] overflow-hidden flex flex-col justify-center items-center">
        <div data-aos="fade-up" data-aos-duration="800"
            class="z-[9] w-[120vw] h-[80%] overflow-x-hidden flex justify-center items-center trapezoid-container -rotate-3"
            style="--trapezoid-color: #4ba663; --trapezoid-clip: polygon(0% 0%, 100% 2%, 100% 97%, 0% 100%);">

            <div
                class="w-[80%] relative max-w-[95vw] sm:max-w-[85vw] md:max-w-[75vw] lg:max-w-[80vw] flex justify-center items-center">

                <h1 id="ourEvents"
                    class="text-[#efe650] z-10 absolute top-[-13%] left-[2.8%] sm:top-[-10%] sm:left-[3.1%] text-center sm:text-xl md:text-2xl lg:text-4xl font-bold gsap-title">
                    OUR
                    EVENTS</h1>
                <div class="w-full grid grid-cols-12 items-center text-white">

                    <div class="col-span-4 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="fade-right" data-aos-delay="100" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbb1.webp') }}" alt="Kbb" loading="lazy">
                        <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                            <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBB</h1>
                        </div>
                    </div>
                    <div class="col-span-4 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbd1.webp') }}" alt="Kbd" loading="lazy">
                        <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                            <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBD</h1>
                        </div>
                    </div>
                    <div class="col-span-4 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="fade-left" data-aos-delay="300" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbs1.webp') }}" alt="Kbs" loading="lazy">
                        <div class="trapezoid-container absolute left-1 bottom-[-4px] sm:left-[10px] sm:bottom-[-3px] sm:rotate-12 rotate-13 md:left-2 md:bottom-[-7px] md:rotate-13 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 5px 0px 5px">
                            <h1 class="text-[#e74893] font-bold text-xs md:text-base lg:text-xl">KBS</h1>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="z-[11] w-full relative">
            <div class="flex justify-center items-center absolute right-5">
                <a href="{{ route('ourEvents') }}"
                    class="moreEvents magnetic cursor-pointer bg-[#efe650] text-[#4ca6f8] font-bold px-2 py-1 gsap-button"
                    style="padding: 0px 2px 0px 2px">SEE MORE</a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300"
            class="z-[10] w-[120vw] overflow-x-hidden flex justify-center items-center trapezoid-container rotate-3"
            style="--trapezoid-color: #e74893; --trapezoid-clip: polygon(0% 0%, 100% 2%, 100% 97%, 0% 100%); margin-top: clamp(40px, 5vw, 60px);">

            <div
                class="w-[80%] max-w-[98vw] sm:max-w-[85vw] md:max-w-[75vw] lg:max-w-[80vw] flex justify-center items-center">

                <div class="w-full grid grid-cols-12 items-center text-white">

                    <div class="col-span-3 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="zoom-in" data-aos-delay="400" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbb1.webp') }}" alt="Kbb" loading="lazy">
                        <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                            <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">WORKSHOP</h1>
                        </div>
                    </div>
                    <div class="col-span-3 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="zoom-in" data-aos-delay="500" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbd1.webp') }}" alt="Kbd" loading="lazy">
                        <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                            <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">SEMINAR</h1>
                        </div>
                    </div>
                    <div class="col-span-3 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="zoom-in" data-aos-delay="600" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbs1.webp') }}" alt="Kbs" loading="lazy">
                        <div class="trapezoid-container absolute right-1 bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-0 lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                            <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">FIELDTRIP</h1>
                        </div>
                    </div>
                    <div class="col-span-3 relative flex h-[80%] justify-center items-center w-full event-container"
                        data-aos="zoom-in" data-aos-delay="700" data-aos-duration="600">
                        <img class="w-[80%] max-h-[100%]" src="{{ asset('events/Kbs2.webp') }}" alt="Kbs" loading="lazy">
                        <div class="trapezoid-container absolute right-[-5px] bottom-[-4px] sm:right-2 sm:bottom-[-14px] -rotate-2 md:right-[-2.5%] lg:right-3 lg:bottom-[-18px] md:rotate-3 trapezoid-label"
                            style="--trapezoid-color: #efe650; --trapezoid-clip: polygon(0% 0%, 95% 0%, 100% 100%, 5% 100%); padding: 0px 10px 0px 10px">
                            <h1 class="text-[#4ba663] event-label font-bold text-xs md:text-base lg:text-xl">GUEST LECTURE
                            </h1>
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
