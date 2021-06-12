<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $data = [
            'leo',
            'chris',
            'theo' 
        ];
        return view('home.index' , compact('data'));
    }

}
