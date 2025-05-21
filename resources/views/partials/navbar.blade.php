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

    .nav-link:hover {
        background-color: #efe650;
        color: #e74893;
        text-shadow: none;
        padding: 2px 10px;
        font-weight: bold;
        text-transform: uppercase;
        box-shadow: 5px 5px 0px #4ca6f8;
    }

    #menu-btn {
        cursor: pointer;
    }
</style>

<nav class="bg-transparent p-5 fixed w-full z-50">
    <div class="container mx-auto flex justify-end items-center">
        <!-- Desktop Nav (Right aligned) -->

        <ul class="hidden md:flex gap-10 items-center">
            <li><a href="#" class="nav-link">HOME</a></li>
            <li><a href="#" class="nav-link">ABOUT</a></li>
            <li><a href="#" class="nav-link">EVENTS</a></li>
            <li><a href="#" class="nav-link">TIMELINE</a></li>
            <li><a href="#" class="nav-link">MERCH</a></li>
            <li><a href="#" class="nav-link">DELEGATION</a></li>
        </ul>

        <!-- Hamburger Icon -->
        <!-- Change from lg:hidden to md:hidden -->
        <button id="menu-btn" class="md:hidden text-[#efe650] z-50 ml-auto" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-icon" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#efe650">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu"
        class="hidden fixed inset-0 h-screen w-screen bg-black/50 backdrop-blur-sm flex flex-col justify-center items-center space-y-8 z-40 md:hidden">
        <a href="#" onclick="closeMenu()" class="nav-link text-3xl">HOME</a>
        <a href="#" onclick="closeMenu()" class="nav-link text-3xl">ABOUT</a>
        <a href="#" onclick="closeMenu()" class="nav-link text-3xl">EVENTS</a>
        <a href="#" onclick="closeMenu()" class="nav-link text-3xl">TIMELINE</a>
        <a href="#" onclick="closeMenu()" class="nav-link text-3xl">MERCH</a>
        <a href="#" onclick="closeMenu()" class="nav-link text-3xl">DELEGATION</a>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById('nav-menu');
        const icon = document.getElementById('menu-icon');
        menu.classList.toggle('hidden');

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
        menu.classList.add('hidden');
        // Reset icon to hamburger
        icon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        `;
    }
</script>