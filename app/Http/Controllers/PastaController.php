<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastaController extends Controller
{
    public function index()
    {
        return view('pasta.index');
    }

    public function about()
    {
        return view('pasta.about');
    }

    public function article($id)
    {
        return view('pasta.article', compact('id'));
    }

    public function contact()
    {
        return view('pasta.contact');
    }
}
