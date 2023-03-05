<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'title' => 'All Posts',
            // 'posts' => Post::all()
            // eager load => code tidak melakukan looping berlebih pada table relation (with())
            'posts' => Post::with(['author', 'category'])->latest()->get()
        ]);

    }

    // implicit binding
    public function show(Post $post)
    {
        
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);

    }
}
