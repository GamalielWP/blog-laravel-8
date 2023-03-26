<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Client;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => "All Posts" . $title,
            'active' => 'posts',
            // 'posts' => Post::all()
            // local scopes model
            // withQueryString() memuat apapun yang ada pada query string sebelumnya
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))
                ->paginate(7)
                ->withQueryString()
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
