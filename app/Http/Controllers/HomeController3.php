<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $user = "leonchris";
        return view('home.index')->with('user', $user);
    }

}