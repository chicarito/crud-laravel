<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'username' => 'admin123',
            'password' => bcrypt(123),
        ]);

        User::create([
            'name' => 'admin2',
            'username' => 'admin1234',
            'password' => bcrypt(123),
        ]);

        User::create([
            'name' => 'admin3',
            'username' => 'admin12345',
            'password' => bcrypt(123),
        ]);
        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'properti/al jabar.jpg',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum quidem ut odit rerum! Aut non doloribus maxime quidem eligendi ratione numquam velit dolorem, ut fugiat vero, repellat minima atque exercitationem molestiae voluptates eos fugit, ex error sint animi. Commodi atque praesentium accusantium vel nobis dignissimos quod id corporis laudantium.',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'properti/park zoo.jpg',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum quidem ut odit rerum! Aut non doloribus maxime quidem eligendi ratione numquam velit dolorem, ut fugiat vero, repellat minima atque exercitationem molestiae voluptates eos fugit, ex error sint animi. Commodi atque praesentium accusantium vel nobis dignissimos quod id corporis laudantium.',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'title' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'properti/park zoo.jpg',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum quidem ut odit rerum! Aut non doloribus maxime quidem eligendi ratione numquam velit dolorem, ut fugiat vero, repellat minima atque exercitationem molestiae voluptates eos fugit, ex error sint animi. Commodi atque praesentium accusantium vel nobis dignissimos quod id corporis laudantium.',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'title' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'properti/park zoo.jpg',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum quidem ut odit rerum! Aut non doloribus maxime quidem eligendi ratione numquam velit dolorem, ut fugiat vero, repellat minima atque exercitationem molestiae voluptates eos fugit, ex error sint animi. Commodi atque praesentium accusantium vel nobis dignissimos quod id corporis laudantium.',
        // ]);
        // Post::create([
        //     'user_id' => 3,
        //     'title' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'properti/park zoo.jpg',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum quidem ut odit rerum! Aut non doloribus maxime quidem eligendi ratione numquam velit dolorem, ut fugiat vero, repellat minima atque exercitationem molestiae voluptates eos fugit, ex error sint animi. Commodi atque praesentium accusantium vel nobis dignissimos quod id corporis laudantium.',
        // ]);
        // Post::create([
        //     'user_id' => 3,
        //     'title' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'properti/park zoo.jpg',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum quidem ut odit rerum! Aut non doloribus maxime quidem eligendi ratione numquam velit dolorem, ut fugiat vero, repellat minima atque exercitationem molestiae voluptates eos fugit, ex error sint animi. Commodi atque praesentium accusantium vel nobis dignissimos quod id corporis laudantium.',
        // ]);
    }
}
