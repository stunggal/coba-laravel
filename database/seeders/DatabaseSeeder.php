<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        // User::create([
        //     'name' => 'wahid alfaridsi achmad zein',
        //     'email' => 'walfaridsi@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // User::create([
        //     'name' => 'siraj hammam ahmad',
        //     'email' => 'jorisahmad@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia harum cumque ipsum eaque illo facilis pariatur. Ad eaque excepturi ipsa iste consequatur. Corrupti odio, facilis necessitatibus ratione deserunt delectus distinctio consequatur dolores odit aut repellat suscipit animi quas laboriosam, eaque est dolorum fugit ipsa? A ipsum quaerat ea eaque, deserunt ratione doloremque itaque culpa earum quod veritatis sapiente delectus! Magnam modi nam enim qui molestias tempore totam molestiae ipsa hic officia soluta quibusdam, quasi sunt. Quisquam vero quibusdam amet pariatur fuga provident iusto vitae. Similique laudantium enim aliquid in, distinctio ad magni minus reprehenderit cumque odio, explicabo aspernatur cum! Distinctio, officia in quam iste incidunt libero, pariatur explicabo cumque facere quod quibusdam velit blanditiis optio tenetur ad earum odit illo voluptatum quia magnam aliquid. Qui amet dolorum molestias et nesciunt?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia harum cumque ipsum eaque illo facilis pariatur. Ad eaque excepturi ipsa iste consequatur. Corrupti odio, facilis necessitatibus ratione deserunt delectus distinctio consequatur dolores odit aut repellat suscipit animi quas laboriosam, eaque est dolorum fugit ipsa? A ipsum quaerat ea eaque, deserunt ratione doloremque itaque culpa earum quod veritatis sapiente delectus! Magnam modi nam enim qui molestias tempore totam molestiae ipsa hic officia soluta quibusdam, quasi sunt. Quisquam vero quibusdam amet pariatur fuga provident iusto vitae. Similique laudantium enim aliquid in, distinctio ad magni minus reprehenderit cumque odio, explicabo aspernatur cum! Distinctio, officia in quam iste incidunt libero, pariatur explicabo cumque facere quod quibusdam velit blanditiis optio tenetur ad earum odit illo voluptatum quia magnam aliquid. Qui amet dolorum molestias et nesciunt?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'exerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia harum cumque ipsum eaque illo facilis pariatur. Ad eaque excepturi ipsa iste consequatur. Corrupti odio, facilis necessitatibus ratione deserunt delectus distinctio consequatur dolores odit aut repellat suscipit animi quas laboriosam, eaque est dolorum fugit ipsa? A ipsum quaerat ea eaque, deserunt ratione doloremque itaque culpa earum quod veritatis sapiente delectus! Magnam modi nam enim qui molestias tempore totam molestiae ipsa hic officia soluta quibusdam, quasi sunt. Quisquam vero quibusdam amet pariatur fuga provident iusto vitae. Similique laudantium enim aliquid in, distinctio ad magni minus reprehenderit cumque odio, explicabo aspernatur cum! Distinctio, officia in quam iste incidunt libero, pariatur explicabo cumque facere quod quibusdam velit blanditiis optio tenetur ad earum odit illo voluptatum quia magnam aliquid. Qui amet dolorum molestias et nesciunt?',
        //     'category_id' => 3,
        //     'user_id' => 1,
        // ]);
    }
}
