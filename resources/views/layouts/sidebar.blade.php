<div class="lg:col-span-1">
    <!-- Categories -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-4 ">Categories</h2>

        <!-- Initially show first 10 categories -->
        <ul class="space-y-2 mt-4" id="category-list-limited">
            @foreach ($categories->take(10) as $category)
                <li>
                    <a href="{{ route('categories.show', $category->slug) }}"
                       class="text-gray-600 hover:text-blue-500 hover:underline">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Initially hidden full category list (categories 11 and onward) -->
        <ul class="space-y-2 hidden mt-2" id="category-list-all">
            @foreach ($categories->skip(10) as $category)
                <li>
                    <a href="{{ route('categories.show', $category->slug) }}"
                       class="text-gray-600 hover:text-blue-500 hover:underline">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Button to toggle full category list -->
        @if ($totalCategoriesCount > 10)
            <button id="see-more-btn" class="text-blue-600 hover:underline mt-2">Lihat Lainnya</button>
            <button id="see-less-btn" class="text-blue-600 hover:underline mt-2 hidden">Sembunyikan</button>
        @endif
    </div>






    <!-- Most Popular Posts -->
    <div>
        <h2 class="text-2xl font-bold mb-4">Most Popular Post</h2>
        <div class="space-y-4">
            @foreach ($popularPosts as $popularPost)
                <a href="{{ route('blog.show', $popularPost->slug) }}" class="flex items-center gap-4">
                    <div class="relative w-16 h-16 rounded-lg overflow-hidden flex-shrink-0">
                        <img src="{{ asset('storage/' . $popularPost->thumbnail) }}"
                            alt="templates for class names, generatin" class="object-cover w-full h-full" />
                    </div>
                    <h3 class="font-medium text-gray-600">
                        {{ \Illuminate\Support\Str::limit($popularPost->title, 45, '...') }}
                    </h3>
                </a>
            @endforeach
        </div>
    </div>
</div>
