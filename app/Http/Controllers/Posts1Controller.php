<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{

    public function index() {
       
        $posts  = Post::take(2)->get();

    

        return view('posts.posts', compact('posts'));
    }
}
