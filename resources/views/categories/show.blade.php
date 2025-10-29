@extends('layouts.app')
@section('title', $category->name . ' - HMI CABANG PONOROGO')
@section('content')

<div class="container mx-auto px-6 py-12">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 md:col-span-2">
            <h1 class="text-3xl font-bold mb-6">{{ $category->name }}</h1>

            <!-- All Posts with Consistent Layout -->
            <div class="grid lg:grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($posts as $post)
                    <article class="rounded-lg overflow-hidden dark:bg-gray-900 dark:text-gray-100 border dark:border-gray-700 hover:border-blue-500 dark:hover:border-gray-300 transition-colors">
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <div class="flex flex-col lg:flex-row">
                                <!-- Image -->
                                <div class="w-full lg:w-1/3">
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}"
                                         alt="{{ $post->title }}"
                                         class="object-cover w-full h-48 lg:h-full">
                                </div>

                                <!-- Content -->
                                <div class="p-6 w-full lg:w-2/3">
                                    <!-- Meta Info -->
                                    <div class="flex items-center gap-4 text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        <div class="flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span>{{ $post->user->name }}</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span>{{ $post->published_at->format('d M Y') }}</span>
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h2 class="text-xl font-bold mb-3 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                        {!! $post->title !!}
                                    </h2>

                                    <!-- Excerpt -->
                                    <div class="text-gray-700 dark:text-gray-300 mb-4 line-clamp-3">
                                        {!! Str::limit(strip_tags($post->content), 150) !!}
                                    </div>

                                    <!-- Category Badge -->
                                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200">
                                        {{ $post->category->name }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            @include('layouts.sidebar')
        </div>
    </div>
</div>

<script>
    document.getElementById('see-more-btn')?.addEventListener('click', function() {
        document.getElementById('category-list-all')?.classList.remove('hidden');
        this.classList.add('hidden');
        document.getElementById('see-less-btn')?.classList.remove('hidden');
    });

    document.getElementById('see-less-btn')?.addEventListener('click', function() {
        document.getElementById('category-list-all')?.classList.add('hidden');
        this.classList.add('hidden');
        document.getElementById('see-more-btn')?.classList.remove('hidden');
    });
</script>

@endsection
