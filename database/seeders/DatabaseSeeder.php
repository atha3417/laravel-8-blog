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
            'name' => 'Atha Tsaqif',
            'email' => 'atha.3417@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Atha Syarif',
            'email' => 'atha.syarif@gmail.com',
            'password' => bcrypt('54321')
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
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id quidem eaque, modi animi aut quis at, dolor, sapiente culpa itaque! Eaque ipsa maiores tempora aut itaque amet pariatur aliquam rem sed facilis adipisci modi, odio soluta assumenda neque non, possimus in! Saepe sapiente ratione exercitationem sed doloribus officiis obcaecati et unde nihil cumque porro odit placeat laudantium aliquid facere neque nostrum, quisquam tempora harum? Autem, quis nihil dolor odit laudantium voluptatem iusto enim in neque ipsum dicta ratione? Nobis dicta quia ut incidunt illo dolorem adipisci impedit dolores aspernatur? Tempora quidem labore ipsa?'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id quidem eaque, modi animi aut quis at, dolor, sapiente culpa itaque! Eaque ipsa maiores tempora aut itaque amet pariatur aliquam rem sed facilis adipisci modi, odio soluta assumenda neque non, possimus in! Saepe sapiente ratione exercitationem sed doloribus officiis obcaecati et unde nihil cumque porro odit placeat laudantium aliquid facere neque nostrum, quisquam tempora harum? Autem, quis nihil dolor odit laudantium voluptatem iusto enim in neque ipsum dicta ratione? Nobis dicta quia ut incidunt illo dolorem adipisci impedit dolores aspernatur? Tempora quidem labore ipsa?'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id quidem eaque, modi animi aut quis at, dolor, sapiente culpa itaque! Eaque ipsa maiores tempora aut itaque amet pariatur aliquam rem sed facilis adipisci modi, odio soluta assumenda neque non, possimus in! Saepe sapiente ratione exercitationem sed doloribus officiis obcaecati et unde nihil cumque porro odit placeat laudantium aliquid facere neque nostrum, quisquam tempora harum? Autem, quis nihil dolor odit laudantium voluptatem iusto enim in neque ipsum dicta ratione? Nobis dicta quia ut incidunt illo dolorem adipisci impedit dolores aspernatur? Tempora quidem labore ipsa?'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt dolor id laborum consectetur! Quaerat id quidem eaque, modi animi aut quis at, dolor, sapiente culpa itaque! Eaque ipsa maiores tempora aut itaque amet pariatur aliquam rem sed facilis adipisci modi, odio soluta assumenda neque non, possimus in! Saepe sapiente ratione exercitationem sed doloribus officiis obcaecati et unde nihil cumque porro odit placeat laudantium aliquid facere neque nostrum, quisquam tempora harum? Autem, quis nihil dolor odit laudantium voluptatem iusto enim in neque ipsum dicta ratione? Nobis dicta quia ut incidunt illo dolorem adipisci impedit dolores aspernatur? Tempora quidem labore ipsa?'
        ]);
    }
}
