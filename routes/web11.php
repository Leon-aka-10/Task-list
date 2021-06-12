<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', [PostsController::class,'index']); 

Route::get('/seed', function(\App\Models\Post $post) {


    $faker = \Faker\Factory::create();

    foreach (range(1, 50) as $i){
        $post->create([
            'title' =>$faker->sentence(10),
            'body' =>$faker->sentence(50)
        ]);
    }



});