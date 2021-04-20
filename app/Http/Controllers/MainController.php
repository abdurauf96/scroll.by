<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function agency()
    {
        return view('agency');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function vacancy()
    {
        return view('vacancy');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog_detail');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function services()
    {
        return view('services');
    }
}
