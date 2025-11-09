<!-- filepath: /Users/muhammadzainurroziqin/Documents/coding/website-cabang-hmi/resources/views/errors/419.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>419 - Halaman Kadaluarsa | HMI CABANG PONOROGO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-yellow-50 to-amber-50 dark:from-gray-900 dark:to-gray-800 flex items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <div class="mb-8" data-aos="fade-down">
            <h1 class="text-8xl sm:text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-amber-600 animate-pulse">
                419
            </h1>
        </div>

        <div class="mb-8 flex justify-center" data-aos="fade-up" data-aos-delay="100">
            <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full bg-gradient-to-br from-yellow-100 to-amber-100 dark:from-yellow-900/20 dark:to-amber-900/20 flex items-center justify-center shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 sm:h-20 sm:w-20 text-yellow-600 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div class="mb-8 space-y-4" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">
                Sesi Anda Telah Berakhir
            </h2>
            <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                Halaman ini telah kadaluarsa karena tidak ada aktivitas dalam waktu yang lama. Silakan muat ulang halaman untuk melanjutkan.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="300">
            <button onclick="location.reload()" class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-yellow-600 to-amber-600 text-white font-semibold rounded-full hover:from-yellow-700 hover:to-amber-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Muat Ulang Halaman
            </button>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 font-semibold rounded-full hover:bg-gray-50 dark:hover:bg-gray-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl border border-gray-200 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>

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
