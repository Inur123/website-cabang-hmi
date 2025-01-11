@extends('layouts.app')

@include('layouts.header')

<div class="container mx-auto px-6 py-12">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 md:col-span-2">
            <h1 class="text-3xl font-bold mb-6">{{ $category->name }}</h1>

            <!-- First row of cards (one card per row on lg screens, two cards per row on smaller screens) -->
            <div class="grid lg:grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                @foreach ($posts->take(2)->sortByDesc('published_at') as $post)
                <article class="rounded-lg overflow-hidden dark:bg-gray-900 dark:text-gray-100 border dark:border-gray-700 hover:border-blue-500 dark:hover:border-gray-300">
                    <a href="{{ route('blog.show', $post->slug) }}">
                        <div class="flex flex-col lg:flex-row">
                            <!-- Image on top for non-lg screens, left for lg screens -->
                            <div class="w-full lg:w-1/3">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Phoenix illustration" class="object-cover w-full h-full">
                            </div>

                            <!-- Content on the right for lg, on the bottom for non-lg -->
                            <div class="p-6 w-full lg:w-2/3">
                                <h2 class="text-xl font-bold mb-2">{!! $post->title !!}</h2>
                                <!-- Content Below the Category -->
                                <div class="text-gray-700 dark:text-gray-300 mb-4">
                                    {!! Str::limit($post->content, 150) !!}
                                </div>
                                <div class="flex items-center gap-4 text-sm text-gray-600 mb-3">
                                    <div class="flex items-center gap-1">
                                        <span>{{ $post->user->name }}</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span>{{ $post->published_at->format('d M Y') }}</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="font-medium">{{ $post->category->name }}</span>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </a>
                </article>


                @endforeach
            </div>

            <!-- Second row of cards (one card per row on lg screens, two cards per row on smaller screens) -->
            <div class="grid lg:grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($posts->skip(2)->take(2)->sortByDesc('published_at') as $post)
                    <article class="bg-white rounded-lg overflow-hidden shadow-lg dark:bg-gray-900 dark:text-gray-100 border dark:border-gray-700 hover:border-blue-500 dark:hover:border-gray-300">
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <div class="flex">
                                <!-- Image on the left -->
                                <div class="w-1/3">
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Phoenix illustration" class="object-cover w-full h-full">
                                </div>

                                <!-- Content on the right -->
                                <div class="p-6 w-2/3">
                                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-3">
                                        <div class="flex items-center gap-1">
                                            <span>{{ $post->user->name }}</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span>{{ $post->published_at->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                    <h2 class="text-xl font-bold mb-2">{!! $post->title !!}</h2>
                                    <div class="flex items-start gap-1">
                                        <span class="font-medium">{{ $post->category->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <!-- Pagination links -->
            <div class="mt-6">
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
    document.getElementById('see-more-btn').addEventListener('click', function() {
        document.getElementById('category-list-all').classList.remove('hidden');
        document.getElementById('see-more-btn').classList.add('hidden');
        document.getElementById('see-less-btn').classList.remove('hidden');
    });

    document.getElementById('see-less-btn').addEventListener('click', function() {
        document.getElementById('category-list-all').classList.add('hidden');
        document.getElementById('see-more-btn').classList.remove('hidden');
        document.getElementById('see-less-btn').classList.add('hidden');
    });
</script>

@include('layouts.footer')
