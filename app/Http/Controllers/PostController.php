<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Client;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    // implicit binding
    public function show(Post $post)
    {

        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }

    // koneksi unsplash API
    public static function getPhotos($categoryName)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
            'query' => [
                'client_id' => 'Tg7l7BrYSR6Ykf9yjbBiKQJvwRQDj2VvyowOkQec09o',
                'query' => $categoryName
            ]
        ]);

        $data = json_decode($response->getBody()->getContents());

        return $data->results;
    }
}
