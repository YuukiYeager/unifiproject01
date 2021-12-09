<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Category, Post};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Eren Yeager',
            'username' => 'Eren Yeager',
            'email' => 'erenye123@gmail.com',
            'password' => bcrypt(12345),
        ]);

        // User::create([
        //     'name' => 'Mikasa Ackerman',
        //     'email' => 'mikack123@gmail.com',
        //     'password' => bcrypt(1234),
        // ]);

        \App\Models\User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, voluptatem.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas rem repellat a unde velit possimus tenetur optio, blanditiis molestiae fuga. Mollitia ipsa quod ullam, eaque quibusdam quaerat unde asperiores nulla cupiditate repudiandae nihil deleniti non vel aperiam quam velit qui, porro beatae, tenetur molestiae sint! Corrupti libero vero quidem perferendis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, voluptatem.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas rem repellat a unde velit possimus tenetur optio, blanditiis molestiae fuga. Mollitia ipsa quod ullam, eaque quibusdam quaerat unde asperiores nulla cupiditate repudiandae nihil deleniti non vel aperiam quam velit qui, porro beatae, tenetur molestiae sint! Corrupti libero vero quidem perferendis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, voluptatem.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas rem repellat a unde velit possimus tenetur optio, blanditiis molestiae fuga. Mollitia ipsa quod ullam, eaque quibusdam quaerat unde asperiores nulla cupiditate repudiandae nihil deleniti non vel aperiam quam velit qui, porro beatae, tenetur molestiae sint! Corrupti libero vero quidem perferendis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, voluptatem.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas rem repellat a unde velit possimus tenetur optio, blanditiis molestiae fuga. Mollitia ipsa quod ullam, eaque quibusdam quaerat unde asperiores nulla cupiditate repudiandae nihil deleniti non vel aperiam quam velit qui, porro beatae, tenetur molestiae sint! Corrupti libero vero quidem perferendis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
