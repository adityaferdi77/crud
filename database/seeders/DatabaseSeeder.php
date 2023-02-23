<?php

namespace Database\Seeders;
use App\Models\Post;
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
        Post::create([
            'title'     => 'Post 1',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tenetur beatae nulla dignissimos exercitationem dolores illum rerum asperiores a atque, vel omnis tempore voluptatibus iste delectus ad aliquam laudantium dolorum!',
            'slug'      => 'post-1',
            'status'    => 1,
            'user_id'   => 1
        ]);

        Post::create([
            'title'     => 'Post 2',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tenetur beatae nulla dignissimos exercitationem dolores illum rerum asperiores a atque, vel omnis tempore voluptatibus iste delectus ad aliquam laudantium dolorum!',
            'slug'      => 'post-2',
            'status'    => 2,
            'user_id'   => 2
        ]);

        Post::create([
            'title'     => 'Post 3',
            'content'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tenetur beatae nulla dignissimos exercitationem dolores illum rerum asperiores a atque, vel omnis tempore voluptatibus iste delectus ad aliquam laudantium dolorum!',
            'slug'      => 'post-3',
            'status'    => 3,
            'user_id'   => 3
        ]);
    }
}
