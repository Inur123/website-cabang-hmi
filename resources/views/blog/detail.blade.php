<!-- filepath: /Users/muhammadzainurroziqin/Documents/coding/website-cabang-hmi/resources/views/blog/detail.blade.php -->
@extends('layouts.app')
@section('title', $post->title . ' - HMI CABANG PONOROGO')
@section('content')

<meta property="og:title" content="{{ $post->title ?? 'Default Title' }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($post->content ?? 'Default Description'), 150) }}">
<meta property="og:image" content="{{ isset($post->thumbnail) ? asset('storage/' . $post->thumbnail) : asset('images/default-image.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">

<div class="container mx-auto px-6 py-12">
    <div class="grid lg:grid-cols-3 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <!-- Article Card with White Background -->
            <article class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                <!-- Full Width Thumbnail with Original Aspect Ratio -->
                <div class="relative w-full overflow-hidden" data-aos="fade-up">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}"
                         alt="{{ $post->title }}"
                         class="w-full h-auto object-contain bg-gray-100 dark:bg-gray-900" />
                </div>

                <!-- Article Content with Padding -->
                <div class="p-6 md:p-8 lg:p-10">
                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-gray-900 dark:text-white leading-tight" data-aos="fade-up">
                        {{ $post->title }}
                    </h1>

                    <!-- Meta Information -->
                    <div class="flex flex-wrap gap-6 text-sm md:text-base text-gray-600 dark:text-gray-400 mb-8 pb-6 border-b border-gray-200 dark:border-gray-700" data-aos="fade-up">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-600 to-teal-600 flex items-center justify-center text-white font-bold shadow-md">
                                {{ substr($post->user->name, 0, 1) }}
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-500 dark:text-gray-500">Author</span>
                                <span class="font-semibold text-gray-900 dark:text-white">{{ $post->user->name }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-500 dark:text-gray-500">Published</span>
                                <span class="font-semibold text-gray-900 dark:text-white">{{ $post->published_at->format('d M Y') }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-500 dark:text-gray-500">Category</span>
                                <a href="{{ route('categories.show', $post->category->slug) }}"
                                   class="font-semibold text-green-600 hover:text-green-700 dark:text-green-400 dark:hover:text-green-300 hover:underline transition-colors duration-300">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="prose prose-lg max-w-none dark:prose-invert prose-headings:text-gray-900 dark:prose-headings:text-white prose-p:text-gray-700 dark:prose-p:text-gray-300 prose-a:text-green-600 dark:prose-a:text-green-400 prose-strong:text-gray-900 dark:prose-strong:text-white prose-img:rounded-xl prose-img:shadow-lg" data-aos="fade-up">
                        <div class="text-justify leading-relaxed">
                            {!! $post->content !!}
                        </div>
                    </div>

                    <!-- Share Section -->
                    <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700" data-aos="fade-up">
                        <div class="bg-gradient-to-r from-green-50 to-teal-50 dark:from-green-900/20 dark:to-teal-900/20 rounded-2xl p-6 shadow-md">
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-r from-green-600 to-teal-600 flex items-center justify-center text-white shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Bagikan artikel ini</p>
                                        <p class="font-semibold text-gray-900 dark:text-white">Share to Social Media</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3">
                                    <!-- WhatsApp -->
                                    <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . url()->current()) }}"
                                       target="_blank"
                                       class="group relative w-12 h-12 rounded-xl bg-white dark:bg-gray-700 shadow-md hover:shadow-xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center border border-gray-200 dark:border-gray-600">
                                        <img src="{{ asset('template/images/wa.png') }}"
                                             alt="WhatsApp"
                                             class="w-7 h-7 group-hover:scale-110 transition-transform duration-300">
                                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                                            WhatsApp
                                        </span>
                                    </a>

                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                       target="_blank"
                                       class="group relative w-12 h-12 rounded-xl bg-white dark:bg-gray-700 shadow-md hover:shadow-xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center border border-gray-200 dark:border-gray-600">
                                        <svg class="w-7 h-7 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                                            Facebook
                                        </span>
                                    </a>

                                    <!-- Twitter/X -->
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank"
                                       class="group relative w-12 h-12 rounded-xl bg-white dark:bg-gray-700 shadow-md hover:shadow-xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center border border-gray-200 dark:border-gray-600">
                                        <svg class="w-6 h-6 text-black dark:text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                        </svg>
                                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                                            Twitter
                                        </span>
                                    </a>

                                    <!-- Copy Link -->
                                    <button onclick="copyToClipboard('{{ url()->current() }}')"
                                            class="group relative w-12 h-12 rounded-xl bg-white dark:bg-gray-700 shadow-md hover:shadow-xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center border border-gray-200 dark:border-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                                            Copy Link
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            @include('layouts.sidebar')
        </div>
    </div>
</div>

<script>
    // Category toggle
    document.getElementById('see-more-btn')?.addEventListener('click', function() {
        document.getElementById('category-list-all')?.classList.remove('hidden');
        document.getElementById('see-more-btn')?.classList.add('hidden');
        document.getElementById('see-less-btn')?.classList.remove('hidden');
    });

    document.getElementById('see-less-btn')?.addEventListener('click', function() {
        document.getElementById('category-list-all')?.classList.add('hidden');
        document.getElementById('see-more-btn')?.classList.remove('hidden');
        document.getElementById('see-less-btn')?.classList.add('hidden');
    });

    // Copy to clipboard function
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-fade-in-down';
            notification.innerHTML = '✓ Link berhasil disalin!';
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.remove();
            }, 3000);
        }, function(err) {
            console.error('Could not copy text: ', err);
        });
    }
</script>

<style>
    @keyframes fade-in-down {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fade-in-down 0.3s ease-out;
    }
</style>

@endsection
