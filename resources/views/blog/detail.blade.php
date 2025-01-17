@extends('layouts.app')

<meta property="og:title" content="{{ $post->title ?? 'Default Title' }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($post->content ?? 'Default Description'), 150) }}">
<meta property="og:image" content="{{ isset($post->thumbnail) ? asset('storage/' . $post->thumbnail) : asset('images/default-image.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">


@include('layouts.header')

<div class="container mx-auto px-6 py-12">
    <div class="grid lg:grid-cols-3 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <article>
                <div class="relative h-[400px] rounded-lg overflow-hidden mb-8">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Featured image"
                        class="object-cover w-full h-full" />
                </div>

                <h1 class="text-4xl font-bold mb-6">{{ $post->title }}</h1>

                <div class="flex flex-wrap gap-6 text-gray-600 mb-8">
                    <div class="flex flex-col items-start gap-1">
                        <span>Author:</span>
                        <span class="font-medium">{{ $post->user->name }}</span>

                    </div>
                    <div class="flex flex-col items-start gap-1">
                        <span>Published On:</span>
                        <span class="font-medium">{{ $post->published_at->format('d M Y') }}</span>
                    </div>
                    <div class="flex flex-col items-start gap-1">
                        <span>Category</span>
                        <a href="{{ route('categories.show', $post->category->slug) }}" class="font-medium text-blue-600 hover:underline">
                            {{ $post->category->name }}
                        </a>
                    </div>
                </div>

                <div class="prose max-w-none">
                    <p class="text-justify">
                        {!! $post->content !!}
                    </p>
                </div>

                <div class="mt-8 pt-8 border-t">
                    <div class="flex items-center gap-2">
                        <span>Share this Post:</span>
                        <div class="inline-flex items-center gap-4 text-green-600">
                            <!-- WhatsApp Image -->
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank">
                                <img src="{{ asset('template/images/wa.png') }}" alt="WhatsApp" class="w-10 h-10">
                            </a>
                        </div>
                    </div>
                </div>

            </article>
        </div>

        <!-- Sidebar -->
        @include('layouts.sidebar')
    </div>
</div>

<script>
    // Get the buttons and category lists
    document.getElementById('see-more-btn').addEventListener('click', function() {
        // Show the full category list
        document.getElementById('category-list-all').classList.remove('hidden');
        // Hide the 'See More' button and show the 'Show Less' button
        document.getElementById('see-more-btn').classList.add('hidden');
        document.getElementById('see-less-btn').classList.remove('hidden');
    });

    document.getElementById('see-less-btn').addEventListener('click', function() {
        // Hide the full category list
        document.getElementById('category-list-all').classList.add('hidden');
        // Show the 'See More' button and hide the 'Show Less' button
        document.getElementById('see-more-btn').classList.remove('hidden');
        document.getElementById('see-less-btn').classList.add('hidden');
    });
</script>
@include('layouts.footer')
