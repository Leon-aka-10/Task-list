<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view ('login.index');
    }

    public function store(Request $request) {
        
        //validate

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email'=> 'This is not right email',
            'email.required' => 'The username field is required.'
        ]);

        return redirect()->back()->with('msg', 'Thanks for entering data');


    } 
}
