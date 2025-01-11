@extends('layouts.app')
<!-- ===== Header Start ===== -->


@include('layouts.header')

<div class="container mx-auto px-6 py-12 grid md:grid-cols-2 gap-12 items-center " data-aos="zoom-in">

    <div class="space-y-8">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            HMI CABANG PONOROGO
        </h1>
        <p class="text-gray-600 dark:text-gray-300 text-lg text-justify ">
            Himpunan Mahasiswa Islam (HMI) Cabang Ponorogo adalah salah satu cabang organisasi mahasiswa Islam terbesar
            di Indonesia, yang berada di wilayah Ponorogo. Sebagai bagian dari HMI, cabang ini memiliki peran penting
            dalam mewadahi aspirasi, pengembangan intelektual, dan pembinaan keislaman mahasiswa di daerah tersebut.
        </p>
        <div class="space-y-4 ">
            <div class="space-y-1">
                <div class="text-lg font-semibold">Call us (0123) 456 - 789</div>
                <div class="text-gray-600 dark:text-gray-400">
                    For any question or concern
                </div>
            </div>
        </div>
    </div>



    <!-- Image Section -->
    <!-- Image Section -->
    <div
        class="relative h-96 md:h-[400px] rounded-lg hidden sm:block animate__animated animate__fadeIn animate__delay-900ms">
        <!-- Wrapper for smooth transition -->
        <div class="relative w-full h-full">
            <img id="image-slider-1" src="{{ asset('template/images/4.jpeg') }}" alt="IPNU  Members"
                class="object-cover w-full h-full rounded transition-opacity duration-1000 opacity-100 absolute inset-0">
            <img id="image-slider-2" src="{{ asset('template/images/3.jpeg') }}" alt="IPPNU Members"
                class="object-cover w-full h-full rounded transition-opacity duration-1000 opacity-0 absolute inset-0">
        </div>
    </div>

</div>

<!-- Features Section -->
<div class="container mx-auto px-6 py-12 bg-white rounded-xl mb-10 dark:bg-gray-800 dark:text-gray-100 ">
    <div class="grid md:grid-cols-3 gap-8">
        <div class="flex items-start space-x-4">
            <!-- Ikon SVG -->
            <div class="bg-pink-100 dark:bg-pink-900 p-4 rounded-full" data-aos="zoom-in">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>

            <!-- Teks Deskripsi -->
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="zoom-in">1000</h3>
                <p class="text-gray-600 dark:text-gray-400" data-aos="zoom-in">
                    Kader HMI Cabang Ponorogo
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4">
            <div class="bg-pink-100 dark:bg-pink-900 p-4 rounded-full" data-aos="zoom-in">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="zoom-in">18</h3>
                <p class="text-gray-600 dark:text-gray-400" data-aos="zoom-in">
                    Komisariat
                </p>
            </div>
        </div>


        <div class="flex items-start space-x-4">
            <div class="bg-pink-100 dark:bg-pink-900 p-4 rounded-full" data-aos="zoom-in">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="zoom-in">5</h3>
                <p class="text-gray-600 dark:text-gray-400" data-aos="zoom-in">
                    Master Of Training
                </p>
            </div>
        </div>

    </div>
</div>
<div class="container mx-auto text-center mb-6" data-aos="fade-up">
    <h2 class="text-4xl font-semibold text-gray-900  dark:text-white">Tentang Kami</h2>
</div>
<div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between py-12 px-8 container mx-auto">
    <!-- Bagian Kiri (Logo) -->
    <div class="flex-shrink-0 lg:ml-40" data-aos="fade-right">
        <img src="{{ asset('template/images/logo-hmi.png') }}" alt="Ipnu Logo" class="w-60 h-100" />
    </div>

    <!-- Bagian Kanan (Teks) -->
    <div class="mt-8 lg:mt-0 lg:ml-12 max-w-lg text-center lg:text-left">

        <h1 class="text-3xl font-bold mb-4" data-aos="fade-left">
            HMI, Himpunan Mahasiswa Islam
        </h1>
        <p class="text-gray-600 leading-relaxed mb-6 text-justify" data-aos="fade-left">
            Himpunan Mahasiswa Islam (HMI) adalah organisasi mahasiswa yang dibentuk untuk menampung potensi dan
            aspirasi mahasiswa di Indonesia. Didirikan pada 5 Februari 1947, HMI memiliki tujuan untuk menciptakan
            mahasiswa yang berkepribadian Muslim, berpengetahuan luas, serta berkontribusi dalam membangun bangsa dan
            negara. Organisasi ini berkomitmen untuk memperjuangkan nilai-nilai Islam sebagai pedoman universal dalam
            kehidupan bermasyarakat, berbangsa, dan bernegara.
        </p>
        <p class="text-gray-600 leading-relaxed mb-6 text-justify" data-aos="fade-left">
            Himpunan Mahasiswa Islam (HMI) adalah organisasi mahasiswa yang dibentuk untuk menampung potensi dan
            aspirasi mahasiswa di Indonesia. Didirikan pada 5 Februari 1947, HMI memiliki tujuan untuk menciptakan
            mahasiswa yang berkepribadian Muslim, berpengetahuan luas, serta berkontribusi dalam membangun bangsa dan
            negara. Organisasi ini berkomitmen untuk memperjuangkan nilai-nilai Islam sebagai pedoman universal dalam
            kehidupan bermasyarakat, berbangsa, dan bernegara.
        </p>
        <a href="https://online.flippingbook.com/view/420795888/"
        class="inline-block px-6 py-2 text-gray-700 bg-white rounded-lg shadow border border-gray-300 transition hover:border-blue-500"
        data-aos="fade-left"  target="_blank">
        Detail
    </a>
    </div>
</div>


<div class="container mx-auto text-center mb-6" data-aos="fade-up">
    <h2 class="text-3xl font-semibold text-gray-900  dark:text-white">Kegiatan</h2>
</div>
<!-- kegiatan -->
<div class="container mx-auto grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
    @foreach ($kegiatans as $kegiatan)
    <div class="container mx-auto px-4">
        <article class="bg-white rounded-lg overflow-hidden shadow-lg dark:bg-gray-900 dark:text-gray-100 border dark:border-gray-700 hover:border-blue-500 dark:hover:border-gray-300" data-aos="zoom-in">
            <div class="relative h-48">
                @if($kegiatan->gambar)
                    <img src="{{ asset('storage/' . $kegiatan->gambar) }}" alt="{{ $kegiatan->nama }}" class="object-cover w-full h-full rounded-t-lg">
                @endif
            </div>
            <div class="p-6">
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 line-clamp-3">
                    {{ \Illuminate\Support\Str::limit($kegiatan->deskripsi, 100) }}
                </p>
            </div>
        </article>
    </div>
    @endforeach
</div>






<div class="container mx-auto text-center mt-10 mb-5" data-aos="fade-up">
    <h2 class="text-4xl font-semibold text-gray-900  dark:text-white">Ketua Umum</h2>
</div>
<div class="container mx-auto ">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden dark:bg-gray-800 dark:text-gray-100">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Bagian Kiri (Logo) -->
            <div class="flex-shrink-0 p-6 lg:p-8 lg:ml-8" data-aos="fade-right">
                <img src="{{ asset('template/images/heru1.png') }}" alt="Ipnu Logo" class="w-60 h-60 rounded-full border-4 border-teal-600 dark:border-teal-400" />
            </div>
            <!-- Bagian Kanan (Teks) -->
            <div class="p-6 lg:p-8">
                <h1 class="text-3xl text-gray-900 font-bold mb-4 text-center lg:text-left dark:text-white" data-aos="fade-left">
                    Sambutan Ketua Umum
                </h1>
                <p class="text-gray-600 leading-relaxed mb-6 text-justify dark:text-gray-300" data-aos="fade-left">
                    Himpunan Mahasiswa Islam (HMI) adalah organisasi mahasiswa yang dibentuk untuk menampung potensi dan
                    aspirasi mahasiswa di Indonesia. Didirikan pada 5 Februari 1947, HMI memiliki tujuan untuk menciptakan
                    mahasiswa yang berkepribadian Muslim, berpengetahuan luas, serta berkontribusi dalam membangun bangsa dan
                    negara. Organisasi ini berkomitmen untuk memperjuangkan nilai-nilai Islam sebagai pedoman universal dalam
                    kehidupan bermasyarakat, berbangsa, dan bernegara.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto px-6 py-12">
    <div class="flex justify-between  items-center mb-8">
        <h1 class="text-3xl font-bold" data-aos="fade-right">Most Popular Posts</h1>
        <a href="/blog" class="text-blue-500 hover:underline" data-aos="fade-left">Lihat Lainnya</a>
    </div>
    <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
        @foreach ($popularPosts as $popularPost)
        <div class="container mx-auto px-4">
            <a href="{{ route('blog.show', $popularPost->slug) }}" class="block">
            <article
                class="bg-white rounded-lg overflow-hidden shadow-lg dark:bg-gray-900 dark:text-gray-100 border dark:border-gray-700  hover:border-blue-500 dark:hover:border-gray-300 "
                data-aos="zoom-in">
                {{-- <a href="{{ route('blog.show', $post->slug) }}"> --}}
                <div class="relative h-48">
                    <img src="{{ asset('storage/' . $popularPost->thumbnail) }}" alt="Phoenix illustration"
                        class="object-cover w-full h-full">
                    <!-- Kategori di pojok kanan atas -->
                    <div class="absolute top-1 right-1 bg-green-500 text-white text-xs px-2 py-1 rounded-lg">
                        <span>{{ $popularPost->category->name }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-3">
                        <div class="flex items-center gap-1">

                            <span>{{ $popularPost->user->name }}</span>

                        </div>
                        <div class="flex items-center gap-1">

                            <span>{{ $popularPost->published_at->format('d M Y') }}</span>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mb-2">
                        {{ \Illuminate\Support\Str::limit($popularPost->title, 45, '...') }}</h2>
                    {{-- <p class="text-gray-600">{!! $post->excerpt !!}</p> --}}
                </div>
                </a>
            </article>
            </a>
        </div>
        @endforeach
    </div>
</div>

@include('layouts.footer')
