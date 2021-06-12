<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {

        return '<form method="post" action="'.route('contact').'"><input type="text" name="name"><input type="submit"></form>';
 
    }

    public function store(Request $request) {
        return $request->name;
    }

}
