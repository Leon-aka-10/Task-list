<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{

    public function index() {
       
      $posts = DB::table('posts')->where('status','=', 1)->get();
      
      $posts->toJson();

      return $posts;
      
     // $data = ['leon', 'chris', 'Ekpe'];

     //$collect = collect($data);
     
     //dd($collect[1]);

     // return view('posts.posts', compact('posts'));
    }
}
