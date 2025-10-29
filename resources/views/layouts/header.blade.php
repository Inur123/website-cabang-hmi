<nav id="popup"
    class="flex items-center justify-between px-6 py-4 border-b dark:border-gray-700 sticky top-0 z-10 bg-white dark:bg-gray-800">

    <!-- ========== DESKTOP NAVIGATION ========== -->
    <div class="hidden md:flex items-center justify-between w-full">
        <!-- Logo & Text Desktop -->
        <div class="flex items-center space-x-2 flex-1">
            <a href="/">
                <div class="p-2 rounded-lg">
                    <img src="{{ asset('template/images/logo-web.png') }}" alt="" class="w-10 h-10 filter">
                </div>
            </a>
            <a href="/">
                <span class="text-xl font-bold">HMI CABANG PONOROGO</span>
            </a>
        </div>

        <!-- Menu Links Desktop (Centered) -->
        <div class="flex space-x-8 flex-1 justify-center">
    <a href="{{ route('home') }}"
        class="{{ request()->is('/') ? 'text-green-600 dark:text-green-400 font-bold' : 'text-gray-600 dark:text-gray-300' }}">
        Home
    </a>
    <a href="{{ route('blog.index') }}"
        class="{{ request()->is('blog*') ? 'text-green-600 dark:text-green-400 font-bold' : 'text-gray-600 dark:text-gray-300' }}">
        Blog
    </a>
    <div class="relative">
        <span id="profileBtnDesktop"
            class="{{ request()->is('profile*') ? 'text-green-600 dark:text-green-400 font-bold' : 'text-gray-600 dark:text-gray-300' }} flex items-center cursor-pointer">
            Profile
            <svg id="arrowIconDesktop" xmlns="http://www.w3.org/2000/svg"
                class="ml-2 w-4 h-4 text-gray-600 dark:text-gray-300 transition-transform"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </span>
        <!-- Dropdown Menu Desktop -->
        <div id="dropdownMenuDesktop"
            class="absolute left-0 hidden mt-2 w-56 bg-white border rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('profile.sejarah') }}"
                class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-t-lg">
                Sejarah
            </a>
            <a href="{{ route('profile.susunankepengurusan') }}"
                class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-b-lg">
                Susunan Kepengurusan
            </a>
        </div>
    </div>
</div>


        <!-- Dark Mode Toggle Desktop -->
        <div class="flex items-center justify-end flex-1">
            <button id="darkModeToggleDesktop" onclick="toggleDarkMode()"
                class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <span class="sr-only">Toggle theme</span>
                <svg id="sunIconDesktop" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
                <svg id="moonIconDesktop" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- ========== MOBILE NAVIGATION ========== -->
    <div class="md:hidden flex items-center justify-between w-full">
        <!-- Logo Mobile -->
        <div class="flex items-center">
            <a href="/">
                <div class="p-2 rounded-lg">
                    <img src="{{ asset('template/images/logo-web.png') }}" alt="" class="w-10 h-10 filter">
                </div>
            </a>
        </div>

        <!-- Right Side Buttons Mobile -->
        <div class="flex gap-3 items-center">
            <!-- Dark Mode Toggle Mobile -->
            <button id="darkModeToggleMobile" onclick="toggleDarkMode()"
                class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <span class="sr-only">Toggle theme</span>
                <svg id="sunIconMobile" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
                <svg id="moonIconMobile" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>

            <!-- Hamburger Menu Mobile -->
            <button id="menuToggle" onclick="toggleMenu()" class="text-gray-600 dark:text-gray-300">
                <svg id="hamburgerIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="menu"
    class="md:hidden hidden flex-col absolute top-16 left-0 w-full bg-white dark:bg-gray-800 shadow-md border-t dark:border-gray-700">

    <!-- Home -->
    <a href="{{ route('home') }}"
        class="{{ request()->is('/') ? 'text-green-600 dark:text-green-400 font-bold' : 'text-gray-600 dark:text-gray-300' }} block p-4 border-b dark:border-gray-700">
        Home
    </a>

    <!-- Blog -->
    <a href="{{ route('blog.index') }}"
        class="{{ request()->is('blog*') ? 'text-green-600 dark:text-green-400 font-bold' : 'text-gray-600 dark:text-gray-300' }} block p-4 border-b dark:border-gray-700">
        Blog
    </a>

    <!-- Profile Dropdown -->
    <div class="border-b dark:border-gray-700">
        <span id="profileBtnMobile"
            class="{{ request()->is('profile*') ? 'text-green-600 dark:text-green-400 font-bold' : 'text-gray-600 dark:text-gray-300' }} flex items-center justify-between p-4 cursor-pointer">
            Profile
            <svg id="arrowIconMobile" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-gray-600 dark:text-gray-300 transition-transform"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </span>

        <!-- Dropdown Menu Mobile -->
        <div id="dropdownMenuMobile" class="hidden bg-gray-50 dark:bg-gray-700">
            <a href="{{ route('profile.sejarah') }}"
                class="block px-8 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                Sejarah
            </a>
            <a href="{{ route('profile.susunankepengurusan') }}"
                class="block px-8 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                Susunan Kepengurusan
            </a>
        </div>
    </div>
</div>

</nav>

<!-- ====== Script Dropdown & Menu ====== -->
<script>
    // ===== Desktop Dropdown =====
    const profileBtnDesktop = document.getElementById('profileBtnDesktop');
    const dropdownMenuDesktop = document.getElementById('dropdownMenuDesktop');
    const arrowIconDesktop = document.getElementById('arrowIconDesktop');

    profileBtnDesktop.addEventListener('click', () => {
        dropdownMenuDesktop.classList.toggle('hidden');
        arrowIconDesktop.classList.toggle('rotate-180');
    });

    // Klik di luar dropdown desktop untuk menutup
    document.addEventListener('click', (e) => {
        if (!profileBtnDesktop.contains(e.target) && !dropdownMenuDesktop.contains(e.target)) {
            dropdownMenuDesktop.classList.add('hidden');
            arrowIconDesktop.classList.remove('rotate-180');
        }
    });

    // ===== Mobile Dropdown =====
    const profileBtnMobile = document.getElementById('profileBtnMobile');
    const dropdownMenuMobile = document.getElementById('dropdownMenuMobile');
    const arrowIconMobile = document.getElementById('arrowIconMobile');

    profileBtnMobile.addEventListener('click', () => {
        dropdownMenuMobile.classList.toggle('hidden');
        arrowIconMobile.classList.toggle('rotate-180');
    });

    // ===== Mobile Hamburger Menu =====
    const menuToggle = document.getElementById('menuToggle');
    const menu = document.getElementById('menu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    function toggleMenu() {
        menu.classList.toggle('hidden');
        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
</script>
