@extends('layouts.app')
@section('title', 'Hmi Cabang Ponorogo')
@section('content')

    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .snap-x {
            scroll-snap-type: x mandatory;
        }

        .snap-start {
            scroll-snap-align: start;
        }

        .snap-always {
            scroll-snap-stop: always;
        }
    </style>

    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12 grid md:grid-cols-2 gap-8 sm:gap-12 items-center"
        data-aos="zoom-in">
        <div class="space-y-6 sm:space-y-8">
            <div>
                <div
                    class="inline-block px-3 sm:px-4 py-1.5 sm:py-2 bg-gradient-to-r from-green-100 to-teal-100 dark:from-green-900/30 dark:to-teal-900/30 rounded-full mb-3 sm:mb-4">
                    <span class="text-green-700 dark:text-green-300 font-semibold text-xs sm:text-sm">🌟 Organisasi Mahasiswa
                        Islam</span>
                </div>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    HMI CABANG PONOROGO
                </h1>
            </div>
            <p class="text-gray-600 dark:text-gray-300 text-base sm:text-lg text-justify leading-relaxed">
                Himpunan Mahasiswa Islam (HMI) Cabang Ponorogo adalah salah satu cabang organisasi mahasiswa Islam terbesar
                di Indonesia, yang berada di wilayah Ponorogo. Sebagai bagian dari HMI, cabang ini memiliki peran penting
                dalam mewadahi aspirasi, pengembangan intelektual, dan pembinaan keislaman mahasiswa di daerah tersebut.
            </p>
            <div
                class="flex items-center gap-3 sm:gap-4 p-3 sm:p-4 bg-gradient-to-r from-green-50 to-teal-50 dark:from-green-900/20 dark:to-teal-900/20 rounded-xl border-l-4 border-green-600">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 sm:h-8 sm:w-8 text-green-600 dark:text-green-400 flex-shrink-0" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div>
                    <div class="text-base sm:text-lg font-bold text-gray-900 dark:text-white">Hubungi kami 085785864497
                    </div>
                    <div class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">Untuk pertanyaan atau keluhan</div>
                </div>

            </div>
        </div>

        <!-- Hidden on mobile (< md breakpoint) -->
        <div class="hidden md:block relative h-64 sm:h-80 md:h-96 lg:h-[500px] rounded-2xl" data-aos="fade-left">
            <div class="relative w-full h-full">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-teal-500/20 rounded-2xl blur-3xl"></div>
                <img id="image-slider-1" src="{{ asset('template/images/d-2.jpeg') }}" alt="HMI Members"
                    class="object-cover w-full h-full rounded-2xl shadow-2xl transition-opacity duration-1000 opacity-100 absolute inset-0 border-4 border-white dark:border-gray-800">
                <img id="image-slider-2" src="{{ asset('template/images/d-1.jpeg') }}" alt="HMI Activities"
                    class="object-cover w-full h-full rounded-2xl shadow-2xl transition-opacity duration-1000 opacity-0 absolute inset-0 border-4 border-white dark:border-gray-800">
            </div>
        </div>
    </div>


    <!-- Chairman Section - MOVED TO TOP -->
    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <div class="text-center mb-8 sm:mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-2">Sambutan Ketua Umum</h2>
            <div class="w-20 sm:w-24 h-1 bg-gradient-to-r from-green-500 via-teal-600 to-emerald-600 mx-auto rounded-full">
            </div>
        </div>

        <div
            class="max-w-6xl mx-auto bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 shadow-2xl rounded-2xl sm:rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-700">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Photo Section -->
                <div class="relative flex-shrink-0 p-6 sm:p-8 lg:p-12 w-full lg:w-auto" data-aos="fade-right">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-green-500 via-teal-600 to-emerald-600 rounded-full blur-2xl opacity-20 animate-pulse">
                        </div>
                        <div class="relative flex justify-center">
                            <img src="{{ asset('template/images/nanda-2.png') }}" alt="Ketua Umum HMI"
                                class="w-48 h-48 sm:w-56 sm:h-56 md:w-64 md:h-64 rounded-full border-4 sm:border-8 border-white dark:border-gray-700 shadow-2xl object-cover relative z-10" />
                            <div
                                class="absolute bottom-2 sm:bottom-4 right-2 sm:right-4 bg-gradient-to-r from-green-600 to-teal-600 text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-lg text-xs sm:text-sm font-bold z-20">
                                Ketua Umum
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 sm:mt-6 space-y-1 sm:space-y-2">
                        <h3 class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-white">Nanda Dwi Yanuari</h3>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 font-medium">Periode 2025-2026</p>
                        <div class="flex items-center justify-center gap-2 text-green-600 dark:text-green-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm font-medium">HMI Cabang Ponorogo</span>
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="p-6 sm:p-8 lg:p-12 lg:pl-8 flex-1 w-full" data-aos="fade-left">
                    <div class="mb-4 sm:mb-6">
                        <div
                            class="inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 bg-gradient-to-r from-green-50 to-teal-50 dark:from-green-900/20 dark:to-teal-900/20 rounded-full mb-3 sm:mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 sm:h-5 sm:w-5 text-green-600 dark:text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span class="text-xs sm:text-sm font-bold text-green-700 dark:text-green-300">Sambutan</span>
                        </div>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-2">
                            Assalamualaikum Warahmatullahi Wabarakatuh
                        </h2>
                    </div>

                    <div
                        class="space-y-3 sm:space-y-4 text-sm sm:text-base text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                        <p
                            class="first-letter:text-3xl sm:first-letter:text-5xl first-letter:font-bold first-letter:text-green-600 dark:first-letter:text-green-400 first-letter:mr-1 sm:first-letter:mr-2 first-letter:float-left">
                            Selamat datang di situs resmi HMI Cabang Ponorogo. Tujuan dari kehadiran website HMI Cabang
                            Ponorogo ini sebagai media informasi, wadah penyampaian aspirasi kader serta sarana dakwah.
                        </p>

                        <p>
                            HMI Cabang Ponorogo sesuai dengan tingkatan strukturalnya berada pada tingkatan Cabang yang saat
                            ini melingkupi kader HMI di 5 Wilayah, yaitu, <span
                                class="font-semibold text-green-600 dark:text-green-400">Kabupaten Ponorogo, Kabupaten
                                Magetan, Kabupaten Madiun, Kota Madiun, dan Kabupaten Ngawi</span>.
                        </p>

                        <p>
                            Berada pada tingkatan Cabang, HMI Cabang Ponorogo tetap menjunjung tinggi komitmen Keislaman dan
                            Komitmen Keindonesiaan yang di aktualisasikan dalam lingkup daerah dengan berdasarkan prinsip
                            Integratif sebagai bentuk manajemen kerja Organisasi.
                        </p>

                        <div
                            class="mt-4 sm:mt-6 p-4 sm:p-6 bg-gradient-to-r from-green-50 to-teal-50 dark:from-green-900/20 dark:to-teal-900/20 rounded-xl sm:rounded-2xl border-l-4 border-green-600 dark:border-green-400">
                            <p class="text-gray-800 dark:text-gray-200 font-medium italic">
                                "Salam hangat dari saya <span class="font-bold text-green-700 dark:text-green-300">Nanda Dwi
                                    Yanuari</span> selaku Ketua Umum Himpunan Mahasiswa Islam Cabang Ponorogo Periode
                                2025-2026."
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 sm:gap-4 mt-6 sm:mt-8">
                        <div
                            class="text-center p-3 sm:p-4 bg-white dark:bg-gray-800 rounded-lg sm:rounded-xl shadow-md border border-gray-200 dark:border-gray-700">
                            <div class="text-xl sm:text-2xl font-bold text-green-600 dark:text-green-400">5</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400 mt-1">Wilayah</div>
                        </div>
                        <div
                            class="text-center p-3 sm:p-4 bg-white dark:bg-gray-800 rounded-lg sm:rounded-xl shadow-md border border-gray-200 dark:border-gray-700">
                            <div class="text-xl sm:text-2xl font-bold text-teal-600 dark:text-teal-400">18</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400 mt-1">Komisariat</div>
                        </div>
                        <div
                            class="text-center p-3 sm:p-4 bg-white dark:bg-gray-800 rounded-lg sm:rounded-xl shadow-md border border-gray-200 dark:border-gray-700">
                            <div class="text-xl sm:text-2xl font-bold text-emerald-600 dark:text-emerald-400">1000+</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400 mt-1">Kader</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->


    <!-- About Section -->
    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <div class="text-center mb-8 sm:mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-2">Tentang Kami</h2>
            <div class="w-20 sm:w-24 h-1 bg-gradient-to-r from-green-500 via-teal-600 to-emerald-600 mx-auto rounded-full">
            </div>
        </div>

        <div
            class="flex flex-col lg:flex-row items-center gap-8 sm:gap-12 bg-white dark:bg-gray-800 rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden p-6 sm:p-8 lg:p-12">
            <div class="flex-shrink-0 w-full lg:w-auto" data-aos="fade-right">
                <div class="relative flex justify-center lg:justify-start">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-green-500 to-teal-600 rounded-3xl blur-3xl opacity-20 animate-pulse">
                    </div>
                    <img src="{{ asset('template/images/logo-hmi.png') }}" alt="HMI Logo"
                        class="w-48 h-48 sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-72 lg:h-72 relative z-10 object-contain" />
                </div>
            </div>

            <div class="flex-1 w-full" data-aos="fade-left">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-4 sm:mb-6">
                    HMI, Himpunan Mahasiswa Islam
                </h1>
                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300 leading-relaxed mb-3 sm:mb-4 text-justify">
                    Himpunan Mahasiswa Islam (HMI) adalah organisasi mahasiswa yang dibentuk untuk menampung potensi dan
                    aspirasi mahasiswa di Indonesia. Didirikan pada <span
                        class="font-semibold text-green-600 dark:text-green-400">5 Februari 1947</span>, HMI memiliki
                    tujuan untuk menciptakan
                    mahasiswa yang berkepribadian Muslim, berpengetahuan luas, serta berkontribusi dalam membangun bangsa
                    dan
                    negara.
                </p>
                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300 leading-relaxed mb-4 sm:mb-6 text-justify">
                    Organisasi ini berkomitmen untuk memperjuangkan nilai-nilai Islam sebagai pedoman universal dalam
                    kehidupan bermasyarakat, berbangsa, dan bernegara.
                </p>
                <a href="{{ route('profile.sejarah') }}"
                    class="inline-flex items-center gap-2 px-4 sm:px-6 py-2 sm:py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white text-sm sm:text-base font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <div class="text-center mb-8 sm:mb-12" data-aos="fade-up">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">Kegiatan</h2>
                <!-- Navigation Arrows -->
                <div class="hidden lg:flex gap-2">
                    <button id="activities-prev"
                        class="p-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-300 hover:bg-green-50 dark:hover:bg-green-900/20 hover:text-green-600 dark:hover:text-green-400 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="activities-next"
                        class="p-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-300 hover:bg-green-50 dark:hover:bg-green-900/20 hover:text-green-600 dark:hover:text-green-400 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-20 sm:w-24 h-1 bg-gradient-to-r from-green-500 via-teal-600 to-emerald-600 mx-auto rounded-full">
            </div>
        </div>

        <!-- Scrollable Container (No Shadow Gradient) -->
        <div class="relative">
            <!-- Scrollable Grid with Snap -->
            <div id="activities-container" class="overflow-x-auto scrollbar-hide scroll-smooth snap-x snap-mandatory">
                <div class="flex gap-4 sm:gap-6 pb-4 px-2">
                    @foreach ($kegiatans as $index => $kegiatan)
                        <article
                            class="group bg-white dark:bg-gray-800 rounded-xl sm:rounded-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-500 border border-gray-200 dark:border-gray-700 flex-shrink-0 w-72 sm:w-80 snap-start snap-always"
                            data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                            <div
                                class="relative h-56 sm:h-64 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800">
                                @if ($kegiatan->gambar)
                                    <img src="{{ asset('storage/' . $kegiatan->gambar) }}" alt="{{ $kegiatan->nama }}"
                                        class="object-cover object-center w-full h-full group-hover:scale-110 transition-transform duration-700">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    </div>
                                @else
                                    <div class="w-full h-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-16 w-16 text-gray-400 dark:text-gray-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif

                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-block px-3 py-1 bg-gradient-to-r from-green-600 to-teal-600 text-white text-xs font-bold rounded-full shadow-lg">
                                        Kegiatan
                                    </span>
                                </div>
                            </div>

                            <div class="p-4 sm:p-6">
                                <h3
                                    class="text-base sm:text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors duration-300">
                                    {{ $kegiatan->nama }}
                                </h3>
                                <p
                                    class="text-sm sm:text-base text-gray-600 dark:text-gray-300 line-clamp-3 leading-relaxed">
                                    {{ \Illuminate\Support\Str::limit($kegiatan->deskripsi, 100) }}
                                </p>
                            </div>

                            <div
                                class="h-1 bg-gradient-to-r from-green-500 via-teal-600 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- Scroll Indicator Dots -->
            <div class="flex justify-center gap-2 mt-6 lg:hidden">
                @foreach ($kegiatans as $index => $kegiatan)
                    <div class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600 activity-dot transition-all duration-300"
                        data-index="{{ $index }}"></div>
                @endforeach
            </div>
        </div>

        @if ($kegiatans->isEmpty())
            <div class="text-center py-12 sm:py-16" data-aos="fade-up">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-20 w-20 sm:h-24 sm:w-24 mx-auto text-gray-400 dark:text-gray-600 mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-white mb-2">Belum Ada Kegiatan</h3>
                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Kegiatan akan segera ditambahkan</p>
            </div>
        @endif
    </div>

  <!-- Latest Posts Section -->
<div class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 rounded-2xl">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 sm:mb-12 gap-4" data-aos="fade-up">
        <div class="text-center md:text-left">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-2">
                📰 Artikel Terbaru
            </h2>
            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Berita dan artikel terkini dari HMI Cabang Ponorogo</p>
        </div>
        <a href="/blog"
            class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 bg-gradient-to-r from-green-600 to-teal-600 hover:from-green-700 hover:to-teal-700 text-white text-sm sm:text-base font-semibold rounded-full shadow-lg transform hover:scale-105 transition-all duration-300"
            data-aos="fade-left">
            Lihat Semua
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 ml-2" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        @foreach ($latestPosts as $index => $post)
            <article
                class="group relative bg-white dark:bg-gray-800 rounded-xl sm:rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500"
                data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                <a href="{{ route('blog.show', $post->slug) }}" class="block">
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                            class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <div class="absolute top-3 sm:top-4 right-3 sm:right-4">
                            <span
                                class="inline-flex items-center px-3 sm:px-4 py-1 sm:py-1.5 rounded-full text-xs font-bold bg-gradient-to-r from-green-600 to-teal-600 text-white shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                                {{ $post->category->name }}
                            </span>
                        </div>
                        @if ($index === 0)
                            <div class="absolute top-3 sm:top-4 left-3 sm:left-4">
                                <span
                                    class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-red-500 to-pink-600 text-white shadow-lg animate-pulse">
                                    Terbaru
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="p-4 sm:p-6">
                        <div
                            class="flex items-center gap-3 sm:gap-4 text-xs sm:text-sm text-gray-500 dark:text-gray-400 mb-3 sm:mb-4">
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-gradient-to-r from-green-600 to-teal-600 flex items-center justify-center text-white font-bold text-xs">
                                    {{ substr($post->user->name, 0, 1) }}
                                </div>
                                <span class="font-medium truncate">{{ $post->user->name }}</span>
                            </div>
                            <div class="flex items-center gap-1 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $post->published_at->format('d M Y') }}</span>
                            </div>
                        </div>
                        <h3
                            class="text-lg sm:text-xl font-bold text-gray-900 dark:text-white mb-2 sm:mb-3 line-clamp-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors duration-300">
                            {{ $post->title }}
                        </h3>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300 line-clamp-3 mb-3 sm:mb-4">
                            {!! Str::limit(strip_tags($post->content), 120) !!}
                        </p>
                        <div
                            class="flex items-center text-green-600 dark:text-green-400 text-sm sm:text-base font-semibold group-hover:gap-2 transition-all duration-300">
                            <span>Baca Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 sm:h-5 sm:w-5 transform group-hover:translate-x-2 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>

                </a>
            </article>
        @endforeach
    </div>

    @if ($latestPosts->isEmpty())
        <div class="text-center py-12 sm:py-16" data-aos="fade-up">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-20 w-20 sm:h-24 sm:w-24 mx-auto text-gray-400 dark:text-gray-600 mb-4" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <h3 class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-white mb-2">Belum Ada Artikel</h3>
            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Artikel terbaru akan ditampilkan di sini
            </p>
        </div>
    @endif
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hero Image Slider
            const images = document.querySelectorAll('[id^="image-slider-"]');
            let currentImageIndex = 0;

            function switchImage() {
                // Hide all images
                images.forEach(img => {
                    img.classList.remove('opacity-100');
                    img.classList.add('opacity-0');
                });

                // Show current image
                images[currentImageIndex].classList.remove('opacity-0');
                images[currentImageIndex].classList.add('opacity-100');

                // Move to next image
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            // Initial display
            switchImage();

            // Auto slide every 5 seconds
            setInterval(switchImage, 5000);

            // Activities Slider
            const container = document.getElementById('activities-container');
            const prevBtn = document.getElementById('activities-prev');
            const nextBtn = document.getElementById('activities-next');

            if (!container || !prevBtn || !nextBtn) return;

            const cards = container.querySelectorAll('article');
            let currentIndex = 0;

            // Scroll to specific card
            function scrollToCard(index) {
                if (index < 0 || index >= cards.length) return;

                const card = cards[index];
                const containerRect = container.getBoundingClientRect();
                const cardRect = card.getBoundingClientRect();

                const scrollLeft = card.offsetLeft - container.offsetLeft - (containerRect.width / 2) + (cardRect
                    .width / 2);

                container.scrollTo({
                    left: scrollLeft,
                    behavior: 'smooth'
                });

                currentIndex = index;
                updateButtons();
            }

            // Next button - scroll to next card
            nextBtn.addEventListener('click', function() {
                if (currentIndex < cards.length - 1) {
                    scrollToCard(currentIndex + 1);
                }
            });

            // Previous button - scroll to previous card
            prevBtn.addEventListener('click', function() {
                if (currentIndex > 0) {
                    scrollToCard(currentIndex - 1);
                }
            });

            // Update button states
            function updateButtons() {
                prevBtn.disabled = currentIndex <= 0;
                nextBtn.disabled = currentIndex >= cards.length - 1;
            }

            // Detect current card on scroll end
            let scrollTimeout;
            container.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);

                scrollTimeout = setTimeout(function() {
                    const containerCenter = container.scrollLeft + container.offsetWidth / 2;

                    let closestIndex = 0;
                    let closestDistance = Infinity;

                    cards.forEach((card, index) => {
                        const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                        const distance = Math.abs(containerCenter - cardCenter);

                        if (distance < closestDistance) {
                            closestDistance = distance;
                            closestIndex = index;
                        }
                    });

                    currentIndex = closestIndex;
                    updateButtons();
                    updateDots();
                }, 150);
            });

            // Update dots indicator
            function updateDots() {
                const dots = document.querySelectorAll('.activity-dot');
                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.add('bg-green-600', 'dark:bg-green-400', 'w-8');
                        dot.classList.remove('bg-gray-300', 'dark:bg-gray-600', 'w-2');
                    } else {
                        dot.classList.remove('bg-green-600', 'dark:bg-green-400', 'w-8');
                        dot.classList.add('bg-gray-300', 'dark:bg-gray-600', 'w-2');
                    }
                });
            }

            updateButtons();
            updateDots();

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    prevBtn.click();
                } else if (e.key === 'ArrowRight') {
                    nextBtn.click();
                }
            });
        });
    </script>
@endsection
