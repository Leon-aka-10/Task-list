<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request) {

        echo $request->get('name', 'Not provided');
 
    }
}   