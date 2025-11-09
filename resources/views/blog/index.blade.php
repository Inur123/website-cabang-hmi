
@extends('layouts.app')
@section('title', 'Blog - HMI CABANG PONOROGO')
@section('content')

<div class="container mx-auto px-6 py-12">
    <!-- Header Section -->
    <div class="mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            📚 Blog Posts
        </h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg">
            Temukan artikel dan berita terbaru seputar HMI Cabang Ponorogo
        </p>
    </div>

    <!-- Posts Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($posts as $index => $post)
        <article class="group relative bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl border border-gray-200 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-500 transform hover:-translate-y-2 transition-all duration-500">
            <a href="{{ route('blog.show', $post->slug) }}" class="block">
                <!-- Image Container -->
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}"
                         alt="{{ $post->title }}"
                         class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700">

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Category Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold bg-gradient-to-r from-green-600 to-teal-600 text-white shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                            {{ $post->category->name }}
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <!-- Meta Info -->
                    <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-600 to-teal-600 flex items-center justify-center text-white font-bold text-xs shadow-md">
                                {{ substr($post->user->name, 0, 1) }}
                            </div>
                            <span class="font-medium">{{ $post->user->name }}</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                        </div>
                    </div>

                    <!-- Title -->
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors duration-300">
                        {!! $post->title !!}
                    </h2>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-300 line-clamp-3 mb-4">
                        {!! Str::limit(strip_tags($post->content), 120) !!}
                    </p>

                    <!-- Read More -->
                    <div class="flex items-center text-green-600 dark:text-green-400 font-semibold group-hover:gap-2 transition-all duration-300">
                        <span>Baca Selengkapnya</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>
                </div>
            </a>
        </article>
        @endforeach
    </div>

    <!-- Empty State -->
    @if($posts->isEmpty())
    <div class="text-center py-20">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-gray-400 dark:text-gray-600 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
        </svg>
        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Belum Ada Artikel</h3>
        <p class="text-gray-600 dark:text-gray-400">Artikel akan segera ditambahkan</p>
    </div>
    @endif

    <!-- Modern Pagination -->
    @if($posts->hasPages())
    <div class="mt-16">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <!-- Page Info -->
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    Menampilkan
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $posts->firstItem() }}</span> -
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $posts->lastItem() }}</span> dari
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $posts->total() }}</span> artikel
                </div>

                <!-- Pagination Links -->
                <nav class="flex items-center gap-2">
                    <!-- Previous Button -->
                    @if ($posts->onFirstPage())
                        <span class="px-3 sm:px-4 py-2 rounded-xl bg-gray-100 dark:bg-gray-700 text-gray-400 dark:text-gray-500 cursor-not-allowed flex items-center gap-2 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            <span class="hidden sm:inline">Prev</span>
                        </span>
                    @else
                        <a href="{{ $posts->previousPageUrl() }}" class="px-3 sm:px-4 py-2 rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 hover:bg-gradient-to-r hover:from-green-600 hover:to-teal-600 hover:text-white hover:border-transparent shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-2 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            <span class="hidden sm:inline">Prev</span>
                        </a>
                    @endif

                    <!-- Page Numbers (Desktop Only) -->
                    <div class="hidden md:flex items-center gap-2">
                        @php
                            $start = max($posts->currentPage() - 2, 1);
                            $end = min($start + 4, $posts->lastPage());
                            $start = max($end - 4, 1);
                        @endphp

                        @if($start > 1)
                            <a href="{{ $posts->url(1) }}" class="px-4 py-2 rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 hover:bg-green-50 dark:hover:bg-green-900/20 hover:border-green-500 dark:hover:border-green-400 hover:text-green-600 dark:hover:text-green-400 font-medium transition-all duration-300 transform hover:scale-105">
                                1
                            </a>
                            @if($start > 2)
                                <span class="px-2 text-gray-500 dark:text-gray-400">...</span>
                            @endif
                        @endif

                        @for ($page = $start; $page <= $end; $page++)
                            @if ($page == $posts->currentPage())
                                <span class="px-4 py-2 rounded-xl bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold shadow-lg transform scale-110 border-2 border-green-400">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $posts->url($page) }}" class="px-4 py-2 rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 hover:bg-green-50 dark:hover:bg-green-900/20 hover:border-green-500 dark:hover:border-green-400 hover:text-green-600 dark:hover:text-green-400 font-medium transition-all duration-300 transform hover:scale-105">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor

                        @if($end < $posts->lastPage())
                            @if($end < $posts->lastPage() - 1)
                                <span class="px-2 text-gray-500 dark:text-gray-400">...</span>
                            @endif
                            <a href="{{ $posts->url($posts->lastPage()) }}" class="px-4 py-2 rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 hover:bg-green-50 dark:hover:bg-green-900/20 hover:border-green-500 dark:hover:border-green-400 hover:text-green-600 dark:hover:text-green-400 font-medium transition-all duration-300 transform hover:scale-105">
                                {{ $posts->lastPage() }}
                            </a>
                        @endif
                    </div>

                    <!-- Mobile Current Page Indicator -->
                    <div class="md:hidden px-4 py-2 rounded-xl bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold shadow-lg">
                        {{ $posts->currentPage() }} / {{ $posts->lastPage() }}
                    </div>

                    <!-- Next Button -->
                    @if ($posts->hasMorePages())
                        <a href="{{ $posts->nextPageUrl() }}" class="px-3 sm:px-4 py-2 rounded-xl bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 hover:bg-gradient-to-r hover:from-green-600 hover:to-teal-600 hover:text-white hover:border-transparent shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-2 font-medium">
                            <span class="hidden sm:inline">Next</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    @else
                        <span class="px-3 sm:px-4 py-2 rounded-xl bg-gray-100 dark:bg-gray-700 text-gray-400 dark:text-gray-500 cursor-not-allowed flex items-center gap-2 font-medium">
                            <span class="hidden sm:inline">Next</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    @endif
                </nav>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection
