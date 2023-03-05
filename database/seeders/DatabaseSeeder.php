<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Gamaliel',
            'email' => 'gamaliel@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Widhi',
            'email' => 'widhi@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aperiam dolor corporis. Iusto, voluptas quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptates esse dolore tempore laborum itaque animi rerum accusantium dolor officiis iure, libero perferendis id molestias quia rem velit, doloribus laboriosam quos tenetur praesentium ea illo aut debitis? Vitae distinctio modi atque quibusdam reprehenderit dicta, odit sunt magnam enim ducimus facere eum dolorum exercitationem ratione sapiente maiores quam doloremque commodi ullam veritatis beatae. Quis doloremque obcaecati eligendi laudantium alias nam officiis neque quae quidem vitae asperiores ipsum, suscipit quam magni exercitationem reprehenderit, laborum repudiandae quo? Saepe laborum consequuntur veritatis. Consequatur reprehenderit neque atque fugiat saepe non unde recusandae eum cum vel.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aperiam dolor corporis. Iusto, voluptas quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptates esse dolore tempore laborum itaque animi rerum accusantium dolor officiis iure, libero perferendis id molestias quia rem velit, doloribus laboriosam quos tenetur praesentium ea illo aut debitis? Vitae distinctio modi atque quibusdam reprehenderit dicta, odit sunt magnam enim ducimus facere eum dolorum exercitationem ratione sapiente maiores quam doloremque commodi ullam veritatis beatae. Quis doloremque obcaecati eligendi laudantium alias nam officiis neque quae quidem vitae asperiores ipsum, suscipit quam magni exercitationem reprehenderit, laborum repudiandae quo? Saepe laborum consequuntur veritatis. Consequatur reprehenderit neque atque fugiat saepe non unde recusandae eum cum vel.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aperiam dolor corporis. Iusto, voluptas quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptates esse dolore tempore laborum itaque animi rerum accusantium dolor officiis iure, libero perferendis id molestias quia rem velit, doloribus laboriosam quos tenetur praesentium ea illo aut debitis? Vitae distinctio modi atque quibusdam reprehenderit dicta, odit sunt magnam enim ducimus facere eum dolorum exercitationem ratione sapiente maiores quam doloremque commodi ullam veritatis beatae. Quis doloremque obcaecati eligendi laudantium alias nam officiis neque quae quidem vitae asperiores ipsum, suscipit quam magni exercitationem reprehenderit, laborum repudiandae quo? Saepe laborum consequuntur veritatis. Consequatur reprehenderit neque atque fugiat saepe non unde recusandae eum cum vel.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempta',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aperiam dolor corporis. Iusto, voluptas quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptates esse dolore tempore laborum itaque animi rerum accusantium dolor officiis iure, libero perferendis id molestias quia rem velit, doloribus laboriosam quos tenetur praesentium ea illo aut debitis? Vitae distinctio modi atque quibusdam reprehenderit dicta, odit sunt magnam enim ducimus facere eum dolorum exercitationem ratione sapiente maiores quam doloremque commodi ullam veritatis beatae. Quis doloremque obcaecati eligendi laudantium alias nam officiis neque quae quidem vitae asperiores ipsum, suscipit quam magni exercitationem reprehenderit, laborum repudiandae quo? Saepe laborum consequuntur veritatis. Consequatur reprehenderit neque atque fugiat saepe non unde recusandae eum cum vel.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
