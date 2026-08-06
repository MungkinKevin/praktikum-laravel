<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Hi, selamat datang di website laravel';
    }
    public function about() {
        return 
        'NIM : 09731 <br>
        Nama : MungkinKevin <br>
        Kelas : 11 RPB <br>';
    }
    public function article($id) {
        return 'Article ID: ' . $id;
    }
}
