<!-- filepath: /Users/muhammadzainurroziqin/Documents/coding/website-cabang-hmi/resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | HMI CABANG PONOROGO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 flex items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <!-- Error Code -->
        <div class="mb-8" data-aos="fade-down">
            <h1 class="text-8xl sm:text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-teal-600 animate-pulse">
                404
            </h1>
        </div>

        <!-- Icon -->
        <div class="mb-8 flex justify-center" data-aos="fade-up" data-aos-delay="100">
            <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full bg-gradient-to-br from-green-100 to-teal-100 dark:from-green-900/20 dark:to-teal-900/20 flex items-center justify-center shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 sm:h-20 sm:w-20 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <!-- Message -->
        <div class="mb-8 space-y-4" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">
                Halaman Tidak Ditemukan
            </h2>
            <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                Maaf, halaman yang Anda cari tidak dapat ditemukan. Mungkin halaman tersebut telah dipindahkan atau dihapus.
            </p>
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white font-semibold rounded-full hover:from-green-700 hover:to-teal-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Beranda
            </a>
            <button onclick="history.back()" class="inline-flex items-center gap-2 px-8 py-3 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 font-semibold rounded-full hover:bg-gray-50 dark:hover:bg-gray-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl border border-gray-200 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Halaman Sebelumnya
            </button>
        </div>

        <!-- Additional Links -->
        <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700" data-aos="fade-up" data-aos-delay="400">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Atau coba kunjungi halaman berikut:</p>
            <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
                <a href="{{ url('/profile/sejarah') }}" class="text-sm text-green-600 dark:text-green-400 hover:underline">Sejarah</a>
                <span class="text-gray-400">•</span>
                <a href="{{ url('/profile/susunankepengurusan') }}" class="text-sm text-green-600 dark:text-green-400 hover:underline">Kepengurusan</a>
                <span class="text-gray-400">•</span>
                <a href="{{ url('/berita') }}" class="text-sm text-green-600 dark:text-green-400 hover:underline">Berita</a>
                <span class="text-gray-400">•</span>
                <a href="{{ url('/contact') }}" class="text-sm text-green-600 dark:text-green-400 hover:underline">Kontak</a>
            </div>
        </div>
    </div>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>
