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

        // Ambil postingan dalam kategori tersebut
        $posts = $category->posts()->paginate(5); // Menampilkan 10 postingan per kategori

        // Ambil semua kategori untuk sidebar atau navigasi

        $categories = Category::all(); // You can change this query based on your requirements
        $totalCategoriesCount = $categories->count();
        $popularPosts = Post::orderBy('visits', 'desc')->take(5)->get();

        return view('categories.show', compact('category', 'posts', 'categories', 'totalCategoriesCount', 'popularPosts'));
    }
}
