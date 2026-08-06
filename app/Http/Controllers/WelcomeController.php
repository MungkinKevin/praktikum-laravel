<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /** 
    public function hello() {
        return 'Hello World';
    }
    
    public function hello() {
        return view('blog.hello', ['name' => 'MungkinKevin']);
    }
    */
    public function hello() {
        return view('blog.hello')
         -> with('name', 'MungkinKevin')
         -> with('age', 20);
    }
}
