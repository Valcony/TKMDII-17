@extends('base')
@section('content')
    <style>
        #ourEvents {
            text-shadow: 2px 0px 0px #4ca6f8;
            transition: all 0.3s ease-in-out;
        }

        #ourEvents:hover {
            text-shadow: 3px 1px 0px #4ca6f8;
            transform: translateY(-2px) scale(1.05);
            transition: all 0.3s ease-in-out;
        }
    </style>

    <div class="w-screen h-screen flex flex-col py-4">
        <h1 id="ourEvents" class="text-[#efe650] z-10 text-center sm:text-xl md:text-2xl lg:text-4xl font-bold">
            OUR
            EVENTS</h1>

        <div class="w-full flex justify-center items-center">

            <div class="event-container w-full flex items-center px-2 opacity-100" data-event-type="Kbb" data-current-index="0"
                data-revealed="false">
                <div
                    class="w-full gap-3 h-full justify-center items-center flex flex-col sm:flex-row py-2 border-2 shadow-lg">
                    <div class="w-full sm:w-[20%] flex justify-center items-center image-container">
                        <img class="bg-cover bg-center event-image" src="{{ asset('events/Kbb.png') }}" alt="Kbb">
                    </div>
                    <div class="w-0 overflow-hidden flex flex-col justify-center items-center px-2 event-description">
                        <h1 class="text-lg font-bold w-full sm:text-start text-center">KBB Event</h1>

                        <p class="">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam harum distinctio ipsum dolorum ut,
                            consequuntur reiciendis deserunt aliquid, odio a laudantium voluptate minus accusantium ducimus
                            quisquam? Sunt quas velit sapiente!
                        </p>
                    </div>
                </div>
            </div>

            <div class="event-container w-full flex items-center px-2 opacity-100" data-event-type="Kbd"
                data-current-index="0" data-revealed="false">
                <div
                    class="w-full gap-3 h-full justify-center items-center flex flex-col sm:flex-row-reverse py-2 border-2 shadow-lg">
                    <div class="w-full sm:w-[20%] flex justify-center items-center image-container">
                        <img class="bg-cover bg-center event-image" src="{{ asset('events/Kbd.png') }}" alt="Kbd">
                    </div>
                    <div class="w-0 overflow-hidden flex flex-col justify-center items-center px-2 event-description">
                        <h1 class="text-lg font-bold w-full sm:text-start text-center">KBD Event</h1>

                        <p class="">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam harum distinctio ipsum dolorum ut,
                            consequuntur reiciendis deserunt aliquid, odio a laudantium voluptate minus accusantium ducimus
                            quisquam? Sunt quas velit sapiente!
                        </p>
                    </div>
                </div>
            </div>

            <div class="event-container w-full flex items-center px-2 opacity-100" data-event-type="Kbs"
                data-current-index="0" data-revealed="false">
                <div
                    class="w-full gap-3 h-full justify-center items-center flex flex-col sm:flex-row py-2 border-2 shadow-lg">
                    <div class="w-full sm:w-[20%] flex justify-center items-center image-container">
                        <img class="bg-cover bg-center event-image" src="{{ asset('events/Kbs.png') }}" alt="Kbs">
                    </div>
                    <div class="w-0 overflow-hidden flex flex-col justify-center items-center px-2 event-description">
                        <h1 class="text-lg font-bold w-full sm:text-start text-center">KBS Event</h1>

                        <p class="">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam harum distinctio ipsum dolorum ut,
                            consequuntur reiciendis deserunt aliquid, odio a laudantium voluptate minus accusantium ducimus
                            quisquam? Sunt quas velit sapiente!
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <style>
        .image-fade-out {
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }

        .image-fade-in {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }

        .event-description {
            opacity: 1;
            overflow: hidden;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

            gsap.fromTo(
                ".container", {
                    duration: 2,
                    left: "100%",
                    scale: 0.5,
                    ease: "power4.inOut",
                    delay: 2
                }, {
                    duration: 2,
                    left: "50%",
                    scale: 0.5,
                    transform: "translateX(-50%)",
                    ease: "power4.inOut",
                    delay: 2
                }
            );

            gsap.to(".container", 2, {
                scale: 1,
                ease: "power4.inOut",
                delay: 4.5
            });

            setTimeout(() => {
                gsap.fromTo("#ourEvents", {
                    y: -100,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out"
                });

                gsap.fromTo(".event-container", {
                    y: -50,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    stagger: 0.3,
                    ease: "power2.out",
                    onComplete: setupEventInteractions
                });
            }, 5000);

            function setupEventInteractions() {
                const eventContainers = document.querySelectorAll('.event-container');

                eventContainers.forEach(container => {
                    const imageContainer = container.querySelector('.image-container');
                    const eventType = container.getAttribute('data-event-type');
                    const description = container.querySelector('.event-description');
                    let imageRotationInterval;

                    // Add hover event listeners
                    container.addEventListener('mouseenter', () => {
                        const isRevealed = container.getAttribute('data-revealed') === 'true';

                        if (!isRevealed) {
                            // Mark as revealed so it only happens once
                            container.setAttribute('data-revealed', 'true');

                            // Animate image container width reduction
                            gsap.to(imageContainer, {
                                width: '20%',
                                duration: 0.7,
                                ease: "power2.out"
                            });

                            // Animate description to show (expand width)
                            gsap.to(description, {
                                width: '80%',
                                duration: 0.7,
                                ease: "power2.out"
                            });

                            startImageRotation(container, eventType);
                        }
                    });
                });
            }

            function startImageRotation(container, eventType) {
                const img = container.querySelector('.event-image');
                const imageNames = [eventType + '.png', eventType + '1.png', eventType + '2.png', eventType +
                    '3.png', eventType + '4.png', eventType + '5.png'
                ];
                let currentIndex = 0;

                function rotateImage() {
                    img.classList.add('image-fade-out');
                    img.classList.remove('image-fade-in');

                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % imageNames.length;
                        img.src = `{{ asset('events/') }}/${imageNames[currentIndex]}`;
                        container.setAttribute('data-current-index', currentIndex);

                        img.classList.remove('image-fade-out');
                        img.classList.add('image-fade-in');
                    }, 500);
                }

                return setInterval(rotateImage, 2500);
            }
        });
    </script>
@endsection
