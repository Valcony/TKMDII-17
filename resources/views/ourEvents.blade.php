@extends('base')
@section('content')
    <style>
        .event-image-container {
            position: relative;
            /* background-color: var(--yellow); */
        }

        .event-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
            pointer-events: none;
            z-index: 5;
        }

        .event-overlay-text {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 0.5rem;
        }

        .event-overlay-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 0.5rem;
            fill: white;

            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white' width='48px' height='48px'%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3Cpath d='M12.04 23.99L12 21c-1.93 0-3.5-1.57-3.5-3.5S10.07 14 12 14s3.5 1.57 3.5 3.5c0 .9-.36 1.72-.94 2.33l1.43 1.43C17.21 20.07 18 18.86 18 17.5c0-3.04-2.46-5.5-5.5-5.5S7 14.46 7 17.5c0 2.04 1.12 3.8 2.79 4.76l1.26-1.26c-.6-.39-1.05-.99-1.05-1.7V17.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v1.8c0 .71-.45 1.31-1.05 1.7l1.26 1.26c.01 0 .02-.01.03-.01zM5.05 5.05L6.46 6.46c-1.32 1.32-2.01 3.05-2.01 4.91V12h2v-.63c0-2.28 1.85-4.13 4.13-4.13S15 9.09 15 11.37V12h2v-.63c0-1.86-.69-3.59-2.01-4.91l1.41-1.41C17.66 3.79 18 2.17 18 0h-2c-1.74 0-3.28.88-4.28 2.22C10.72.88 9.18 0 7.44 0H5.44c0 2.17.34 3.79 1.61 5.05z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .event-card:hover .event-overlay,
        .event-card.active .event-overlay {
            opacity: 0;
        }

        @media (hover: none) {
            .event-card .event-image-container {
                height: 100%;
            }

            .event-card .event-content {
                height: 0;
                opacity: 0;
            }

            .event-card.active .event-image-container {
                height: 40%;
            }

            .event-card.active .event-content {
                height: 60%;
                opacity: 1;
            }

            .event-card .event-overlay {
                opacity: 1;
            }

            .event-card.active .event-overlay {
                opacity: 0;
            }
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

        .event-card {
            width: 100%;
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            position: relative;
            margin-bottom: 2rem;
            background-color: white;
        }



        @media (max-width: 640px) {

            .event-card {
                height: 400px;
                max-width: 100%;
            }

        }



        @media (min-width: 641px) and (max-width: 1024px) {

            .event-card {
                height: 420px;
                max-width: 300px;
            }

        }



        .event-card:hover,
        .event-card.active {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .event-image-container {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: height 0.5s ease-in-out;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .event-card:hover .event-image-container,
        .event-card.active .event-image-container {
            height: 40%;
        }

        .event-image {
            width: 80%;
            transition: all 0.5s ease;
            object-fit: cover;
            background-color: var(--yellow);
        }

        .event-card:hover .event-image,
        .event-card.active .event-image {
            width: 100%;
        }

        .event-card.active .event-image {
            height: 100%;
        }

        .event-content {

            position: absolute;

            bottom: 0;

            left: 0;

            width: 100%;

            height: 0;

            padding: 20px;

            opacity: 0;

            transition: all 0.5s ease;

            background-color: white;

            overflow: hidden;

        }



        .event-card:hover .event-content,

        .event-card.active .event-content {

            height: 60%;

            opacity: 1;

        }



        @media (hover: none) {

            .event-card .event-image-container {

                height: 50%;

            }



            .event-card .event-content {

                height: 50%;

                opacity: 1;

            }

        }



        .event-title {

            font-size: 1.5rem;

            font-weight: bold;

            margin-bottom: 10px;

            text-align: center;

            color: #333;

            position: relative;

            display: inline-block;

            padding-bottom: 8px;

            width: 100%;

        }



        .underlineText {

            position: absolute;

            bottom: 0;

            left: 50%;

            transform: translateX(-50%);

            height: 3px;

            width: 0;

            background-color: #4ca6f8;

            border-radius: 1.5px;

            transition: width 0.5s ease;

            overflow: hidden;

        }



        .underlineText::after {

            content: '';

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);

            transform: translateX(-100%);

        }



        .event-card:hover .underlineText::after {

            animation: shimmer 2s infinite;

        }



        @keyframes shimmer {

            100% {

                transform: translateX(100%);

            }

        }



        @media (max-width: 640px) {

            .event-title {

                font-size: 1.25rem;

            }

        }



        .event-description {

            font-size: 1rem;

            color: #666;

            line-height: 1.5;

        }



        @media (max-width: 640px) {

            .event-description {

                font-size: 0.9rem;

                line-height: 1.4;

            }

        }



        .image-fade {

            opacity: 0;

            transition: opacity 0.5s ease;

        }



        .event-cards-container {

            padding: 1.5em;

        }





        @media (hover: none) {

            .event-card .event-image-container {

                height: 100%;

            }



            .event-card .event-content {

                height: 0;

                opacity: 0;

            }



            .event-card.active .event-image-container {

                height: 40%;

            }



            .event-card.active .event-content {

                height: 60%;

                opacity: 1;

            }

        }



        .event-card[data-event-type="Kbb"] .underlineText::after {

            background: linear-gradient(90deg, transparent, rgba(76, 166, 248, 0.8), transparent);

        }



        .event-card[data-event-type="Kbd"] .underlineText::after {

            background: linear-gradient(90deg, transparent, rgba(248, 76, 76, 0.8), transparent);

        }



        .event-card[data-event-type="Kbs"] .underlineText::after {

            background: linear-gradient(90deg, transparent, rgba(76, 248, 91, 0.8), transparent);

        }
        .overlay {
            position: absolute;
            object-fit: contain;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-repeat: repeat;
            background-image: url({{ asset('overlay/paper2.png') }});
            mix-blend-mode: multiply;
            pointer-events: none;
            z-index: 0;
            opacity: 50%;
        }
    </style>


    <div class=" w-screen h-screen min-h-screen flex flex-col justify-center items-center py-8 px-4 md:px-8 bg-[var(--green)]">
        <h1 id="ourEvents"
            class="text-[#efe650] w-full z-10 text-center text-4xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-8 md:mb-12 lg:mb-16">
            OUR EVENTS
        </h1>

        <div class="flex justify-center items-start landscape:items-start sm:items-center w-full h-[90%] overflow-y-auto">
            <div
                class="event-cards-container grid grid-cols-12 w-full max-w-7xl justify-center md:justify-evenly items-center gap-4 md:gap-6 lg:gap-8">

                <div class="event-card sm:col-span-4 col-span-12" data-event-type="Kbb">
                    <div class="event-image-container">
                        <img class="event-image" src="{{ asset('events/Kbb.webp') }}" alt="Kbb Event">
                        <div class="event-overlay">
                            <div class="event-overlay-icon"></div>
                            <p class="event-overlay-text">Click to view details</p>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">KBB
                            <span class="underlineText"></span>
                        </h3>
                        <p class="event-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis,
                            felis eu pharetra fermentum, magna risus commodo libero, ac finibus nisi
                            ipsum vel arcu. Proin aliquet, nunc eu feugiat tincidunt.
                        </p>
                    </div>
                </div>

                <div class="event-card sm:col-span-4 col-span-12" data-event-type="Kbd">
                    <div class="event-image-container">
                        <img class="event-image" src="{{ asset('events/Kbd.webp') }}" alt="Kbd Event">
                        <div class="event-overlay">
                            <div class="event-overlay-icon"></div>
                            <p class="event-overlay-text">Click to view details</p>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">KBD
                            <span class="underlineText"></span>
                        </h3>
                        <p class="event-description">
                            Suspendisse potenti. Ut vel orci eleifend, rutrum felis at, faucibus nisi.
                            Cras pharetra sapien at sem vulputate, nec eleifend tortor finibus.
                            Vivamus in luctus nulla, id cursus risus.
                        </p>
                    </div>
                </div>

                <div class="event-card sm:col-span-4 col-span-12" data-event-type="Kbs">
                    <div class="event-image-container">
                        <img class="event-image" src="{{ asset('events/Kbs.webp') }}" alt="Kbs Event">
                        <div class="event-overlay">
                            <div class="event-overlay-icon"></div>
                            <p class="event-overlay-text">Click to view details</p>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">KBS
                            <span class="underlineText"></span>
                        </h3>
                        <p class="event-description">
                            Etiam convallis, magna eu volutpat efficitur, ex est finibus nisl,
                            vel congue nisi ipsum in tortor. Vivamus feugiat hendrerit purus,
                            vitae tincidunt mi molestie id.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="overlay"></div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            if (typeof gsap !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

                gsap.fromTo("#ourEvents", {
                    y: -50,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out"
                });

                gsap.fromTo(".event-card", {
                    y: 50,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    stagger: 0.3,
                    ease: "power2.out",
                    onComplete: () => {
                        setupEventCardsInteractions();
                        initializeUnderlines();
                    }
                });
            } else {
                setupEventCardsInteractions();
                initializeUnderlines();
            }

            function setupEventCardsInteractions() {
                const eventCards = document.querySelectorAll('.event-card');

                const cardColors = {
                    'Kbb': '#4ca6f8',
                    'Kbd': '#e74893',
                    'Kbs': '#4ba663'
                };

                eventCards.forEach(card => {
                    const eventType = card.getAttribute('data-event-type');
                    const underline = card.querySelector('.underlineText');

                    if (underline && cardColors[eventType]) {
                        underline.style.backgroundColor = cardColors[eventType];
                    }

                    let isActive = false;

                    card.addEventListener('click', () => {
                        if (!isActive) {
                            activateCard(card);
                            isActive =
                                true;
                        }
                    });
                    card.addEventListener('mouseenter', () => {
                        if (!isActive) {
                            activateCard(card);
                            isActive =
                                true;
                        }
                    });

                    card.addEventListener('mouseenter', () => {
                        const underline = card.querySelector('.underlineText');

                        if (!isActive) {
                            gsap.to(underline, {
                                width: '60%',
                                duration: 0.5,
                                ease: "power2.out"
                            });
                        } else {
                            gsap.to(underline, {
                                width: '80%',
                                duration: 0.5,
                                ease: "power2.out"
                            });
                        }
                    });

                    card.addEventListener('mouseleave', () => {
                        const underline = card.querySelector('.underlineText');
                        gsap.to(underline, {
                            width: isActive ? '40%' : '0%',
                            duration: 0.4,
                            ease: "power2.in"
                        });
                    });
                });
            }

            function initializeUnderlines() {
                const underlines = document.querySelectorAll('.underlineText');
                underlines.forEach(underline => {
                    gsap.set(underline, {
                        width: '0%'
                    });
                });
            }

            function activateCard(card) {
                card.classList.add('active');
                card.dataset.active = 'true';

                const underline = card.querySelector('.underlineText');
                gsap.to(underline, {
                    width: '40%',
                    duration: 0.8,
                    ease: "elastic.out(1, 0.3)"
                });

                setTimeout(() => {
                    setupCarousel(card);
                }, 500);
            }

            function wait(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }

            function getRandomIndexExcluding(length, exclude) {
                let index;
                do {
                    index = Math.floor(Math.random() * length);
                } while (index === exclude);
                return index;
            }

            function setupCarousel(card) {
                if (card.dataset.carouselSetup === 'true') return;

                const eventType = card.getAttribute('data-event-type');
                const img = card.querySelector('.event-image');
                const imageNames = [
                    `${eventType}1.webp`,
                    `${eventType}2.webp`,
                    `${eventType}3.webp`,
                    `${eventType}4.webp`,
                    `${eventType}5.webp`,
                ];

                card.dataset.carouselSetup = 'true';
                let lastIndex = -1;

                async function swapImageWithFade() {
                    if (!card.classList.contains('active')) {
                        if (card.carouselIntervalId) {
                            clearInterval(card.carouselIntervalId);
                            delete card.carouselIntervalId;
                        }
                        card.dataset.carouselSetup = 'false';
                        return;
                    }

                    img.classList.add('image-fade');
                    await wait(300);

                    const randomIndex = getRandomIndexExcluding(imageNames.length, lastIndex);
                    lastIndex = randomIndex;
                    img.src = `{{ asset('events/') }}/${imageNames[randomIndex]}`;

                    await wait(500);
                    img.classList.remove('image-fade');
                }

                if (card.carouselIntervalId) {
                    clearInterval(card.carouselIntervalId);
                }

                card.carouselIntervalId = setInterval(() => {
                    if (card.classList.contains('active')) {
                        swapImageWithFade();
                    } else {
                        clearInterval(card.carouselIntervalId);
                        delete card.carouselIntervalId;
                        card.dataset.carouselSetup = 'false';
                    }
                }, 5000);
            }
        });
    </script>
@endsection

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
