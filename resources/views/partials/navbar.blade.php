<style>
    .nav-link {
        color: #efe650;
        text-shadow: 2px 2px 0 #4ca6f8;
        font-weight: bold;
        text-transform: uppercase;
        background-color: transparent;
        padding: 4px 8px;
        transition: all 0.3s ease;
    }

    @media (hover: hover) {
        .nav-link:hover {
            color: #e74893 !important;
        }
    }

    @media (hover: none) {
        .nav-link:hover {
            color: #efe650 !important;
        }
    }

    .nav-link:hover {
        background-color: #efe650;
        /* color: #efe650; */
        text-shadow: none;
        padding: 2px 10px;
        font-weight: bold;
        text-transform: uppercase;
        box-shadow: 5px 5px 0px #4ca6f8;
    }

    #menu-btn {
        cursor: pointer;
    }

    #nav-menu a {
        position: relative;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    #nav-menu.active a {
        opacity: 1;
        transform: translateY(0);
    }

    /* Staggered animation delay for each link */
    #nav-menu a:nth-child(1) {
        transition-delay: 0.1s;
    }

    #nav-menu a:nth-child(2) {
        transition-delay: 0.2s;
    }

    #nav-menu a:nth-child(3) {
        transition-delay: 0.3s;
    }

    #nav-menu a:nth-child(4) {
        transition-delay: 0.4s;
    }

    #nav-menu a:nth-child(5) {
        transition-delay: 0.5s;
    }

    #nav-menu a:nth-child(6) {
        transition-delay: 0.6s;
    }

    /* Block reveal animation */
    #nav-menu a:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #e74893;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease;
        z-index: -2;
    }

    #nav-menu a:hover:before {
        transform: scaleX(1);
    }


    #nav-menu.active:after {
        opacity: 1;
    }
    
</style>

<nav class="px-5 py-2 sticky top-0 w-full z-50 transition-all duration-300 ease-in-out" id="navbar">
    <div class="mx-auto flex md:justify-between justify-end items-center">
        <!-- Desktop Nav (Right aligned) -->
        <div class="hidden md:flex m-auto w-full">
            <img src="{{ asset('img/LOGO.png') }}" alt="Logo TKMDII-17" class="w-[20%]">
        </div>
        <ul class="hidden md:flex gap-10 items-center">
            <li><a href="/" class="nav-link">HOME</a></li>
            <!-- <li><a href="/#about" class="nav-link">ABOUT</a></li> -->
            <li><a href="/events" class="nav-link">EVENTS</a></li>
            <li><a href="/timeline" class="nav-link">TIMELINE</a></li>
            <li><a href="/#merch" class="nav-link">MERCH</a></li>
            <li><a href="/#" class="nav-link">DELEGATION</a></li>
        </ul>

        <!-- Hamburger Icon -->
        <!-- Change from lg:hidden to md:hidden -->
        <button id="menu-btn" class="md:hidden text-[#efe650] z-50 ml-auto " onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-icon" class="h-10 w-10 " viewBox="0 0 24 24"
                stroke="#efe650">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu"
        class="hidden absolute inset-0 h-screen w-screen bg-black/50 backdrop-blur-sm flex flex-col justify-center items-center space-y-8 z-40 md:hidden">
        <a href="/" onclick="closeMenu()" class="nav-link text-3xl">HOME</a>
        <!-- <a href="/#about" onclick="closeMenu()" class="nav-link text-3xl">ABOUT</a> -->
        <a href="/events" onclick="closeMenu()" class="nav-link text-3xl">EVENTS</a>
        <a href="/timeline" onclick="closeMenu()" class="nav-link text-3xl">TIMELINE</a>
        <a href="/#merch" onclick="closeMenu()" class="nav-link text-3xl">MERCH</a>
        <a href="/#" onclick="closeMenu()" class="nav-link text-3xl">DELEGATION</a>
    </div>
</nav>

<script>

    function toggleMenu() {
        const menu = document.getElementById('nav-menu');
        const icon = document.getElementById('menu-icon');
        menu.classList.toggle('hidden');
        setTimeout(() => {
            menu.classList.toggle('active');
        }, 10);

        if (menu.classList.contains('hidden')) {
            // Show hamburger icon
            icon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            `;
        } else {
            // Show close (X) icon
            icon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            `;
        }
    }

    function closeMenu() {
        const menu = document.getElementById('nav-menu');
        const icon = document.getElementById('menu-icon');
        menu.classList.remove('active');
        menu.classList.add('hidden');
        // Reset icon to hamburger
        icon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        `;
    }


    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById("navbar");
        const container = document.querySelector(".container");
        container.addEventListener("scroll", function () {
            const scrollPosition = container.scrollTop;
            // console.log("Scroll position:", scrollPosition);

            if (scrollPosition > 50) {
                navbar.classList.add("bg-[#1a1a1a]/10", "backdrop-blur-sm");
            } else {
                navbar.classList.remove("bg-[#1a1a1a]/10", "backdrop-blur-sm");
            }
        });

        const navLinks = document.querySelectorAll('.nav-link[href^="#"]');

        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>