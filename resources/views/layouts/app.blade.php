<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Hmi Cabang Ponorogo')</title>
    <meta property="og:title" content="{{ $post->title ?? 'Default Title' }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($post->content ?? 'Default Description'), 150) }}">
    <meta property="og:image"
        content="{{ isset($post->thumbnail) ? asset('storage/' . $post->thumbnail) : asset('images/default-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('template/images/logo-web.png') }}" type="image/png">
    <meta property="og:image" content="{{ asset('template/images/logo-web.png') }}">
    <meta property="og:title" content="Himpunan Mahasiswa Islam Cabang Ponorogo">
    <meta property="og:description"
        content=" Himpunan Mahasiswa Islam (HMI) Cabang Ponorogo adalah salah satu cabang organisasi mahasiswa Islam terbesar
            di Indonesia, yang berada di wilayah Ponorogo. Sebagai bagian dari HMI, cabang ini memiliki peran penting
            dalam mewadahi aspirasi, pengembangan intelektual, dan pembinaan keislaman mahasiswa di daerah tersebut.">


</head>

<body class="min-h-screen bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">


    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <div>
        @yield('content')
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop"
        class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-green-600 to-teal-600 text-white rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center z-50 group">
          <svg class="w-6 h-6 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
    </button>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('template/script.js') }}"></script>

    <script>
        // Loading Screen
        window.addEventListener("load", function() {
            const loader = document.getElementById("loading-screen");
            if (loader) loader.style.display = "none";
        });

        // Initialize AOS
        AOS.init({
            duration: 1000,
            offset: 100,
            once: true,
        });

        // Dropdown Profile (Desktop)
        document.addEventListener('DOMContentLoaded', function() {
            const profileBtn = document.getElementById('profileBtn');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const arrowIcon = document.getElementById('arrowIcon');

            if (profileBtn && dropdownMenu && arrowIcon) {
                profileBtn.addEventListener('click', function(event) {
                    event.stopPropagation();
                    dropdownMenu.classList.toggle('hidden');
                    arrowIcon.classList.toggle('rotate-180');
                });

                window.addEventListener('click', function(event) {
                    if (!profileBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                        arrowIcon.classList.remove('rotate-180');
                    }
                });
            }
        });

        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.remove('hidden');
            } else {
                scrollToTopBtn.classList.add('hidden');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>
