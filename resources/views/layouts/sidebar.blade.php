<!-- filepath: /Users/muhammadzainurroziqin/Documents/coding/website-cabang-hmi/resources/views/layouts/sidebar.blade.php -->
<div class="lg:col-span-1 space-y-8">
    <!-- Categories Card -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-6" data-aos="fade-up">
        <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            Categories
        </h2>

        <!-- Initially show first 10 categories -->
        <ul class="space-y-3" id="category-list-limited">
            @foreach ($categories->take(10) as $category)
                <li class="group">
                    <a href="{{ route('categories.show', $category->slug) }}"
                       class="flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 hover:translate-x-2 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="group-hover:font-semibold transition-all duration-300">{{ $category->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Initially hidden full category list (categories 11 and onward) -->
        <ul class="space-y-3 hidden mt-3" id="category-list-all">
            @foreach ($categories->skip(10) as $category)
                <li class="group">
                    <a href="{{ route('categories.show', $category->slug) }}"
                       class="flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 hover:translate-x-2 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="group-hover:font-semibold transition-all duration-300">{{ $category->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Button to toggle full category list -->
        @if ($totalCategoriesCount > 10)
            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                <button id="see-more-btn"
                        class="w-full px-4 py-2 text-sm font-semibold text-green-600 dark:text-green-400 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2">
                    <span>Lihat Lainnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <button id="see-less-btn"
                        class="w-full px-4 py-2 text-sm font-semibold text-green-600 dark:text-green-400 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-colors duration-300 hidden flex items-center justify-center gap-2">
                    <span>Sembunyikan</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <!-- Most Popular Posts Card -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-6" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            Most Popular Post
        </h2>
        <div class="space-y-4">
            @foreach ($popularPosts as $index => $popularPost)
                <a href="{{ route('blog.show', $popularPost->slug) }}"
                   class="group flex items-center gap-4 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-all duration-300"
                   data-aos="fade-left"
                   data-aos-delay="{{ ($index + 1) * 50 }}">
                    <div class="relative w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 shadow-md group-hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('storage/' . $popularPost->thumbnail) }}"
                            alt="{{ $popularPost->title }}"
                            class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-medium text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors duration-300 line-clamp-2">
                            {{ \Illuminate\Support\Str::limit($popularPost->title, 60, '...') }}
                        </h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                            {{ $popularPost->published_at->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
