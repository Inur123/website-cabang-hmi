<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $latestPosts = Post::where('is_published', 1)
            ->orderBy('published_at', 'desc')
            ->take(6)
            ->get();

        $kegiatans = Kegiatan::orderBy('created_at', 'desc')
            ->get();

        return view('welcome', compact('latestPosts','kegiatans'));
    }
}
