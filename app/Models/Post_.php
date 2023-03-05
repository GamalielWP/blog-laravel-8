<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Gamaliel',
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ad in perferendis necessitatibus architecto officia, nam dignissimos soluta ducimus dolorum sit at, accusantium dolores quis iste tenetur sapiente sint qui quisquam iure odio. Animi eveniet cumque culpa laboriosam voluptate deserunt? Aliquid nesciunt nobis, nam commodi molestiae eligendi officiis quasi aspernatur. Soluta temporibus perspiciatis id excepturi consectetur veritatis amet, sunt animi nostrum rerum quaerat! Accusantium sequi adipisci quidem magni unde, ex nam quisquam molestias deserunt explicabo necessitatibus debitis officiis eos impedit."
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Widhi',
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quam, temporibus odio excepturi totam sint delectus dicta ducimus iste modi exercitationem eveniet ratione atque maiores ullam porro labore corrupti earum et quibusdam, non ut eligendi! Magnam ad eum rerum deserunt dolorem rem fuga quaerat iste quos harum quam odio voluptas aliquam ducimus placeat vitae iusto, ea inventore minus eaque? Neque placeat suscipit qui illum, recusandae soluta illo doloremque in nisi assumenda veritatis vitae maxime modi consequuntur ex explicabo ipsa excepturi temporibus est sapiente consequatur, enim beatae nostrum distinctio. Libero labore fugit amet hic qui, quisquam voluptate minima ratione ullam! Magnam!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
