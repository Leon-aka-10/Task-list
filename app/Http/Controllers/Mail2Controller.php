<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\Welcome;

class MailController extends Controller
{
    public function index() {

        $user = "chuboy@example.com"; 
        
         Mail::to($user)->send(new Welcome);

    }
}
 