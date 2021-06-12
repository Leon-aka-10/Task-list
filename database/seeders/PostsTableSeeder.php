<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['id'=>1, 'title'=>'Nice Weather', 'body'=>'This is some text for the post 1'],
            ['id'=>2, 'title'=>'Nice Weather', 'body'=>'This is some text for the post 2'],
            ['id'=>3, 'title'=>'Nice Weather', 'body'=>'This is some text for the post 3'],
            ['id'=>4, 'title'=>'Nice Weather', 'body'=>'This is some text for the post 4'],
            ['id'=>5, 'title'=>'Nice Weather', 'body'=>'This is some text for the post 5'],
        ];

        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }


    }
}
