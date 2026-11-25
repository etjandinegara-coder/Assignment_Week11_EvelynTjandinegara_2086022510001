<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Blog;
use App\Models\Home;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['home' => Home::all()]);
    }

    public function about()
    {
        return view('about', ['about' => About::all()]);
    }

    public function blog()
    {
        $artikel = Blog::with('about')->get();

        return view('blog', compact('artikel'));
    }
}
