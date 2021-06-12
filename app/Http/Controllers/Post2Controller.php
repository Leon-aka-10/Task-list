<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{

    public function index() {
       
        $request = [
           'title' => 'Learning Laravel',
           'body' => 'This is nice'
        ];

        $post = Post::where('id', 2)->update([

            'title' => 'Update 11',
            'body' =>'Body updated 11'

        ]);

        dd($post);

    }
}
