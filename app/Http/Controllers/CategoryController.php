<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        // Ambil kategori berdasarkan slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Ambil postingan dalam kategori tersebut, diurutkan dari terbaru
        $posts = $category->posts()
            ->orderBy('published_at', 'desc') // Urutkan berdasarkan tanggal publish terbaru
            ->paginate(10); // Menampilkan 10 postingan per kategori

        // Ambil semua kategori untuk sidebar atau navigasi
        $categories = Category::all(); // You can change this query based on your requirements
        $totalCategoriesCount = $categories->count();

        // Popular posts diurutkan berdasarkan visits
        $popularPosts = Post::orderBy('visits', 'desc')->take(5)->get();

        return view('categories.show', compact('category', 'posts', 'categories', 'totalCategoriesCount', 'popularPosts'));
    }
}
