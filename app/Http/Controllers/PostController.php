<?php


// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Mengambil semua postingan dengan relasi kategori
        $posts = Post::with('category')->paginate(10); // Menambahkan with('category') untuk eager loading kategori

        return view('posts.index', compact('posts'));
    }

    // Fungsi lainnya seperti create, show, edit, destroy
}
