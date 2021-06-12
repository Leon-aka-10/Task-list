<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index() {
        return view ('mail.index');
    }

    public function store(Request $request) {
        
        //validate

        $request->validate([
            'email' => 'required|email'
        ], [
            'email'=> 'This is not right email',
            'email.required' => 'This is required....'
        ]);
   }
}
